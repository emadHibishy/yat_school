<?php
include_once('connection.php');
session_destroy();
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
        $getId = "SELECT id FROM user WHERE email = '$login_email'";
        $user_id_data = $mysqli->query($getId);
        $user_id = $user_id_data->fetch_row();
        session_start();
        $_SESSION['user_id']=$user_id[0];

        echo $_SESSION['user_id'];
        header("Location: index.php");
        exit();
    }else{
        echo 'email or password is not correct';
    }
}
?>