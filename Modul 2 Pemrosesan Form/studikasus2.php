<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Studi Kasus 2 == Checkbox dengan Preselecting </title>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Matakuliah Semester 5 : <br/>
<input type="checkbox" name="matkul1" value="Praktikum Pemograman Web" checked/>Praktikum Pemograman Web<br/>
<input type="checkbox" name="matkul2" value="Praktikum Multimedia"/> Praktikum Multimedia <br/>
<input type="checkbox" name="matkul3" value="Micro Teaching"/>Micro Teaching<br/>
<input type="checkbox" name="matkul4" value="Rekayasa Perangkat Lunak"/>Rekayasa Perangkat Lunak <br/>
<input type="checkbox" name="matkul5" value="Multimedia"/>Mutimedia <br/>
<input type="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['matkul1'])) {
echo $_POST['matkul1'];
echo "<br/>";
}
if(isset($_POST['matkul2'])) {
echo $_POST['matkul2'];
echo "<br/>";
}
if(isset($_POST['matkul3'])) {
echo $_POST['matkul3'];
echo "<br/>";
}
if(isset($_POST['matkul4'])) {
echo $_POST['matkul4'];
echo "<br/>";
}
if(isset($_POST['matkul5'])) {
echo $_POST['matkul5'];
echo "<br/>";
}
?>
</body>
</html>
