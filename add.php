<?php
    include ('koneksi.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Praktikum Minggu 7</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center><h1>Tambah Data</h1></center>
        <form method= "POST" action="add_data.php" enctype="multipart/form-data">
            <section class="base">
                <div>
                    <label>NIM</label>
                    <input type="number" name="nim" autofocus="" required="" />
                </div>
                <div>
                    <label>Nama</label>
                    <input type="text" name="nama" required="" />
                </div>
                <div>
                    <label>Prodi</label>
                    <select name="prodi" required="" />
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
                    <select name="angkatan" required="" />
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
                    <input type="file" name="gambar_mahasiswa" required="" />
                </div>
                <div>
                    <button type="submit">Simpan Data</button>
                </div>
            </section>
        </form>
    </body>
</html>