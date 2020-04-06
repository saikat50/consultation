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
                            <h4 class="mb-0 font-size-18">Manage Services</h4>

                            <p><a href="{{route('Consultant.Service-Overview')}}" class="btn btn-success btn-sm border-radius-0">CREATE NEW SERVICE</a></p>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Services</li>
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
                                            <span class="d-none d-sm-block">Pending Approval</span>
                                            <span class="badge badge-danger badge-pill">3</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#order-completed" role="tab">
                                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                            <span class="d-none d-sm-block">Paused</span>
                                            <span class="badge badge-danger badge-pill">110</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#order-cancelled" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                            <span class="d-none d-sm-block">Denied</span>
                                            <span class="badge badge-danger badge-pill">6</span>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content p-3 text-muted">
                                    <div class="tab-pane active" id="active-order" role="tabpanel">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0 table-services-no-overflow" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped services-table min-height-300">
                                                    <thead>
                                                    <tr>
                                                        <th>Service</th>
                                                        <th data-priority="1">Clicks</th>
                                                        <th data-priority="3">Views</th>
                                                        <th data-priority="1">Orders</th>
                                                        <th data-priority="3">CANCELLATIONS</th>
                                                        <th data-priority="3">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="late-order" role="tabpanel">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped services-table min-height-300">
                                                    <thead>
                                                    <tr>
                                                        <th>Service</th>
                                                        <th data-priority="1">Clicks</th>
                                                        <th data-priority="3">Views</th>
                                                        <th data-priority="1">Orders</th>
                                                        <th data-priority="3">CANCELLATIONS</th>
                                                        <th data-priority="3">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="late-order" role="tabpanel">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped services-table min-height-300">
                                                    <thead>
                                                    <tr>
                                                        <th>Service</th>
                                                        <th data-priority="1">Clicks</th>
                                                        <th data-priority="3">Views</th>
                                                        <th data-priority="1">Orders</th>
                                                        <th data-priority="3">CANCELLATIONS</th>
                                                        <th data-priority="3">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
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
                                                <table id="tech-companies-1" class="table table-striped services-table min-height-300">
                                                    <thead>
                                                    <tr>
                                                        <th>Service</th>
                                                        <th data-priority="1">Clicks</th>
                                                        <th data-priority="3">Views</th>
                                                        <th data-priority="1">Orders</th>
                                                        <th data-priority="3">CANCELLATIONS</th>
                                                        <th data-priority="3">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="late-order" role="tabpanel">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped services-table min-height-300">
                                                    <thead>
                                                    <tr>
                                                        <th>Service</th>
                                                        <th data-priority="1">Clicks</th>
                                                        <th data-priority="3">Views</th>
                                                        <th data-priority="1">Orders</th>
                                                        <th data-priority="3">CANCELLATIONS</th>
                                                        <th data-priority="3">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
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
                                    <div class="tab-pane" id="order-cancelled" role="tabpanel">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped services-table min-height-300">
                                                    <thead>
                                                    <tr>
                                                        <th>Service</th>
                                                        <th data-priority="1">Clicks</th>
                                                        <th data-priority="3">Views</th>
                                                        <th data-priority="1">Orders</th>
                                                        <th data-priority="3">CANCELLATIONS</th>
                                                        <th data-priority="3">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><img src="{{asset('assets/images/small/img-2.jpg')}}" class="service-thumb" alt="">
                                                            <a href="">I will do cooking</a></td>
                                                        <td>3</td>
                                                        <td>100</td>
                                                        <td>5</td>
                                                        <td>0%</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                                    <a class="dropdown-item" href="#">Preview</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Save</a>
                                                                    <a class="dropdown-item" href="#">Pause</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
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
