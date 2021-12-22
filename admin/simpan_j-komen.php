<?php
include('koneksi.php');

$id=$_POST['id'];
$jkomen=$_POST['jkomen'];

$simpan = mysqli_query($kon , "UPDATE pertanyaan set jawaban='$jkomen' where id_p='$id'");

if ($simpan){
    echo '<script>
        alert("Jawaban berhasil");
        window.location.href="komentar.php";
        </script>';
} else {
    echo "kesalahan jawaban";
}

?>