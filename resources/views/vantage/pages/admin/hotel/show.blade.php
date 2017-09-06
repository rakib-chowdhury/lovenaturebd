@extends('vantage.layout.main')
@section('page_title','Hotels')
@section('page_header','Hotels List')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li class="active">Hotels</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            {{--@if(sizeof($package_info)<=($condition[0]->package-1))--}}
            <div>
                <a href="{{url('hotel/add')}}" class="btn btn-success btn-rounded">Add hotel</a>
                <hr>
            </div>

            <div class="table-responsive">
                <table id="myTable" class="table table-striped color-bordered-table success-bordered-table">
                    <thead>
                    <tr>
                        <th style="text-align: center; width: 4%;">#</th>
                        <th style="text-align: center; ">Country Name</th>
                        <th style="text-align: center; ">City Name</th>
                        <th style="text-align: center; ">Hotel Name</th>
                        <th style="text-align: center; width: 15%;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <?php foreach ($hotel as $key=>$u) { ?>
                        <td style="text-align: center; ">{{$key+1}}</td>
                        <td style="text-align: center;">{{$u->hasCountry->country_name}}</td>
                        <td style="text-align: center;">{{$u->city_name}}</td>
                        <td style="text-align: center;">{{$u->hotel_name}}</td>
                        <!-- Modal -->
                        <td style="text-align: center; ">
                            <a style="cursor: pointer;" data-toggle="modal" data-target="#myModal_<?=$u['id']?>">
							    <span style="color:green" data-toggle="tooltip" data-placement="top" title="View"
                                      class="glyphicon glyphicon-eye-open">
								</span>
                            </a>
                            <a href="{{url('hotel/edit')}}/{{$u->id}}">
                                <span data-toggle="tooltip" data-placement="top" title="Edit"
                                      class="glyphicon glyphicon-edit"></span>
                            </a>&nbsp;
                            <a href="{{url('hotel/delete')}}/{{$u->id}}">
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                            </a>
                            <div id="myModal_<?=$u['id']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Hotel Details</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <td colspan="2">
                                                        <img style="width:100px; height:80px;"
                                                             src="<?php echo e(url('public/images/hotel/'.$u->image)); ?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Country Name</td>
                                                    <td style="padding:5px;">{{$u->hasCountry->country_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">City Name</td>
                                                    <td style="padding:5px;">{{$u->city_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">শহরের নাম</td>
                                                    <td style="padding:5px;">{{$u->hasHotel->city_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Hotel Name</td>
                                                    <td style="padding:5px;">{{$u->hotel_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">হোটেলের নাম</td>
                                                    <td style="padding:5px;">{{$u->hasHotel->hotel_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Hotel Category</td>
                                                    <td style="padding:5px;">{{$u->hotel_category}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">হোটেলের ক্যাটাগরি</td>
                                                    <td style="padding:5px;">{{$u->hasHotel->hotel_category}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Room Category</td>
                                                    <td style="padding:5px;">{{$u->room_category}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">রুম ক্যাটাগরি</td>
                                                    <td style="padding:5px;">{{$u->hasHotel->room_category}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Room Facility</td>
                                                    <td style="padding:5px;">{{$u->room_facility}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">রুমের সুবিধা</td>
                                                    <td style="padding:5px;">{{$u->hasHotel->room_facility}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Room Price</td>
                                                    <td style="padding:5px;"><?= $u->room_price ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
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
        $('#image').attr('required', 'true');
        document.getElementById('isImg').value = 1;
    }
</script>
