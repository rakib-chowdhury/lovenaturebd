@extends('vantage.layout.main')
@section('page_title','Gallery')
@section('page_header','Gallery')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li class="active">Gallery</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            <div>
                <!-- Modal -->
                <a href="{{url('gallery/add')}}" style="cursor: pointer;"
                   class="btn btn-success btn-rounded">Add Gallery Picture</a>
                <hr>
            </div>
            <div class="table-responsive">
                <table id="myTable" class="table table-striped color-bordered-table success-bordered-table">
                    <thead>
                    <tr>
                        <th style="text-align: center; width: 4%;">#</th>
                        <th style="text-align: center; ">Image</th>
                        <th style="text-align: center; ">Country Name</th>
                        <th style="text-align: center; ">Caption</th>
                        <th style="text-align: center; ">ক্যাপশন(বাংলায়)</th>
                        <th style="text-align: center; width: 8%;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($gallery_pic as $key => $u) { ?>
                    <tr>
                        <td style="text-align: center; "><?= $key + 1 ?></td>
                        <td style="text-align: center;">
                            @if($u->image==null || $u->image=='')
                                <img src="{{url('public/images/no_img.png')}}" alt="">
                            @else
                                <img style=" width: 120px; height:80px;"
                                     src="{{url('public/images/gallery/'.$u->image)}}" alt="{{$u->image}}">
                        @endif
                        <td style="text-align: center;"><?= $u->hasCountry->country_name ?></td>
                        <td style="text-align: center;"><?= $u->caption ?></td>
                        <td style="text-align: center;"><?= $u->caption_bn ?></td>
                        <td style="text-align: center; ">
                            <a style="cursor: pointer;"  data-toggle="modal" data-target="#editPic_{{$u->id}}">
                                <span data-toggle="tooltip" data-placement="top" title="Replace"
                                      class="glyphicon glyphicon-edit"></span>
                            </a>&nbsp;
                            <!-- Modal -->
                            <div id="editPic_{{$u->id}}" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <form onsubmit="return chkIMG2()" enctype="multipart/form-data"
                                          action="{{url('gallery/edit_post')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" style="text-align: center">Replace Gallery Picture</h4>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="{{$u->id}}">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label for="image" class="control-label">Image</label>
                                                        <input type="hidden" name="isImg" id="isImg" value="0">
                                                        <input required type="file"
                                                               class="dropify" name="image" id="image1"
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
                                                <button type="submit" class="btn btn-success btn-rounded">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <a href="{{url('gallery/delete')}}/{{$u->id}}">
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection
<script>
    function chkIMG() {
        $('#image').attr('required','true');
        // $('#image').removeAttr('data-default-file');
        document.getElementById('isImg').value=1;
    }
</script>

