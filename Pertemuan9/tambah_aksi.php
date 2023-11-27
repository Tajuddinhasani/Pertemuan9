<?php
include 'koneksi.php';


$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"insert into santri values('','$nama','$nim','$alamat')");

header("location:index.php");

?>