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
                        echo '<script>
                            alert("username atau password salah");
                            window.location.href="login-user.php";
                            </script>';
                    }

                } else {
                    header('location:index.php');
                }
?>