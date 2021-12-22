<?php
include('admin/koneksi.php');

$judul = $_POST['judul'];
$des=$_POST['konten'];
$kat=$_POST['kategori'];
$tgl=$_POST['tanggal'];
$idu=$_POST['id'];

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

            move_uploaded_file($_FILES['cover']['tmp_name'],'admin/img_kry/' .$rand.'_'.$filename);


            
            $simpan=mysqli_query($kon, "INSERT INTO karya_santri set judul='$judul', cover='$xx', kategori='$kat', isi_k='$des', tanggal='$tgl', id_user='$idu' ");

            if($simpan){
                echo '<script>
                alert("Terima Kasih Pengiriman berhasil");
                window.location.href="index.php";
                </script>';
            } else {
                echo "Penyimpanan Gagal";
            }
        }
    }


?>

