<?php

namespace App\Http\Controllers\Consultant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //

    public function show(){

        return view('dashboards.consultant.services');
    }

    public function overview(){

        return view('dashboards.consultant.service-generator.overview');

    }


}
