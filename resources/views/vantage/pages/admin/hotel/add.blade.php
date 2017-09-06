@extends('vantage.layout.main')
@section('page_title','Hotel')
@section('page_header','Add Hotel')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('hotel/show')}}">Doctor</a></li>
        <li class="active">Add Hotel</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkDoc()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('hotel/add_post')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="control-label col-md-3"><span style="color: red;">* </span>Image</label>
                        <input required type="file"
                               class="dropify" name="image"
                               data-default-file="">
                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                        <span id="image_err" style="color: red;"><br>
                            @if($errors->has('image')){{'Image should be less than 1mb and image should be in jpg,png format.'}}@endif
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
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                    </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="city_name" class="control-label"><span style="color: red;">* </span>City Name</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="city_name" id="city_name" placeholder="City Name"
                               value="{{old('city_name')}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('phn')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city_name_bn" class="control-label"><span style="color: red;">* </span>শহরের নাম</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="city_name_bn" id="city_name_bn" placeholder="শহরের নাম"
                               value="{{old('city_name_bn')}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('city_name_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="hotel_name" class="control-label"><span style="color: red;">* </span>Hotel Name</label>
                        <input onblur="check_text_field('profession','profession_err')"
                               type="text" required class="form-control"
                               name="hotel_name" id="hotel_name" placeholder="Hotel Name"
                               value="{{old('hotel_name')}}">
                        <span id="profession_err" style="color: red;">
                            @if($errors->has('Hotel Name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="hotel_name_bn" class="control-label"><span style="color: red;">* </span>হোটেলের নাম</label>
                        <input onblur="check_text_field('profession','profession_err')"
                               type="text" required class="form-control"
                               name="hotel_name_bn" id="hotel_name_bn" placeholder="হোটেলের নাম"
                               value="{{old('hotel_name_bn')}}">
                        <span id="profession_err" style="color: red;">
                            @if($errors->has('hotel_name_bn')){{'Required'}}@endif
                        </span>
                    </div>
                    </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="hotel_category" class="control-label"><span style="color: red;">* </span>Hotel Category</label>
                        <input onblur="check_text_field('designation','designation_err')"
                               type="text" required class="form-control"
                               name="hotel_category" id="hotel_category" placeholder="Hotel Category"
                               value="{{old('hotel_category')}}">
                        <span id="designation_err" style="color: red;">
                            @if($errors->has('hotel_category')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="hotel_category_bn" class="control-label"><span style="color: red;">* </span>হোটেলের ক্যাটাগরি</label>
                        <input onblur="check_text_field('designation','designation_err')"
                               type="text" required class="form-control"
                               name="hotel_category_bn" id="hotel_category_bn" placeholder="হোটেলের ক্যাটাগরি"
                               value="{{old('hotel_category_bn')}}">
                        <span id="designation_err" style="color: red;">
                            @if($errors->has('hotel_category_bn')){{'Required'}}@endif
                        </span>
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="room_category" class="control-label"><span style="color: red;">* </span>Room Category</label>
                        <input onblur="check_text_field('designation','designation_err')"
                               type="text" required class="form-control"
                               name="room_category" id="room_category" placeholder="Room Category"
                               value="{{old('room_category')}}">
                        <span id="designation_err" style="color: red;">
                            @if($errors->has('room_category')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="room_category_bn" class="control-label"><span style="color: red;">* </span>রুম ক্যাটাগরি</label>
                        <input onblur="check_text_field('designation','designation_err')"
                               type="text" required class="form-control"
                               name="room_category_bn" id="room_category_bn" placeholder="রুম ক্যাটাগরি"
                               value="{{old('room_category_bn')}}">
                        <span id="designation_err" style="color: red;">
                            @if($errors->has('room_category_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="room_facility" class="control-label"><span style="color: red;">* </span>Room Facility</label>
                        <input onblur="check_text_field('address','address_err')"
                               type="text" required class="form-control"
                               name="room_facility" id="room_facility" placeholder="Room Facility"
                               value="{{old('room_facility')}}">
							<span id="address_err" style="color: red;">
								@if($errors->has('room_facility')){{'Required'}}@endif
							</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="room_facility_bn" class="control-label"><span style="color: red;">* </span>রুমের সুবিধা</label>
                        <input onblur="check_text_field('address','address_err')"
                               type="text" required class="form-control"
                               name="room_facility_bn" id="room_facility_bn" placeholder="রুমের সুবিধা"
                               value="{{old('room_facility_bn')}}">
							<span id="address_err" style="color: red;">
								@if($errors->has('room_facility_bn')){{'Required'}}@endif
							</span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="room_price" class="control-label"><span style="color: red;">* </span>Room Price</label>
                        <input onblur="check_text_field('office','office_err')"
                               type="text" required class="form-control"
                               name="room_price" id="room_price" placeholder="Room Price"
                               value="{{old('room_price')}}">
							<span id="office_err" style="color: red;">
								@if($errors->has('room_price')){{'Required'}}@endif
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
<script>
    function check_email(id) {
        var tmp = $('#' + id).val();
        //console.log(tmp);

        $.ajax({
            url: '{{url("check_emails")}}',
            method: 'get',
            data: {
                emails: tmp
            },
            success: function (result) {
                console.log(result);
                if (result == 0) {
                    document.getElementById('email_err').innerText = '';
                } else {
                    document.getElementById('email').value = '';
                    document.getElementById('email_err').innerText = '"' + tmp + '" mail address already exists. Please enter another email address.';
                }
            }
        });
    }
    function chkMb(id) {
        var x = document.getElementById(id);
        x.value = x.value.replace(/[^0-9+]/, '');
        //console.log(x.value);
        //console.log(x.value);
    }

    function chkDoc() {
        var flag = true;
        var name = document.getElementById('name').value;
        name = name.replace(/\s+/g, '');
        if (name == null || name == '') {
            document.getElementById('name_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('name_err').innerText = '';
        }
        var phn = document.getElementById('phn').value;
        phn = phn.replace(/\s+/g, '');
        if (phn == null || phn == '') {
            document.getElementById('phn_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('phn_err').innerText = '';
        }
        var profession = document.getElementById('profession').value;
        profession = profession.replace(/\s+/g, '');
        if (profession == null || profession == '') {
            document.getElementById('profession_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('profession_err').innerText = '';
        }
        var designation = document.getElementById('designation').value;
        designation = designation.replace(/\s+/g, '');
        if (designation == null || designation == '') {
            document.getElementById('designation_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('designation_err').innerText = '';
        }
        var address = document.getElementById('address').value;
        address = address.replace(/\s+/g, '');
        if (address == null || address == '') {
            document.getElementById('address_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('address_err').innerText = '';
        }
        var office = document.getElementById('office').value;
        office = office.replace(/\s+/g, '');
        if (office == null || office == '') {
            document.getElementById('office_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('office_err').innerText = '';
        }

        var pass = document.getElementById('pass').value;
        var repass = document.getElementById('repassword').value;
        console.log(pass);
        console.log(repass);
        if (pass == repass) {
            console.log('done')
            $('#password_err').text('');
            $('#repassword_err').text('');
        } else {
            flag = false;
            $('#password_err').text('Password and Re-submit Password does not match');
            $('#repassword_err').text('Password and Re-submit Password does not match');
        }
        return flag;
    }
</script>