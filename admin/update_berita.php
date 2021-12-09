<?php
include('koneksi.php');

$id=$_POST['id'];
$judul=$_POST['judul'];
$konten=$_POST['konten'];
$cover=$_POST['cover'];
$tgl=$_POST['tanggal'];


$rand = rand();
$ekstension = array('jpg','jpeg','png','gif');
$filename = $_FILES['cover']['name'];
$ukuran = $_FILES['cover']['size'];

$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext, $ekstension)){
    echo "gagal ekstensi";
} else {
        if($ukuran < 1044070){
            $xx = $rand.'_'.$filename;

            move_uploaded_file($_FILES['cover']['tmp_name'],'img/' .$rand.'_'.$filename);

            $simpan=mysqli_query($kon, "UPDATE berita set judul='$judul', isi_b='$konten', cover='$xx', tanggal='$tgl' where id_berita='$id'");

            if($simpan){
                echo '<script>
                alert("Perubahan berhasil");
                window.location.href="berita.php";
                </script>';
            } else {
                echo "Edit Gagal";
            }
        }
    }

if($update){
    header('location:berita.php');
} else {
    echo "Gagal diubah!";
}