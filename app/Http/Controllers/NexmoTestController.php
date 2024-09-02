<?php

namespace App\Http\Controllers;

use Nexmo;
use Illuminate\Http\Request;

class NexmoTestController extends Controller
{
    public function testMessage(){

    Nexmo::message()->send([
        'to'   => '14012481209',
        'from' => '13852817891',
        'text' => 'Using the facade to send a message.'
    ]);

    return "Message Sent!";
  }
}
