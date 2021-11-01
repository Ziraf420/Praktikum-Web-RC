<?php
    include "connection.php";
    if(isset($_GET['nim'])){
        $nim=$_GET['nim'];
    }else{
        $nim="";
    }

    $nama="";
    $prodi="";
    $angkatan="";

    $sql=$conn->query("select * from mahasiswa where nim='$nim'");
    while($mhs=$sql->fetch_object()){
        $nama=$mhs->nama;
        $prodi=$mhs->prodi;
        $angkatan=$mhs->angkatan;
    } 
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta chamhset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h3>Create Data Form</h3>
    <form id="form" onsubmit="save(); return false;">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="number" name="nim" value="<?php echo $nim;?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td><input type="text" name="prodi" value="<?php echo $prodi;?>"></td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td><input type="number" name="angkatan" value="<?php echo $angkatan;?>"></td>
            </tr>

        </table>
        <button type="submit" value="save">Create</button>
    </form>
    <script>
        function save(){
            $.ajax({
                type: "POST",
                url: "save.php",
                data: $("#form").serialize(),
                success: function(data) {
                    showData();
                },
                error: function() {
                    alert('error handling here');
                }
            });
        }
    </script>
</body>
</html>