<?php
session_start();

// Inisialisasi data buku (Array Asosiatif) jika belum ada
if (!isset($_SESSION['katalog'])) {
    $_SESSION['katalog'] = [
        ['id' => 1, 'judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'status' => 'Tersedia'],
        ['id' => 2, 'judul' => 'Filosofi Teras', 'penulis' => 'Henry Manampiring', 'status' => 'Tersedia']
    ];
}

// Akun login dummy
$user_admin = [
    'username' => 'admin',
    'password' => '123'
];
?>