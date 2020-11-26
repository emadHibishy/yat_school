<<<<<<< HEAD
<?php
  include_once('connection.php');
  session_start();
?>
=======
>>>>>>> ab3a309c3240d6cfd6a8946358f20b0b956e2013
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
    <script src="js/getData.js" defer></script>
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
<<<<<<< HEAD
                    <?php
                    if(!$_SESSION){
                        echo '<li class="nav-item"><a class="nav-link" href="sign.php">Sign Up</a></li>';
                    }
                    else{
                        echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
                    }
                    ?>
=======
                    <li class="nav-item"><a class="nav-link" href="sign.php">Sign Up</a></li>
>>>>>>> ab3a309c3240d6cfd6a8946358f20b0b956e2013
                    <!-- <li class="nav-item"><a class="nav-link" href="">Login</a></li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!--================lessons================= -->

    <section class="lessons">
      <div class="container">
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
      </div>
    </section>

    <footer>
      <p class="lead text-center">&copy;All Copyrights reserved to <span>team a</span> - Yat Education Center</p>
    </footer>
  </body>
</html>
