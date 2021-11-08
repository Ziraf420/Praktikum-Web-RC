<?php

echo "Menampilkan Bilangan Prima dar 1 sampai 50";

echo "<br/>";

$angka_akhir=50;
$angka_awal=1;

for ($i = $angka_awal ; $i <= $angka_akhir; $i++){

    $faktor=0;
    for($n=1;$n<=$i;$n++){
        if($i%$n==0){
            $faktor++;
        }
    }
    if($faktor==2){
        echo "Bilangan Prima : ".$i."<br/>";
    }
}
?>