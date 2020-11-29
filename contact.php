
<?php
  require_once('connection.php');
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
                    <li class="nav-item "><a class="nav-link" href="lessons.php">Lessons</a></li>
                    <li class="nav-item active"><a class="nav-link" href="/">Contact Us</a></li>
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

    
    <section class="contact-us">
      <h2>Contact us now</h2>
      <div class="container">
        <div class="row">
          <div class=" offset-sm-4 col-xs-12 col-sm-8 contact-form">
            <h2 class="text-center">Contact Us Via</h2>
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-md-5">
                  <h3 class="text-center"><i class="fas fa-envelope"></i></h3>
                  <form action="index.php" method="POST">
                    <input class="form-control" type="text" placeholder="Subject">
                    <textarea class="form-control" rows="5" placeholder="Write your message here..."></textarea>
                    <button class="btn btn-success" type="submit">Submit</button>
                  </form>
                </div>
                <div class="col-md-2 separator">
                  <span><p>OR</p></span>
                  
                </div>
                <div class="col-xs-12 col-md-5">
                  <h3 class="text-center"><i class="fas fa-phone"></i></h3>
                  <ul class="list-unstyled">
                    <li class="text-center">010046581185</li>
                    <li class="text-center">011046611185</li>
                    <li class="text-center">012092581185</li>
                    <li class="text-center">015046581255</li>
                    <li class="text-center">015047281255</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <p class="lead text-center">&copy;All Copyrights reserved to <span>team a</span> - Yat Education Center</p>
    </footer>
  </body>
</html>
