<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientController extends Controller
{
    //

    public function index()
    {
        return view('patientManagement.index'); 
    }

    public function search()
    {
        return view('patientManagement.search');
    }

    public function register()
    {
        return view('patientManagement.register');
    }

    public function showDoctor()
    {
        return view('patientManagement.showDoc');
    }

    public function show()
    {
        return view('show2');
    }

    public function dashboard()
    {
        return view('patientManagement.patientDashboard');
    }

    public function userProfile()
    {
        return view('patientManagement.userProfile');
    }
}
