@extends('vantage.layout.main')
@section('page_title','Package Type')
@section('page_header','New Package Type')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('package/show')}}">Package Type</a></li>
        <li class="active">New Package Type</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('package/type_add_post')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="package_type_name" class="control-label">Package Type</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="package_type_name" id="package_type_name" placeholder="Package Type"
                               value="{{old('package_type_name')}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('package_type_name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="package_type_name_bn" class="control-label">প্যাকেজের টাইপ</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="package_type_name_bn" id="package_type_name_bn" placeholder="প্যাকেজের টাইপ"
                               value="{{old('package_type_name_bn')}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('package_type_name_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="form-group" style="text-align: center">
                    <button id="submitBTN" type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection