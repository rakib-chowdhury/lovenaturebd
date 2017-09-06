@extends('vantage.layout.main')
@section('page_title','Hotel')
@section('page_header','Edit Hotel')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('hotel/show')}}">Hotel</a></li>
        <li class="active"><span class="glyphicon glyphicon-edit"></span></li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkDoc()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('hotel/edit_post')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$hotel[0]->id}}">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="control-label col-md-3">Image</label>
                        <input type="hidden" name="isImg" id="isImg" value="0">
                        <input type="file" onclick="chkIMG()" data-show-remove="false"
                               class="dropify" name="image" id="image"
                               data-default-file="{{url('public/images/hotel/'.$hotel[0]->image)}}">
                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                        <span id="image_err" style="color: red;"><br>
                            @if($errors->has('image')){{'Image should be less than 1mb and image should be in jpg,png format.'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="country_name" class="control-label">Country Name</label>
                        <select required class="form-control" name="country_name"
                                id="country_name">
                            @if(empty($hotel[0]->hasCountry))
                                <option value="">No Country</option>
                            @else
                                @foreach($country as $row)
                                    <option @if($hotel[0]->country_id==$row->id){{'selected'}}@endif value="{{ $row->id }}">{{ $row->country_name }}</option>
                                @endforeach
                            @endif
                        </select>
                        <span id="name_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                    </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="city_name" class="control-label">City Name</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="city_name" id="city_name" placeholder="Contact Number"
                               value="{{$hotel[0]->city_name}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('phn')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city_name_bn" class="control-label">শহরের নাম</label>
                        <input onkeyup="check_text_field('city_name_bn','profession_err')"
                               type="text" required class="form-control"
                               name="city_name_bn" id="city_name_bn" placeholder="শহরের নাম"
                               value="{{$hotel_bn[0]->city_name}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('city_name_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="hotel_name" class="control-label">Hotel Name</label>
                        <input onblur="check_text_field('profession','profession_err')"
                               type="text" required class="form-control"
                               name="hotel_name" id="hotel_name" placeholder="Hotel Name"
                               value="{{$hotel[0]->hotel_name}}">
                        <span id="profession_err" style="color: red;">
                            @if($errors->has('profession')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="hotel_name_bn" class="control-label">হোটেলের নাম</label>
                        <input onblur="check_text_field('hotel_name_bn','profession_err')"
                               type="text" required class="form-control"
                               name="hotel_name_bn" id="hotel_name_bn" placeholder="হোটেলের নাম"
                               value="{{$hotel_bn[0]->hotel_name}}">
                        <span id="profession_err" style="color: red;">
                            @if($errors->has('hotel_name_bn')){{'Required'}}@endif
                        </span>
                    </div>
                    </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="hotel_category" class="control-label">Hotel Category</label>
                        <input onblur="check_text_field('designation','designation_err')"
                               type="text" required class="form-control"
                               name="hotel_category" id="hotel_category" placeholder="Hotel Category"
                               value="{{$hotel[0]->hotel_category}}">
                        <span id="designation_err" style="color: red;">
                            @if($errors->has('designation')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="hotel_category_bn" class="control-label">হোটেলের ক্যাটাগরি</label>
                        <input onblur="check_text_field('designation','designation_err')"
                               type="text" required class="form-control"
                               name="hotel_category_bn" id="hotel_category_bn" placeholder="হোটেলের ক্যাটাগরি"
                               value="{{$hotel[0]->hotel_category}}">
                        <span id="designation_err" style="color: red;">
                            @if($errors->has('hotel_category_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="room_category" class="control-label">Room Category</label>
                        <input onblur="check_text_field('address','address_err')"
                               type="text" required class="form-control"
                               name="room_category" id="room_category" placeholder="Room Category"
                               value="{{$hotel[0]->room_category}}">
                        <span id="address_err" style="color: red;">
                            @if($errors->has('address')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="room_category_bn" class="control-label">রুম ক্যাটাগরি</label>
                        <input onblur="check_text_field('address','address_err')"
                               type="text" required class="form-control"
                               name="room_category_bn" id="room_category_bn" placeholder="রুম ক্যাটাগরি"
                               value="{{$hotel_bn[0]->room_category}}">
                        <span id="address_err" style="color: red;">
                            @if($errors->has('room_category_bn')){{'Required'}}@endif
                        </span>
                    </div>
                    </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="room_facility" class="control-label">Room Facility</label>
                        <input onblur="check_text_field('office','office_err')"
                               type="text" required class="form-control"
                               name="room_facility" id="room_facility" placeholder="Room facility"
                               value="{{$hotel[0]->room_facility}}">
                        <span id="office_err" style="color: red;">
                            @if($errors->has('office')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="room_facility_bn" class="control-label">রুমের সুবিধা</label>
                        <input onblur="check_text_field('office','office_err')"
                               type="text" required class="form-control"
                               name="room_facility_bn" id="room_facility_bn" placeholder="রুমের সুবিধা"
                               value="{{$hotel[0]->room_facility}}">
                        <span id="office_err" style="color: red;">
                            @if($errors->has('room_facility_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="room_price" class="control-label">Room Price</label>
                        <input onblur="check_text_field('email','email_err')"
                               type="text" required class="form-control"
                               name="room_price" id="room_price" placeholder="Room Price"
                               value="{{$hotel[0]->room_price}}">
                        <span id="profession_err" style="color: red;">
                            @if($errors->has('designation')){{'Required'}}@endif
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
    function chkIMG() {
        $('#image').attr('required','true');
        // $('#image').removeAttr('data-default-file');
        document.getElementById('isImg').value=1;
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
        return flag;
    }
</script>