<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppointmentSlots;

class slots extends Controller
{
    //
    public function index() {

        $list = AppointmentSlots::all();

        foreach($list as $l) {
            echo $l->location;
        }
    }
}
