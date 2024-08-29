<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backend-epim-konser";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die('koneksi gagal' . $conn->connect_error);
}

function getData($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}