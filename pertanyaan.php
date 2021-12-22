<?php

include('header.php');
include('admin/koneksi.php');

$id= $_SESSION['id_user'];

$query = mysqli_query($kon, "SELECT pertanyaan.isi_p, pertanyaan.jawaban, pertanyaan.tanggal, pertanyaan.id_p, t_user.username, artikel.id_artikel
from pertanyaan inner join t_user on t_user.id_user=pertanyaan.id_user inner join artikel on artikel.id_artikel = pertanyaan.id_artikel");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

    <div class="jumbotron jumbotron-fluid" style="margin-top:85px;">
      <div class="container">
        <h1 class="display-4" style="text-align:center;"><b>Pertanyaan anda : <?php echo $_SESSION['username']; ?></b></h1> 
      </div>
    </div>
<?php foreach($data as $row) { ?>
<div class="card mt-2">
    <div class="card-body">
        <h3>
            pertanyaan :
        </h3>
        <p>
            <?php echo $row['isi_p']; ?>
        </p>

        <h3>
            jawaban :
        </h3>
        <p>
            <?php echo $row['jawaban']; ?>
        </p>

        <a href="artikel.php?id=<?php echo $row['id_artikel']; ?>" class="btn btn-primary">Lihat Artikel</a>
    </div>
</div>
<?php } ?>

<?php include('footer.php'); ?>