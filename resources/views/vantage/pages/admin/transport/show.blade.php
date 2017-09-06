@extends('vantage.layout.main')
@section('page_title','Transports')
@section('page_header','Transports List')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li class="active">Transports</li>
    </ol>
@endsection

@section('page_content')
    <div class="col-sm-12">
        <div class="white-box">
            {{--@if(sizeof($package_info)<=($condition[0]->package-1))--}}
            <div>
                <a href="{{url('transport/add')}}" class="btn btn-success btn-rounded">Add Transport</a>
                <hr>
            </div>

            <div class="table-responsive">
                <table id="myTable1" class="table table-striped color-bordered-table success-bordered-table">
                    <thead>
                    <tr>
                        <th style="text-align: center; width: 4%;">#</th>
                        <th style="text-align: center; ">Country Name</th>
                        <th style="text-align: center; ">Start</th>
                        <th style="text-align: center; ">Destination</th>
                        <th style="text-align: center; ">Transport Name</th>
                        <th style="text-align: center; width: 15%;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <?php foreach ($transport as $key=>$u) { ?>
                        <td style="text-align: center; ">{{$key+1}}</td>
                        <td style="text-align: center;">{{$u->hasCountry->country_name}}</td>
                        <td style="text-align: center;">{{$u->start}}</td>
                        <td style="text-align: center;">{{$u->destination}}</td>
                        <td style="text-align: center;">{{$u->transport_name}}</td>
                        <!-- Modal -->
                        <td style="text-align: center; ">
                            <a style="cursor: pointer;" data-toggle="modal" data-target="#myModal_<?=$u['id']?>">
							    <span style="color:green" data-toggle="tooltip" data-placement="top" title="View"
                                      class="glyphicon glyphicon-eye-open">
								</span>
                            </a>
                            <a href="{{url('transport/edit')}}/{{$u->id}}">
                                <span data-toggle="tooltip" data-placement="top" title="Edit"
                                      class="glyphicon glyphicon-edit"></span>
                            </a>&nbsp;
                            <a href="{{url('transport/delete')}}/{{$u->id}}">
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                            </a>
                            <div id="myModal_<?=$u['id']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Transport Details</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <td style="padding:5px;">Country Name</td>
                                                    <td style="padding:5px;">{{$u->hasCountry->country_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Transport Cost</td>
                                                    <td style="padding:5px;">{{$u->vehicle_cost}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Transport Name</td>
                                                    <td style="padding:5px;">{{$u->transport_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">যানবাহনের নাম</td>
                                                    <td style="padding:5px;">{{$u->transport_name_bn}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Start</td>
                                                    <td style="padding:5px;">{{$u->start}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">শুরু</td>
                                                    <td style="padding:5px;">{{$u->start_bn}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Destination</td>
                                                    <td style="padding:5px;">{{$u->destination}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">গন্তব্য</td>
                                                    <td style="padding:5px;">{{$u->destination_bn}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Transport Category</td>
                                                    <td style="padding:5px;">{{$u->transport_category}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">যানবাহনের বিভাগ(বাংলায়)</td>
                                                    <td style="padding:5px;">{{$u->transport_category_bn}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Transport Facility</td>
                                                    <td style="padding:5px;">{{$u->transport_category}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">যানবাহনের সুবিধা(বাংলায়)</td>
                                                    <td style="padding:5px;"><?= $u->transport_category_bn ?></td>
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
