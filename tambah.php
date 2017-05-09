<?php
include "konek.php";
if(isset($_POST['TambahData'])){
		$id = $_POST['id'];
		$merk = $_POST['merk'];
		$tipe = $_POST['tipe'];
		$harga = $_POST['harga'];
			$kon = new KonekDb();
			$kon->TambahData($id, $merk, $tipe, $harga);
}
?>
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
      <form action="tambah.php" method="post">
        <div class="input-field">
          <input type="text" name="id" id="id" class="validate">
          <label>ID</label>
        </div>
        <div class="input-field">
          <input type="text" name="merk" id="merk"  class="validate">
          <label>Merk</label>
        </div>
        <div class="input-field">
          <input type="text" name="tipe" id="tipe"  class="validate">
          <label>Tipe</label>
        </div>
        <div class="input-field">
          <input type="text" name="harga" id="harga"  class="validate">
          <label>Harga Sewa</label>
        </div>
        <div class="input-field">
          <input class="btn waves-effect waves-light" name="TambahData" type="submit" value="Simpan">
        </div>
      
    </form>
    </div>
</div>  

<?php include "addon/footer.php"; ?>

        </div>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>