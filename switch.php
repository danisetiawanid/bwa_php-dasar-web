<?php
$warna = "Merah";
// $warna = ""; // kalo kosong dia akan ke default
switch ($warna) {
    case 'Merah':
        echo "Berhenti";
        break;
    case 'Kuning':
        echo "Hati - Hati";
        break;
    case 'Hijau':
        echo "Maju";
        break;
    default:
        echo "Lampu Rusak";
        break;
}
