<?php
    session_start();
    include('admin/koneksi.php');
    if(!$_SESSION){
                    $username = $_POST['username'];
                    $password = $_POST['pass'];
                    $query = mysqli_query($kon, "SELECT * FROM t_user where username='$username'
                        AND password='$password'");
                    $user = mysqli_fetch_all($query, MYSQLI_ASSOC);

                    if($user) 
                    {
                        $_SESSION['username'] = $user[0]['username'];
                        $_SESSION['alamat'] = $user[0]['alamat'];
                        $_SESSION['tlp'] = $user[0]['tlp'];

                        header('location:index.php');

                    } else {
                        echo "Username dan Password Salah";
                    }

                } else {
                    header('location:index.php');
                }
?>