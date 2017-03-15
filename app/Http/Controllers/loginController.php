<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest',['only'=>['index']]);
    }

    public function viewLogin(){
        return view('admin.viewAdminLogin');
    }

    public function postLogin(Request $request){
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])){
            $user = Auth::user();
            if ($user->keuserlevel->jenis_level == 'admin'){
                return redirect('admin');
            } elseif ($user->keuserlevel->jenis_level == 'dokter'){
                return redirect('dokter');
            } elseif ($user->keuserlevel->jenis_level == 'pasien'){
                return redirect('pasien');
            }

        } else{
            return redirect('login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }


}
