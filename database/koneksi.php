<?php
//localost
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "perpusradit";

    $db = mysqli_connect($hostname, $username, $password, $database) 
    or die("koneksi malas menyambung");
?>