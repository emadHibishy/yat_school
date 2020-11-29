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
    <title>STUDENTS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-3.2.1.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
    <script src="js/main.js" defer></script>
    <script src="js/validate.js" defer></script>
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
                    <li class="nav-item"><a class="nav-link" href="teachers.php">Teachers</a></li>
                    <li class="nav-item active"><a class="nav-link" href="/">Students</a></li>
                    <li class="nav-item"><a class="nav-link" href="lessons.php">Lessons</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    <span class="column"></span>
                    <?php

                    if(!$_SESSION){
                        echo '<li class="nav-item"><a class="nav-link" href="sign.php">Sign Up</a></li>';
                    }
                    else{
                        $query = "SELECT first_name FROM user WHERE id = " . $_SESSION['user_id'];
                        $result = $mysqli->query($query);
                        $firstName = $result->fetch_row();
                        echo    '<li class="dropdown">
                                    <img src="img/avatar.jpg" alt="">
                                    <a href="#" class="dropdown-toggle navbar-right" data-toggle="dropdown"><span>'.$firstName[0].'</span><span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>';
                    }
                    ?>
                    <!-- <li class="nav-item"><a class="nav-link" href="">Login</a></li> -->
                </ul>
            </div>
        </div>
    </nav>


    <!-- ==============students================ -->

    <section class="students container">
      <h1 class="text-center">students classified by stage</h1>
      <ul class="headings">
          <li class="active-tab" id="primary">primary</li>
          <li id="prep">preparatory</li>
          <li id="secondary">secondary</li>
      </ul>
      <div class="info" id="primary-students">
          <h2 class="text-center">primary</h2>
          <div class="accordion" id="accordionExamplePrimaryStudents">
              <div class="card">
                <div class="card-header" id="primary-first-grade-header">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#primay-first-grade" aria-expanded="true" aria-controls="primay-first-grade">
                      FIRST GRADE
                    </button>
                  </h2>
                </div>
            
                <div id="primay-first-grade" class="collapse show" aria-labelledby="primary-first-grade-header" data-parent="#accordionExamplePrimaryStudents">
                  <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                      <thead class="thead-dark">
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!-- retrieve primary first grade -->
                        <?php
                          $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email,students.user_id  FROM user,students  WHERE user.id = students.user_id and stage_id = 1 and grade_id = 1';
                          $result_pr = $mysqli->query($query_pr);
                          
                        
                          if(!$result_pr){
                            die("error occured ". mysqli_error($mysqli));
                          }
                          // echo $result_pr->num_rows;
                          while($row = $result_pr->fetch_row()){
                            echo '<tr>';
                            if($_SESSION){
                              if ($row[5] == $_SESSION['user_id']){
                                echo '<td> <button class="btn btn-warning">update</button></td>';
                              }else{
                                echo '<td></td>';
                              }
                            }else{
                              echo '<td></td>';
                            }
                            echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                            echo '<td>'. $row[3].'</td>';
                            echo '<td>'. $row[4].'</td>';
                            echo '</tr>';
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="primary-second-grade-header">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#primary-second-grade" aria-expanded="false" aria-controls="primary-second-grade">
                      SECOND GRADE
                    </button>
                  </h2>
                </div>
                <div id="primary-second-grade" class="collapse" aria-labelledby="primary-second-grade-header" data-parent="#accordionExamplePrimaryStudents">
                  <div class="card-body">
                  <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                      <thead class="thead-dark">
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!-- retrieve primary second grade -->
                        <?php
                          $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email,students.user_id  FROM user,students  WHERE user.id = students.user_id and stage_id = 1 and grade_id = 2';
                          $result_pr = $mysqli->query($query_pr);
                          
                        
                          if(!$result_pr){
                            die("error occured ". mysqli_error($mysqli));
                          }
                          // echo $result_pr->num_rows;
                          while($row = $result_pr->fetch_row()){
                            echo '<tr>';
                            if($_SESSION){
                              if ($row[5] == $_SESSION['user_id']){
                                echo '<td> <button class="btn btn-warning">update</button></td>';
                              }else{
                                echo '<td></td>';
                              }
                            }else{
                              echo '<td></td>';
                            }
                            echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                            echo '<td>'. $row[3].'</td>';
                            echo '<td>'. $row[4].'</td>';
                            echo '</tr>';
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="primary-third-grade-header">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#primary-third-grade" aria-expanded="false" aria-controls="primary-third-grade">
                      THIRD GRADE
                    </button>
                  </h2>
                </div>
                <div id="primary-third-grade" class="collapse" aria-labelledby="primary-third-grade-header" data-parent="#accordionExamplePrimaryStudents">
                  <div class="card-body">
                  <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                      <thead class="thead-dark">
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!-- retrieve primary third grade -->
                        <?php
                          $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email,students.user_id  FROM user,students  WHERE user.id = students.user_id and stage_id = 1 and grade_id = 3';
                          $result_pr = $mysqli->query($query_pr);
                          
                        
                          if(!$result_pr){
                            die("error occured ". mysqli_error($mysqli));
                          }
                          // echo $result_pr->num_rows;
                          while($row = $result_pr->fetch_row()){
                            echo '<tr>';
                            if($_SESSION){
                              if ($row[5] == $_SESSION['user_id']){
                                echo '<td> <button class="btn btn-warning">update</button></td>';
                              }else{
                                echo '<td></td>';
                              }
                            }else{
                              echo '<td></td>';
                            }
                            echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                            echo '<td>'. $row[3].'</td>';
                            echo '<td>'. $row[4].'</td>';
                            echo '</tr>';
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card">
                  <div class="card-header" id="primary-fourth-grade-header">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#primary-fourth-grade" aria-expanded="false" aria-controls="primary-fourth-grade">
                        FOURTH GRADE
                      </button>
                    </h2>
                  </div>
                  <div id="primary-fourth-grade" class="collapse" aria-labelledby="primary-fourth-grade-header" data-parent="#accordionExamplePrimaryStudents">
                    <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                      <thead class="thead-dark">
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!-- retrieve primary fourth grade -->
                        <?php
                          $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email,students.user_id  FROM user,students  WHERE user.id = students.user_id and stage_id = 1 and grade_id = 4';
                          $result_pr = $mysqli->query($query_pr);
                          
                        
                          if(!$result_pr){
                            die("error occured ". mysqli_error($mysqli));
                          }
                          // echo $result_pr->num_rows;
                          while($row = $result_pr->fetch_row()){
                            echo '<tr>';
                            if($_SESSION){
                              if ($row[5] == $_SESSION['user_id']){
                                echo '<td> <button class="btn btn-warning">update</button></td>';
                              }else{
                                echo '<td></td>';
                              }
                            }else{
                              echo '<td></td>';
                            }
                            echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                            echo '<td>'. $row[3].'</td>';
                            echo '<td>'. $row[4].'</td>';
                            echo '</tr>';
                          }
                        ?>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="primary-fifth-grade-header">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#primary-fifth-grade" aria-expanded="false" aria-controls="primary-fifth-grade">
                        FIFTH GRADE
                      </button>
                    </h2>
                  </div>
                  <div id="primary-fifth-grade" class="collapse" aria-labelledby="primary-fifth-grade-header" data-parent="#accordionExamplePrimaryStudents">
                    <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                      <thead class="thead-dark">
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!-- retrieve primary fifth grade -->
                        <?php
                          $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email,students.user_id  FROM user,students  WHERE user.id = students.user_id and stage_id = 1 and grade_id = 5';
                          $result_pr = $mysqli->query($query_pr);
                          
                        
                          if(!$result_pr){
                            die("error occured ". mysqli_error($mysqli));
                          }
                          // echo $result_pr->num_rows;
                          while($row = $result_pr->fetch_row()){
                            echo '<tr>';
                            if($_SESSION){
                              if ($row[5] == $_SESSION['user_id']){
                                echo '<td> <button class="btn btn-warning">update</button></td>';
                              }else{
                                echo '<td></td>';
                              }
                            }else{
                              echo '<td></td>';
                            }
                            echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                            echo '<td>'. $row[3].'</td>';
                            echo '<td>'. $row[4].'</td>';
                            echo '</tr>';
                          }
                        ?>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="primary-sixth-grade-header">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#primary-sixth-grade" aria-expanded="false" aria-controls="primary-sixth-grade">
                        SIXTH GRADE
                      </button>
                    </h2>
                  </div>
                  <div id="primary-sixth-grade" class="collapse" aria-labelledby="primary-sixth-grade-header" data-parent="#accordionExamplePrimaryStudents">
                    <div class="card-body">
                    <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                      <thead class="thead-dark">
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!-- retrieve primary sixth grade -->
                        <?php
                          $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email,students.user_id  FROM user,students  WHERE user.id = students.user_id and stage_id = 1 and grade_id = 6';
                          $result_pr = $mysqli->query($query_pr);
                          
                        
                          if(!$result_pr){
                            die("error occured ". mysqli_error($mysqli));
                          }
                          // echo $result_pr->num_rows;
                          while($row = $result_pr->fetch_row()){
                            echo '<tr>';
                            if($_SESSION){
                              if ($row[5] == $_SESSION['user_id']){
                                echo '<td> <button class="btn btn-warning">update</button></td>';
                              }else{
                                echo '<td></td>';
                              }
                            }else{
                              echo '<td></td>';
                            }
                            echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                            echo '<td>'. $row[3].'</td>';
                            echo '<td>'. $row[4].'</td>';
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
      <div class="info" id="prep-students">
          <h2 class="text-center">prep</h2>
          <div class="accordion" id="accordionExamplePrepStudents">
              <div class="card">
                <div class="card-header" id="prep-first-grade-header">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#prep-first-grade" aria-expanded="true" aria-controls="prep-first-grade">
                      FIRST  GRADE
                    </button>
                  </h2>
                </div>
            
                <div id="prep-first-grade" class="collapse show" aria-labelledby="prep-first-grade-header" data-parent="#accordionExamplePrepStudents">
                  <div class="card-body">
                  <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                      <thead class="thead-dark">
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!-- retrieve prep first grade -->
                        <?php
                          $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email,students.user_id  FROM user,students  WHERE user.id = students.user_id and stage_id = 2 and grade_id = 1';
                          $result_pr = $mysqli->query($query_pr);
                          
                        
                          if(!$result_pr){
                            die("error occured ". mysqli_error($mysqli));
                          }
                          // echo $result_pr->num_rows;
                          while($row = $result_pr->fetch_row()){
                            echo '<tr>';
                            if($_SESSION){
                              if ($row[5] == $_SESSION['user_id']){
                                echo '<td> <button class="btn btn-warning">update</button></td>';
                              }else{
                                echo '<td></td>';
                              }
                            }else{
                              echo '<td></td>';
                            }
                            echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                            echo '<td>'. $row[3].'</td>';
                            echo '<td>'. $row[4].'</td>';
                            echo '</tr>';
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="prep-second-grade-header">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#prep-second-grade" aria-expanded="false" aria-controls="prep-second-grade">
                      SECOND GRADE
                    </button>
                  </h2>
                </div>
                <div id="prep-second-grade" class="collapse" aria-labelledby="prep-second-grade-header" data-parent="#accordionExamplePrepStudents">
                  <div class="card-body">
                  <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                      <thead class="thead-dark">
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!-- retrieve prep second grade -->
                        <?php
                          $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email,students.user_id  FROM user,students  WHERE user.id = students.user_id and stage_id = 2 and grade_id = 2';
                          $result_pr = $mysqli->query($query_pr);
                          
                        
                          if(!$result_pr){
                            die("error occured ". mysqli_error($mysqli));
                          }
                          // echo $result_pr->num_rows;
                          while($row = $result_pr->fetch_row()){
                            echo '<tr>';
                            if($_SESSION){
                              if ($row[5] == $_SESSION['user_id']){
                                echo '<td> <button class="btn btn-warning">update</button></td>';
                              }else{
                                echo '<td></td>';
                              }
                            }else{
                              echo '<td></td>';
                            }
                            echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                            echo '<td>'. $row[3].'</td>';
                            echo '<td>'. $row[4].'</td>';
                            echo '</tr>';
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="prep-third-grade-header">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#prep-third-grade" aria-expanded="false" aria-controls="prep-third-grade">
                      THIRD GRADE
                    </button>
                  </h2>
                </div>
                <div id="prep-third-grade" class="collapse" aria-labelledby="prep-third-grade-header" data-parent="#accordionExamplePrepStudents">
                  <div class="card-body">
                  <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                      <thead class="thead-dark">
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!-- retrieve prep third grade -->
                        <?php
                          $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email,students.user_id  FROM user,students  WHERE user.id = students.user_id and stage_id = 2 and grade_id = 3';
                          $result_pr = $mysqli->query($query_pr);
                          
                        
                          if(!$result_pr){
                            die("error occured ". mysqli_error($mysqli));
                          }
                          // echo $result_pr->num_rows;
                          while($row = $result_pr->fetch_row()){
                            echo '<tr>';
                            if($_SESSION){
                              if ($row[5] == $_SESSION['user_id']){
                                echo '<td> <button class="btn btn-warning">update</button></td>';
                              }else{
                                echo '<td></td>';
                              }
                            }else{
                              echo '<td></td>';
                            }
                            echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                            echo '<td>'. $row[3].'</td>';
                            echo '<td>'. $row[4].'</td>';
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
      <div class="info" id="secondary-students">
          <h2 class="text-center">secondary</h2>
          <div class="accordion" id="accordionExampleSecondary">
              <div class="card">
                <div class="card-header" id="secondary-first-grade-header">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#secondary-first-grade" aria-expanded="true" aria-controls="secondary-first-grade">
                      FIRST GRADE
                    </button>
                  </h2>
                </div>
            
                <div id="secondary-first-grade" class="collapse show" aria-labelledby="secondary-first-grade-header" data-parent="#accordionExampleSecondary">
                  <div class="card-body">
                  <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                      <thead class="thead-dark">
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!-- retrieve secondary first grade -->
                        <?php
                          $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email,students.user_id  FROM user,students  WHERE user.id = students.user_id and stage_id = 3 and grade_id = 1';
                          $result_pr = $mysqli->query($query_pr);
                          
                        
                          if(!$result_pr){
                            die("error occured ". mysqli_error($mysqli));
                          }
                          // echo $result_pr->num_rows;
                          while($row = $result_pr->fetch_row()){
                            echo '<tr>';
                            if($_SESSION){
                              if ($row[5] == $_SESSION['user_id']){
                                echo '<td> <button class="btn btn-warning">update</button></td>';
                              }else{
                                echo '<td></td>';
                              }
                            }else{
                              echo '<td></td>';
                            }
                            echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                            echo '<td>'. $row[3].'</td>';
                            echo '<td>'. $row[4].'</td>';
                            echo '</tr>';
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="secondary-second-grade-header">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#secondary-second-grade" aria-expanded="false" aria-controls="secondary-second-grade">
                      SECOND GRADE
                    </button>
                  </h2>
                </div>
                <div id="secondary-second-grade" class="collapse" aria-labelledby="secondary-second-grade-header" data-parent="#accordionExampleSecondary">
                  <div class="card-body">
                  <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                      <thead class="thead-dark">
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!-- retrieve secondary second grade -->
                        <?php
                          $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email,students.user_id  FROM user,students  WHERE user.id = students.user_id and stage_id = 3 and grade_id = 2';
                          $result_pr = $mysqli->query($query_pr);
                          
                        
                          if(!$result_pr){
                            die("error occured ". mysqli_error($mysqli));
                          }
                          // echo $result_pr->num_rows;
                          while($row = $result_pr->fetch_row()){
                            echo '<tr>';
                            if($_SESSION){
                              if ($row[5] == $_SESSION['user_id']){
                                echo '<td> <button class="btn btn-warning">update</button></td>';
                              }else{
                                echo '<td></td>';
                              }
                            }else{
                              echo '<td></td>';
                            }
                            echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                            echo '<td>'. $row[3].'</td>';
                            echo '<td>'. $row[4].'</td>';
                            echo '</tr>';
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="secondary-third-grade-header">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#secondary-third-grade" aria-expanded="false" aria-controls="secondary-third-grade">
                      THIRD GRADE
                    </button>
                  </h2>
                </div>
                <div id="secondary-third-grade" class="collapse" aria-labelledby="secondary-third-grade-header" data-parent="#accordionExampleSecondary">
                  <div class="card-body">
                  <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
                      <thead class="thead-dark">
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!-- retrieve secondary third grade -->
                        <?php
                          $query_pr = 'SELECT first_name , middle_name ,last_name ,phone ,email,students.user_id  FROM user,students  WHERE user.id = students.user_id and stage_id = 3 and grade_id = 3';
                          $result_pr = $mysqli->query($query_pr);
                          
                        
                          if(!$result_pr){
                            die("error occured ". mysqli_error($mysqli));
                          }
                          // echo $result_pr->num_rows;
                          while($row = $result_pr->fetch_row()){
                            echo '<tr>';
                            if($_SESSION){
                              if ($row[5] == $_SESSION['user_id']){
                                echo '<td><button class="btn btn-warning">update</button></td>';
                              }else{
                                echo '<td></td>';
                              }
                            }else{
                              echo '<td></td>';
                            }
                            echo "<td>". $row[0]." ".$row[1]." ".$row[2]."</td>";
                            echo '<td>'. $row[3].'</td>';
                            echo '<td>'. $row[4].'</td>';
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

  <!-- ====================popup update data=============== -->
  <div class="hidden">
      <div class="hidden ">
        <div class="container">
          <form method="POST" action="validate_update_student.php">
            <?php
              $id = $_SESSION['user_id'];
              $user_query = 'SELECT first_name ,middle_name ,last_name ,email ,phone ,password FROM user WHERE id ='.$id;
              $student_query = 'SELECT stage_id,grade_id FROM students WHERE user_id='.$id;

              $user_result = $mysqli->query($user_query);
              $student_result = $mysqli->query($student_query);
              $user_row = $user_result->fetch_row();
              $student_row = $student_result->fetch_row();
              echo '<div class="validate"></div>';
              echo '<input class="form-control" type="text" value="'.$user_row[0].'" name="update-first-name"id="first-name">';
              echo '<input class="form-control" type="text" value="'.$user_row[1].'" name="update-middle-name" id="middle-name">';
              echo '<input class="form-control" type="text" value="'.$user_row[2].'"  name="update-last-name" id="last-name">';
              echo '<input class="form-control" type="email" value="'.$user_row[3].'"  name="update-email" id="email">';
              echo '<input class="form-control" type="text" value="'.$user_row[4].'"  name="update-phone" id="phone">';
              echo '<input class="form-control" type="text" value="'.$user_row[5].'"  name="update-password" id="password">';
              echo '<select class="form-control stage"value="'.$student_row[0].'" name="update-student-stage" id="stage">
                    <option>Stage</option>
                    <option value="1">Primary School</option>
                    <option value="2">Middle School</option>
                    <option value="3">High School</option>
                  </select>';
              echo '<select class="form-control grade" value="'.$student_row[1].'" name="update-student-grade" id="grade">
              <option>Grade</option>
              <option value="1">First Grade</option>
              <option value="2">Second Grade</option>
              <option value="3">Third Grade</option>
              <option value="4">Fourth Grade</option>
              <option value="5">Fifth Grade</option>
              <option value="6">Sixth Grade</option>
            </select>';
              ?>
              <input class="btn btn-info" type="submit" value="UPDATE">
              <input class="btn btn-warning" type="button" value="CANCEL">
              
            </form> 
        </div>
      </div>
    </div>

  <footer>
      <p class="lead text-center">&copy;All Copyrights reserved to <span>team a</span> - Yat Education Center</p>
  </footer>
</body>
</html>