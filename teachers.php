<?php
  include_once("connection.php");
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="team a">
    <meta name="description" content="information about shool">
    <meta name="keywords" content="student school teacher primary preparatory secondary lessons arabic maths english physics chemistry biology history geography relegion">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEACHERS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-3.2.1.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
    <script src="js/main.js" defer></script>
    <!-- <script src="js/getData.js" defer></script> -->
</head>
<body>
    <!-- =============navbar=============== -->
    <nav class="navbar navbar-expand-lg fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="img/logo.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item active"><a class="nav-link" href="/">Teachers</a></li>
                    <li class="nav-item"><a class="nav-link" href="students.php">Students</a></li>
                    <li class="nav-item"><a class="nav-link" href="lessons.php">Lessons</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    <span class="column"></span>
                    <li class="nav-item"><a class="nav-link" href="sign.php">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ===================teachers-info============= -->

    <section class="teachers container">
        <h1 class="text-center">teachers classified by stage</h1>
        <ul class="headings">
            <li class="active-tab" id="primary">primary</li>
            <li id="prep">preparatory</li>
            <li id="secondary">secondary</li>
        </ul>
        <div class="info" id="primary-teachers">
            <h2 class="text-center">primary</h2>
            <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="primary-arabic-header">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#primay-arabic" aria-expanded="true" aria-controls="primay-arabic">
                        ARABIC
                      </button>
                    </h2>
                  </div>
              
                  <div id="primay-arabic" class="collapse show" aria-labelledby="primary-arabic-header" data-parent="#accordionExample">
                    <div class="card-body">
                      <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving primary arabic teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 1 and subject_id =1';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo '<td> <button class="btn btn-warning">update</button></td>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="primary-english-header">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#primary-english" aria-expanded="false" aria-controls="primary-english">
                        ENGLISH
                      </button>
                    </h2>
                  </div>
                  <div id="primary-english" class="collapse" aria-labelledby="primary-english-header" data-parent="#accordionExample">
                    <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving primary english teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 1 and subject_id =2';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="primary-maths-header">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#primary-maths" aria-expanded="false" aria-controls="primary-maths">
                        MATHS
                      </button>
                    </h2>
                  </div>
                  <div id="primary-maths" class="collapse" aria-labelledby="primary-maths-header" data-parent="#accordionExample">
                    <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving primary maths teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 1 and subject_id =5';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                    <div class="card-header" id="primary-science-header">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#primary-science" aria-expanded="false" aria-controls="primary-science">
                          SCIENCE
                        </button>
                      </h2>
                    </div>
                    <div id="primary-science" class="collapse" aria-labelledby="primary-science-header" data-parent="#accordionExample">
                      <div class="card-body">
                      <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving primary science teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 1 and subject_id =3';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        <div class="info" id="prep-teachers">
            <h2 class="text-center">prep</h2>
            <div class="accordion" id="accordionExamplePrep">
                <div class="card">
                  <div class="card-header" id="prep-arabic-header">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#prep-arabic" aria-expanded="true" aria-controls="prep-arabic">
                        ARABIC
                      </button>
                    </h2>
                  </div>
              
                  <div id="prep-arabic" class="collapse show" aria-labelledby="prep-arabic-header" data-parent="#accordionExamplePrep">
                    <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving prep arabic teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 2 and subject_id =1';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="prep-english-header">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#prep-english" aria-expanded="false" aria-controls="prep-english">
                        ENGLISH
                      </button>
                    </h2>
                  </div>
                  <div id="prep-english" class="collapse" aria-labelledby="prep-english-header" data-parent="#accordionExamplePrep">
                    <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving prep english teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 2 and subject_id =2';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                    <div class="card-header" id="secondary-maths-header">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#secondary-maths" aria-expanded="false" aria-controls="secondary-maths">
                          MATHS
                        </button>
                      </h2>
                    </div>
                    <div id="secondary-maths" class="collapse" aria-labelledby="secondary-maths-header" data-parent="#accordionExampleSecondary">
                      <div class="card-body">
                      <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving secondary physics teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 2 and subject_id =5';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                <div class="card">
                  <div class="card-header" id="prep-history-header">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#prep-history" aria-expanded="false" aria-controls="prep-history">
                        HISTORY
                      </button>
                    </h2>
                  </div>
                  <div id="prep-history" class="collapse" aria-labelledby="prep-history-header" data-parent="#accordionExamplePrep">
                    <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving prep history teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 2 and subject_id =6';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                    <div class="card-header" id="prep-geography-header">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#prep-geography" aria-expanded="false" aria-controls="prep-geography">
                          GEOGRAPHY
                        </button>
                      </h2>
                    </div>
                    <div id="prep-geography" class="collapse" aria-labelledby="prep-geography-header" data-parent="#accordionExamplePrep">
                      <div class="card-body">
                      <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving prep geography teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 2 and subject_id =7';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="prep-science-header">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#prep-science" aria-expanded="false" aria-controls="prep-science">
                          SCIENCE
                        </button>
                      </h2>
                    </div>
                    <div id="prep-science" class="collapse" aria-labelledby="prep-science-header" data-parent="#accordionExamplePrep">
                      <div class="card-body">
                      <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving prep science teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 2 and subject_id =3';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="card">
                    <div class="card-header" id="prep-physics-header">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#prep-physics" aria-expanded="false" aria-controls="prep-physics">
                          PHYSICS
                        </button>
                      </h2>
                    </div>
                    <div id="prep-physics" class="collapse" aria-labelledby="prep-physics-header" data-parent="#accordionExamplePrep">
                      <div class="card-body">
                       <ul class="list-group"></ul>
                      </div>
                    </div>
                  </div> -->
              </div>
        </div>
        <div class="info" id="secondary-teachers">
            <h2 class="text-center">secondary</h2>
            <div class="accordion" id="accordionExampleSecondary">
                <div class="card">
                  <div class="card-header" id="secondary-arabic-header">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#secondary-arabic" aria-expanded="true" aria-controls="secondary-arabic">
                        ARABIC
                      </button>
                    </h2>
                  </div>
              
                  <div id="secondary-arabic" class="collapse show" aria-labelledby="secondary-arabic-header" data-parent="#accordionExampleSecondary">
                    <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving secondary arabic teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 3 and subject_id =1';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="secondary-english-header">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#secondary-english" aria-expanded="false" aria-controls="secondary-english">
                        ENGLISH
                      </button>
                    </h2>
                  </div>
                  <div id="secondary-english" class="collapse" aria-labelledby="secondary-english-header" data-parent="#accordionExampleSecondary">
                    <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving secondary english teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 3 and subject_id =2';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                    <div class="card-header" id="secondary-maths-header">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#secondary-maths" aria-expanded="false" aria-controls="secondary-maths">
                          MATHS
                        </button>
                      </h2>
                    </div>
                    <div id="secondary-maths" class="collapse" aria-labelledby="secondary-maths-header" data-parent="#accordionExampleSecondary">
                      <div class="card-body">
                      <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving secondary maths teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 3 and subject_id =5';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                <div class="card">
                  <div class="card-header" id="secondary-history-header">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#secondary-history" aria-expanded="false" aria-controls="secondary-history">
                        HISTORY
                      </button>
                    </h2>
                  </div>
                  <div id="secondary-history" class="collapse" aria-labelledby="secondary-history-header" data-parent="#accordionExampleSecondary">
                    <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving secondary history teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 3 and subject_id =6';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                    <div class="card-header" id="secondary-geography-header">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#secondary-geography" aria-expanded="false" aria-controls="secondary-geography">
                          GEOGRAPHY
                        </button>
                      </h2>
                    </div>
                    <div id="secondary-geography" class="collapse" aria-labelledby="secondary-geography-header" data-parent="#accordionExampleSecondary">
                      <div class="card-body">
                      <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving secondary geography teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 3 and subject_id =7';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="secondary-chemistry-header">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#secondary-chemistry" aria-expanded="false" aria-controls="secondary-chemistry">
                          CHEMISTRY
                        </button>
                      </h2>
                    </div>
                    <div id="secondary-chemistry" class="collapse" aria-labelledby="secondary-chemistry-header" data-parent="#accordionExampleSecondary">
                      <div class="card-body">
                      <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving secondary chemistry teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 3 and subject_id =8';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="secondary-physics-header">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#secondary-physics" aria-expanded="false" aria-controls="secondary-physics">
                          PHYSICS
                        </button>
                      </h2>
                    </div>
                    <div id="secondary-physics" class="collapse" aria-labelledby="secondary-physics-header" data-parent="#accordionExampleSecondary">
                      <div class="card-body">
                      <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving secondary physics teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 3 and subject_id =9';
                            $result_pr = $mysqli->query($query_pr);
                            

                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="secondary-biology-header">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#secondary-biology" aria-expanded="false" aria-controls="secondary-biology">
                          BIOLOGY
                        </button>
                      </h2>
                    </div>
                    <div id="secondary-biology" class="collapse" aria-labelledby="secondary-biology-header" data-parent="#accordionExampleSecondary">
                      <div class="card-body">
                      <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>University</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- retrieving secondary biology teachers -->
                          <?php
                            $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email ,university ,college FROM user , teachers WHERE user.id = teachers.user_id and stage_id = 3 and subject_id =10';
                            $result_pr = $mysqli->query($query_pr);
                            if(!$result_pr){
                              die("error occured ". mysqli_error($mysqli));
                            }
                            // echo $result_pr->num_rows;
                            while($row = $result_pr->fetch_row()){
                              echo '<tr>';
                              echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                              echo '<td>'. $row[3].'</td>';
                              echo '<td>'. $row[4].'</td>';
                              echo '<td>'. $row[5].'</td>';
                              echo '<td>'. $row[6].'</td>';
                              echo '</tr>';
                            }
                          ?>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
    </section>
    <div class="popup-parent">
      <div class="popup">
        <form method="POST">
          <div class="container">
            <input class="form-control" type="text" name="first-name"id="first-name" placeholder="first name">
            <input class="form-control" type="text" name="middle-name" id="middle-name" placeholder="middle name">
            <input class="form-control" type="text" name="last-name" id="last-name" placeholder="last name">
            <input class="form-control" type="email" name="email" id="email" placeholder="email">
            <input class="form-control" type="text" name="phone" id="phone" placeholder="phone">
            <input class="form-control" type="password" name="password" id="password" placeholder="password">
            <input class="form-control" type="password" name="re-password" id="re-password" placeholder="password confirm">
            <input class="btn" type="submit" value="SIGN UP">
          </div>
        </form> 
      </div>
    </div>

    <footer>
        <p class="lead text-center">&copy;All Copyrights reserved to <span>team a</span> - Yat Education Center</p>
    </footer>
</body>
</html>