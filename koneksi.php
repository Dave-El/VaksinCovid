<?php
$koneksi = mysqli_connect("localhost", "root", "", "dave_vaksin")
    or die(mysqli_error($koneksi));


if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];

    $koneksi->query("INSERT INTO pasien VALUES ('$idPasien', '$nmPasien', '$jk', '$alamat', '$status')");
    header("location:vaksin.php");
}

if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien WHERE idPasien = '$idPasien'");
    header("location:vaksin.php");
}

if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];

    $koneksi->query("UPDATE pasien SET nmPasien = '$nmPasien', jk = '$jk', alamat = '$alamat' , status = '$status' WHERE idPasien = '$idPasien'");
    header("location:vaksin.php");
}
