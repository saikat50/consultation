<?php

namespace App\Http\Controllers\Consultant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function show(){

        return view('dashboards.consultant.dashboard');

    }

}
