<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Set Cookie</title>
</head>

<body>

<?php

//Menset nilai cookie
setcookie('nama_cookie', 'nilai_cookie');

//Mendapatkan nilai cookie
echo $_COOKIE['nama_cookie'];

?>

<p>
Tekan Refresh (F5);

</body>
</html>
