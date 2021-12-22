<?php 
include('header.php');
include('admin/koneksi.php');

$query= mysqli_query($kon,"SELECT * FROM profil_ponpes");
$data= mysqli_fetch_all($query ,MYSQLI_ASSOC);
?>

<div class="card" style="margin-top: 105px; ">
<div class="row"></div> 
    <img src="profil/annur.jpg">
</div>
<div class="shadow p-3 mt-3 bg-white rounded">
    <div class="card">
        <div class="card-body">
            <h3 style="text-align:center">SEJARAH PONDOK PESANTREN ANNUR AZZUBAIDI</h3>
        </div>
    </div>
</div>
<div class="card mt-2" style="width:650px; left:250px;">
    <div class="card-body">
        <?php foreach ($data as $row) { ?>
            <p style="padding:10px">
                <?php echo $row['sejarah']; ?>
            </p>
        <?php } ?>
    </div>
</div>

<?php include('footer.php'); ?>