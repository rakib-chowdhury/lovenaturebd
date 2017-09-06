@extends('vantage.layout.main')
@section('page_title','Hot Deal')
@section('page_header','Edit Hot Deal')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('hot_deals/show')}}">Hot Deals</a></li>
        <li class="active"><span class="glyphicon glyphicon-edit"></span></li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit="return chkDoc()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('hot_deals/edit_post')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$hot_deals[0]->id}}">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title" class="control-label">Title</label>
                        <input onblur="check_text_field('title','title_err')"
                               type="text" required class="form-control"
                               name="title" id="title" placeholder="Title"
                               value="{{$hot_deals[0]->title}}">
                            <span id="title_err" style="color: red;">
                                @if($errors->has('title')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title_bn" class="control-label">টাইটেল</label>
                        <input onblur="check_text_field('title_bn','title_bn_err')"
                               type="text" required class="form-control"
                               name="title_bn" id="title_bn" placeholder="টাইটেল"
                               value="{{$hot_deals_bn[0]->title}}">
                            <span id="title_bn_err" style="color: red;">
                                @if($errors->has('title_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--///title--}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="country_name" class="control-label">Country Name</label>
                        <select required class="form-control" name="country_name"
                                id="country_name">
                            @if(empty($hot_deals[0]->hasCountry))
                                <option value="">No Country</option>
                            @else
                                @foreach($country as $row)
                                    <option @if($hot_deals[0]->country_id==$row->id){{'selected'}}@endif value="{{ $row->id }}">{{ $row->country_name }}</option>
                                @endforeach
                            @endif
                        </select>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('country_name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="package_code" class="control-label">Package Code</label>
                        <input onblur="check_text_field('package_code','package_code_err')"
                               type="text" required class="form-control"
                               name="package_code" id="package_code" placeholder="Package Code"
                               value="{{$hot_deals[0]->package_code}}">
                            <span id="package_code_err" style="color: red;">
                                @if($errors->has('package_code')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--///country, package code--}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="package_type_name" class="control-label">Package Type</label>
                        <select required class="form-control" name="package_type_name"
                                id="package_type_name">
                            @if(empty($hot_deals[0]->hasType))
                                <option value="">No Type</option>
                            @else
                                @foreach($hot_deal_type as $row)
                                    <option @if($hot_deals[0]->package_type_id==$row->id){{'selected'}}@endif value="{{ $row->id }}">{{ $row->package_type_name }}</option>
                                @endforeach
                            @endif
                        </select>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('package_type_name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="package_type_name_bn" class="control-label">প্যাকেজের টাইপ</label>
                        <select required class="form-control" name="package_type_name_bn"
                                id="package_type_name_bn">
                            @if(empty($hot_deals[0]->hasType))
                                <option value="">No Type</option>
                            @else
                                @foreach($hot_deal_type as $row)
                                    <option @if($hot_deals[0]->package_type_id==$row->id){{'selected'}}@endif value="{{ $row->id }}">{{ $row->package_type_name_bn }}</option>
                                @endforeach
                            @endif
                        </select>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('package_type_name_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--////city name--}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="city_name" class="control-label">City Name</label>
                        <input onblur="check_text_field('city_name','city_name_err')"
                               type="text" required class="form-control"
                               name="city_name" id="city_name" placeholder="City Name"
                               value="{{$hot_deals[0]->city_name}}">
                            <span id="city_name_err" style="color: red;">
                                @if($errors->has('city_name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city_name_bn" class="control-label">শহরের নাম</label>
                        <input onblur="check_text_field('city_name_bn','city_name_bn_err')"
                               type="text" required class="form-control"
                               name="city_name_bn" id="city_name_bn" placeholder="শহরের নাম"
                               value="{{$hot_deals_bn[0]->city_name}}">
                            <span id="city_name_bn_err" style="color: red;">
                                @if($errors->has('city_name_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--package name--}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="package_name" class="control-label">Package Name</label>
                        <input onblur="check_text_field('package_name','package_name_err')"
                               type="text" required class="form-control"
                               name="package_name" id="package_name" placeholder="Package Name"
                               value="{{$hot_deals[0]->package_name}}">
                            <span id="package_name_err" style="color: red;">
                                @if($errors->has('package_name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="package_name_bn" class="control-label">প্যাকেজের নাম</label>
                        <input onblur="check_text_field('package_name_bn','package_name_bn_err')"
                               type="text" required class="form-control"
                               name="package_name_bn" id="package_name_bn" placeholder="প্যাকেজের নাম"
                               value="{{$hot_deals_bn[0]->package_name}}">
                            <span id="package_name_bn_err" style="color: red;">
                                @if($errors->has('package_name_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 {{ $errors->has('package_price') ? 'has-error':'' }}">
                        <label for="hot_deal_price" class="control-label"><span style="color: red;">* </span>Package Price</label>
                        <input onkeyup="checkNumber(this.id)" onblur="checkNumber(this.id)" type="text" required class="form-control"
                               name="hot_deal_price" id="hot_deal_price" placeholder="Package Price"
                               value="{{$hot_deals[0]->hot_deal_price}}">
                            <span id="hot_deal_price_err" style="color: red;">
                                @if($errors->has('hot_deal_price')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6 {{ $errors->has('discount') ? 'has-error':'' }}">
                        <label for="discount" class="control-label"><span style="color: red;">* </span>Discount</label>
                        <input onkeyup="checkNumber(this.id)"
                               type="text" class="form-control"
                               name="discount" id="discount" placeholder="Discount"
                               value="{{$hot_deals_bn[0]->hot_deal_price}}">
                            <span id="discount_err" style="color: red;">
                                @if($errors->has('discount')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--package description--}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="package_description" class="control-label">Package Description</label>
                        <textarea class="summernote" type="text" required class="form-control"
                                  name="package_description" id="package_description" placeholder="Package Description"
                                  value="">{{$hot_deals[0]->package_description}}</textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('package_description')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="package_description_bn" class="control-label">প্যাকেজের বিবরণ</label>
                        <textarea class="summernote" type="text" required class="form-control"
                                  name="package_description_bn" id="package_description_bn" placeholder="প্যাকেজের বিবরণ"
                                  value="">{{$hot_deals_bn[0]->package_description}}</textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('package_description_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--category--}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="category" class="control-label">Category</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="category" id="category" placeholder="Category"
                               value="{{$hot_deals[0]->category}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('category')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="category_bn" class="control-label">বিভাগ</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="category_bn" id="category_bn" placeholder="বিভাগ"
                               value="{{$hot_deals_bn[0]->category}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('category_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--tour details--}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="tour_details" class="control-label">Tour Details</label>
                        <textarea class="summernote" type="text" required class="form-control"
                                  name="tour_details" id="tour_details" placeholder="Tour Details"
                                  value="">{{$hot_deals[0]->tour_details}}</textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('tour_details')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tour_details_bn" class="control-label">ভ্রমণের বিস্তারিত</label>
                        <textarea class="summernote" type="text" required class="form-control"
                                  name="tour_details_bn" id="tour_details_bn" placeholder="ভ্রমণের বিস্তারিত"
                                  value="">{{$hot_deals_bn[0]->tour_details}}</textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('tour_details_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--important notes--}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="important_notes" class="control-label">Important Notes</label>
                        <textarea class="summernote" type="text" required class="form-control"
                                  name="important_notes" id="important_notes" placeholder="Important Notes"
                                  value="">{{$hot_deals[0]->important_notes}}</textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('important_notes')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="important_notes_bn" class="control-label">গুরুত্বপূর্ণ তথ্য </label>
                        <textarea class="summernote" type="text" required class="form-control"
                                  name="important_notes_bn" id="important_notes_bn" placeholder="গুরুত্বপূর্ণ তথ্য "
                                  value="">{{$hot_deals_bn[0]->important_notes}}</textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('important_notes_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="terms_conditions" class="control-label">Terms & Conditions</label>
                        <textarea class="summernote" type="text" required class="form-control"
                                  name="terms_conditions" id="terms_conditions" placeholder="Terms & Conditions"
                                  value="">{{$hot_deals[0]->terms_conditions}}</textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('terms_conditions')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="terms_conditions_bn" class="control-label">শর্তাবলী</label>
                        <textarea class="summernote" type="text" required class="form-control"
                                  name="terms_conditions_bn" id="terms_conditions_bn" placeholder="শর্তাবলী"
                                  value="">{{$hot_deals_bn[0]->terms_conditions}}</textarea>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('terms_conditions_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--</div> terms & conditions--}}
                <div class="row">
                    {{--</div> image--}}
                    <div class="form-group" style="text-align: center">
                        <button id="submitBTN" type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
                {{--image modal--}}
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="col-sm-12" style=" max-height: 500px; overflow-y: scroll;">
            <div class="form-group ">
                <table class="table table-bordered table-striped table-responsive" style="text-align: center;">
                    <tr>
                        <td style="">#</td>
                        <td style="">Package Code</td>
                        <td style="">Image</td>
                        <td>Action</td>
                    </tr>
                    @foreach($hot_deal_image as $key=>$r)
                        <tr>
                            <td>
                                <?php echo $key+1;?>
                            </td>

                            <td>
                                {{$r->package_code}}
                            </td>

                            <td>
                                <img style="width: 100px; height: 80px;"
                                     src="{{url('public/images/hot_deals/'.$r->image)}}" alt="">
                            </td>
                            <td>
                                <a data-toggle="modal" data-target="#editPic_<?= $r->id ?>" style="cursor: pointer;">
                                    <span style="color: peru" class="glyphicon glyphicon-edit" data-toggle="tooltip"
                                          data-placement="top" title="Replace"></span>
                                </a>
                                <!-- Modal -->
                                <div id="editPic_{{$r->id}}" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <form onsubmit="return chkIMG2()" enctype="multipart/form-data" action="{{url('hot_deals/pic/edit_post')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{$r->id}}">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title" style="text-align: center">Edit Picture</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <input required type="file"
                                                                   class="dropify" name="image" id="image" onchange="edit_image()"
                                                                   data-default-file="{{url('public/images/hot_deals/'.$r->image)}}">
                                                            <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                                                        <span id="image_err" style="color: red;"><br>
                                                            @if($errors->has('image')){{'Image should be less than 1mb and image should be in jpg,png format.'}}@endif
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-rounded"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" id="submit_button" class="btn btn-success btn-rounded">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                &nbsp;&nbsp;
                                <a href="{{url('pic/delete/'.$r->id)}}">
                                <span style="color: red" class="glyphicon glyphicon-trash" data-toggle="tooltip"
                                      data-placement="top" title="Delete"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </table>

                <!-- Modal -->
                <div id="addPic" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <form onsubmit="return chkIMG()" enctype="multipart/form-data" action="{{url('pic/add_post')}}" method="post">
                            {{csrf_field()}}
                                    <!--<input type="hidden" name="type" value="1">-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close"
                                            data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" style="text-align: center">Add Picture</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">

                                        <div class="form-group col-md-12">
                                            <label for="cat_id" class="control-label">Type</label>
                                            <select class="form-control select2" id="type" name="type" required onchange="showCategory()">

                                                <option value="0">Select Type</option>
                                                <option value="1">Resort</option>

                                            </select>
                                            <span id="type_error" style="color: red;display: none;">Select Type</span>
                                            <span id="cat_name_err" style="color: red; ">
                                                @if($errors->has('cat_name')){{'Required'}}@endif
                                            </span>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="cat_id" class="control-label">Category</label>
                                            <select class="form-control select2" id="category" name="cat_id">

                                                <option value="0">Select Category</option>

                                            </select>
                                            <span id="cat_id_error" style="color: red;display: none;">Select Category</span>
                                            <span id="cat_name_err" style="color: red; ">
                                                @if($errors->has('cat_name')){{'Required'}}@endif
                                            </span>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="emp_id" class="control-label">Room Name</label>
                                            <input class="form-control" id="name" type="text" name="room_name" required>
                                            <!--                                                            <span id="room_name_err" style="color: red; ">
                                                                                            @if($errors->has('cat_name')){{'Required'}}@endif
                                                    </span>-->
                                            <span id="room_name_error" style="display: none;color: red;">Input Room Name</span>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="Image" class="control-label">Image</label>
                                            <input required type="file"
                                                   class="dropify" name="image" id="image1" onchange="readURL()"
                                                   data-default-file="">
                                            <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                                            <span id="image_err" style="color: red;"><br>
                                                @if($errors->has('image')){{'Image should be less than 1mb and image should be in jpg,png format.'}}@endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-rounded"
                                            data-dismiss="modal">Close
                                    </button>
                                    <button type="submit" id="myBtn" class="btn btn-success btn-rounded">Submit
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
<script>
    function chkIMG() {
        $('#image').attr('required', 'true');
        // $('#image').removeAttr('data-default-file');
        document.getElementById('isImg').value = 1;
    }
    function chkMb(id) {
        var x = document.getElementById(id);
        x.value = x.value.replace(/[^0-9+]/, '');
        //console.log(x.value);
        //console.log(x.value);
    }
    function checkNumber(id) {
        var tmp_num = $('#' + id).val().getDigitEnglishFromBangla();
        if (tmp_num == null || isNaN(tmp_num)) {
            var x = document.getElementById(id);
            x.value = x.value.replace(/[^0-9]/, '');
        }
    }
    $('#idNumber').keyup(function () {
        checkNumber('idNumber');
    }).blur(function () {
        checkNumber('idNumber');
    });
    function edit_image() {
        $("#image").change(function (e) {
            var file, img;
            if ((file = this.files[0])) {
                img = new Image();
                img.onload = function () {
                    imgWidth = this.width;
                    imgHeight = this.height;
                    if (imgWidth != 800 && imgHeight != 800) {
                        alert('Image Size Must be 800 x 800');
                        document.getElementById('submit_button').disabled = true;
                    }
                    else {
                        document.getElementById('submit_button').disabled = false;
                    }

                };
                img.onerror = function () {
                    alert("not a valid file: " + file.type);
                };
                img.src = _URL.createObjectURL(file);
            }

        });

        var _URL = window.URL || window.webkitURL;
    }

    function chkDoc() {
        var flag = true;

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