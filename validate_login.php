<?php
include_once('connection.php');
session_start();
$login_email = strtolower(htmlspecialchars($_POST['login-email']));
$login_password = htmlspecialchars($_POST['login-password']);
$login_data =[
        $login_email,
        $login_password
    ];

$query = "SELECT email , password FROM user";

$result = $mysqli->query($query);
// echo '<pre>';
//     print_r($result->fetch_array());
//     echo '</pre>';
if(!$result){
    die('couldn\'t fetch data');
}else{
    $rows = $result->fetch_all();
    
    if (in_array($login_data,$rows)){
        header("Location: index.php");
        exit();
    }else{
        echo 'email or password is not correct';
    }
}
?>