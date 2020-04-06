@extends('layouts.consultant.master')


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

                            <div class="form-group mb-0">
                                <div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light mr-1">
                                        Save & Continue
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
