<?php
echo "<b><i>=====OPERATOR LOGIKA=====</i></b>";
echo "<br><br></br>";
echo "<b>JENIS-JENIS OPERATOR LOGIKA</b><br>";
echo "<b>AND &&</b>,TRUE jika kedua nilai yang dibandingkan TRUE<br>";
echo "<b>OR ||</b>, TRUE jika salah satu nilai yang dibandingkan juga TRUE<br>";
echo "<b>NOT ! </b>, untuk mengidentifikasi dari suatu kondisi<br>";
echo "<b>XOR </b>, kondisi salah jika kedua-duanya sama<br><br>";

echo "+++++Contoh penggunaan <b>operator logika</b>+++++<br>";

$username = "umi";
$pass = "020";
echo "Diketahui bahwa username = $username dan password = $pass<br>";

echo "Jika memberikan inputan username imu dan pass 020, maka hasilnya : ";
if ($username=="imu" && $pass=="020") 
{
	echo "<b>Sukses Login </b><br>";
}
else
{
	echo "<b>Gagal Login </b><br>";
}

echo "Jika memberikan inputan username imu atau pass 020, maka hasilnya : ";
if ($username=="imu" || $pass=="020") 
{	
	echo "<b>Sukses Login </b><br>";
}
else
{
	echo "<b>Gagal Login </b><br>";
}

?>