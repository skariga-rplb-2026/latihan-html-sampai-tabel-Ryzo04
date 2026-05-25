<?php
require_once __DIR__ . '/crudmk.php';

$kode = $_POST['kode'] ?? '';
$aksi = $_POST['aksi'] ?? '';

if ($aksi === 'ok' && $kode !== '') {
    hapusMk($kode);
    header('Location: bacamk.php');
    exit;
}

header('Location: hapusmk.php');
exit;
