<?php

namespace App\Http\Controllers\Consultant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function show(){

        return view('dashboards.consultant.orders');

    }

    public function order_details($id){

        return view('dashboards.consultant.order-details');

    }

}
