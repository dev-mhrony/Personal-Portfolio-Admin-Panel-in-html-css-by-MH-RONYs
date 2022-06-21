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
                        <li><a href="index.php"><i class="icon-home2 position-left"></i> Deshbord</a></li>
                        <li>Skill</li>
                    </ul>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class=" content">


                    <!-- Dashboard content -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Quick stats boxes -->
                            <div class="row">


                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Welcome to <b>Skill </b> Section</h5>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        Here you can update <code> Exparience Name </code> , <code> Short Bio </code>
                                        and <code> Year </code>. You can also add your educational qualifications
                                        through <code> Add Education Degree </code> here.

                                        <div class="text-right">
                                            <a href="add_service.php"><button type="button" class="btn btn-primary">Add
                                                    Skill </button></a>
                                        </div>

                                    </div>



                                    <table class="table datatable-basic table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Skill Name </th>
                                                <th>Percentage</th>
                                                <th>Exparience</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>PHP</td>
                                                <td>90%</td>
                                                <td>2022 - Runing</td>
                                                <td><span class="label label-success">Active</span></td>
                                                <td class="text-center">
                                                    <ul class="icons-list">
                                                        <li><a href="#"><i class=" icon-pencil7"></i></a>
                                                        <li><a href="#"><i class="icon-trash"></i></a></li>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>


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