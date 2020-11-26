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
        $experience = $_POST['update-teacher-experience'];
        $stage = $_POST['update-teacher-stage'];

        $update_user = "UPDATE user SET 
        first_name = '$firstName',
        middle_name = '$middleName',
        last_name = '$lastName',
        email = '$email',
        phone = '$phone',
        password = '$password' WHERE id = '$id'";

        $update_teacher = "UPDATE teachers SET 
        experience = '$experience',
        stage_id = '$stage' WHERE user_id = '$id'";

        $update_user_result = $mysqli->query($update_user);
        $update_teacher_result = $mysqli->query($update_teacher);
        header("Location: teachers.php");
        exit();


    }else{
        echo 'You are not allowed to be here';
    }



?>