<?php
include('koneksi.php');

$id=$_POST['id'];
$tgl=$_POST['tanggal'];
$des=$_POST['des'];


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

            move_uploaded_file($_FILES['cover']['tmp_name'],'../info_p/' .$rand.'_'.$filename);


            $simpan=mysqli_query($kon, "UPDATE t_info_pendaftaran set tanggal='$tgl', cover='$xx', deskripsi='$des' where id='$id' ");

            if($simpan){
                echo '<script>
                alert("Pengiriman berhasil");
                window.location.href="info_pendaftaran.php";
                </script>';
            } else {
                echo "Penyimpanan Gagal";
            }
        }
    }
