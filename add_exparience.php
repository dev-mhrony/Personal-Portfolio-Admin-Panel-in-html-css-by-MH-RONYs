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

                                    <h5 class="modal-title">Add Exparience</h5>
                                </div>

                                <form action="#" class="form-horizontal">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="companyName">Company Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your last company name"
                                                    class="form-control" id="companyName">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="shortBio">Short Bio</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your project short discription "
                                                    class="form-control" id="shortBio">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="start_date">Start Job
                                                Date</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type join year" class="form-control"
                                                    id="start_date">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="end_date">End Job Date</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your end job year"
                                                    class="form-control" id="end_date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <a href="education.php"><button type="button" class="btn btn-link"
                                                data-dismiss="modal">Back to Education list
                                            </button></a>
                                        <button type="submit" class="btn btn-primary">Add Exparience</button>
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