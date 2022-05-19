<?php 
include "koneksi.php";
$nim =$_GET['nim'];
mysqli_query($conn,"DELETE FROM tabel_mhs WHERE nim = '$nim'");
echo "
<script>
	alert('Data berhasil dihapus');
	window.location.href='index.php';
</script>
";
?>