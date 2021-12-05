<?php
    $kon = new mysqli("localhost","root","","data_base_mg7");
    if(!$kon){
        echo "Gagal Koneksi";
        exit();
    }
?>