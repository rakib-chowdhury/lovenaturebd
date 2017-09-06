@extends('vantage.layout.main')
@section('page_title','Contact Info')
@section('page_header','Add Contact Info')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('contact/contact_info')}}">Doctor</a></li>
        <li class="active">Add Contact Info</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkDoc()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('contact/add_post')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="address" class="control-label">Address</label>
                        <input onblur="check_text_field('address','address_err')"
                               type="text" required class="form-control"
                               name="address" id="address" placeholder="Address"
                               value="{{old('address')}}">
                        <span id="address_err" style="color: red;">
                            @if($errors->has('address')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address_bn" class="control-label">ঠিকানা(বাংলায়)</label>
                        <input type="text" required class="form-control"
                               name="address_bn" id="address_bn" placeholder="ঠিকানা(বাংলায়)"
                               value="{{old('address_bn')}}">
                        <span id="address_bn_err" style="color: red;">
                            @if($errors->has('address_bn')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Profession</label>
                        <input onblur="check_text_field('profession','profession_err')"
                               type="text" required class="form-control"
                               name="profession" id="profession" placeholder="Profession"
                               value="{{old('profession')}}">
                        <span id="profession_err" style="color: red;">
                            @if($errors->has('profession')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="designation" class="control-label">Designation</label>
                        <input onblur="check_text_field('designation','designation_err')"
                               type="text" required class="form-control"
                               name="designation" id="designation" placeholder="Designation"
                               value="{{old('designation')}}">
                        <span id="designation_err" style="color: red;">
                            @if($errors->has('designation')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Address</label>
                        <input onblur="check_text_field('address','address_err')"
                               type="text" required class="form-control"
                               name="address" id="address" placeholder="Address"
                               value="{{old('address')}}">
                        <span id="address_err" style="color: red;">
                            @if($errors->has('address')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Office</label>
                        <input onblur="check_text_field('office','office_err')"
                               type="text" required class="form-control"
                               name="office" id="office" placeholder="Office"
                               value="{{old('office')}}">
                        <span id="office_err" style="color: red;">
                            @if($errors->has('office')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Email</label>
                        <input onblur="check_text_field('email','email_err')"
                               type="email" required class="form-control"
                               name="email" id="email" placeholder="Email address"
                               value="{{old('email')}}">
                        <span id="profession_err" style="color: red;">
                            @if($errors->has('email')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Facebook</label>
                        <input type="text" class="form-control"
                               name="fb" id="fb" placeholder="Facebook"
                               value="{{old('fb')}}">
                        <span id="fb_err" style="color: red;">
                            @if($errors->has('fb')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Twitter</label>
                        <input type="text" class="form-control"
                               name="twitter" id="twitter" placeholder="Twitter"
                               value="{{old('twitter')}}">
                        <span id="twitter_err" style="color: red;">
                            @if($errors->has('twitter')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Linkedin</label>
                        <input type="text" class="form-control"
                               name="linkedin" id="linkedin" placeholder="Linkedin"
                               value="{{old('linkedin')}}">
                        <span id="linkedin_err" style="color: red;">
                            @if($errors->has('linkedin')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Youtube</label>
                        <input type="text" class="form-control"
                               name="youtube" id="youtube" placeholder="Youtube"
                               value="{{old('youtube')}}">
                        <span id="youtube_err" style="color: red;">
                            @if($errors->has('youtube')){{'Required'}}@endif
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name" class="control-label">Google Plus</label>
                        <input type="text" class="form-control"
                               name="google" id="google" placeholder="Google Plus"
                               value="{{old('google')}}">
                        <span id="google_err" style="color: red;">
                            @if($errors->has('google')){{'Required'}}@endif
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