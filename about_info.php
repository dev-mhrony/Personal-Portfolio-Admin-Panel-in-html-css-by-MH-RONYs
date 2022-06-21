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
                        <li>About Information</li>
                    </ul>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">
                    <!-- Left fixed column -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Welcome to About Info Section </h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            Here you will be able to update and remove all the information <code> required</code>
                            for all kinds of
                            livelihoods.
                        </div>

                        <table class="table datatable1-fixed-both" width="110%">
                            <thead>
                                <tr>
                                    <th width="3%">SN</th>
                                    <th width="10%">First name</th>
                                    <th width="10%">Last name</th>
                                    <th width="5%">Age</th>
                                    <th width="10%">Nationality</th>
                                    <th width="10%">Freelance</th>
                                    <th width="15%">Address</th>
                                    <th width="10%">Phone</th>
                                    <th width="15%">E-mail</th>
                                    <th width="20%">Langages</th>
                                    <th width="10%">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>01</th>
                                    <td>MH</td>
                                    <td>RONY</td>
                                    <td>21</td>
                                    <td>Bangladesh</td>
                                    <td>Avable</td>
                                    <td>Sonatola, Bogura , BD</td>
                                    <td>+880 1608445456</td>
                                    <td>designer.mhrony@gmail.com</td>
                                    <td>Bangla , English</td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li><a href="#"><i class=" icon-pencil7"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /left fixed column -->

                </div>
                <!-- /left fixed column -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>

</html>