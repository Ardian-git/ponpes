<?php 
include('header.php');
include('koneksi.php');

$query=mysqli_query($kon, "SELECT * FROM t_info_pendaftaran ");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<h4 class="mt-2">Data Info Pendaftaran</h4>
<hr>
<a href="tambah_info.php" class="btn btn-success">Tambah Data</a>
<table border="1" class="table table-hover mt-2">

    <tr style="text-align:center;">
        <th >No</th>
        <th>Deskripsi</th>
        <th>cover</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    <?php $nomor=1; 
    foreach ($data as $row) { ?> 
    <tr>
        <td style="text-align:center;"><?php echo $nomor ?></td>
        <td><?php echo $row['deskripsi']; ?></td>
        <td><img src="../info_p/<?php echo $row['cover']; ?>" style="max-width:100px"></td>
        <td><?php echo $row['tanggal']; ?></td>
        <td style="text-align:center;">
            <a href="detail_info.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Detail</a>
        </td>
    </tr>
    <?php $nomor++; } ?>
    
</table>


<?php
include('footer.php');
?>