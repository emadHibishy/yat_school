<<<<<<< HEAD
=======

>>>>>>> 5b3974a578f88eefffc2baf0bd3bc65e4075e5bb
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
    <title>SCHOOL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-3.2.1.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
    <script src="js/main.js" defer></script>
</head>
<body>
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
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/teachers.php">Teachers</a></li>
                    <li class="nav-item"><a class="nav-link" href="students.php">Students</a></li>
                    <li class="nav-item"><a class="nav-link" href="lessons.php">Lessons</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    <span class="column"></span>
<<<<<<< HEAD
=======

>>>>>>> 5b3974a578f88eefffc2baf0bd3bc65e4075e5bb
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
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============carousel================== -->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/class-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Classes</h3>
                    <p class="lead">we have wonderful classes with very limited number of students.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/class-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Grounds</h3>
                    <p class="lead">ground for each sport to practise your activity.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/class-4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Library</h3>
                    <p class="lead">meet our big library with very rare books.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/class-5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Festivals</h3>
                    <p class="lead">participate in our awesome festivals.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/computer-lab.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Computers Lab</h3>
                    <p class="lead">Computers equipped with the latest processors.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/lab.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Chemistry Lab</h3>
                    <p class="lead">learn by practise is the best way to learn.</p>
                </div>
            </div>
              <div class="carousel-item">
                <img src="img/artwork.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Art Workshop</h3>
                    <p class="lead">develop your skills at our awesome art workshop.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- ======================about us=================== -->
      <section class="about text-center">
        <div class="container">
            <h3>Meet our new <span>YAT School</span></h3>
            <p class="lead">Hello ,let me introduce some facts about <span>YAT School</span></p>
            <div class="row">
                <div class="col-lg-6 col-md12">
                  <img src="img/school.jpg" alt="">
                </div>
                <div class="col-lg-6 col-xs-12">
                  <div class="info">
                    <p class="lead"><span>YAT School</span> is a leading international school, intelligence and scholarly school. Our purpose is to reach all students around the world.</p>
                    <ul>
                      <li ><i class="fas fa-check"></i>Careful use of instructional time.</li>
                      <li ><i class="fas fa-check"></i>Effective instructional practices.</li>
                      <li ><i class="fas fa-check"></i>Reading excellent opportunities.</li>
                      <li ><i class="fas fa-check"></i>Sound instructional materials .</li>
                      <li ><i class="fas fa-check"></i>A variety of assessment tools .</li>
                      <li ><i class="fas fa-check"></i>Sound administrative practices.</li>
                      <li ><i class="fas fa-check"></i>A very positive campus climate.</li>
                    </ul>
                  </div>
                </div>
        </div>
    </section>

    <!-- ===================== advantages===================== -->
    
    <section class="advantages">
        <div class="container">
        <h2 class="text-center">Advantages</h2>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img class="card-img-top" src="img/values.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">Values</h4>
                            <p class="text-center lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img class="card-img-top" src="img/mision.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">Mission</h4>
                            <p class="text-center lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img class="card-img-top" src="img/vision.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">Vision</h4>
                            <p class="text-center lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img class="card-img-top" src="img/values.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">Values</h4>
                            <p class="text-center lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img class="card-img-top" src="img/values.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">Values</h4>
                            <p class="text-center lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img class="card-img-top" src="img/values.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">Values</h4>
                            <p class="text-center lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================honor board================ -->

    <section class="graduants">
        <h2 class="text-center">HONOR BOARD</h2>
        <p class="firstp text-center lead">pionners in their fields graduated from our school.</p>
        <div class="container">
            <div class="row">
                <!-- ========Doctor======= -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="img/doctor.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">ali sayed ebrahim</h4>
                            <p class="lead text-center">one of the most famous surgeonts in our country.</p>
                        </div>
                        <div class="card-footer">
                            <p class="lead text-center">graduated at: 2005</p>
                        </div>
                    </div>
                </div>
                <!-- =========Engineer===== -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="img/engineer.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">khaled mohamed esmael</h4>
                            <p class="lead text-center">despite his youngness, he is one of the smartest civil engineers in our country.</p>
                        </div>
                        <div class="card-footer">
                            <p class="lead text-center">graduated at: 2009</p>
                        </div>
                    </div>
                </div>
                <!-- ==========photographer========= -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="img/photographer.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">akmal mahmoud elgendy</h4>
                            <p class="lead text-center">one of the most famous photographers in our country.</p>
                        </div>
                        <div class="card-footer">
                            <p class="lead text-center">graduated at: 2013</p>
                        </div>
                    </div>
                </div>
                <!-- ==========artist========= -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="img/artist.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">lobna sherif tamim</h4>
                            <p class="lead text-center">one of the most inspiring artists in our country.</p>
                        </div>
                        <div class="card-footer">
                            <p class="lead text-center">graduated at: 2011</p>
                        </div>
                    </div>
                </div>
                <!-- ==========counsel========= -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="img/counsel.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">sherif ayman rezk</h4>
                            <p class="lead text-center">one of the most famous counsels in our country.</p>
                        </div>
                        <div class="card-footer">
                            <p class="lead text-center">graduated at: 2004</p>
                        </div>
                    </div>
                </div>
                <!-- ===========writer========== -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="img/writer.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">amr ahmed elshair</h4>
                            <p class="lead text-center">one of the most famous writers in our country.</p>
                        </div>
                        <div class="card-footer">
                            <p class="lead text-center">graduated at: 2016</p>
                        </div>
                    </div>
                </div>
                <!-- ==========astronaut========== -->
                <div class="offset-lg-2 col-lg-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="img/astronaut.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">samir mahmoud elsaid</h4>
                            <p class="lead text-center">beacause of his passion of discovery & physics, he became the youngest astronaut at <span>nasa</span>.</p>
                        </div>
                        <div class="card-footer">
                            <p class="lead text-center">graduated at: 2015</p>
                        </div>
                    </div>
                </div>
                <!-- ===========professor========== -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <img src="img/professor.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center">mostafa hussien abdallah</h4>
                            <p class="lead text-center">one of the biggest minds in chemistry, he is the youngest egyptian recieves the dotorate.</p>
                        </div>
                        <div class="card-footer">
                            <p class="lead text-center">graduated at: 2012</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===========goals============ -->

    <div class="container">
        <div class="goals">
            <h2 class="text-center">School Goals</h2>
            <ul>
                <li class="lead">create a safe, welcoming, secure and happy environment in which children, teachers and parents are treated with dignity and respect.</li>
                <li class="lead"> provide access to a Christian education which is tolerant of others' beliefs and has a strong commitment to social justice and prayerful celebrations.</li>
                <li class="lead">offer a broad curriculum in which all students are challenged to develop a love of learning, have their needs acknowledged and their achievements celebrated.</li>
                <li class="lead">build a dynamic culture which maximises the talents of all community members and fosters partnerships in the ongoing education of all children.</li>
                <li class="lead"> have professionally excellent teachers, inspired with love of all children, teaching and learning in a supportive, harmonious atmosphere.</li>    
            </ul>
        </div>
    </div>

    <!-- ===============footer=========== -->

    <footer>
        <p class="lead text-center">&copy;All Copyrights reserved to <span>team a</span> - Yat Education Center</p>
    </footer>
</body>
</html>
