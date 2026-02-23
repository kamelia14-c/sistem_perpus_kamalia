<?php 

// buat koneksi ke database
$koneksi = mysqli_connect("localhost","root","","perpustakaan");

// cek koneksi
if (!$koneksi){
    die("Koneksi gagal: ".mysqli_connect_error());
}   