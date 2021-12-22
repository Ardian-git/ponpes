<?php 
include('header.php');
include('admin/koneksi.php');

$id=$_GET['id'];
$query=mysqli_query($kon, "SELECT * FROM artikel where id_artikel='$id' limit 1");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);

$id= $_SESSION['username'];

$query = mysqli_query($kon, "SELECT id_user FROM t_user where username='$id' ");
$data1 = mysqli_fetch_all($query, MYSQLI_ASSOC);
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
    <a href="k_artikel.php"><span class="badge badge-dark" style="margin-top:120px;">Artikel</span></a>

    <h1><?php echo $data[0]['judul']; ?></h1>
    <p style="font-size:small">Oleh <b>Annur Azzubaidi.Net</b> <?php echo $data[0]['tanggal']; ?></p>
    <img src="admin/ti_img/<?php echo $data[0]['cover']; ?>" style="max-width:500px;">
    <p style="font-size:small"><i>Oleh : <?php echo $data[0]['penulis']; ?></i></p>

    <div class="row">
        <div class="col-md-8">
            <p align="justify"><?php echo $data[0]['isi_a']; ?></p>
        </div>

        <div class="col-md-4">
            
            <div class="card">
                <div class="card-body" style="background:#EDEDED;">
                    <h5 style="color:#93B5C6;">
                        Kolom komentar
                    </h5>
                    <hr>

                    <?php if(!$_SESSION) { ?>
                        <p>login untuk komentar</p>
                    <?php } ?>

                    <?php if($_SESSION) { ?>
                    <form action="simpan_komen.php" method="POST">
                        <div class="form-group">
                            <textarea name="komen" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="text" name="id_artikel" class="form-control" value="<?php echo $data[0]['id_artikel']; ?>">
                        </div>

                        <div class="form-group">
                            <input type="text" name="id_user" class="form-control" value="<?php echo $data1[0]['id_user']; ?>">
                        </div>

                        <div class="form-group">
                            <input type="date" name="tanggal" value="date(mm/dd/yy)" class="form-control">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success">Kirim</button>
                        </div>
                    </form>
                    <?php } ?>
                    
                </div>
            </div>

        </div>

    </div>
<?php include('footer.php'); ?>