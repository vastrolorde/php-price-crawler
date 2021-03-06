

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Manage Link</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li class="active">Manage Link</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                    <!--    <form action="<?php echo base_url(); ?>links/add_link"><button type="submit" class="btn btn-warning waves-effect waves-light m-b-5"> <i class="fa fa-plus"></i> <span> ADD NEW</span></button></form> -->
                                    <h4> Link Table</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                              <ul class="pagination"><?php echo $links; ?></ul>
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Link ID</th>
                                                            <th>URL</th>
                                                            <th>Website ID</th>
                                                            <th>Already scrawled</th>
                                                            <th>Possible Product</th>
                                                            <th>Already Extracted</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php

                                                    foreach ($results as $h) {
                                                        echo '<tr><td>'.$h->id.'</td><td>'.$h->url.'</td><td>'.$h->host_id.'</td><td>'.boolToString($h->is_crawled).'</td><td>'.boolToString($h->maybe_product).'</td><td>'.boolToString($h->is_extracted).'</td><td><form action="'.base_url().'masterdata/agent/'.$h->id.'"><button type="submit" class="btn btn-primary waves-effect waves-light m-b-5"> <i class="fa fa-edit"></i> <span> Detail </span></button></form></td></tr>';
                                                    }

                                                    function boolToString($b) {
                                                      if ($b==1) {return "Yes";} else {return "No";}
                                                    }
                                                       ?>
                                                    </tbody>
                                                </table>
                                                <ul class="pagination"><?php echo $links; ?></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- End Row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    Page rendered in <strong>{elapsed_time}</strong> seconds | 2015 © <?php echo MY_CONSTANT; ?>.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-detectmobile/detect.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/fastclick/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

        <script src="<?php echo base_url(); ?>assets/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/datatables/dataTables.bootstrap.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

	</body>
</html>
