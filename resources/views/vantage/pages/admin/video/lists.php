<?php $bn_digits = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'); ?>
<div class="container-fluid display-table">
    <div class="row display-table-row">
        <?php $this->load->view('layouts/sidebar-nav'); ?>
        <div class="col-md-10 display-table-cell" id="main-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-hover table-responsive">
                        <h2 style="text-align: center"><?= $page_title ?></h2>
                        <?php
                        if($this->session->flashdata('message')){ ?>
                            <p style="text-align: center; color: green;"><?= $this->session->flashdata('message')?></p>
                        <?php }
                        ?>
                        <br>
                        <a href="<?= site_url('admin/new_achievement') ?>">
                            <button class="btn btn-success">সাফল্য সংযোজন</button>
                        </a>

                        <hr>
                        <table id="emp-list" class="table table-striped table-bordered "
                               cellspacing="0">
                            <thead>
                            <tr>
                                <th style="text-align: center;">ক্রমিক</th>
                                <th style="text-align: center;">কোর্সের নাম</th>
                                <th style="text-align: center;">ভিডিও</th>
                                <th style="text-align: center;">অ্যাকশন</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($page_data as $i => $row) { ?>
                                <tr>
                                    <td style="text-align: center;">
                                        <?= str_replace(range(0, 9), $bn_digits, ($i + 1));
                                        ?>
                                    </td>
                                    <td style="text-align: center;"><?= $row['c_name'] ?></td>
                                    <td style="text-align: center;">
                                        <a style="cursor: pointer;" data-toggle="modal" data-target="#myVideo_<?= $i?>">ভিডিও দেখতে ক্লিক করুন</a>
                                        <!-- Modal -->
                                        <div id="myVideo_<?= $i?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">ভিডিও</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>
                                                            <?= $row['vdo']?>
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
                                        <a href="<?= site_url('admin/delete_achievement') . '/' . $row['id'] ?>"
                                           style="cursor: pointer; color: red">
                                            <span data-toggle="tooltip" data-placement="top"
                                                  title="বাতিল" class="glyphicon glyphicon-trash"></span>
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
            <div class="row">
                <footer id="admin-footer">
                    <p class="text-center">Copyright &copy; 2016. All right resereved</p>
                </footer>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('layouts/footer'); ?>

<script>
    $(document).ready(function () {
        /////////tooltip starts///////
        $('[data-toggle="tooltip"]').tooltip();
        //////////tooltip ends//////////
        $('#emp-list').DataTable({
            "bSort": false
        });

    });

</script>
