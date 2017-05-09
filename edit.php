<!DOCTYPE HTML>
<html>
<?php include "addon/header.php"; ?>
<body>
<div class="container">
<div class="col s12">
<nav>
    <div class="nav-wrapper blue darken-1">
      <a href="index.php" class="brand-logo" style="margin-left: 10px;"> Rental Kamera</a>
    </div>
  </nav>
</div>
<br />
<div class="row">
<div class="col s6">
<h5><b> <i class="material-icons">airplay</i></b> Silahkan Masukan Data</h5><br />
	  <?php
		include "konek.php";
		if(isset($_GET['id'])){
		$kon = new KonekDb();
		$kon->EditData($_GET['id']);
		?>
    </div>
</div>  

<?php include "addon/footer.php"; ?>

        </div>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
<?php
}
if(isset($_POST['UpdateData'])){
		$id = $_POST['id'];
		$merk = $_POST['merk'];
		$tipe = $_POST['tipe'];
		$harga = $_POST['harga'];
		$kon = new KonekDb();
		$kon->UpdateData($id, $merk, $tipe, $harga);
}
?>