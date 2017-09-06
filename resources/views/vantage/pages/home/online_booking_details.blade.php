@extends('home.layout.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet" />
@section('content')
    <section id="deals" class="deals">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1></h1>
                </div>
            </div>
            <section class="booking">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2><span class="atta"
                                          style="color:#003463;">@if(session('language')=='bn'){{'নিয়ম'}}@else{{'Format'}}@endif</span>
                                </h2>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-8 fixed_imgdiv">
                                        <div style="padding-bottom:5px;" class="hcontent booking_con">
                                            <ul>
                                                <li>
                                                    <b>dfsgdgdfg</b>
                                                </li>
                                                <li>
                                                    <b>dfgdfgdfg</b>
                                                </li>
                                                <li class="text-justify">
                                                    <b>হোটেলের বিস্তারিত:</b>
                                                </li>
                                                <li>
                                                    <b>dfgdfgdfg</b>
                                                </li>
                                                <li>
                                                    <b>dfgdfgdfg</b>
                                                </li>
                                                <li>
                                                    <b>dfgdfgdfg</b>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
                                        <div class="" style="text-align: center">
                                            <p>
                                            <p><br></p></p>
                                            <p>dfgdfg </p>
                                            <p>dfgdfgdfgd</p>

                                            <p class="bdt">fghfghfgh</p>
                                            <p class="bdt">dfgdg</p>
                                            </p>
                                            <button data-toggle="modal" data-target="#myModal"
                                                    class="btn btn-success">@if(session('language')=='bn'){{'বুকিং দিতে যোগাযোগ'}}@else{{'Call For Booking'}}@endif</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <form data-toggle="validator"
                                      id="info" action="{{url('contact/edit_post')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$contact_info[0]->id}}">
                                    <div class="form-group">
                                        <label for="address" class="control-label"><span style="color: red;">* </span>Address</label>
                                            <textarea class="summernote form-control" name="address" id="address">{{$contact_info[0]->address}}</textarea>
                                            <span id="shortNote_err" style="color: red; ">
                                                @if($errors->has('shortNote')){{'Required'}}@endif
                                            </span>
                                    </div>
                                    <div class="form-group" style="text-align: center">
                                        <button id="submitBTN" type="button"
                                                class="btn btn-success">Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <br>
                    <div class="col-sm-8">
                    </div>
                </div>

                <br>
            </section>
        </div>
    </section>
@endsection
@section('specifiedJs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.summernote').summernote({
                height: 350,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });
        });
    </script>
@endsection

