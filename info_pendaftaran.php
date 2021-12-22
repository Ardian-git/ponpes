<?php 
include('header.php');
include('admin/koneksi.php');

$query=mysqli_query($kon, "SELECT * FROM t_info_pendaftaran");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<br>
<div class="shadow p-3 bg-white rounded" style="margin-top:100px">
    <div class="card">
        <div class="card-body">
            <h3 style="text-align:center">INFO PENDAFTARAN SANTRI BARU</h3>
        </div>
    </div>
</div>

<?php foreach($data as $row) { ?>
    <div class="card mt-2" style="width:650px; left:250px;">
        <h5>Tanggal <?php echo $row['tanggal']; ?></h5>
        <img src="info_p/<?php echo $row['cover']; ?>">
        <p><?php echo $row['deskripsi']; ?></p>
    </div>
<?php } ?>


<?php include('footer.php') ?>