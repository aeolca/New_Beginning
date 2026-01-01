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
	
	<form action="index.php"  method="post">
	<input type="text" name="aylar" placeholder="Örn: Ocak" >
		<button type="submit" >Gönder</button>
	</form>
	<?php
	$aylar		= $_POST['aylar'] ?? "";
	if ($aylar == "Ocak") {
		echo "Ocak ayı 1. Aydır";
	} elseif ($aylar == "Şubat") {
		echo "Şubat ayı 2.Aydır";
	} elseif ($aylar == "Mart") {
		echo "Mart ayı 3.Aydır";
	} elseif ($aylar == "Nisan") {
		echo "Nisan ayı 4.Aydır";
	} elseif ($aylar == "Mayıs") {
		echo "Mayıs ayı 5.Aydır";
	} elseif ($aylar == "Haziran") {
		echo "Haziran ayı 6.Aydır";
	} elseif ($aylar == "Temmuz") {
		echo "Temmuz ayı 7.Aydır";
	} elseif ($aylar == "Ağustos") {
		echo "Ağustos ayı 8.Aydır";
	}elseif ($aylar == "Eylül") {
		echo "Eylül ayı 9.Aydır";
	}elseif ($aylar == "Ekim") {
		echo "Ekim ayı 10.Aydır";
	}elseif ($aylar == "Kasım") {
		echo "Kasım ayı 11.Aydır";
	}elseif ($aylar == "Aralık") {
		echo "Aralık ayı 12.Aydır";
	} else{
		echo "Girilen Değer Bir Ay Adı değil Yada Hatalı";
	}
	
	
	?> 
</body>
</html>