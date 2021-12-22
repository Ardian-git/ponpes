<?php 
include('koneksi.php');

$id =$_GET['id'];
$hapus=mysqli_query($kon, "DELETE from t_info_pendaftaran where id='$id'");

if($hapus){
    header('location:info_pendaftaran.php');
} else {
    echo "Gagal menghapus!";
}