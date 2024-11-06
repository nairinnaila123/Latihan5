<?php
include "koneksi.php";
$query = "DELETE FROM biodata_mhs where id='$_GET[id]'";
$mysqli->query($query);
header('location:index.php');