<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns = "http://www.w3.org/1999/xhtml" xml :  lang="en" lang=""en>
<head>
	<title>Passing by Reference</title>
</head>

<body>

<em><?php
function total(&$value) {
$value++;
}
$masukan=6;
total($masukan);
echo $masukan;
?></em>

</body>
</html>
