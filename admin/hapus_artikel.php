<?php 
include('koneksi.php');

$id =$_GET['id'];
$hapus=mysqli_query($kon, "DELETE from artikel where id_artikel='$id'");

if($hapus){
    header('location:artikel.php');
} else {
    echo "Gagal menghapus!";
}