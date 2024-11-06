<?php
include "koneksi.php";
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$tempat_lahir = $_GET['tempat_lahir'];
$tgl_lahir = $_GET['tgl_lahir'];
$query = "UPDATE biodata_mhs SET
    nama='$nama',
    alamat='$alamat',
    tempat_lahir='$tempat_lahir',
    tgl_lahir='$tgl_lahir'
    WHERE id='$_GET[id]'";
$mysqli->query($query);
header('location:index.php');
?>