@extends('vantage.layout.main')
@section('page_title','Edit Contact Info')
@section('page_header','Edit Contact Info')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li class="active">Contact Info</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkAboutUs()" data-toggle="validator"
                  id="info" action="{{url('contact/edit_post')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$contact_info[0]->id}}">
                <div class="form-group">
                    <label for="address" class="control-label"><span style="color: red;">* </span>Address</label>
                    <textarea class="summernote form-control" name="address"
                              id="address">{{$contact_info[0]->address}}</textarea>
                    <span id="shortNote_err" style="color: red; ">
                        @if($errors->has('shortNote')){{'Required'}}@endif
                    </span>
                </div>
                <div class="form-group">
                    <label for="address_bn" class="control-label"><span style="color: red;">* </span>ঠিকানা(বাংলায়)</label>
                    <textarea class="summernote form-control" style="height: 200px"
                              name="address_bn" id="address_bn">{{$contact_info[0]->address_bn}}</textarea>
                    <span id="shortNote_err" style="color: red; ">
                        @if($errors->has('shortNote')){{'Required'}}@endif
                    </span>
                </div>

                <div class="form-group">
                    <label for="package_info" class="control-label"><span style="color: red;">* </span>For Package Information</label>
                    <textarea class="summernote" name="package_info"
                              id="package_info">{{$contact_info[0]->package_info}}</textarea>
                    <span id="description_err" style="color: red; ">
                        @if($errors->has('description')){{'Required'}}@endif
                    </span>
                </div>
                <div class="form-group">
                    <label for="package_info_bn" class="control-label"><span style="color: red;">* </span>প্যাকেজ সম্পর্কিত তথ্যের জন্য </label>
                    <textarea class="summernote" name="package_info_bn"
                              id="package_info_bn">{{$contact_info[0]->package_info_bn}}</textarea>
                    <span id="description_err" style="color: red; ">
                        @if($errors->has('description')){{'Required'}}@endif
                    </span>
                </div>
                <div class="form-group">
                    <label for="air_ticket_info" class="control-label"><span style="color: red;">* </span>For Air Ticket Information</label>
                    <textarea class="summernote" name="air_ticket_info"
                              id="air_ticket_info">{{$contact_info[0]->air_ticket_info}}</textarea>
                    <span id="description_err" style="color: red; ">
                        @if($errors->has('description')){{'Required'}}@endif
                    </span>
                </div>
                <div class="form-group">
                    <label for="air_ticket_info_bn" class="control-label"><span style="color: red;">* </span>এয়ার টিকেট সম্পর্কিত তথ্যের জন্য</label>
                    <textarea class="summernote" name="air_ticket_info_bn"
                              id="air_ticket_info_bn">{{$contact_info[0]->air_ticket_info_bn}}</textarea>
                    <span id="description_err" style="color: red; ">
                        @if($errors->has('description')){{'Required'}}@endif
                    </span>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label"><span style="color: red;">* </span>Email</label>
                    <textarea class="summernote" name="email" id="email"
                              class="form-control">{{$contact_info[0]->email}}</textarea>
                    <span style="color: peru">
                        <span id="counter_div" style="color: black"></span>
                    </span><br>
                    <span id="shortNote_err" style="color: red; ">
                        @if($errors->has('shortNote')){{'Required'}}@endif
                    </span>
                </div>

                <div class="form-group" style="text-align: center">
                    <button onclick="chkAboutUs()" id="submitBTN" type="button" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('postJquery')
    <script>

        function chkAboutUs() {
            var flag = true;

            var shrtnote = document.getElementById('shortNote').value;
            shrtnote = shrtnote.replace(/\s+/g, '');
            if (shrtnote == null || shrtnote == '') {
                document.getElementById('shortNote_err').innerText = 'This field should have a value';
                flag = false;
            } else {
                document.getElementById('shortNote_err').innerText = '';
            }

            var des = document.getElementById('description').value;

            des = des.replace(/\s+/g, '');
            des = des.split('&nbsp;').join('');
            console.log(',' + des + ',');
            if (des == null || des == '' || des == '<p><br></p>' || des == '<p></p>') {
                document.getElementById('description_err').innerText = 'This field should have a value';
                flag = false;
            } else {
                document.getElementById('description_err').innerText = '';
            }

            return flag;
        }
    </script>
@endsection