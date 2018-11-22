<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class AdminController extends Controller
{
    public function getLogin()
    {
    	return view('admin.pages.login');
    }

    public function getHome()
    {
    	return view('admin.pages.home');
    }

    public function postLogin(Request $req)
    {
        $username=$req->username;
        $password=$req->password;
        $user=User::where('username',$username)->where('password',$password)->where('role',1)->get();
        if (count($user)>0) {
            Session::put('admin', $user[0]);
            return redirect('admin/trang-chu');
        } else {
            return redirect('admin/dang-nhap')->with('thong-bao','Sai tên đăng nhập hoặc mật khẩu.');
        }
        
    }

    public function getLogout()
    {
        Session::forget('admin');
        return redirect('admin/dang-nhap');
    }

    public function getEditPass()
    {
    	return view('admin.pages.edit_pass');
    }

    public function postEditPassA(Request $req)
    {
    	$user=User::find(session('admin')->id);
    	$user->password=$req->password;
    	$user->save();
    	$user=User::find(session('admin')->id);
    	Session::put('admin', $user);
    	return view('admin.pages.edit_pass');
    }
}
