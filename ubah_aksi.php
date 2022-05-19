<?php 
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$kirim = mysqli_query($conn,"UPDATE tabel_mhs SET nama = '$nama',prodi='$prodi' WHERE nim = '$nim'");
if($kirim){
	echo "
	<script>
		alert('Data berhasil diubah');		
		window.location.href='index.php';
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