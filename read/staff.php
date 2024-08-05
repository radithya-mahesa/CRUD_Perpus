<?php
    include_once("../database/koneksi.php");
    $query = mysqli_query($db, "SELECT * FROM staff");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>

    <link rel="stylesheet" href="../style/staff-style.css?v=2">
</head>
<body>
    <main>
        <div class="title">
            <h1>Daftar Staff</h1>
        </div>
        <div class="table-info">
            <table border="1" cellpadding="10" cellspacing="2" style="border-collapse: collapse;">
                <tr class="field-column">
                    <td>Nama</td>
                    <td>Telepon</td>
                    <td>Email</td>
                    <td>ACTION</td>
                </tr>
                <?php foreach ($query as $staff) : ?>
                <tr class="record-row">
                    <td><?= $staff["nama"] ?></td>
                    <td><?= $staff["telp"] ?></td>
                    <td><?= $staff["email"] ?></td>
                    <td>
                        <a href="<?= "../update/edit-staff.php?id=" . $staff["id"] ?>">UPDATE</a>
                        <a href="<?= "../delete/delete-staff.php?id=" . $staff["id"] ?>">DELETE</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
        <div class="menu">
            <a href="../create/add-staff.php">Tambah data staff</a>
            <br>
            <a href="../index.php">kembali</a>
        </div>
    </main>
    
</body>
</html>