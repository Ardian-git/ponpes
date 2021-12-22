<?php
include('koneksi.php');

$judul=$_POST['judul'];
$des=$_POST['konten'];
$pen=$_POST['id'];
$tgl=$_POST['tanggal'];
$kat=$_POST['kat'];


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

            move_uploaded_file($_FILES['cover']['tmp_name'],'img_kry/' .$rand.'_'.$filename);


            $simpan=mysqli_query($kon, "INSERT INTO karya_santri set judul='$judul', id_user='$pen', isi_k='$des', cover='$xx', kategori='$kat', tanggal='$tgl'");

            if($simpan){
                echo '<script>
                alert("Terima Kasih Pengiriman berhasil");
                window.location.href="puisi.php";
                </script>';
            } else {
                echo "Penyimpanan Gagal";
            }
        }
    }

?>
