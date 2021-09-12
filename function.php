<?php

function bilangHalo () {
    echo 'Halo';
}

function bilangNama($nama)
{
    echo 'Halo' . $nama . '</br>';
}

bilangNama('Dani');
bilangNama('Keyboard');

bilangHalo();
?>