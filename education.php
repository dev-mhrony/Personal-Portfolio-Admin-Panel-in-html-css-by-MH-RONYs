<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>

    <?php
	include "header_link_file.php";
    include "./config/server_connect.php";
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
                        <li>Education Information</li>
                    </ul>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class=" content">



                    <!-- ================================ Pop UP Windo================ -->
                    <div id="modal_form_horizontal" class="modal fade">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h5 class="modal-title">Portfolio Add</h5>
                                </div>

                                <form action="#" class="form-horizontal">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Education Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your education name"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Short Bio</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your project short discription "
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Start Year</label>
                                            <div class="col-sm-9">
                                                <input type="number" placeholder="Type your start year"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">End Year</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Clint Name" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary"> Update Info</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- ================================ Pop UP Windo Close================ -->


                    <!-- Dashboard content -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- ===Quick stats boxes=== -->
                            <div class="row">


                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Welcome to <b>Education </b> Update Section</h5>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="reload"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        Here you can update <code> Exparience Name </code> , <code> Short Bio </code>
                                        and <code> Year </code>. You can also add your educational qualifications
                                        through <code> Add Education Degree </code> here.

                                        <div class="text-right">
                                            <a href="education_add_info.php"><button type="button"
                                                    class="btn btn-primary">Add
                                                    Education Degree</button></a>
                                        </div>

                                    </div>



                                    <table class="table datatable-basic table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Education Name </th>
                                                <th>Short Bio</th>
                                                <th>Start Year</th>
                                                <th>End Year</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            $selectQry = "SELECT * FROM education";
                                            $education_list = mysqli_query($db_config, $selectQry);
                                            foreach($education_list as $key => $education){
                                                
                                            
                                            ?>

                                            <?php 
                                            $status = $education['status'];
                                            if($status == 1){
                                                $status = "Active";
                                            }else{
                                                $status = "Deactive";
                                            }
                                            ?>


                                            <tr>
                                                <td><?php echo ++$key ?></td>
                                                <td><?php echo $education['education_name'] ?></td>
                                                <td><?php echo $education['short_bio'] ?></td>
                                                <td><?php echo $education['start_year'] ?></td>
                                                <td><?php echo $education['end_year'] ?></td>
                                                <td><span class="label label-success"><?php echo $status ?></span></td>
                                                <td class="text-center">
                                                    <ul class="icons-list">
                                                        <li><a href="#"><i class=" icon-pencil7" data-toggle="modal"
                                                                    data-target="#modal_form_horizontal"
                                                                    data-target="#modal_form_horizontal"></i></a>
                                                        <li><a href="#"><i class="icon-trash"></i></a></li>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <?php } ?>
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