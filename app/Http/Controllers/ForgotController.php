<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;
use App\Models\Forgot;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.forgot');
    }

    public function validasi(Request $request, $token)
    {
        $getToken = Forgot::where('token', $token)->first();
        if(!$getToken) {
            return redirect()->route('login')->with('failed', 'Token tidak valid');
        }
        return view('user.validasi', compact('token'));
    }

    public function validasi_act(Request $request) {
        $customMessage = [
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 6 karakter',
        ];

        $request->validate([
            'password' => 'required|min:6'
        ], $customMessage);

        // Mulai transaksi
        \DB::beginTransaction();

        try {
            // Ambil token
            $token = Forgot::where('token', $request->token)->first();

            // Validasi token
            if (!$token) {
                \DB::rollBack();
                return redirect()->route('login')->with('failed', 'Token tidak valid');
            }

            // Ambil user berdasarkan email
            $user = User::where('email', $token->email)->first();

            // Validasi user
            if (!$user) {
                \DB::rollBack();
                return redirect()->route('login')->with('failed', 'Email tidak terdaftar di database');
            }

            // Update password user
            $user->update([
                'password' => Hash::make($request->password)
            ]);

            // Hapus token setelah digunakan
            $token->delete();

            // Commit transaksi
            \DB::commit();

            return redirect()->route('login')->with('success', 'Password berhasil direset');
        } catch (\Exception $e) {
            \DB::rollBack();
            return redirect()->route('login')->with('failed', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }



    public function forgot(Request $request)
    {
        $customMessage = [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.exists' => 'Email tidak terdaftar di database',
        ];

        $request->validate([
            'email' => 'required|email|exists:users,email'
        ], $customMessage);

        $token = \Str::random(60);
        $data = [
            'email' => $request->email
        ];

            Forgot::updateOrCreate([
                'email' => $request->email
            ], [
                'email' => $request->email,
                'token' => $token,
                'created_at' => now(),
            ]);

            Mail::to($request->email)->send(new ResetPassword($token));



            return redirect()->route('forgot')->with('success', 'Kami telah mengirimkan email pemulihan!');
        }
    }

