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
$saat		=12;
	switch($saat){
				case ($saat >=0) and ($saat <= 6):
			echo "İyi Geceler";
			break;
				case ($saat > 6) and ($saat <= 9):
			echo "Günaydın";
			break;
					case ($saat > 9) and ($saat <= 17):
			echo "İyi Günler";
			break;
					case ($saat > 17) and ($saat <= 23):
			echo "İyi Akşamlar";
			break;
		default:
			echo "Girilen Değerde Hata Meydana Geldi";
			
	}
	?>
</body>
</html>
