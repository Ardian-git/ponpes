<?php include('admin/koneksi.php');

$kom = $_POST['komen'];
$ida = $_POST['id_artikel'];
$idu = $_POST['id_user'];
$dt = $_POST['tanggal'];

$simpan= mysqli_query($kon, "INSERT INTO pertanyaan set isi_p='$kom', tanggal='$dt', 
id_user='$idu', id_artikel='$ida'");

if ($simpan) {
    echo '<script>
        alert("Terima Kasih Pengiriman berhasil");
        window.location.href="index.php";
        </script>';
} else {
    echo "pengiriman gagal";
}


?>