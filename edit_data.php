<?php
    include ('koneksi.php');

    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $angkatan = $_POST['angkatan'];
    $gambar_mahasiswa = $_FILES['gambar_mahasiswa']['name'];

    if($gambar_mahasiswa !=""){
        $jenis_gambar = array('png', 'jpg', 'jpeg');
        $x = explode('.', $gambar_mahasiswa);
        $jenis = strtolower(end($x));
        $file_tmp = $_FILES['gambar_mahasiswa']['tmp_name'];
        $acak = rand(1,999);
        $nama_gambar_baru = $acak.'-'.$gambar_mahasiswa;

        if(in_array($jenis, $jenis_gambar) === true ){
            move_uploaded_file($file_tmp, 'img/'.$nama_gambar_baru);

            $query = "UPDATE mahasiswa SET nim=".$nim.",nama='".$nama."',prodi='".$prodi."',angkatan=".$angkatan." WHERE id=".$id;
            $result = mysqli_query($kon, $query);
            
            if(!$result){
                echo die("Query Error : ".mysqli_errorno($kon)."-".mysqli_errorno($kon));
            }else{
                echo "<script>alert('Data telah diubah!');window.location='index.php';</script>";
            }
        }else{
            echo "<script>alert('hanya bisa file png,jpg dan jpeg!');window.location='tambah.php';</script>";
        }
    }else{
            $query = "UPDATE mahasiswa SET nim=".$nim.",nama='".$nama."',prodi='".$prodi."',angkatan=".$angkatan." WHERE id=".$id;
            $result = mysqli_query($kon, $query);
            
            if(!$result){
                echo die("Query Error : ".mysqli_errorno($kon)."-".mysqli_errorno($kon));
            }else{
                echo "<script>alert('Data telah diubah!');window.location='index.php';</script>";
            }
    }
?>