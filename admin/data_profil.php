<?php 
include('header.php');
include('koneksi.php');

$query=mysqli_query($kon, "SELECT * FROM profil_ponpes ");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<h4 class="mt-2">Data Profil</h4>
<hr>
<a href="tambah_profil.php" class="btn btn-success">Tambah Data</a>
<table border="1" class="table table-hover mt-2">

    <tr>
        <th>Jenis</th>
        <th>Isi</th>
            
    </tr>
    <?php foreach ($data as $row) { ?>
    <tr>
        <th>Sejarah</th>
        <td><?php echo $row['sejarah'] ?></td>
    </tr>
    <?php } ?>
    
    
    
</table>


<?php
include('footer.php');
?>