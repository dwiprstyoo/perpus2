<?php 
$koneksi = mysqli_connect("localhost","root","","perpusmatrik");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

function say($pesan, $lokasi){
	$a = "
			<script>
			window.alert('$pesan');
			window.location='$lokasi';
			</script>
		";
		return $a;
}

function get(){
	$query = 'select * from perpusmatrik';
	$data = mysqli_fetch_array($koneksi, $query);

	return $data;
}
	
?>