<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>

    <?php
	include "header_link_file.php";
	?>

</head>

<body>

    <!-- Main navbar -->


    <?php
	include "./include_section/top_navbar.php";
	?>

    <!-- /main navbar -->

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <?php
			include "./include_section/main_sidebar.php";
			?>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> Deshbord</a></li>
                        <li><a href="components_notifications_other.html">Home</a></li>
                    </ul>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">



                    <!-- Horizontal form modal -->
                    <div id="modal_form_horizontal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h5 class="modal-title">Add Portfolio</h5>
                                </div>

                                <form action="#" class="form-horizontal">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Project Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your last Project Name"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Project Bio</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your project short discription "
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Catagory</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type Catagory" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Clint Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your Clint Name"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Project Language</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your Project Language"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Project Preview Link</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your Project Preview Link"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Image</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <a href="portfoli.php"><button type="button" class="btn btn-link"
                                                data-dismiss="modal">Back to Portfolio list
                                            </button></a>
                                        <button type="submit" class="btn btn-primary">Add Portfolio</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /horizontal form modal -->


                    <!-- Dashboard content -->
                    <div class="row">




                    </div>
                    <!-- /dashboard content -->


                    <!-- Footer -->
                    <div class="footer text-muted">
                        &copy; 2022. <a href="#">Ghasful</a> by <a href="" target="_blank">MH RONY</a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>

</html>