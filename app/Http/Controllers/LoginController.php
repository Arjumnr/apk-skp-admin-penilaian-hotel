<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function tess()
    {
        return view('tes');
    }
    public function indexLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required',
         ]);  

        $data = $request->input();
        $username = $data['username'];
        $password = $data['password'];


        if($username == "admin" && $password == "admin") {
            $request->session()->put('username', $data['username']);
            alert()->success('Login','Login Berhasil.'); 
            return redirect('/');
        } else{
            alert()->error('Login Gagal','Username atau Password Salah.'); 

            return redirect('/login');
        }
    }
}
