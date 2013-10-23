<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Autentikasi Halaman dengan Session</title>
<style type="text/css">
.inner{
margin:200px auto; padding:20px; width:240px; border:1px solid #333; background-color:#3366FF;}
</style>
</head>

<body>
<p>
 <?php
ini_set('display_erroAutenrs', 1);
define('_VALID', 1);
//include file eksternal
require_once('./auth.php');
init_login();
validate();
?>
</p>
<p align="right"><a href="?m=logout">Logout</a></p>
<br/>
<h2 align="center">Selamat datang</h2><br/>
<h3 align="center">Simulasi Halaman User dengan session</h3>
<p align="center">
<a href="?m=logout"></a>
</body>
</html>
