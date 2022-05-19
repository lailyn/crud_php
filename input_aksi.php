<?php 
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];

$kirim = mysqli_query($conn,"INSERT INTO tabel_mhs VALUES ('$nim','$nama','$prodi')");
if($kirim){
	echo "
	<script>
		alert('Data berhasil disimpan');		
		window.location.href='input.php';
	</script>
	";
}else{
	echo "
	<script>
		alert('Gagal simpan');		
		history.go(-1);
	</script>
	";
}
?>