<?php 
include('header.php');
include('koneksi.php');

$query=mysqli_query($kon, "SELECT karya_santri.judul, karya_santri.tanggal, karya_santri.id_karya, t_user.username 
FROM karya_santri INNER JOIN t_user on t_user.id_user = karya_santri.id_user where kategori='puisi'");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<h4 class="mt-2">Data Puisi Santri</h4>
<hr>
<a href="tambah-puisi.php" class="btn btn-success">Tambah Data</a>
<table border="1" class="table table-hover mt-2">

    <tr style="text-align:center;">
        <th >No</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    <?php $nomor=1; 
    foreach ($data as $row) { ?>
    <tr>
        <td style="text-align:center;"><?php echo $nomor ?></td>
        <td><?php echo $row['judul']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['tanggal']; ?></td>
        <td style="text-align:center;">
            <a href="detail_puisi.php?id=<?php echo $row['id_karya']; ?>" class="btn btn-primary">Detail</a>
        </td>
    </tr>
    <?php $nomor++; } ?>
    
</table>


<?php
include('footer.php');
?>