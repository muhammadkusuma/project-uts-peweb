<?php

function getConnection():PDO{
    $host="localhost";
    $port= 3306;
    $database= "uts-peweb";
    $username="root";
    $password="";

    return new PDO("mysql:host=$host:$port;dbname=$database",$username,$password);
}

// try {
//     getConnection();
//     echo "Terkoneksi";
// } catch (PDOException $exception) {
//     echo "Gagal Terkoneksi : ". $exception->getMessage().PHP_EOL;
// }