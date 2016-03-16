
<?php

$servername = "localhost";
$username = "root";
$password = "mint1234";

$conn = new mysqli($servername, $username, $password, 'school');


if($conn->connect_error){
    die("Conection failed: ".$conn->connect_error);
}

?>