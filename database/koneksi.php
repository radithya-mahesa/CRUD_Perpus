<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "perpusRadit";

    $db = mysqli_connect($hostname, $username, $password, $database) 
    or die("koneksi malas menyambung");
?>