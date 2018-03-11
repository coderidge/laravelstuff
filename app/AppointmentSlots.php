<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppointmentSlots extends Model
{
    //
    protected $table = 'appointment_slots';


    protected $fillable = [
        'location',
        'teacher',
        'start_time',
        'end_time'
    ];

}