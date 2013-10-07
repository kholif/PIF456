<?php
echo "<b><i>=====OPERASI KONDISI=====</i></b><br><br>";
echo "<b>JENIS-JENIS OPERASI KONDISI</b><br>";
echo "<b>IF</b>, kondisi dimana statemen atau variabel yang akan diperiksa TRUE atau FALSEnya<br>";
echo "<b>IF ELSE</b>, kondisi dimana statemen atau variabel yang akan diperiksa TRUE atau FALSE, Jika TRUE maka statemen yang berada di blok if akan dieksekusi, jika kondisinya FALSE maka statemen yang berada di blok else yang akan dieksekusi <br>";
echo "</b>SWITCH CASE, menangani pengambilan keputusan yang melibatkan sejumlah banyak alternative</b><br><br>";

echo "+++++Contoh penggunaan <b>IF</b>+++++<br>";
	$nilai = 87;
echo "Pada suatu nilai ujian KKM dari suatu mapel adalah 80 <br>";
echo "Nilai Mila = $nilai, maka hasil yang didapatkan Mila : ";
	if ($nilai >=80) {
		echo "Nilai Anda $nilai, Anda memenuhi KKM <br>";
}
echo "<br>";

echo "+++++Contoh Penggunaan <b>IF...ELSE</b>+++++<br>";
$nilai = 67;
echo "Pada suatu nilai ujian KKM dari suatu mapel adalah 80. Jika belum memenuhi KKM maka akan diikutkan remidi, jika sudah memenuhi KKM akan ikut pengayaan<br>";
echo "Nilai Dila = $nilai, maka hasil yang didapatkan Dila : ";
if ($nilai >= 80) {
	echo "Nilai Anda $nilai, Anda mengikuti PENGAYAAN <br>";
} else {
	echo "Nilai Anda $nilai, Anda mengikuti REMIDI <br>";
}

echo "<br>";
echo "+++++Contoh Penggunaan <b>SWITCH CASE</b>+++++<br>";
$day = date ("D");
switch ($day) {
	case 'Sun' : $hari = "Minggu"; break;
	case 'Mon' : $hari = "Senin"; break;
	case 'Tue' : $hari = "Selasa"; break;
	case 'Wed' : $hari = "Rabu"; break;
	case 'Thu' : $hari = "Kamis"; break;
	case 'Fri' : $hari = "Jumat"; break;
	case 'Sat' : $hari = "Sabtu"; break;
	default    : $hari = "Happy day"; 
}
echo "Hari ini hari <b>$hari</b>";
?>