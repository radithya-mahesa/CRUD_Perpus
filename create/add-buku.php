<?php
    include_once("../database/koneksi.php");

    if (isset($_POST["submit"])) {
        
        $judul = $_POST["judul"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query($db, "INSERT INTO buku VALUES (
            NULL, '$judul', '$isbn', '$unit'
        )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>

    <link rel="stylesheet" href="../style/add-buku.css?v=2">
</head>
<body>
    <h1>FORM TAMBAH DATA BUKU</h1>
    <form action="" method="post">
        <label for="judul">Judul :</label>
        <input type="text" id="nama" name="judul"><br><br>

        <label for="isbn">ISBN :</label>
        <input type="text" id="isbn" name="isbn"><br><br>

        <label for="unit">Unit :</label>
        <input type="text" id="unit" name="unit"><br><br>
        
        <button type="submit" name="submit">Kirim</button>
    </form>
    <br>
    <a href="../read/buku.php">kembali</a>
</body>
</html>