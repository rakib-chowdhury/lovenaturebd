@extends('vantage.layout.main')
@section('page_title','Gallery')
@section('page_header','Gallery')
@section('page_breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{url('home/dashboard')}}">Dashboard</a></li>
        <li class="active">Dashboard</li>
    </ol>
@endsection

@section('page_content')
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-10 display-table-cell" id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-hover ">
                            <h2 style="text-align: center"><?= $page_title ?></h2>
                            <hr>
                            <?php if($this->session->flashdata('message')){ ?>
                            <p style="text-align: center; color: green"><?= $this->session->flashdata('message')?></p>
                            <?php }?>
                            <form onsubmit="return add_info()" class="form-horizontal" id="add_user_form"
                                  action="<?php echo site_url('admin/add_information_post'); ?>" method="post">
                                <input type="hidden" name="type" value="<?= $type?>">
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <textarea name="details" id="details" class="form-control summernote" style="min-height: 240px"><?php if(sizeof($info)!=0){ echo $info[0]['info_details'];}?></textarea>
                                        <span style="color: red;" id="details_err"></span>
                                    </div>
                                </div>

                                <div class="form-group" style="text-align: center">
                                    <?php if (sizeof($info) == 0) { ?>
                                    <button class="btn" type="submit" name="s_btn" value="add"
                                            style="background: #8bc541; color: whitesmoke;">সংযোজন করুন
                                    </button>
                                    <?php } else { ?>
                                    <button class="btn" type="submit" name="s_btn" value="up"
                                            style="background: #8bc541; color: whitesmoke;">আপডেট করুন
                                    </button>
                                    <?php } ?>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <footer id="admin-footer">
                        <p class="text-center">Copyright &copy; 2016. All right resereved</p>
                    </footer>
                </div>
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

