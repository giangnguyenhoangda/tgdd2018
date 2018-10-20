<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.pages.employees');
    }
}
