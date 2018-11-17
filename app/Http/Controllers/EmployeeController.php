<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EmployeeController extends Controller
{
    public function getHome()
    {
    	return view('employee/pages/home');
    }

    public function getLogin()
    {
    	return view('employee/pages/login');
    }

    public function getInfo()
    {
        $user=User::find(1);
    	return view('employee/pages/info',['user'=>$user]);
    }

    public function getAddEmployee()
    {
        return view('admin.pages.add_employee');
    }

    public function getEmployees()
    {
        $list=User::where('role',0)->get();
        return view('admin.pages.employees',['list'=>$list]);
    }

    public function postAddEmployee(Request $req)
    {
        $user = new User;
        $user->add($req->username,$req->password,$req->fullname,$req->phonenumber,$req->email,$req->avatar);
        echo "Đã thêm";
    }

    public function getEditEmployee($id)
    {
        $user=User::find($id);
        return view('admin.pages.edit_employee',['user'=>$user]);
    }

    public function postEditEmployee(Request $req)
    {
        $user=User::find($req->id);
        if ($req->hasFile('avatar_new')) {
            $user->edit($req->password,$req->fullname,$req->phonenumber,$req->email,$req->avatar_new,true);
        }
        else{
            $user->edit($req->password,$req->fullname,$req->phonenumber,$req->email,$req->old_avatar,false);
        }
        echo "Sửa thành công";
    }

    public function postChangePass(Request $req)
    {
        $user=new User;
        $user->changePass($req->id,$req->pass_new);
        echo "Đã thay đổi mật khẩu";
    }

    public function postChangeInfoE(Request $req)
    {
        $user=new User;
        $fullname=$req->fullname;
        $phonenumber=$req->phonenumber;
        $email=$req->email;
        if ($req->hasFile('avatar_new')) {
            $user->changeInfo($req->id,$fullname,$phonenumber,$email,$req->avatar_new,true);
        }
        else{
            $user->changeInfo($req->id,$fullname,$phonenumber,$email,$req->old_avatar,false);
        }
        
        echo "Đã thay đổi thông tin";
    }

    
}
