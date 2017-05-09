<?php
class KonekDb{
	public function __construct(){
		//konek ke mysql server
		$this->mysqli = new mysqli("localhost", "root", "", "sewakam");

		//mengecek jika terjadi gagal koneksi
		if(mysqli_connect_errno()) {
			echo "Error: Could not connect to database. ";
			exit;
		}
	}
	
	function TampilData(){
		$sql = "SELECT * FROM kamera";
		$result = $this->mysqli->query($sql);
		while($row=$result->fetch_assoc()){
		echo "
		<tr>
			<td>".$row['id']."</td>
			<td>".$row['merk']."</td>
			<td>".$row['tipe']."</td>
			<td>Rp ".$row['harga'].",-</td>
			<td>   
				<a class='btn-floating yellow darken-2' href=\"edit.php?id=".$row['id']."\" >
				<i class='material-icons'>mode_edit</i></a>
				<a class='btn-floating waves-effect waves-light red' href=\"index.php?id=".$row['id']."\" >
				<i class='material-icons'>delete</i></a>
			</td>
		 </tr>";
		}
	}
	
	function EditData($id){
	
		$sql = "SELECT * FROM kamera WHERE id='$id'";
		$result = $this->mysqli->query($sql);
		$row=$result->fetch_assoc();
		
		echo"
		<form action='edit.php' method='post'>
        <div class='input-field'>
          <input type='text' name='id' id='id' value=" .$row['id']. " class='validate'>
          <label>ID</label>
        </div>
        <div class='input-field'>
          <input type='text' name='merk' id='merk' value=" .$row['merk']. "  class='validate'>
          <label>Merk</label>
        </div>
        <div class='input-field'>
          <input type='text' name='tipe' id='tipe' value=" .$row['tipe']. "  class='validate'>
          <label>Tipe</label>
        </div>
        <div class='input-field'>
          <input type='text' name='harga' id='harga' value=" .$row['harga']. "  class='validate'>
          <label>Harga</label>
        </div>
        <div class='input-field'>
          <input class='btn waves-effect waves-light' name='UpdateData' type='submit' value='Simpan'>
        </div>
		</form>
		";
	}
	
	function UpdateData($id, $merk, $tipe, $harga){

		$sql = "UPDATE kamera SET merk='$merk', 
 				tipe='$tipe', 
 				harga='$harga'
				WHERE id='$id'";

		$result = $this->mysqli->query($sql);

		if ($result){
			echo"<script>alert('Data Berhasil di Simpan !')</script>";
			echo "<script>window.location ='index.php';</script>";
		} else {
			echo "Terjadi kesalahan";
		}
	}
	
	function TambahData($id, $merk, $tipe, $harga){
		
		$sql = "INSERT INTO kamera (id, merk, tipe, harga)
				VALUES ('$id', '$merk', '$tipe', '$harga')";
				
		$result = $this->mysqli->query($sql);

		if ($result){
			echo"<script>alert('Data Berhasil di Simpan !')</script>";
			echo "<script>window.location ='index.php';</script>";
		} else {
			echo"<script>alert('Maaf, Data Tidak Dapat di Simpan !')</script>";
			echo "<script>window.location ='index.php';</script>";
		}
	}
	
	function HapusData($id){
	
		$sql = "DELETE FROM kamera WHERE id='$id'";
		$result = $this->mysqli->query($sql);

		if ($result){
			echo"<script>alert('Data Berhasil di Hapus !')</script>";
			echo "<script>window.location ='index.php';</script>";
		} else {
			echo "Terjadi kesalahan";
		}
	}
	
}
?>