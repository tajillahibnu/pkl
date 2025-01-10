<?php

namespace Modules\Panel\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{
    public function index()
    {
        // Cek apakah user sudah login
        if (Auth::check()) {
            // Jika sudah login, tampilkan halaman dashboard
            $userId = Auth::user()->id;
            $roleActive = session('akses_module');
            // $shortcut = RoleUser::where('user_id', $userId)
            //     ->whereNotIn('kode', [$roleActive])
            //     ->join('roles', 'role_user.role_id', '=', 'roles.id') // Join ke tabel roles
            //     ->get();
            $shortcut = [];
            return view('panel::index', compact('shortcut'));
        } else {
            // Jika belum login, tampilkan halaman login
            $data = [];
            return view('panel::Auth.index', compact('data'));
        }
    }

    public function pageLogin(){
        $data = [];
        if(Auth::check()){
            $userId = Auth::user()->id;
            echo $userId;
            echo 'aaaaa';
            // return redirect()->intended('/');
        }else{
            return view('panel::Auth.index', compact('data'));
        }
    }
}
