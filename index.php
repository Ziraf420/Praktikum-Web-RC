<?php
    include ('koneksi.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Praktikum Minggu 7</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center><h1>Data Mahasiswa</h1></center>
        <center><a href="add.php">+ Tambah Produk</a></center>
        <br>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Angkatan</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM mhs_db ORDER BY id ASC";
                    $result = mysqli_query($kon, $query);
                
                    if(!$result){
                        die("Query Error : ".mysqli_errorno($kon)."-".mysqli_errorno($kon));
                    }
                    $no = 1;

                    while ($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['nim']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['prodi']; ?></td>
                    <td><?php echo $row['angkatan']; ?></td>
                    <td><img style="width: 120px;" src="img/<?php echo $row['gambar_mahasiswa'];?>"></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>"onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php
                    $no++;
                
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>