<?php
include_once('connection.php');
if($_SERVER['REQUEST_METHOD']== 'POST'){
    session_start();
    // save post form data in variables
    $first_name  = htmlspecialchars($_POST['first-name']) ;
    $middle_name = htmlspecialchars($_POST['middle-name']) ;
    $last_name   = htmlspecialchars($_POST['last-name']) ;
    $email       = htmlspecialchars($_POST['email']) ;
    $phone       = htmlspecialchars($_POST['phone']) ;
    $password    = htmlspecialchars($_POST['password']) ;

    // insert user data in session
    $_SESSION['first_name'] = $first_name;
    $_SESSION['middle_name']= $middle_name;
    $_SESSION['last_name']  = $last_name;
    $_SESSION['email']      = $email;
    $_SESSION['phone']      = $phone;
    $_SESSION['password']   = $first_name;

    // retrieve query
    $query_sel = "SELECT email from user";
    $retrieve = $mysqli->query($query_sel);

    // check if retrieve
    if(!$retrieve){
        die("couldn't retrieve data". mysqli_error($mysqli));
    }else{
        while($row = $retrieve->fetch_array()){
            // check if email is found
            if($row[0] == $email){
                die("the email you entered is already found sign up again from <a href='sign.php'>here</a>" );
            }
        }
        // insert data in user row
        $query  = "INSERT INTO user VALUES(null,'$first_name','$middle_name','$last_name','$phone','$email','$password')";
        $result = $mysqli->query($query);
        // check if query doesn't execute
        if(!$result){
            // die($mysqli->connect_errno .' '. $mysqli->connect_error);
            die("ERROR: Could not able to execute $query. " . mysqli_error($mysqli));
        }else{
            header("Location: register.php");
            exit();
        }
    }
}else{
        die('please sign up first to reach this page from <a href="sign.php">here</a>');
}
?>