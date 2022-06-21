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
                            When displaying a table which scrolls along the <code>x-axis</code>, it can sometimes be
                            useful to the end user for the left most column to be <code>fixed</code> in place, if it
                            shows grouping, index or similar information. This is basically the same idea as
                            <code>'freeze columns'</code> in Excel. This can be achieved with the
                            <code>FixedColumns</code> plug-in for DataTables, as shown below.
                        </div>

                        <table class="table datatable-fixed-both" width="110%">
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
                                    <td>Tiger</td>
                                    <td>Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td><span class="label label-info">$320,800</span></td>
                                    <td>5421</td>
                                    <td><a href="#">t.nixon@datatables.net</a></td>
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