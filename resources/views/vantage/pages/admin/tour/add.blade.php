@extends('vantage.layout.main')
@section('page_title','Tours & Attractions')
@section('page_header','New Tours & Attractions')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('tour/show')}}">Tours & Attractions</a></li>
        <li class="active">New Package</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('tour/add_post')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title" class="control-label"><span style="color: red;">* </span>Title</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="title" id="title" placeholder="Title"
                               value="{{old('title')}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('title')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title_bn" class="control-label"><span style="color: red;">* </span>টাইটেল</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="title_bn" id="title_bn" placeholder="টাইটেল"
                               value="{{old('title_bn')}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('title_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="country_name" class="control-label"><span style="color: red;">* </span>Country Name</label>
                        <select required class="form-control" name="country_name"
                                id="country_name">
                            @foreach($country as $row2)
                                <option value="{{ $row2->id }}">{{ $row2->country_name }}</option>
                            @endforeach
                        </select>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('country_name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="package_code" class="control-label"><span style="color: red;">* </span>Package Code</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="package_code" id="package_code" placeholder="Package Code"
                               value="{{old('package_code')}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('package_code')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="city_name" class="control-label"><span style="color: red;">* </span>City Name</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="city_name" id="city_name" placeholder="City Name"
                               value="{{old('city_name')}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('city_name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city_name_bn" class="control-label"><span style="color: red;">* </span>শহরের নাম</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="city_name_bn" id="city_name_bn" placeholder="শহরের নাম"
                               value="{{old('city_name_bn')}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('city_name_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="package_name" class="control-label"><span style="color: red;">* </span>Package Name</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="package_name" id="package_name" placeholder="Package Name"
                               value="{{old('package_name')}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('package_name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="package_name_bn" class="control-label"><span style="color: red;">* </span>প্যাকেজের নাম</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="package_name_bn" id="package_name_bn" placeholder="প্যাকেজের নাম"
                               value="{{old('package_name_bn')}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('package_name_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="package_description" class="control-label"><span style="color: red;">* </span>Package Description</label>
                        <textarea class="summernote" type="text" required class="form-control"
                               name="package_description" id="package_description" placeholder="Package Description"
                               value="{{old('package_description')}}"></textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('package_description')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="package_description_bn" class="control-label"><span style="color: red;">* </span>প্যাকেজের বিবরণ</label>
                        <textarea class="summernote" type="text" required class="form-control"
                               name="package_description_bn" id="package_description_bn" placeholder="প্যাকেজের বিবরণ"
                               value="{{old('package_description_bn')}}"></textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('package_description_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="tour_details" class="control-label"><span style="color: red;">* </span>Tour Details</label>
                        <textarea class="summernote" type="text" required class="form-control"
                               name="tour_details" id="tour_details" placeholder="Tour Details"
                               value="{{old('tour_details')}}"></textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('tour_details')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tour_details_bn" class="control-label"><span style="color: red;">* </span>ভ্রমণের বিস্তারিত</label>
                        <textarea class="summernote" type="text" required class="form-control"
                               name="tour_details_bn" id="tour_details_bn" placeholder="ভ্রমণের বিস্তারিত"
                               value="{{old('tour_details_bn')}}"></textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('tour_details_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="important_notes" class="control-label"><span style="color: red;">* </span>Important Notes</label>
                        <textarea class="summernote" type="text" required class="form-control"
                               name="important_notes" id="important_notes" placeholder="Important Notes"
                               value="{{old('important_notes')}}"></textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('important_notes')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="important_notes_bn" class="control-label"><span style="color: red;">* </span>গুরুত্বপূর্ণ তথ্য </label>
                        <textarea class="summernote" type="text" required class="form-control"
                               name="important_notes_bn" id="important_notes_bn" placeholder="গুরুত্বপূর্ণ তথ্য "
                               value="{{old('important_notes_bn')}}"></textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('important_notes_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="terms_conditions" class="control-label"><span style="color: red;">* </span>Terms & Conditions</label>
                        <textarea class="summernote" type="text" required class="form-control"
                               name="terms_conditions" id="terms_conditions" placeholder="Terms & Conditions"
                               value="{{old('terms_conditions')}}"></textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('terms_conditions')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="terms_conditions_bn" class="control-label"><span style="color: red;">* </span>শর্তাবলী</label>
                        <textarea class="summernote" type="text" required class="form-control"
                               name="terms_conditions_bn" id="terms_conditions_bn" placeholder="শর্তাবলী"
                               value="{{old('terms_conditions_bn')}}"></textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('terms_conditions_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="control-label col-md-3"><span style="color: red;">* </span>Image</label>
                        <input required type="file"
                               class="dropify" name="image"
                               data-default-file="{{url('public/images/tour/no_img.png')}}">
                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                        <span id="image_err" style="color: red;"><br>
                            @if($errors->has('image')){{'Image should be less than 1mb and image should be in jpg,png format.'}}@endif
                        </span>
                    </div>
                </div>
                {{--<div class="form-group">--}}
                    {{--<label for="description" class="control-label">Description</label>--}}
                    {{--<textarea class="summernote" name="description" id="description">{{old('description')}}</textarea>--}}
                    {{--<span id="description_err" style="color: red; ">--}}
                        {{--@if($errors->has('description')){{'Required'}}@endif--}}
                    {{--</span>--}}
                {{--</div>--}}
                <div class="form-group" style="text-align: center">
                    <button id="submitBTN" type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection