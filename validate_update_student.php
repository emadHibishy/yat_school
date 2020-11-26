<?php
require_once('connection.php');
    session_start();
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $id = $_SESSION['user_id'];
        $firstName = htmlspecialchars($_POST['update-first-name']);
        $middleName = htmlspecialchars($_POST['update-middle-name']);
        $lastName = htmlspecialchars($_POST['update-last-name']);
        $email = htmlspecialchars($_POST['update-email']);
        $phone = htmlspecialchars($_POST['update-phone']);
        $password = htmlspecialchars($_POST['update-password']);
        $stage = $_POST['update-student-stage'];
        $grade = $_POST['update-student-grade'];

        $update_user = "UPDATE user SET 
        first_name = '$firstName',
        middle_name = '$middleName',
        last_name = '$lastName',
        email = '$email',
        phone = '$phone',
        password = '$password' 
        WHERE id = '$id'";

        $update_student = "UPDATE students SET 
        grade_id = '$grade',
        stage_id = '$stage' 
        WHERE user_id = '$id'";

        $update_user_result = $mysqli->query($update_user);
        $update_student_result = $mysqli->query($update_student);
        header("Location: students.php");
        exit();


    }else{
        echo 'You are not allowed to be here';
    }



?>