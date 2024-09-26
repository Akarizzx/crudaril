<?php

$host="sql100.infinityfree.com";
$user="if0_37286662";
$password="G2KnFftHaob61n";
$db="if0_37286662_crud";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
?>