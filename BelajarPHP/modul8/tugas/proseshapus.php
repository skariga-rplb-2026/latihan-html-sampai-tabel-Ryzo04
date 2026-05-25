<?php
require_once __DIR__ . '/bacamahasiswa.php';

$nim = $_POST['nim'] ?? '';
$aksi = $_POST['aksi'] ?? '';

if ($aksi === 'ok' && $nim !== '') {
    hapusmhs($nim);
    header('Location: bacamhs2.php');
    exit;
}

header('Location: hapusmhs.php');
exit;
