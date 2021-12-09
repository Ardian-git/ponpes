<?php
include('koneksi.php');

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


            $simpan=mysqli_query($kon, "INSERT into berita set judul='$judul', isi_b='$konten', cover='$xx', tanggal='$tgl'");
            if($simpan){
                echo '<script>
                alert("Terima Kasih Pengiriman berhasil");
                window.location.href="berita.php";
                </script>';
            } else {
                echo "Penyimpanan Gagal";
            }
        }
    }


?>