<?php 
include('koneksi.php');

$id =$_GET['id'];
$hapus=mysqli_query($kon, "DELETE from karya_santri where id_karya='$id'");

if($hapus){
    header('location:puisi.php');
} else {
    echo "Gagal menghapus!";
}