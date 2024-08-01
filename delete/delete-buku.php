<?php
    include_once("../database/koneksi.php");

    $id = $_GET["id"];

    $query = mysqli_query($db, "DELETE FROM buku WHERE id='$id'");
    
    header("Location: ../read/buku.php")
?>