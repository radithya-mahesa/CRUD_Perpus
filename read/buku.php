<?php
    include_once("../database/koneksi.php");
    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>

    <link rel="stylesheet" href="../style/buku-style.css?v=2">
</head>
<body>
    <main>
        <div class="title">
            <h1>DAFTAR BUKU.</h1>
        </div>
        <div class="table-info">
            <table border="1" cellpadding="10" cellspacing="2" style="border-collapse: collapse;">
                <tr class="field-column">
                    <td>Judul</td>
                    <td>ISBN</td>
                    <td>Unit</td>
                    <td>ACTION</td>
                </tr>
                <?php foreach ($query as $buku) : ?>
                <tr class="record-row">
                        <td><?= $buku["judul"] ?></td>
                        <td><?= $buku["isbn"] ?></td>
                        <td><?= $buku["unit"] ?></td>
                        <td>
                            <a href="<?= "../update/edit-buku.php?id=" . $buku["id"] ?>">UPDATE</a>
                            <a href="<?= "../delete/delete-buku.php?id=" . $buku["id"] ?>">DELETE</a>
                        </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
        <div class="menu">
            <br>
            <a href="../create/add-buku.php">Tambah Data Buku</a><br>
            <a href="../index.php">kembali</a>
        </div>
        
    </main>
    
</body>
</html>