<?php
    require 'functions.php';
    $conn = mysqli_connect("localhost", "root", "", "praktikum_11");
    $result = mysqli_query($conn,"SELECT * FROM karyawan");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Address</td>
            <td>Gender</td>
            <td>Position</td>
            <td>Status</td>
            <td>Action</td>
            <td>Action</td>
        </tr>
        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_array($result)){?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["address"]; ?></td>
            <td><?= $row["gender"]; ?></td>
            <td><?= $row["position"]; ?></td>
            <td><?= $row["status"]; ?></td>
            <td>
                <a href="hapus.php?id=<?= $row["id"]; ?>" class="button">Hapus</a>
            </td>
            <td>
                <a href="modify.php?id=<?= $row["id"]; ?>" class="button">Update</a>
            </td>
            <?php $i++;} ?>
        </tr>
</body>
</html>