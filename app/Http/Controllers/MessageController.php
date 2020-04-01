<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //

    public function consultant_ui(){

        return view('dashboards.consultant.messages');

    }

}
