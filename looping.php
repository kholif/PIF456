<?php
echo "<b><i>=====PERULANGAN (LOOPING)=====</i></b>";
echo "<br><br><br>";
echo "<b>JENIS-JENIS PERULANGAN</b>";
echo "<br>";
echo "<b>FOR</b>";
echo "<br>";
echo "<b>WHILE</b>";
echo "<br>";
echo "<b>DO WHILE</b>";
echo "<br>";
echo "<b>For Each</b>";
echo "<br><br>";

echo "++++Contoh Perulangan <b>FOR+++++</b><br>";
echo "Contoh 1<br>";
echo "menggunakan for (i = 1; i <= 10; i++)= ";
 for ($i = 1; $i <= 10; $i++) {
	echo "$i";
}
echo "<br>";
echo "Contoh 2 <br>";
echo "Menggunakan for (i=1;;i++)<br>";
echo "if (i > 10)<br>";
for ($i = 1;;$i++) {
	if ($i > 10) {
		break;
}
	echo "$i";
}
echo "<br><br>";

echo "+++++Contoh Perulangan <b>WHILE</b>+++++<br>";
echo "menggunakan i = 1<br>";
echo "while (i<=6) { <br>";
$i = 1;
while ($i <= 6) {
	echo "<h$i>Heading $i</h$i>";
	$i++;
}
echo "<br><br>";
echo "+++++Contoh Perulangan <b>DO-WHILE</b> menampilkan bilangan ganjil 1 sampai 20+++++<br>";
$i = 1;
do {
	echo "$i ";
	$i+=2;
}while ($i <= 20);

?>