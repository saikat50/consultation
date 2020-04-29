<?php

namespace App\Http\Controllers\Consultant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EarningController extends Controller
{
    //

    public function show_earnings(){

        return view('dashboards.consultant.earnings');

    }

}
