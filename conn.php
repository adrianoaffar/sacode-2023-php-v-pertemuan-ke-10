<?php
    $servername = 'localhost';
    $username   ='root';
    $password   = '';
    $database   = 'pertemuan10';

    $conn = mysqli_connect($servername, $username, $password, $database);
    $query = "SELECT * FROM tbl_barang";

    $datas = mysqli_query($conn,$query);

    function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}
?>