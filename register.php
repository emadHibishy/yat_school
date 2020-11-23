
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>School website - Registeration</title>
    <meta name="auther" content="Kirollos Ashraf Sedky">
    <meta name="description" content="Some info about the school goes here">
    <meta name="keywords" content="school, student, teachers, lessons, classes">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/sign.css">
        <script src="js/jquery-3.2.1.min.js" defer></script>
        <script src="js/bootstrap.js"defer></script>
    <script src="js/register.js"defer ></script>
    <script src="js/validate.js"defer></script>
  </head>
  <body>

    <h2 class="text-center">fill the form below to complete your registeration</h2>
    <section class="register">
        <ul class="list-unstyled">
            <li id="student-tab" class="active">Student</li>
            <li id="teacher-tab">Teacher</li>
        </ul>

        <!-- student form -->
        <form id="student-tab-form" action="validate_student.php" method="POST">
            <div class="container">
                <div class="validate"></div>
                <select class="form-control" name="month" id="month">
                    <option>Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select class="form-control" name="day" id="day">
                    <option>Day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select class="form-control" name="year" id="year">
                    <option>Year</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                </select>
                <select class="form-control stage"name="stage" id="stage">
                    <option>Stage</option>
                    <option value="1">Primary School</option>
                    <option value="2">Middle School</option>
                    <option value="3">High School</option>
                  </select>
                  <select class="form-control grade"name="grade" id="grade">
                    <option>Grade</option>
                    <option value="1">First Grade</option>
                    <option value="2">Second Grade</option>
                    <option value="3">Third Grade</option>
                    <option value="4">Fourth Grade</option>
                    <option value="5">Fifth Grade</option>
                    <option value="6">Sixth Grade</option>
                  </select>
                <input class="form-control" placeholder="Your Image" type="file" name="image" id="image" >
                 <div class="gender">
                    <input type="radio" name="gender" value="m"><span>male</span>
                    <input type="radio" name="gender" value="f"><span>female</span>
                </div>
                <input class="btn" type="submit" value="Register">
            </div>
        </form>

        <!-- teacher form -->
        <form id="teacher-tab-form" action="validate_teacher.php" method="POST">
            <div class="container">
                <div class="validate"></div>
                <select class="form-control" name="teacher-month" id="teacher-month">
                    <option>Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select class="form-control" name="teacher-day" id="teacher-day">
                    <option>Day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select class="form-control" name="teacher-year" id="teacher-year">
                    <option>Year</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                    <option value="1979">1979</option>
                </select>
                <select class="form-control stage"name="teacher-stage" id="teacher-stage">
                    <option>Stage</option>
                    <option value="1">Primary School</option>
                    <option value="2">Middle School</option>
                    <option value="3">High School</option>
                </select>
                <input class="form-control" placeholder="University" type="text" name="teacher-university" id="teacher-university" >

                <input class="form-control" placeholder="College" type="text" name="teacher-college" id="teacher-college" >

                <input class="form-control" placeholder="Graduation Year" type="text" name="teacher-graduation" id="teacher-graduation" >

                <!-- <input class="form-control" placeholder="College" type="text" name="teacher-department" id="teacher-department" > -->
                <select class="form-control" name="teacher-department" id="teacher-department">
                    <option>Department</option>
                    <option value="1">arabic</option>
                    <option value="2">english</option>
                    <option value="3">science</option>
                    <option value="4">france</option>
                    <option value="5">mathematics</option>
                    <option value="6">history</option>
                    <option value="7">geography</option>
                    <option value="8">chemistry</option>
                    <option value="9">physics</option>
                    <option value="10">biology</option>
                </select>
                
                <select class="form-control stage"name="teacher-experience" id="teacher-experience">
                    <option>experience</option>
                    <option value="0:2">0:2</option>
                    <option value="3:5">3:5</option>
                    <option value="6:8">6:8</option>
                    <option value="9 or more">9 or more</option>
                </select>
                <input class="form-control" placeholder="Your Image" type="file" name="teacher-image" id="teacher-image" >
                 <div class="gender">
                    <input type="radio" name="teacher-gender" id="teacher-gender" value="m"><span>male</span>
                    <input type="radio" name="teacher-gender" id="teacher-gender" value="f"><span>female</span>
                </div>
                <input class="btn" type="submit" value="Register">
            </div>
        </form>
</section>
  </body>
</html>