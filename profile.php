<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Classroom Management System</title>

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

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('./pages/includes/sidebar.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  <?php
                    $student_id = $_GET['id'];

                    $student_query = "SELECT * FROM students WHERE student_id = $student_id";

                    $results = mysqli_query($connection, $student_query);

                    foreach($results as $row){
                      echo "<h1 class=\"page-header\">".$row['first_name']." ".$row['last_name']."</h1>";
                    }

                  ?>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
              <!-- main content area -->

              <div class="col-lg-3">

                <img src='http://via.placeholder.com/200x200' height="200px" width="200px" />
              </div>

              <div class="col-lg-9">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Age</th>
                                    <th>Parent Email</th>
                                    <th>Parent Phone</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>

                              <!-- PHP code to pull student information from the DB based on "id" parameter in URL -->
                              <?php

                                  $student_id = $_GET['id'];

                                  $student_query = "SELECT * FROM students WHERE student_id = $student_id";

                                  $results = mysqli_query($connection, $student_query);

                                  foreach($results as $row){

                                    echo "
                                          <tr>
                                            <td>".$row['age']."</td>
                                            <td>".$row['parent_email']."</td>
                                            <td>".$row['parent_phone']."</td>
                                            <td>".$row['student_notes']."</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      ";
                                  }
                            ?>

                          <br /><br />

                        <b>Recent Behavioral Incidents:</b>
                          <div class="panel-body">
                              <div class="table-responsive">
                                  <table class="table table-striped">
                                      <thead>
                                          <tr>
                                              <th>Date</th>
                                              <th>Time</th>
                                              <th>Incident Description</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>9/16/2017</td>
                                          <td>9:30 AM</td>
                                          <td>Did not want to share fruit snacks</td>
                                        </tr>
                                      </tbody>
                                    </table>

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
