@extends('vantage.layout.main')
@section('page_title','Video')
@section('page_header','Video')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li class="active">Video</li>
    </ol>
@endsection

@section('page_content')
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-12 display-table-cell" id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-hover table-responsive">
                            <h2 style="text-align: center">Videos</h2>
                            <p style="text-align: center; color: green;"></p>
                            <br>
                            <a href="{{url('video/add')}}">
                                <button class="btn btn-success">Add Video</button>
                            </a>

                            <hr>
                            <table id="emp-list" class="table table-striped table-bordered "
                                   cellspacing="0">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">#</th>
                                    <th style="text-align: center;">Name</th>
                                    <th style="text-align: center;">Video</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($video as $key=>$u) { ?>
                                <tr>
                                    <td style="text-align: center;">{{$key+1}}</td>
                                    <td style="text-align: center;">{{$u->name}}</td>
                                    <td style="text-align: center;">
                                        <a style="cursor: pointer;" data-toggle="modal" data-target="#myVideo_<?= $key?>">Click To Watch Video</a>
                                        <!-- Modal -->
                                        <div id="myVideo_<?= $key?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Video</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>
                                                            <?= $u->video ?>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center;">
                                        <a href="{{url('video/delete')}}/{{$u->id}}"
                                           style="cursor: pointer; color: red">
                                            <span data-toggle="tooltip" data-placement="top"
                                                  title="Delete" class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>
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

