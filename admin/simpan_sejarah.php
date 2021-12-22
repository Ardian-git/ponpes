<?php 
include('koneksi.php');

$sjp = $_POST['isi'];

$simpan = mysqli_query($kon ,"INSERT into profil_ponpes set sejarah ='$sjp'");

if($simpan){
    echo '<script>
        alert("penyimpanan berhasil");
        window.location.href="data_profil.php";
        </script>';
} else {
    echo "gagal meyimpan";
}

?>