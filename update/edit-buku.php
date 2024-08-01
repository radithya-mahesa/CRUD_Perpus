<?php
    include_once("../database/koneksi.php");

    $id = $_GET["id"];
    $query_get_data = mysqli_query(
        $db, "SELECT * FROM buku WHERE id=$id"
    );
    $buku = mysqli_fetch_assoc($query_get_data);

    if (isset($_POST["submit"])) {

        $judul = $_POST["judul"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query(
            $db, "UPDATE buku SET judul='$judul', isbn='$isbn', unit='$unit' WHERE id=$id"
        );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>
</head>
<body>
    <h1>FORM UPDATE DATA BUKU</h1>
    <form action="" method="post">
        <label for="judul">Judul :</label>
        <input value="<?= $buku['judul'] ?>" type="text" id="nama" name="judul"><br><br>

        <label for="isbn">ISBN :</label>
        <input value="<?= $buku['isbn'] ?>" type="text" id="isbn" name="isbn"><br><br>

        <label for="unit">Unit :</label>
        <input value="<?= $buku['unit'] ?>" type="text" id="unit" name="unit"><br><br>
        
        <button type="submit" name="submit">Kirim</button>
    </form>
    <br>
    <a href="../read/buku.php">kembali</a>
</body>
</html>