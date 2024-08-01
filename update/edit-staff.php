<?php
    include_once("../database/koneksi.php");

    $id = $_GET["id"];
    $query_get_data = mysqli_query(
        $db, "SELECT * FROM staff WHERE id=$id"
    );
    $staff = mysqli_fetch_assoc($query_get_data);

    if (isset($_POST["submit"])) {

        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];

        $query = mysqli_query(
            $db, "UPDATE staff SET nama='$nama', telp='$telp', email='$email' WHERE id=$id"
        );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>

    <link rel="stylesheet" href="../style/edit-staff.css?v=1">
</head>
<body>
    <main>
        <div class="wrapper">
            <div class="title">
                <h1>FORM UPDATE DATA BUKU</h1>
            </div>
            <div class="field-form">
                <form action="" method="post">
                    <label for="judul">Msukkan Judul :</label><br>
                    <input value="<?= $staff['nama'] ?>" type="text" id="nama" name="nama"><br><br>

                    <label for="isbn">Masukkan ISBN :</label><br>
                    <input value="<?= $staff['telp'] ?>" type="text" id="telp" name="telp"><br><br>

                    <label for="unit">Masukkan jumlah Unit :</label><br>
                    <input value="<?= $staff['email'] ?>" type="text" id="email" name="email"><br><br>
                        
                    <button type="submit" name="submit">Kirim</button>
                </form>
            </div>
                <div class="menu">
                <a href="../read/staff.php">kembali</a>
            </div>
        </div>
    </main>
    
    <br>
    
</body>
</html>