@extends('layouts.consultant.master')

@section('page-css')

    <!-- Responsive Table css -->
    <link href="{{asset('assets/libs/admin-resources/rwd-table/rwd-table.min.css')}}" rel="stylesheet" type="text/css" />

    @endsection

@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Manage Sales</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Orders</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">


                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-tabs-custom nav-justified orders_tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#active-order" role="tab">
                                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                        <span class="d-none d-sm-block">Active</span>
                                                        <span class="badge badge-danger badge-pill">5</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#late-order" role="tab">
                                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                        <span class="d-none d-sm-block">Late</span>
                                                        <span class="badge badge-danger badge-pill">3</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#order-completed" role="tab">
                                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                        <span class="d-none d-sm-block">Completed</span>
                                                        <span class="badge badge-danger badge-pill">110</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#order-cancelled" role="tab">
                                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                        <span class="d-none d-sm-block">Cancelled</span>
                                                        <span class="badge badge-danger badge-pill">6</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content p-3 text-muted">
                                                <div class="tab-pane active" id="active-order" role="tabpanel">
                                                    <div class="table-rep-plugin">
                                                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                            <table id="tech-companies-1" class="table table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th>Client</th>
                                                                    <th data-priority="1">Service</th>
                                                                    <th data-priority="3">Due On</th>
                                                                    <th data-priority="1">Total</th>
                                                                    <th data-priority="3">Status</th>
                                                                    <th data-priority="3">Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-warning font-size-12">Pending</span></td>
                                                                    <td><a href="{{route('Consultant.Order-Details',['id'=>1])}}"><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-success font-size-12">Started</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-warning font-size-12">Pending</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-warning font-size-12">Pending</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-warning font-size-12">Pending</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-warning font-size-12">Pending</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="late-order" role="tabpanel">
                                                    <div class="table-rep-plugin">
                                                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                            <table id="tech-companies-1" class="table table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th>Client</th>
                                                                    <th data-priority="1">Service</th>
                                                                    <th data-priority="3">Due On</th>
                                                                    <th data-priority="1">Total</th>
                                                                    <th data-priority="3">Status</th>
                                                                    <th data-priority="3">Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-danger font-size-12">Late</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-danger font-size-12">Late</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-danger font-size-12">Late</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-danger font-size-12">Late</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-danger font-size-12">Late</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-danger font-size-12">Late</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="order-completed" role="tabpanel">
                                                    <div class="table-rep-plugin">
                                                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                            <table id="tech-companies-1" class="table table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th>Client</th>
                                                                    <th data-priority="1">Service</th>
                                                                    <th data-priority="3">Due On</th>
                                                                    <th data-priority="3">Delivered At</th>
                                                                    <th data-priority="1">Total</th>
                                                                    <th data-priority="3">Status</th>
                                                                    <th data-priority="3">Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>17 March 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-secondary font-size-12">Complated</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                               <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>17 March 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-secondary font-size-12">Complated</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                               <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>17 March 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-secondary font-size-12">Complated</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                               <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>17 March 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-secondary font-size-12">Complated</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="order-cancelled" role="tabpanel">
                                                    <div class="table-rep-plugin">
                                                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                            <table id="tech-companies-1" class="table table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th>Client</th>
                                                                    <th data-priority="1">Service</th>
                                                                    <th data-priority="3">Due On</th>
                                                                    <th data-priority="1">Total</th>
                                                                    <th data-priority="3">Status</th>
                                                                    <th data-priority="3">Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-danger font-size-12">Cancelled</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-danger font-size-12">Cancelled</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-danger font-size-12">Cancelled</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-danger font-size-12">Cancelled</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-danger font-size-12">Cancelled</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="">Jhon Doe</a></td>
                                                                    <td><a href="">I will consult web development</a></td>
                                                                    <td>15 April 2020</td>
                                                                    <td>$100</td>
                                                                    <td><span class="badge badge-danger font-size-12">Cancelled</span></td>
                                                                    <td><a href=""><span class="badge badge-primary font-size-12">View Details</span></a></td>
                                                                </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    @endsection

@section('page-script')

    <!-- Responsive Table js -->
        <script src="{{asset('assets/libs/admin-resources/rwd-table/rwd-table.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{asset('assets/js/pages/table-responsive.init.js')}}"></script>


    @endsection
