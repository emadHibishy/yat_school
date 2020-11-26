<?php

$mysqli = mysqli_connect("localhost", "root", "", "yat_school",3306);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// $result = $mysqli->query('SELECT * FROM subject');
// // echo $result->num_rows;
// if ($result ) {
//     while ($row = $result->fetch_row()) {
//         echo '<pre>';
//         printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
//         echo '</pre>';
//     }
//     $result->close();
// }
// $val1 = 'peter'; 
// $sql = "INSERT INTO stage (name) VALUES ($val1)";
// if(mysqli_query($mysqli, $sql)){
//     echo "Records inserted successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
// }


?>