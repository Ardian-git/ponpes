<?php 
include('koneksi.php');

$id =$_GET['id'];
$hapus=mysqli_query($kon, "DELETE from berita where id_berita='$id'");

if($hapus){
    header('location:berita.php');
} else {
    echo "Gagal menghapus!";
}