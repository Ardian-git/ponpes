<?php
include('koneksi.php');

$id=$_POST['id'];
$judul=$_POST['judul'];
$des=$_POST['konten'];
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

            move_uploaded_file($_FILES['cover']['tmp_name'],'img_kry/' .$rand.'_'.$filename);

            $simpan=mysqli_query($kon, "UPDATE karya_santri set judul='$judul', isi_k='$des', cover='$xx', tanggal='$tgl' where id_karya='$id'");

            if($simpan){
                echo '<script>
                alert("Perubahan berhasil");
                window.location.href="puisi.php";
                </script>';
            } else {
                echo "Edit Gagal";
            }
        }
    }





?>
