<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Annur.Net</title>
  </head>
  <body style="background-color:#9D9D9D">

  <div class="container" style="background-color:#ffffff">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top container" style="background-color:#93B5C6;">

        <a href="index.php"><img src="icon_sos/annas.png" width="250px"></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i> HOME</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PROFIL
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="sejarah.php">Sejarah Ponpes</a>
                        <a class="dropdown-item" href="info_pendaftaran.php">Info pendaftaran</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        KARYA SANTRI
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="kcerpen.php">Cerpen</a>
                        <a class="dropdown-item" href="kpuisi.php">Puisi</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="k_artikel.php">ARTIKEL</a>
                    </li>

                    <?php if (!$_SESSION) { ?>
                        
                    <?php } ?>

                    <?php if ($_SESSION) { ?>
                        <li class="nav-item dropdown">
                            <a href="pertanyaan.php" class="nav-link">PERTANYAAN</a>
                        </li>
                    <?php } ?>

                    

                    <?php if (!$_SESSION) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login-user.php">Login</a>
                        </li>
                    <?php } ?>

                    <?php if ($_SESSION) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                <img src="user/img1.png" style="width:30px;">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="kirim_karya.php">Kirim Karya</a>
                                <hr>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>
                    <?php } ?>

                    
                </ul>
                
            </div>
        </nav>