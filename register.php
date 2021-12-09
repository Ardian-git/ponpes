<?php
include('admin/koneksi.php');

 $user = $_POST['username'];
 $pass = $_POST['password'];
 $alamat = $_POST['alamat'];
 $tlp = $_POST['tlp'];
 
 $daftar = mysqli_query($kon, "INSERT INTO  t_user SET username='$user', password='$pass', alamat='$alamat',telepon='$tlp'");

 if($daftar){
     echo '<script>
     alert("Terima Kasih Registrasi berhasil");
     window.location.href="login-user.php";
     </script>';
 } else {
     echo "Registrasi Gagal";
 }