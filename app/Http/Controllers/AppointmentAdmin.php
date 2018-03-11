<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teachers;

class AppointmentAdmin extends Controller
{
    //
    public function index()
    {

        $teachers = Teachers::pluck('teacher_name', 'id');

        return View('admin')->with('teachers', $teachers);
    }
}
