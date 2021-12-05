<?php
    include ('koneksi.php');

    $id = $_GET['id'];
    $query = "DELETE FROM mahasiswa WHERE id=".$id;
    $result = mysqli_query($kon, $query);

    if(!$result){
        die("Query Error : ".mysqli_errorno($kon)."-".mysqli_errorno($kon));
    }else{
        echo "<script>alert('Data berhasil dihapus!');window.location='index.php';</script>";
    }
?>