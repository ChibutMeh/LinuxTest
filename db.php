<?php

$servername = "127.0.0.1";
$username = "root";
$password = "AeCeAsq";
$dbname = "registeruser";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection Fialed". mysqli_connect_error());
} else {
    "Успех";
}

?>