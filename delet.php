<?php
    include "connection.php";
    $conn->query("delete from mahasiswa where nim='$_GET[nim]'");
?>