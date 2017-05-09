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
<div class="col s12">
<h5><b> <i class="material-icons">airplay</i></b> Daftar Kamera Yang Tersedia</h5><br />
<a href="tambah.php" title="Tambah Data" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">add</i></a>
      <table class="highlight">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="name">Merk</th>
              <th data-field="price">Tipe</th>
              <th data-field="price">Harga Sewa</th>
          </tr>
        </thead>
		<tbody>
<?php
 include "konek.php";
 $kon = new KonekDb();
 echo $kon->TampilData();
?>
        </tbody>
      </table>
</div>
    </div>
  
<?php include "addon/footer.php"; ?>

        </div>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html><?php
if(isset($_GET['id'])){
$kon = new KonekDb(); 
$kon->HapusData($_GET['id']);
} ?>