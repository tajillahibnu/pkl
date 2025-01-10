<?php

namespace Modules\Panel\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    use ApiResponseTrait;
    public function do_login(Request $request)
    {
        $isEmail = filter_var($request->input('email-username'), FILTER_VALIDATE_EMAIL);
        // Tentukan bidang yang akan digunakan berdasarkan jenis input
        $field = $isEmail ? 'email' : 'username';
        $rememberMe = $request->has('remember_me'); // Cek apakah "Remember Me" dicentang
        if (Auth::attempt([$field => $request->input('email-username'), 'password' => $request->input('password')], $rememberMe)) {
            $user = Auth::user();

            // $getRole = Role::where('id', $user->primary_role_id)->get()->toArray();
            // $getRole = Role::where('id', $user->primary_role_id)->first();

            // session()->put('user_role', 'admin');
            // session()->put('akses_module', $getRole->kode);
            // return $this->apiResponse(200, $user, 'Data berhasil diambil');
            return redirect()->intended('/');
        } else {
            // return $this->apiResponse(400, null, 'Terjadi kesalahan', ['field' => 'Nama harus diisi']);
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('desk/login');
    }
}
