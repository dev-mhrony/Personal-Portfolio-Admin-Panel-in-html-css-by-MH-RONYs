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
                        <li>Portfolio</li>
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
                                        <h5 class="panel-title">Welcome to <b>Project </b> Upload Section</h5>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"></a></li>
                                            </ul>
                                        </div>
                                    </div>



                                    <!--==============================================================  -->
                                    <!-- Horizontal form modal -->
                                    <div id="modal_form_horizontal" class="modal fade">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h5 class="modal-title">Portfolio Add</h5>
                                                </div>

                                                <form action="#" class="form-horizontal">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3">Project Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" placeholder="Type your project name"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3">Last name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" placeholder="Kopyov"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3">Email</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" placeholder="eugene@kopyov.com"
                                                                    class="form-control">
                                                                <span class="help-block">name@domain.com</span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3">Phone #</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" placeholder="+99-99-9999-9999"
                                                                    data-mask="+99-99-9999-9999" class="form-control">
                                                                <span class="help-block">+99-99-9999-9999</span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3">Address line 1</label>
                                                            <div class="col-sm-9">
                                                                <input type="text"
                                                                    placeholder="Ring street 12, building D, flat #67"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3">City</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" placeholder="Munich"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3">State/Province</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" placeholder="Bayern"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3">ZIP code</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" placeholder="1031"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit
                                                            form</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /horizontal form modal -->







                                    <div class="panel-body">
                                        Here you can update <code> Project Name </code> , <code> Project Bio </code> and
                                        <code> Catagory </code> & <code>ect. </code> You can also add your code> Add
                                        Project </code> here.

                                        <div class="text-right">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal_form_horizontal"
                                                data-target="#modal_form_horizontal">Add
                                                Project </button>
                                        </div>

                                    </div>







                                    <table class="table datatable-basic table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Project Name </th>
                                                <th>Project Bio</th>
                                                <th>Catagory</th>
                                                <th>Clint Name</th>
                                                <th>Project Language</th>
                                                <th>Project Preview Link</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Admin Panel</td>
                                                <td>Web Developer project file</td>
                                                <td>Web Development </td>
                                                <td>Korim </td>
                                                <td>HTML, CSS, Javascript</td>
                                                <td>preview.com</td>
                                                <td><img src="" alt="not found"> img.jpg </td>
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