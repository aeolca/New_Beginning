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
	$Ayadi		= "ocak";
	
	switch ($Ayadi) {
				case $Ayadi == "Ocak":
			echo " ({$Ayadi}) ayı 1.Aydır";
			break;
				case $Ayadi == "Şubat":
			echo " ({$Ayadi}) ayı 2.Aydır";
			break;
				case $Ayadi == "Mart":
			echo " ({$Ayadi}) ayı 3.Aydır";
			break;
				case $Ayadi == "Nisan":
			echo " ({$Ayadi}) ayı 4.Aydır";
			break;
				case $Ayadi == "Mayıs":
			echo " ({$Ayadi}) ayı 5.Aydır";
			break;
				case $Ayadi == "Haziran":
			echo " ({$Ayadi}) ayı 6.Aydır";
			break;
				case $Ayadi == "Temmuz":
			echo " ({$Ayadi}) ayı 7.Aydır";
			break;
				case $Ayadi == "Ağustos":
			echo " ({$Ayadi}) ayı 8.Aydır";
			break;
				case $Ayadi == "Eylül":
			echo " ({$Ayadi}) ayı 9.Aydır";
			break;
				case $Ayadi == "Ekim":
			echo " ({$Ayadi}) ayı 10.Aydır";
			break;
				case $Ayadi == "Kasım":
			echo " ({$Ayadi}) ayı 11.Aydır";
			break;
				case $Ayadi == "Aralık":
			echo " ({$Ayadi}) ayı 12.Aydır";
			break;
				
		default:
			echo "({$Ayadi}) Belirtilen İfade bir Ay Adı Değildir.";
				
			
			
			
			
	}
	?>
</body>
</html>
