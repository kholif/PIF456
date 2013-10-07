<?php

echo "<b><i>=====OPERASI ARITMATIKA=====</i></b>";
echo "<br><br>";
echo "<b>JENIS-JENIS OPERASI</b><br>";
echo "<b>+ (penjumlahan)</b><br>";
echo "<b>- (pengurangan)</b><br>";
echo "<b>* (perkalian)</b><br>";
echo "<b>/ (pembagian)</b><br>";
echo "<b>% (modulus/sisa hasil bagi)</b><br>";
echo "<br><br><br>";
	$penjumlahan = 2+10;
	$pengurangan = 7-2;
	$perkalian = 5*14;
	$pembagian = 25/5;
	$modulus = 5%2;
echo "+++++Contoh operasi aritmatika+++++<br>";
echo "Menampilkan penjumlahan : 2 + 12 = ".$penjumlahan. "<br>";
echo "Menampilkan pengurangan : 7 - 2 = ".$pengurangan. "<br>";
echo "Menampilkan perkalian : 5 * 14 = " .$perkalian. "<br>";
echo "Menampilkan pembagian : 25 : 5 = " .$pembagian. "<br>";
echo "Menampilkan modulus : 5 % 2 = ".$modulus."<br>";
echo "<br><br>";

echo "+++++Contoh <b>operasi arimatika hitung luas persegi panjang</b>+++++<br>";
	$panjang = 10;
	echo "panjang = $panjang <br>";
	$lebar = 5;
	echo "lebar = $lebar <br>";
	$keliling = (2*$panjang)+(2*$lebar); 
	$luas = $panjang * $lebar; 
echo "luas = panjang * lebar = $luas <br>";
echo "keliling = 2(panjang+lebar) = $keliling <br>";

?>