<?php
function open(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "es12";
    $mysqli = new mysqli($host, $username, $password, $database);
    return $mysqli;
}
?>