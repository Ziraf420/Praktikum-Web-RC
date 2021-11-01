<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <h2>Show Data Mahasiswa</h2>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th colspan="2">Action</th>
        </tr>

    <?php
    $sql=$conn->query("select * from mahasiswa");
    while($mhs=$sql->fetch_object()){
    ?>  

        <tr>
            <td><?php echo $mhs->nim; ?></td>
            <td><?php echo $mhs->nama; ?></td>
            <td><?php echo $mhs->prodi; ?></td>
            <td><?php echo $mhs->angkatan; ?></td>
            <td><a href="javascript:void()" onclick="update('<?php echo $mhs->nim; ?>')">EDIT</a></td>
            <td><a href="javascript:void()" onclick="del('<?php echo $mhs->nim; ?>')">DELETE</a></td>
        </tr> 

    <?php } ?>
    </table>
    <script>
    function update(nim){
        $.get("update.php", {nim},function(data) {
            $("#content").html(data); 
        });
    }

    function del(nim){
        $.get("delete.php", {nim}, function(data) {
            showData()
        });
    }
    </script>
</body>
</html>