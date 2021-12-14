<?php 
include('header.php');
include('admin/koneksi.php');

$id=$_GET['id'];
$query=mysqli_query($kon, "SELECT * FROM berita where id_berita='$id' limit 1");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="kbt.php"><span class="badge badge-dark" style="margin-top:120px;">Berita</span></a>

    <h1><?php echo $data[0]['judul']; ?></h1>
    <p style="font-size:small">Oleh <b>Annur Azzubaidi.Net</b> <?php echo $data[0]['tanggal']; ?></p>
    <img src="admin/img/<?php echo $data[0]['cover']; ?>" style="max-width:650px;">

    <div class="row">
        <div class="col-md-8">
            <p align="justify"><?php echo $data[0]['isi_b']; ?></p>
        </div>

        <div class="col-md-4">
            <h5 style="color:#93B5C6;">
                    Posting Terbaru
            </h5>
            <hr>

            <div class="form-group">
                <h6><i>judul<i></h6>
                <p style="font-size:small"><i>tanggal</i></p>
            </div>

        </div>

    </div>
<?php include('footer.php'); ?>