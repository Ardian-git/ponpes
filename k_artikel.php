<?php 
include('admin/koneksi.php');
include('header.php');

$query=mysqli_query($kon, "SELECT * FROM artikel");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timba Ilmu</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid" style="margin-top:85px;">
      <div class="container">
        <h1 class="display-4" style="text-align:center;">Kisah Inspiratif</h1> 
      </div>
    </div>

    <?php foreach($data as $row) { ?>
    <div class="row mt-3">
      <div class="col-md-2">
        <img src="admin/ti_img/<?php echo $row['cover']; ?>" width="180px">
      </div>

      <div class="col-md-10">
        <h4><a href="artikel.php?id=<?php echo $row['id_artikel']; ?>" style="color:black;"><?php echo $row['judul']; ?></a></h4>
        <p style="font-size:small padding:5px;"><a href="k_artikel.php"><span class="badge badge-dark">Timba ilmu</span></a> <?php echo $row['tanggal']; ?></p>
      </div>
    </div>
    <?php } ?>
<?php include('footer.php') ?>