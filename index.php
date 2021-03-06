<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Page Title -->
    <?php include './pages/includes/title.php'; ?>

    <!-- Bootstrap Core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="./vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php include './php/connection.php'; ?>

</head>

<body>

  <?php include './php/connection.php'; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('./pages/includes/sidebar.php'); ?>
        <!-- /Navitation -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Mr. McGibbon's Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">

                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">

                                      <?php
                                        $student_query = "SELECT * FROM students";
                                        $results = mysqli_query($connection, $student_query);
                                      ?>

                                      <?php if($results -> num_rows > 0){
                                              echo $results -> num_rows;
                                            }
                                            else{
                                              echo 0;
                                            }
                                      ?>

                                    </div>
                                    <div>Students</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Class Roster</span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">

                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">

                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">

                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">

              <!-- main content area -->
                <div class="col-lg-12">

                  <div class="panel panel-default">
                                          <div class="panel-heading">
                                              Class Roster
                                          </div>
                                          <!-- /.panel-heading -->
                                          <div class="panel-body">
                                              <div class="table-responsive">
                                                  <table class="table table-striped">
                                                      <thead>
                                                          <tr>
                                                              <th>First Name</th>
                                                              <th>Last Name</th>
                                                              <th>Parent Email</th>
                                                              <th>Parent Phone</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>

                                                        <?php

                                                        include './php/connection.php';

                                                        $student_query = "SELECT * FROM students";
                                                        $results = mysqli_query($connection, $student_query);

                                                        if($results -> num_rows > 0){

                                                            foreach($results as $row){

                                                              echo(
                                                                    "<tr>
                                                                        <td><a href=\"./profile.php?id=".$row['student_id']."\">".$row['first_name']."</a></td>
                                                                        <td><a href=\"./profile.php?id=".$row['student_id']."\">".$row['last_name']."</a></td>
                                                                        <td>".$row['parent_email']."</td>
                                                                        <td>".$row['parent_phone']."</td>
                                                                    </tr>"
                                                                  );
                                                              }
                                                          }
                                                          else{
                                                              echo "<tr>
                                                                      <td>No Students</td>
                                                                    </tr>";
                                                          }


                                                          ?>

                                                      </tbody>
                                                  </table>
                                              </div>
                                              <!-- /.table-responsive -->
                                          </div>
                                          <!-- /.panel-body -->
                                      </div>

                </div>
                <!-- /main content area -->
                <!-- /.col-lg-8 -->

                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="./vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morrisjs/morris.min.js"></script>
    <script src="./data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./dist/js/sb-admin-2.js"></script>

</body>

</html>

<?php ?>
