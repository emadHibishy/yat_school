<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>School website - Sign Up</title>
    <meta name="auther" content="Kirollos Ashraf Sedky">
    <meta name="description" content="Some info about the school goes here">
    <meta name="keywords" content="school, student, teachers, lessons, classes">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/sign.css">
    <script src="js/jquery-3.2.1.min.js" defer></script>
    <script src="js/bootstrap.js"defer></script>
    <script src="js/register.js" defer></script>
    <script src="js/validate.js" defer></script>
  </head>
  <body>

    <!-- start section sign -->
    <section class="sign">
        <!-- tabs -->
        <ul class="list-unstyled">
            <li class="active" id="signup-tab">SIGN UP</li>
            <li id="login-tab">LOGIN</li>
        </ul>

        <!-- sign up form -->
        <form id="signup-tab-form" action="validate_signup.php" method="POST">
            <div class="container">
                <div class="validate"></div>
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

        <!-- login form -->
        <form id="login-tab-form" action="validate_login.php" method="POST">
            <div class="container">
                <div class="validate"></div>
                <input class="form-control" type="email" name="login-email" id="login-email" placeholder="email">
                <input class="form-control" type="password" name="login-password" id="login-password" placeholder="password">
                <input class="btn" type="submit" value="LOGIN">
            </div>
        </form>
    </section>
  </body>
</html>