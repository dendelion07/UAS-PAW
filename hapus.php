<?php 

require 'function.php';
 
$id = $_GET["id"];

if( hapus($id) > 0 ) {
	echo "
			<script>
				alert('Film berhasil di hapus');
				document.location.href = 'genre.php';
			</script>
		";
} else {
		echo "
			<script>
				alert('Film gagal di hapus');
				document.location.href = 'genre.php';
			</script>
		";
	}

 ?>