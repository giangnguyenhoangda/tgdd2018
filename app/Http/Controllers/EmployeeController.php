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
    	return view('employee/pages/info');
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
        $user->add($req->username,$req->password,$req->fullname,$req->phonenumber,$req->email);
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
        $user->edit($req->password,$req->fullname,$req->phonenumber,$req->email);
        echo "Sửa thành công";
    }
}
