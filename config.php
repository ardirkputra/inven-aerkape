<?php


date_default_timezone_set('Asia/Jakarta');

$host   = 'localhost';
$user   = 'root';
$pass   = '';
$dbname = 'db_inventaris';

$conn = mysqli_connect($host, $user, $pass,$dbname);


// if  (mysqli_connect_errno()){
//     echo "gagal koneksi ke database";
//     exit();
// }   else {
//     echo "Berhasil masuk data base";

// }


$main_url = 'http://localhost/inventaris/';


?> 