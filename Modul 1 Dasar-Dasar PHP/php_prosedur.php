<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns = "http://www.w3.org/1999/xhtml" xml :  lang="en" lang=""en>
<head>
	<title>Prosedur</title>
</head>

<body>

<?php
//Contoh prosedur
function do_print () {
	//Mencetak informasi 
	echo time();
}

//Memanggil prosedur
do_print ();

//Contoh fungsi penjumlahan 
function jumlah ($a, $b) {
	return ($a+$b);
}

echo jumlah (2,3);
//output : 5
?>

</body>
</html>