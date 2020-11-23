<?php
include_once("connection.php");

session_start();

// retrive user id and save it in session
$email = $_SESSION['email'];
$retrieve = "SELECT id from user WHERE email = '$email'";

$stmt = $mysqli->query($retrieve);

if($stmt){
    $row = $stmt->fetch_array();
    $_SESSION['user_id'] = $row[0];
    $user_id = $row[0];

    if($_SESSION['user_id']){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $image     = htmlspecialchars($_POST['teacher-image']);
            $stage     = $_POST['teacher-stage'];
            $university     = $_POST['teacher-university'];
            $college     = $_POST['teacher-college'];
            $experience     = $_POST['teacher-experience'];
            $graduation     = $_POST['teacher-graduation'];
            $department     = $_POST['teacher-department'];
            $gender    = $_POST['teacher-gender'];
            $birth_date= $_POST['teacher-year'] .'-'. $_POST['teacher-month'].'-'. $_POST['teacher-day'];
            echo $stage.'<br>';
            $query = "INSERT INTO teachers Values (null,'$user_id','$birth_date','$university','$college','$experience','$graduation','$image','$stage','$department','$gender')";
            $result = $mysqli->query($query);
            if($result){
                header("Location: index.php");
                exit();
            }else{
                die("error occured ". mysqli_error($mysqli));
            }
            
        }else{
            echo 'post error';
        }
        
    }

}else{
    echo'error';
}
