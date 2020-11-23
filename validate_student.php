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
            $image     = htmlspecialchars($_POST['image']);
            $stage     = $_POST['stage'];
            $grade     = $_POST['grade'];
            $gender    = $_POST['gender'];
            $birth_date= $_POST['year'] .'-'. $_POST['month'].'-'. $_POST['day'];

            $query = "INSERT INTO students Values (null,'$user_id','$image','$birth_date','$stage','$grade','1','$gender')";
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
