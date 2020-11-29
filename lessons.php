<?php
  include_once('connection.php');
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
                    <li class="nav-item"><a class="nav-link" href="students.php">Students</a></li>
                    <li class="nav-item active"><a class="nav-link" href="/">Lessons</a></li>
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

    <!--================lessons================= -->
    <section class="lessons">
      <div class="container">
        <?php
          if(!$_SESSION){
            echo '<h1 class="text-center">Please login to show your lessons</h1>';
          }else{
            $studentQuery = 'SELECT user_id FROM students';
            $studentResult = $mysqli->query($studentQuery);
            $studentsUser = $studentResult->fetch_all();

            $teacherQuery = 'SELECT user_id FROM teachers';
            $teacherResult = $mysqli->query($teacherQuery);
            $teachersUser = $teacherResult->fetch_all();
            
            if(in_array([$_SESSION['user_id']],$studentsUser)){
              $studentClassQuery = 'SELECT class_id FROM students where user_id = '. $_SESSION['user_id'];
              $studentClassResult = $mysqli->query($studentClassQuery);
              $studentClass = $studentClassResult->fetch_row()[0];
              $lessonQuery ='SELECT * FROM lesson WHERE class_id = '.$studentClass;
              $lessonResult = $mysqli->query($lessonQuery);
              // $lesson = $lessonResult->fetch_array();
              echo '<h2 class="text-center">Lessons</h2>';
              echo '<table class="table table-striped table-bordered table-responsive-xs table-hover      table-warning text-center">';
              echo '<thead class="thead-dark">';
              echo ' <tr>';
              echo '     <th>date</th>';
              echo '     <th>Course</th>';
              echo '      <th>Instructor</th>';
              echo '     <th>duration</th>';
              echo '     <th>class</th>';
              echo '   </tr>';
              echo ' </thead>';
              echo ' <tbody>';
              while($lesson = $lessonResult->fetch_array()){
                $subject = $mysqli->query("SELECT name FROM subject where id = $lesson[4]");
                $subjectId = $subject->fetch_array()[0];

                $userIdResult = $mysqli->query("SELECT user_id FROM teachers WHERE id = $lesson[5]");
                $userId = $userIdResult->fetch_array()[0];
                $userNameResult = $mysqli->query("SELECT first_name, middle_name , last_name FROM user WHERE id = $userId");
                $userNameRow = $userNameResult->fetch_array();
                $userName = $userNameRow[0].' '.$userNameRow[1].' '.$userNameRow[2];

                $classResult = $mysqli->query("SELECT code FROM class WHERE id = $lesson[3]");
                $class = $classResult->fetch_array()[0];
                echo '<tr>';
                echo "  <td>$lesson[2] </td>";
                echo "  <td>$subjectId</td>";
                echo "  <td>$userName </td>";
                echo "  <td>$lesson[1] </td>";
                echo "  <td>$class </td>";
                echo '</tr>';
              }
                  
              echo '  </tbody>';
              echo '</table>';
            }elseif (in_array([$_SESSION['user_id']],$teachersUser)){
              $teacher= $mysqli->query("SELECT id FROM teachers WHERE user_id = ".$_SESSION['user_id']);
              $tecaherId = $teacher->fetch_row()[0];
              
              $getLessons = $mysqli->query('SELECT * FROM lesson WHERE teacher_id = '.$tecaherId);

              if($getLessons){
                 
                echo '<h2 class="text-center">Lessons</h2>';
                echo '<table class="table table-striped table-bordered table-responsive-xs table-hover      table-warning text-center">';
                echo '<thead class="thead-dark">';
                echo ' <tr>';
                echo '     <th>date</th>';
                echo '     <th>Course</th>';
                echo '     <th>duration</th>';
                echo '     <th>class</th>';
                echo '   </tr>';
                echo ' </thead>';
                echo ' <tbody>';
                while($lessonRow = $getLessons->fetch_array()){
                  $subject = $mysqli->query("SELECT name FROM subject where id = $lessonRow[4]");
                  $subjectId = $subject->fetch_array()[0];
                  $classResult = $mysqli->query("SELECT code FROM class WHERE id = $lessonRow[3]");
                  $class = $classResult->fetch_array()[0];
                  echo '<tr>';
                  echo "  <td>$lessonRow[2] </td>";
                  echo "  <td>$subjectId</td>";
                  echo "  <td>$lessonRow[1] </td>";
                  echo "  <td>$class </td>";
                  echo '</tr>';
                }
                echo '  </tbody>';
                echo '</table>';
              }else{
                echo '<h2 class="text-center">sorry you have no lessons yet</h2>';
              }
            }else{
              echo '<p class="lead text-center"> please register first <a class="btn btn-warning" href="sign.php">Register</a></p>';
            }
          }
        ?>
      </div>
    </section>
    <!-- 
      
        <h2 class="text-center">Lessons</h2>
        <table class="table table-striped table-bordered table-responsive-xs table-hover table-warning text-center">
          <thead class="thead-dark">
            <tr>
              <th>Course</th>
              <th>Instructor</th>
              <th>Instructor Email</th>
              <th>Begin</th>
              <th>End</th>
              <th>Weekly Lectures</th>
              <th>Lecture Duration</th>
              <th>Days</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      
     -->
    <footer>
      <p class="lead text-center">&copy;All Copyrights reserved to <span>team a</span> - Yat Education Center</p>
    </footer>
  </body>
</html>
