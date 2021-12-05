<?php
    include ('koneksi.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM mahasiswa where id = '$id'";
        $result = mysqli_query($kon, $query);

        if(!$result){
            echo die("Query Error : ".mysqli_errorno($kon)."-".mysqli_errorno($kon));
        }
        $data = mysqli_fetch_assoc($result);

        if(!count($data)){
            echo "<script>alert('Data tidak ada pada tabel!');window.location='index.php'</script>";
        }
    }else{
        echo "<script>alert('Masukkan ID yang ingin diubah!');window.location='index.php'</script>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Praktikum Minggu 7</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center><h1>Edit Data</h1></center>
        <form method= "POST" action="edit_data.php" enctype="multipart/form-data">
            <section class="base">
                <div>
                    <label>NIM</label>
                    <input type="number" name="nim" autofocus="" required="" value="<?php echo $data['nim'];?>" />
                    <input type="hidden" name="id" value="<?php echo $data['id'];?>"/>
                </div>
                <div>
                    <label>Nama</label>
                    <input type="text" name="nama" required="" value="<?php echo $data['nama'];?>"/>
                </div>
                <div>
                    <label>Prodi</label>
                    <select name="prodi" required="" value="<?php echo $data['prodi'];?>"/>
                        <option value="IF">Teknik Informatika</option>
                        <option value="EL">Teknik Elektro</option>
                        <option value="TF">Teknik Fisika</option>
                        <option value="PWK">Perancangan Wilayah dan Kota</option>
                        <option value="AR">Arsitektur</option>
                        <option value="SI">Teknik Sipil</option>
                    </select>
                </div>
                <div>
                    <label>Angkatan</label>
                    <select name="angkatan" required="" value="<?php echo $data['angkatan'];?>"/>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                    </select>
                </div>
                <div>
                    <label>Foto Mahasiswa</label>
                    <img src = "img/<?php echo $data['gambar_mahasiswa'];?>"style ="width: 120px;">
                    <input type="file" name="gambar_mahasiswa" required="" />
                    <i style="float: left;font-size: 11px;color: red;">Masukan foto yang sama jika tidak merubah gambar</i>
                </div>
                <div>
                    <br>
                    <button type="submit">Simpan Perubahan</button>
                </div>
            </section>
        </form>
    </body>
</html>