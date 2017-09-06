@extends('vantage.layout.main')
@section('page_title','Hot Deals')
@section('page_header','New Hot deal')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('hot_deals/show')}}">Hot Deal</a></li>
        <li class="active">New Hot Deal</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <div>
                <a href="{{url('hot_deals/type_add')}}" class="btn btn-success btn-rounded">Add New Type</a>
                <hr>
            </div>
            <form data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('hot_deals/add_post')}}" method="post">
                {{csrf_field()}}
                {{--title--}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title" class="control-label"><span style="color: red;">* </span>Title</label>
                        <input onblur="check_text_field('title','title_err')"
                               type="text" required class="form-control"
                               name="title" id="title" placeholder="Title"
                               value="{{old('title')}}">
                            <span id="title_err" style="color: red;">
                                @if($errors->has('title')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title_bn" class="control-label"><span style="color: red;">* </span>টাইটেল</label>
                        <input onblur="check_text_field('title_bn','title_bn_err')"
                               type="text" required class="form-control"
                               name="title_bn" id="title_bn" placeholder="টাইটেল"
                               value="{{old('title_bn')}}">
                            <span id="title_bn_err" style="color: red;">
                                @if($errors->has('title_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--title--}}
                {{--country name--}}
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
                        <input onblur="check_text_field('package_code','package_code_err')"
                               type="text" required class="form-control"
                               name="package_code" id="package_code" placeholder="Package Code"
                               value="{{old('package_code')}}">
                            <span id="package_code_err" style="color: red;">
                                @if($errors->has('package_code')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--country name--}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="package_type_name" class="control-label"><span style="color: red;">* </span>Package Type</label>
                        <select required class="form-control" name="package_type_name"
                                id="package_type_name">
                            @foreach($package_type as $row2)
                                <option value="{{ $row2->id }}">{{ $row2->package_type_name }}</option>
                            @endforeach
                        </select>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('package_type_name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="package_type_name_bn" class="control-label"><span style="color: red;">* </span>প্যাকেজের টাইপ</label>
                        <select required class="form-control" name="package_type_name_bn"
                                id="package_type_name_bn">
                            @foreach($package_type as $row2)
                                <option value="{{ $row2->id }}">{{ $row2->package_type_name_bn }}</option>
                            @endforeach
                        </select>
                            <span id="name_err" style="color: red;">
                                @if($errors->has('package_type_name_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--package Name--}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="city_name" class="control-label"><span style="color: red;">* </span>City Name</label>
                        <input onblur="check_text_field('city_name','city_name_err')"
                               type="text" required class="form-control"
                               name="city_name" id="city_name" placeholder="City Name"
                               value="{{old('city_name')}}">
                            <span id="city_name_err" style="color: red;">
                                @if($errors->has('city_name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city_name_bn" class="control-label"><span style="color: red;">* </span>শহরের নাম</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="city_name_bn" id="city_name_bn" placeholder="শহরের নাম"
                               value="{{old('city_name_bn')}}">
                            <span id="city_name_bn_err" style="color: red;">
                                @if($errors->has('city_name_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--city name--}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="package_name" class="control-label"><span style="color: red;">* </span>Package Name</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="package_name" id="package_name" placeholder="Package Name"
                               value="{{old('package_name')}}">
                            <span id="package_name_err" style="color: red;">
                                @if($errors->has('package_name')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="package_name_bn" class="control-label"><span style="color: red;">* </span>প্যাকেজের নাম</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="package_name_bn" id="package_name_bn" placeholder="প্যাকেজের নাম"
                               value="{{old('package_name_bn')}}">
                            <span id="package_name_bn_err" style="color: red;">
                                @if($errors->has('package_name_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--package Name--}}
                <div class="row">
                    <div class="form-group col-md-6 {{ $errors->has('hot_deal_price') ? 'has-error':'' }}">
                        <label for="hot_deal_price" class="control-label"><span style="color: red;">* </span>Package Price</label>
                        <input onkeyup="checkNumber(this.id)" onblur="checkNumber(this.id)" type="text" required class="form-control"
                               name="hot_deal_price" id="hot_deal_price" placeholder="Hot Deal Price"
                               value="{{old('hot_deal_price')}}">
                            <span id="hot_deal_price_err" style="color: red;">
                                @if($errors->has('hot_deal_price')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6 {{ $errors->has('discount') ? 'has-error':'' }}">
                        <label for="discount" class="control-label">Discount</label>
                        <input onkeyup="checkNumber(this.id)"
                               type="text" class="form-control"
                               name="discount" id="discount" placeholder="Discount"
                               value="{{old('discount')}}">
                            <span id="discount_err" style="color: red;">
                                @if($errors->has('discount')){{'Required'}}@endif
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
                {{--description--}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="category" class="control-label"><span style="color: red;">* </span>Category</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="category" id="category" placeholder="Category"
                               value="{{old('category')}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('category')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="category_bn" class="control-label"><span style="color: red;">* </span>বিভাগ</label>
                        <input onblur="check_text_field('name','name_err')"
                               type="text" required class="form-control"
                               name="category_bn" id="category_bn" placeholder="বিভাগ"
                               value="{{old('category_bn')}}">
                            <span id="name_err" style="color: red;">
                                @if($errors->has('category_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                {{--category--}}
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
                {{--tour details--}}
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
                {{--important notes--}}
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
                {{--terms & conditions--}}
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="control-label col-md-3"><span style="color: red;">* </span>Image</label>
                        <input required type="file"
                               class="dropify" name="image"
                               data-default-file="{{url('public/images/hot_deals/no_img.png')}}">
                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                        <span id="image_err" style="color: red;"><br>
                            @if($errors->has('image')){{'Image should be less than 1mb and image should be in jpg,png format.'}}@endif
                        </span>
                    </div>
                </div>
                {{--image--}}
                <div class="form-group" style="text-align: center">
                    <button id="submitBTN" type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
<script>
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
    var flag = true;
    function chkDoc() {
        var title = document.getElementById('title').value;
        title = title.replace(/\s+/g, '');
        if (title == null || title == '') {
            document.getElementById('title_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('title_err').innerText = '';
        }
        var title_bn = document.getElementById('title_bn').value;
        title_bn = title_bn.replace(/\s+/g, '');
        if (title_bn == null || title_bn == '') {
            document.getElementById('title_bn_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('title_bn_err').innerText = '';
        }
        var package_code = document.getElementById('package_code').value;
        package_code = package_code.replace(/\s+/g, '');
        if (package_code == null || package_code == '') {
            document.getElementById('package_code_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('package_code_err').innerText = '';
        }
        var package_name = document.getElementById('package_name').value;
        package_name = package_name.replace(/\s+/g, '');
        if (package_name == null || package_name == '') {
            document.getElementById('package_name_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('package_name_err').innerText = '';
        }
        var package_name_bn = document.getElementById('package_name_bn').value;
        package_name_bn = package_name_bn.replace(/\s+/g, '');
        if (package_name_bn == null || package_name_bn == '') {
            document.getElementById('package_name_bn_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('package_name_bn_err').innerText = '';
        }
        var city_name = document.getElementById('city_name').value;
        city_name = city_name.replace(/\s+/g, '');
        if (city_name == null || city_name == '') {
            document.getElementById('city_name_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('city_name_err').innerText = '';
        }
        var city_name_bn = document.getElementById('city_name_bn').value;
        city_name_bn = city_name_bn.replace(/\s+/g, '');
        if (city_name_bn == null || city_name_bn == '') {
            document.getElementById('city_name_bn_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('city_name_bn_err').innerText = '';
        }
        return flag;
    }
</script>