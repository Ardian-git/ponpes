<?php 
include('header.php');

$query=mysqli_query($kon, "SELECT pertanyaan.isi_p, pertanyaan.tanggal, pertanyaan.id_p, t_user.username 
from pertanyaan inner join t_user on t_user.id_user=pertanyaan.id_user ");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<h4 class="mt-2">Data Komentar</h4>
<hr>
<a href="tambah-berita.php" class="btn btn-success">Tambah Data</a>
<table border="1" class="table table-hover mt-2">
    <tr style="text-align:center;">
        <th>No</th>
        <th>komentar</th>
        <th>pengirim</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    <?php $nomor=1;
    foreach($data as $row) { ?>
    <tr>
        <td><?php echo $nomor ?></td>
        <td><?php echo $row['isi_p'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['tanggal'] ?></td>
        <td>
            <a href="j_komen.php?id=<?php echo $row['id_p']; ?>" class="btn btn-primary">Jawab</a>
            <a href="j_komen.php?id=<?php echo $row['id_p']; ?>" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    <?php $nomor++; } ?>
</table>


<?php
include('footer.php');
?>