<?php
    include "connection.php";

    $sql=$conn->query("select * from mahasiswa where nim='".$_POST['nim']."'");
    $jml=$sql->num_rows;
    if($jml>0){
        $conn->query("update mahasiswa set nama='".$_POST['nama']."',prodi='".$_POST['prodi']."',angkatan='".$_POST['angkatan']."' where nim='".$_POST['nim']."'");
    }else{
        $conn->query("insert into mahasiswa(nim,nama,prodi,angkatan) values('".$_POST['nim']."','".$_POST['nama']."','".$_POST['prodi']."','".$_POST['angkatan']."')");
    }
?>