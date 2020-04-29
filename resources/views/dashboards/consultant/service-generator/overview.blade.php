@extends('layouts.consultant.master')

@section('page-css')
    <!-- Summernote css -->
    <link href="{{asset('assets/libs/summernote/summernote-bs4.min.css')}}" rel="stylesheet" type="text/css" />

    @endsection


@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">


                        <form action="#" class="custom-validation">

                            <div class="form-group">
                                <label>Service Title</label>
                                <div>
                                    <textarea name="" class="form-control font-size-24" id="" cols="30" rows="3" placeholder="I will do ..."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Select Category</label>
                                <div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Category 1</option>
                                        <option value="">Category 1</option>
                                        <option value="">Category 1</option>
                                        <option value="">Category 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Search Tags</label>
                                <div>
                                    <input type="text" class="form-control" required
                                           data-parsley-length="[5,10]"
                                           placeholder="Text between 5 - 10 chars length"/>
                                </div>
                                <small style="text-align: right;font-style: italic;font-size: 12px;display: block;">5 tags maximum</small>
                            </div>
                            <div class="from-group mb-5">
                                <label>Upload Service Related Pictures</label>
                                <div class="row">
                                    <div class="col-md-8"><input type="file" class="form-control" style="max-width: 400px;"></div>
                                    <div class="col-md-4"><span><button class="btn btn-success btn-small">+</button></span></div>
                                </div>
                            </div>
                            <div class="form-group mb-5">
                                <label>Description</label>
                                <div>
                                    <div class="summernote">Description</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Service Charge</label>
                                <input type="text" class="form-control" placeholder="IN BDT">
                            </div>
                            <div class="form-group">
                                <label for="">Delivery Time</label>
                                <select name="" id="" class="form-control">
                                    <option value=""> 1 day</option>
                                    <option value=""> 2 day</option>
                                    <option value=""> 3 day</option>
                                    <option value=""> 4 day</option>
                                    <option value=""> 5 day</option>
                                </select>
                            </div>
                            <div class="form-group mb-0">
                                <div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light mr-1">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

            </div>
        </div>

    @endsection

@section('page-script')

            <script src="{{asset('assets/libs/summernote/summernote-bs4.min.js')}}"></script>
            <script src="{{asset('assets/js/pages/task-create.init.js')}}"></script>

    @endsection
