@extends('vantage.layout.main')
@section('page_title','Gallery')
@section('page_header','Add Gallery')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('gallery/show')}}">Gallery</a></li>
        <li class="active">Add Gallery Picture</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkDoc()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('gallery/add_post')}}" method="post">
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
                    <div class="form-group col-md-6">
                        <label for="caption" class="control-label"><span style="color: red;">* </span>caption</label>
                        <input type="text" required class="form-control"
                               name="caption" id="caption" placeholder="Caption"
                               value="{{old('caption')}}">
                        <span id="name_err" style="color: red;">
                            @if($errors->has('name')){{'Required'}}@endif
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="caption_bn" class="control-label"><span style="color: red;">* </span>ক্যাপশন(বাংলায়)</label>
                        <input type="text" required class="form-control"
                               name="caption_bn" id="caption_bn" placeholder="ক্যাপশন(বাংলায়)"
                               value="{{old('caption_bn')}}">
                        <span id="name_err" style="color: red;">
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
        return flag;
    }
</script>