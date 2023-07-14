<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satu Sehat | User</title>
    <link rel="icon" href="pics/logo.png" type="image/x-icon">
    <style>
        .btn-secondary.gray-button {
            background-color: gray;
            /* Set the initial background color */
            color: white;
            /* Set the initial text color */
            transition: background-color 0.3s;
            /* Add a smooth transition effect */
        }

        .btn-secondary.gray-button:hover {
            background-color: green;
            /* Change the background color on hover */
        }
    </style>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body background="pics/vaksin3.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="pics/logo.png" alt="..." height="36">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="vaksin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vaksin.php">Data Covid</a>
                    </li>
                    <?php
                    session_start();
                    if ($_SESSION['status'] === 'Administrator') { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="user.php">User</a>
                        </li>
                    <?php } ?>
                </ul>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container">

        <div class="row mt-3">
            <div class="col-sm">
                <h3>Tabel User</h3>
            </div>
        </div>

        <?php

        if ($_SESSION['status'] === 'Administrator') { ?>
            <div class="row">
                <div class="col">
                    <a href="tambahuser.php" class="btn btn-secondary gray-button d-flex justify-content-center">Tambah User</a>
                </div>
            </div>
        <?php } ?>


        <div class="row mt-3">
            <div class="col">
                <table class="table table-striped table-hover table-sm">
                    <tr class="text-center">
                        <th>ID User</th>
                        <th>Nama User</th>
                        <th>Status</th>
                        <th>Password</th>
                        <?php
                        if ($_SESSION['status'] === 'Administrator') { ?>
                            <th>Action</th>
                        <?php } ?>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $hasil = $koneksi->query("SELECT * FROM users");
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr class="text-center">
                            <td><?= $row['idUser']; ?></td>
                            <td><?= $row['nmUser']; ?></td>
                            <td><?= $row['status']; ?></td>
                            <td><?= md5($row['password']) ?></td>
                            <?php
                            if ($_SESSION['status'] === 'Administrator') { ?>
                                <td>
                                    <a href="editUser.php?edit=<?= $row['idUser']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <!-- Button trigger modal alert -->
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusData<?= $row['idUser']; ?>">
                                        Hapus
                                    </button>

                                    <!-- Modal Alert -->
                                    <div class="modal fade" id="hapusData<?= $row['idUser']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Yakin Ingin Menghapus Data</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <a href="userAction.php?idUser=<?= $row['idUser']; ?>" type="button" class="btn btn-danger">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>