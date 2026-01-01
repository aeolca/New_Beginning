<!doctype html>
<html lang="TR-tr">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
	<meta http-equiv="Content-Language" content="tr">
	<meta charset="utf-8">
	<title>Aeolca PHP</title>

</head>
<body>
	<?php
$deger1	= "Elif";
$deger2	= "Ahsen";
$deger3	= "Zeynep";
	
	if ($deger1 == "Elvan") {
		echo "İf Koşulu Devrede";
	}elseif ($deger2 == "Ahsen") {
		echo "1. Elseif koşulu devrede";
	}elseif ($deger3  == "Olca") {
		echo "2.Else if Koşulu Devrede";
	} else {
		echo "Girilen Değerler Uyumsuz";
	}
	
	
	?> 
</body>
</html>