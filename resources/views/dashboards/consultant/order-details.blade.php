@extends('layouts.consultant.master')

@section('page-css')

    <link rel="stylesheet" href="{{asset('assets/libs/flipcountdown/flipdown.css')}}">

    @endsection

@section('content')

    <div class="main-content">

        <div class="page-content">


            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-title">
                                    <h4 class="float-right font-size-28 font-weight-bold uppercase text-green" style="margin-top: 10px;">$100.00</h4>
                                    <div class="mb-4">
                                        <h4 class="font-size-24 font-weight-bold uppercase">Order # 12345</h4>
                                        <small class="font-size-12 text-secondary">Buyer <a href="">Jhon Doe</a> | March 24, 2020</small>
                                    </div>
                                </div>
                                <hr>

                                <div class="py-2 mt-3">
                                    <h3 class="font-size-15 font-weight-bold text-gray">Order summary</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-nowrap">
                                        <thead>
                                        <tr>
                                            <th style="width: 70px;">No.</th>
                                            <th>Item</th>
                                            <th class="text-right">Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>I will Consult Cooking</td>
                                            <td class="text-right">$50.00</td>
                                        </tr>

                                        <tr>
                                            <td>02</td>
                                            <td>I will give file cooking notes</td>
                                            <td class="text-right">$50.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="border-0 text-right">
                                                <strong>Total</strong></td>
                                            <td class="border-0 text-right"><h4 class="m-0">$100.00</h4></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-print-none">
                                    <div class="float-right">
                                        <a href="#" class="btn btn-success w-md waves-effect waves-light uppercase border-radius-0">Request Complete</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div id="flipdown" class="flipdown" style="margin: 0 auto"></div>
                            </div>
                        </div>


                        <div class="w-100 user-chat" style="margin-top: 40px;">
                            <div class="card">
                                <div class="p-4 border-bottom ">
                                    <div class="row">
                                        <div class="col-md-4 col-9">
                                            <h5 class="font-size-15 mb-1">Steven Franklin</h5>
                                            <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle mr-1"></i> Active now</p>
                                        </div>
                                        <div class="col-md-8 col-3">
                                            <ul class="list-inline user-chat-nav text-right mb-0">
                                                <li class="list-inline-item d-none d-sm-inline-block">
                                                    <div class="dropdown">
                                                        <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-search-alt-2"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-md">
                                                            <form class="p-3">
                                                                <div class="form-group m-0">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                                                        <div class="input-group-append">
                                                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item  d-none d-sm-inline-block">
                                                    <div class="dropdown">
                                                        <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-cog"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">View Profile</a>
                                                            <a class="dropdown-item" href="#">Clear chat</a>
                                                            <a class="dropdown-item" href="#">Muted</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else</a>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div>
                                    <div class="chat-conversation p-3">
                                        <ul class="list-unstyled" data-simplebar style="max-height: 470px;">
                                            <li>
                                                <div class="chat-day-title">
                                                    <span class="title">Today</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="conversation-list">
                                                    <div class="dropdown">

                                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Copy</a>
                                                            <a class="dropdown-item" href="#">Save</a>
                                                            <a class="dropdown-item" href="#">Forward</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <div class="ctext-wrap">
                                                        <div class="conversation-name">Steven Franklin</div>
                                                        <p>
                                                            Hello!
                                                        </p>
                                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i> 10:00</p>
                                                    </div>

                                                </div>
                                            </li>

                                            <li class="right">
                                                <div class="conversation-list">
                                                    <div class="dropdown">

                                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Copy</a>
                                                            <a class="dropdown-item" href="#">Save</a>
                                                            <a class="dropdown-item" href="#">Forward</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <div class="ctext-wrap">
                                                        <div class="conversation-name">Henry Wells</div>
                                                        <p>
                                                            Hi, How are you? What about our next meeting?
                                                        </p>

                                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i> 10:02</p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="conversation-list">
                                                    <div class="dropdown">

                                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Copy</a>
                                                            <a class="dropdown-item" href="#">Save</a>
                                                            <a class="dropdown-item" href="#">Forward</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <div class="ctext-wrap">
                                                        <div class="conversation-name">Steven Franklin</div>
                                                        <p>
                                                            Yeah everything is fine
                                                        </p>

                                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i> 10:06</p>
                                                    </div>

                                                </div>
                                            </li>

                                            <li class="last-chat">
                                                <div class="conversation-list">
                                                    <div class="dropdown">

                                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Copy</a>
                                                            <a class="dropdown-item" href="#">Save</a>
                                                            <a class="dropdown-item" href="#">Forward</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <div class="ctext-wrap">
                                                        <div class="conversation-name">Steven Franklin</div>
                                                        <p>& Next meeting tomorrow 10.00AM</p>
                                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i> 10:06</p>
                                                    </div>

                                                </div>
                                            </li>

                                            <li class=" right">
                                                <div class="conversation-list">
                                                    <div class="dropdown">

                                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Copy</a>
                                                            <a class="dropdown-item" href="#">Save</a>
                                                            <a class="dropdown-item" href="#">Forward</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <div class="ctext-wrap">
                                                        <div class="conversation-name">Henry Wells</div>
                                                        <p>
                                                            Wow that's great
                                                        </p>

                                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i> 10:07</p>
                                                    </div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="p-3 chat-input-section">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control chat-input" placeholder="Enter Message...">
                                                    <div class="chat-input-links">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Emoji"><i class="mdi mdi-emoticon-happy-outline"></i></a></li>
                                                            <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Images"><i class="mdi mdi-file-image-outline"></i></a></li>
                                                            <li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="top" title="Add Files"><i class="mdi mdi-file-document-outline"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light"><span class="d-none d-sm-inline-block mr-2">Send</span> <i class="mdi mdi-send"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Private Note</h4>
                                        <div style="margin-top: 80px">

                                        </div>
                                        <hr>
                                        <a href="">Add Note</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="font-size-16">Need to change or cancell your order ?</h5>
                                        <div class="mt-30">
                                            <a href="" class="btn btn-block btn-danger btn-sm font-size-14 bg-sky">Visit our resolution center</a>
                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>



                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    @endsection

@section('page-script')

    <script src="{{asset('assets/libs/flipcountdown/flipdown.js')}}"></script>

            <script>
                document.addEventListener('DOMContentLoaded', () => {

                    // Unix timestamp (in seconds) to count down to
                    var timeline = (new Date("Apr 5, 2020 00:00:00").getTime() / 1000);

                    console.log(new Date().getTime());

                    // Set up FlipDown
                    var flipdown = new FlipDown(timeline)

                        // Start the countdown
                        .start()

                        // Do something when the countdown ends
                        .ifEnded(() => {
                            console.log('The countdown has ended!');
                        });


                    // Show version number
                    var ver = document.getElementById('ver');
                    ver.innerHTML = flipdown.version;
                });
            </script>

    @endsection()
