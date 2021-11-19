<?php

    class Buah{
        var $nama;
        var $banyak;

        public function __construct($nama, $banyak){
            $this->nama = $nama;
            $this->banyak = $banyak;
        }

        public function getBanyak(){
            return $this->banyak;
        }
    }

    class Mangga extends Buah{
        var $harga;
        var $totalHarga;

        public function __construct($banyak){
            parent::__construct("Mangga", $banyak);
            $this->harga = 15000;
            $this->totalHarga = $this->harga * $banyak;
        }

        public function info(){
            echo "{$this->nama} - - {$this->banyak} - - {$this->harga} - - {$this->totalHarga}";
        }
    }

    class Jambu extends Buah{
        var $harga;
        var $totalHarga;

        public function __construct($banyak){
            parent::__construct("Jambu", $banyak);
            $this->harga = 13000;
            $this->totalHarga = $this->harga * $banyak;
        }

        public function info(){
            echo "{$this->nama} - - {$this->banyak} - - {$this->harga} - - {$this->totalHarga}";
        }
    }

    class Salak extends Buah{
        var $harga;
        var $totalHarga;

        public function __construct($banyak){
            parent::__construct("Salak", $banyak);
            $this->harga = 10000;
            $this->totalHarga = $this->harga * $banyak;
        }

        public function info(){
            echo "{$this->nama} - - {$this->banyak} - - {$this->harga} - - {$this->totalHarga}";
        }
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 6 | 119140199</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="all-contents">
    <form action="" method="post">
        <table>
            <h1>Perhitungan Anggaran Belanjaan</h1><br><hr><br>
            <tr>
                <td>Buah</td>
                <td>Harga/kg</td>
                <td>Jumlah/kg</td>
            </tr>
            <tr>
                <td>Mangga</td>
                <td>IDR 15.000</td>
                <td><input id="Mangga" type="number" name="Mangga" value="0" min="0" required></td>
            </tr>
            <tr>
                <td>Jambu</td>
                <td>IDR 13.000</td>
                <td><input id="Jambu" type="number" name="Jambu" value="0" min="0" required></td>
            </tr>
            <tr>
                <td>Salak</td>
                <td>IDR 10.000</td>
                <td><input id="Salak" type="number" name="Salak" value="0" min="0" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit" onsubmit="totalSemua()" >Submit</button></td>
            </tr>
        </table>
        <br><hr><br>
    </form>
        <div id="ntar">

        </div>
        <?php
        
            if(isset($_POST['submit']))
            {
                $mangga=$_POST['Mangga'];
                $jambu=$_POST['Jambu'];
                $salak=$_POST['Salak'];

                
                $tes1 = new Mangga($mangga);
                echo "<a> {$tes1->info()} </a>";
                $tes2 = new Jambu($jambu);
                $tes2->info();
                $tes3 = new Salak($salak);
                $tes3->info();
                echo "<br>BERHASIL";
                $semuanya = $tes1->getBanyak()*15000 + $tes2->getBanyak()*13000 + $tes3->getBanyak()*10000;
                echo "<br>TOTAL HARGA : {$semuanya} ";
            }

        ?>
        <script>
            function totalSemua(){
                var banyakMangga = document.getElementById("Mangga").value;
                var banyakJambu = document.getElementById("Jambu").value;
                var banyakSalak = document.getElementById("Salak").value;
                
                let totalHargaSemua = banyakMangga + banyakJambu + banyakSalak;

                isinya = "<p> Banyak mangga yang dibeli : " + totalHargaSemua + "</p>";

                var isiPrint = document.getElementByID("ntar");
                isiPrint.innerHTML = isinya;
            }
        </script>
    </div>
    
</body>
</html>