@extends('vantage.layout.main')
@section('page_title','Transport')
@section('page_header','Add Transport')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('transport/show')}}">Transport</a></li>
        <li class="active">Add Transport</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkDoc()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('transport/add_post')}}" method="post">
                {{csrf_field()}}
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
                    <div class="form-group col-md-6">
                        <label for="vehicle_cost" class="control-label"><span style="color: red;">* </span>Transport Cost</label>
                        <input onkeyup="checkNumber(this.id)" onblur="checkNumber(this.id)"
                               type="text" required class="form-control"
                               name="vehicle_cost" id="vehicle_cost" placeholder="Transport Cost"
                               value="{{old('vehicle_cost')}}">
							<span id="vehicle_cost_err" style="color: red;">
								@if($errors->has('vehicle_cost')){{'Required'}}@endif
							</span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="transport_name" class="control-label"><span style="color: red;">* </span>Transport Name</label>
                        <input onblur="check_text_field('profession','profession_err')"
                               type="text" required class="form-control"
                               name="transport_name" id="transport_name" placeholder="Transport Name"
                               value="{{old('transport_name')}}">
                        <span id="transport_name_err" style="color: red;">
                            @if($errors->has('transport_name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="transport_name_bn" class="control-label"><span style="color: red;">* </span>যানবাহনের নাম(বাংলায়)</label>
                        <input onblur="check_text_field('office','office_err')"
                               type="text" required class="form-control"
                               name="transport_name_bn" id="transport_name_bn" placeholder="যানবাহনের নাম(বাংলায়)"
                               value="{{old('transport_name_bn')}}">
							<span id="transport_name_bn_err" style="color: red;">
								@if($errors->has('transport_name_bn')){{'Required'}}@endif
							</span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="start" class="control-label"><span style="color: red;">* </span>Start</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="start" id="start" placeholder="start"
                               value="{{old('start')}}">
                        <span id="start_err" style="color: red;">
                            @if($errors->has('start')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="start_bn" class="control-label"><span style="color: red;">* </span>শুরু(বাংলায়)</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="start_bn" id="start_bn" placeholder="শুরু(বাংলায়)"
                               value="{{old('start_bn)')}}">
                        <span id="start_bn_err" style="color: red;">
                            @if($errors->has('start_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="destination" class="control-label"><span style="color: red;">* </span>Destination</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="destination" id="destination" placeholder="destination"
                               value="{{old('destination')}}">
                        <span id="destination_err" style="color: red;">
                            @if($errors->has('destination')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="destination_bn" class="control-label"><span style="color: red;">* </span>গন্তব্য(বাংলায়)</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="destination_bn" id="destination_bn" placeholder="গন্তব্য(বাংলায়)"
                               value="{{old('destination_bn)')}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('destination_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="transport_category" class="control-label"><span style="color: red;">* </span>Transport Category</label>
                        <input onblur="check_text_field('designation','designation_err')"
                               type="text" required class="form-control"
                               name="transport_category" id="transport_category" placeholder="Transport Category"
                               value="{{old('transport_category')}}">
                        <span id="designation_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="transport_category_bn" class="control-label"><span style="color: red;">* </span>যানবাহনের বিভাগ(বাংলায়)</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="transport_category_bn" id="transport_category_bn"
                               placeholder="যানবাহনের বিভাগ(বাংলায়)"
                               value="{{old('transport_category_bn)')}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="transport_facility" class="control-label"><span style="color: red;">* </span>Transport Facility</label>
                        <input onblur="check_text_field('designation','designation_err')"
                               type="text" required class="form-control"
                               name="transport_facility" id="transport_facility" placeholder="Transport Facility"
                               value="{{old('transport_facility')}}">
                        <span id="designation_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="transport_facility_bn" class="control-label"><span style="color: red;">* </span>যানবাহনের সুবিধা(বাংলায়)</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="transport_facility_bn" id="transport_facility_bn"
                               placeholder="যানবাহনের সুবিধা(বাংলায়)"
                               value="{{old('transport_facility_bn)')}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
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
    function checkNumber(id) {
        var tmp_num = $('#'+id).val();
        tmp_num = tmp_num.replace(/\s+/g,'');

        $('#'+id).val(tmp_num);
        var tmp_num = $('#' + id).val().getDigitEnglishFromBangla();
        if (tmp_num == null || isNaN(tmp_num)) {
            var x = document.getElementById(id);
            x.value = x.value.replace(/[^0-9]/, '');
        }
    }
</script>