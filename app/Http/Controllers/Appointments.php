<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AppointmentSlots;

class Appointments extends Controller
{
    //
    public function index() {


    $slots = AppointmentSlots::findOrFail(1);

    /*
    foreach($slots as $slot) {

        echo $slot->location;
    }
*/
return 'yes';
    }
}
