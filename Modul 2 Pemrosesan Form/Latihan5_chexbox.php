<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Data Checked Box</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Hobby
	<input type="checkbox" name="hobby[]" value="Membaca"
	/> Membaca
	<input type="checkbox" name="hobby[]" value="Olahraga"
	/> Olahraga
	<input type="checkbox" name="hobby[]" value="Menyayi"
	/> Menyanyi <br />
	
	<input type="submit" value="ok" />
</form>

<?php
//Ekstraksi Nilai
if (isset($_POST['hobby'])) {
	foreach ($_POST['hobby'] as $key => $val) {
	echo $key . ' -> ' .$val . '<br />'; 
	}
}
?>

</body>
</html>
