<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Studi Kasus 1 == Penanganan Seleksi dengan PreSelecting</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Hari
	<select name="day">
		<option value="=====">=====
		<option value="Senin">Senin
		<option value="Selasa">Selasa
		<option value="Rabu">Rabu
		<option value="Kamis">Kamis
		<option value="Jumat">Jumat
		<option value="Sabtu">Sabtu
		<option value="Minggu">Minggu
	</select> <br />
	
	<input type="submit" value="ok" />
</form>

<?php
if (isset($_POST['day'])) {
	echo $_POST ['day'];
}
?>

</body>
</html>

