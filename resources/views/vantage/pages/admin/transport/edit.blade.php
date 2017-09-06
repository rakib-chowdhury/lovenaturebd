@extends('vantage.layout.main')
@section('page_title','Transport')
@section('page_header','Edit Transport')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('transport/show')}}">Transport</a></li>
        <li class="active"><span class="glyphicon glyphicon-edit">Edit Transport</span></li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkDoc()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('transport/edit_post')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$transport[0]->id}}">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="country_name" class="control-label">Country Name</label>
                        <select required class="form-control" name="country_name"
                                id="country_name">
                            @if(empty($country))
                                <option value="">No Country</option>
                            @else
                                @foreach($country as $row)
                                    <option @if($transport[0]->country_id==$row->id){{'selected'}}@endif value="{{ $row->id }}">{{ $row->country_name }}</option>
                                @endforeach
                            @endif
                        </select>
                        <span id="name_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="vehicle_cost" class="control-label">Transport Cost</label>
                        <input onblur="check_text_field('address','address_err')"
                               type="text" required class="form-control"
                               name="vehicle_cost" id="vehicle_cost" placeholder="Transport Cost"
                               value="{{$transport[0]->vehicle_cost}}">
							<span id="address_err" style="color: red;">
								@if($errors->has('phn')){{'Required'}}@endif
							</span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="start" class="control-label">Start</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="start" id="start" placeholder="start"
                               value="{{$transport[0]->start}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('start')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="start_bn" class="control-label">শুরু(বাংলায়)</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="start_bn" id="start_bn" placeholder="শুরু(বাংলায়)"
                               value="{{$transport[0]->start_bn}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="destination" class="control-label">Destination</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="destination" id="destination" placeholder="destination"
                               value="{{$transport[0]->destination}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('destination')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="destination_bn" class="control-label">গন্তব্য(বাংলায়)</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="destination_bn" id="destination_bn" placeholder="গন্তব্য(বাংলায়)"
                               value="{{$transport[0]->destination_bn}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('destination_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="transport_name" class="control-label">Transport Name</label>
                        <input onblur="check_text_field('profession','profession_err')"
                               type="text" required class="form-control"
                               name="transport_name" id="transport_name" placeholder="Transport Name"
                               value="{{$transport[0]->transport_name}}">
                        <span id="profession_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="transport_name_bn" class="control-label">যানবাহনের নাম(বাংলায়)</label>
                        <input onblur="check_text_field('office','office_err')"
                               type="text" required class="form-control"
                               name="transport_name_bn" id="transport_name_bn" placeholder="যানবাহনের নাম(বাংলায়)"
                               value="{{$transport[0]->transport_name_bn}}">
							<span id="office_err" style="color: red;">
								@if($errors->has('name')){{'Required'}}@endif
							</span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="transport_category" class="control-label">Transport Category</label>
                        <input onblur="check_text_field('designation','designation_err')"
                               type="text" required class="form-control"
                               name="transport_category" id="transport_category" placeholder="Transport Category"
                               value="{{$transport[0]->transport_category}}">
                        <span id="designation_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="transport_category_bn" class="control-label">যানবাহনের বিভাগ(বাংলায়)</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="transport_category_bn" id="transport_category_bn"
                               placeholder="যানবাহনের বিভাগ(বাংলায়)"
                               value="{{$transport[0]->transport_category_bn}}">
                        <span id="phn_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="transport_facility" class="control-label">Transport Facility</label>
                        <input onblur="check_text_field('designation','designation_err')"
                               type="text" required class="form-control"
                               name="transport_facility" id="transport_facility" placeholder="Transport Facility"
                               value="{{$transport[0]->transport_facility}}">
                        <span id="designation_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="transport_facility_bn" class="control-label">যানবাহনের সুবিধা(বাংলায়)</label>
                        <input onkeyup="chkMb('phn','phn_err')"
                               type="text" required class="form-control"
                               name="transport_facility_bn" id="transport_facility_bn"
                               placeholder="যানবাহনের সুবিধা(বাংলায়)"
                               value="{{$transport[0]->transport_facility_bn}}">
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