<?php
include('header.php'); 
include('koneksi.php');

$id=$_GET['id'];
$query=mysqli_query($kon, "SELECT karya_santri.judul, karya_santri.isi_k, karya_santri.cover, karya_santri.tanggal, karya_santri.id_karya, t_user.username, t_user.telepon
FROM karya_santri INNER JOIN t_user on t_user.id_user = karya_santri.id_user where id_karya='$id'");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);

?>


    <h1>Halaman Detail Puisi</h1>
    <hr>

    <h3>Penulis : <?php echo $data[0]['username']; ?> | Nomor telepon : <?php echo $data[0]['telepon']; ?></h3>

    <table border="1" class="table table-hover mt-2">
        <tr>
            <th>Id</th>
            <td colspan="3"><?php echo $data[0]['id_karya']; ?></td>
        </tr>

        <tr>
            <th>Cover</th>
            <td colspan="3"><img src="img_kry/<?php echo $data[0]['cover']; ?>" style="max-width:100px"></td>
        </tr>

        <tr>
            <th>Judul</th>
            <td colspan="3"><?php echo $data[0]['judul']; ?></td>
        </tr>

        
        <tr>
            <th>Deskripsi</th>
            <td colspan="3"><?php echo $data[0]['isi_k']; ?></td>
        </tr>

        <tr>
            <th>Tanggal</th>
            <td colspan="3"><?php echo $data[0]['tanggal']; ?></td>
        </tr>


    </table>
    <a href="edit_puisi.php?id=<?php echo $data[0]['id_karya']; ?>" class="btn btn-success">Edit</a> |
    <a href="hapus_karya.php?id=<?php echo $data[0]['id_karya']; ?>" class="btn btn-danger">Hapus</a> |
    <a href="puisi.php" class="btn btn-dark">Kembali</a>


<?php include('footer.php'); ?>