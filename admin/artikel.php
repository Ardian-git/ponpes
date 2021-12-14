<?php 
include('header.php');
include('koneksi.php');

$query=mysqli_query($kon, "SELECT * FROM artikel");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<h4 class="mt-2">Data Artikel</h4>
<hr>
<a href="tambah_artikel.php" class="btn btn-success">Tambah Data</a>
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
        <td><?php echo $row['penulis']; ?></td>
        <td><?php echo $row['tanggal']; ?></td>
        <td style="text-align:center;">
            <a href="detail_artikel.php?id=<?php echo $row['id_artikel']; ?>" class="btn btn-primary">Detail</a>
        </td>
    </tr>
    <?php $nomor++; } ?>
    
</table>


<?php
include('footer.php');
?>