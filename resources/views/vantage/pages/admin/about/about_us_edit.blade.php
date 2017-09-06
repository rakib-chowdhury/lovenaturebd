@extends('vantage.layout.main')
@section('page_title','Edit About Us')
@section('page_header','Edit About Us')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>        
        <li class="active">About Us</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkAboutUs()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="{{url('about_us/edit_post')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$about_us_info[0]->id}}">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="control-label col-md-3">Image</label>
                        <input type="hidden" name="isImg" id="isImg" value="0">
                        <input type="file" onclick="chkIMG()" data-show-remove="false"
                               class="dropify" name="image" id="image"
                               data-default-file="{{url('public/images/about/'.$about_us_info[0]->image)}}">
                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                        <span id="image_err" style="color: red;"><br>
                            @if($errors->has('image')){{'Image should be less than 1mb and image should be in jpg,png format.'}}@endif
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="caption" class="control-label">Caption</label>
                    <textarea onkeyup="countLetter()" name="caption" id="caption" rows="4" required
                              class="form-control">{{$about_us_info[0]->caption}}</textarea>
                    <span style="color: peru">Short Note Should be less than 18 letters.
                        <span id="counter_div" style="color: black" class="pull-right">(0/18 letters)</span>
                    </span><br>
                    <span id="shortNote_err" style="color: red; ">
                        @if($errors->has('caption')){{'Required'}}@endif
                    </span>
                </div>
                <div class="form-group">
                    <label for="caption_bn" class="control-label">ক্যাপশন</label>
                    <textarea onkeyup="countLetter()" name="caption_bn" id="caption_bn" rows="4" required
                              class="form-control">{{$about_us_info[0]->caption_bn}}</textarea>
                    <span style="color: peru">Short Note Should be less than 270 letters.
                        <span id="counter_div" style="color: black" class="pull-right">(0/270 letters)</span>
                    </span><br>
                    <span id="shortNote_err" style="color: red; ">
                        @if($errors->has('caption')){{'Required'}}@endif
                    </span>
                </div>

                <div class="form-group">
                    <label for="details" class="control-label">Details</label>
                    <textarea class="summernote" name="details"
                              id="details">{{$about_us_info[0]->details}}</textarea>
                    <span id="description_err" style="color: red; ">
                        @if($errors->has('description')){{'Required'}}@endif
                    </span>
                </div>
                <div class="form-group">
                    <label for="details_bn" class="control-label">বিস্তারিত(বাংলায়)</label>
                    <textarea class="summernote" name="details_bn"
                              id="details_bn">{{$about_us_info[0]->details_bn}}</textarea>
                    <span id="description_err" style="color: red; ">
                        @if($errors->has('description')){{'Required'}}@endif
                    </span>
                </div>

                <div class="form-group" style="text-align: center">
                    <button id="submitBTN" type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('postJquery')
    countLetter();
@endsection
<script>
    function chkIMG() {
        $('#image').attr('required','true');
        // $('#image').removeAttr('data-default-file');
        document.getElementById('isImg').value=1;
    }
    function countLetter() {
        var tmp = $('#caption').val();
        tmp = tmp.replace(/\s+/g, '');
        var lngth = tmp.length;
        if (lngth <= 18) {
            var x = document.getElementById('counter_div');
            x.style.color = 'black';
            x.innerText = '(' + lngth + '/18 letters)';
            $('#submitBTN').removeAttr('disabled');
        } else {
            var x = document.getElementById('counter_div');
            x.style.color = 'red';
            x.innerText = '(' + lngth + '/18 letters)';
            $('#submitBTN').attr('disabled', 'true');
        }
    }
    function chkAboutUs() {
        var flag = true;
       
        var shrtnote = document.getElementById('caption').value;
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
        if (des == null || des == '' || des == '<p><br></p>' || des == '<p></p>') {
            document.getElementById('description_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('description_err').innerText = '';
        }

        return flag;
    }
</script>