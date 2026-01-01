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
$saat		= 13;
	switch($saat) {
		case ($saat >=0) and ($saat <=6):
			switch($saat){
				case $saat == 0:
					echo "İyi Geceler Saat Şuanda 00:00"; 
			break;  
				case $saat == 1:
					echo "İyi Geceler Saat Şuanda 01:00"; 
			break;  
				case $saat == 2:
					echo "İyi Geceler Saat Şuanda 02:00"; 
			break;  
				case $saat == 3:
					echo "İyi Geceler Saat Şuanda 03:00"; 
			break;  
				case $saat == 4:
					echo "İyi Geceler Saat Şuanda 04:00"; 
			break;  
				case $saat == 5:
					echo "İyi Geceler Saat Şuanda 05:00"; 
			break;  
				case $saat == 6:
					echo "İyi Geceler Saat Şuanda 06:00";
			break; 
			default:
			echo "BİLİNMEYEN BİR HATA MEYDANA GELDİ";
			}
			break;
		
		case ($saat >=7) and ($saat <=9):
			switch($saat){
				case $saat == 7:
					echo "Günaydın Saat Şuanda 07:00"; 
			break;  
				case $saat == 8:
					echo "Günaydın Saat Şuanda 08:00"; 
			break;  
				case $saat == 9:
					echo "Günaydın Saat Şuanda 09:00"; 
			break; 
			default:
			echo "BİLİNMEYEN BİR HATA MEYDANA GELDİ";
			}
			break;
		case ($saat >=10) and ($saat <=18):
			switch($saat){
				case $saat == 10:
					echo "İyi Günler Saat Şuanda 10:00"; 
			break;  
				case $saat == 11:
					echo "İyi Günler Saat Şuanda 11:00"; 
			break;  
				case $saat == 12:
					echo "İyi Günler Saat Şuanda 12:00"; 
			break;  
				case $saat == 13:
					echo "İyi Günler Saat Şuanda 13:00"; 
			break;  
				case $saat == 14:
					echo "İyi Günler Saat Şuanda 14:00"; 
			break;  
				case $saat == 15:
					echo "İyi Günler Saat Şuanda 15:00"; 
			break;  
				case $saat == 16:
					echo "İyi Günler Saat Şuanda 16:00"; 
			break;  
				case $saat == 17:
					echo "İyi Günler Saat Şuanda 17:00"; 
			break;  
				case $saat == 18:
					echo "İyi Günler Saat Şuanda 18:00"; 
			break; 
			default:
			echo "BİLİNMEYEN BİR HATA MEYDANA GELDİ";
			}
			break;
		case ($saat >=19) and ($saat <=23):
			switch($saat){
				case $saat == 19:
					echo "İyi Akşamlar Saat Şuanda 19:00"; 
			break;  
				case $saat == 20:
					echo "İyi Akşamlar Saat Şuanda 20:00"; 
			break;  
				case $saat == 21:
					echo "İyi Akşamlar Saat Şuanda 21:00"; 
			break;  
				case $saat == 22:
					echo "İyi Akşamlar Saat Şuanda 22:00"; 
			break;  
				case $saat == 23:
					echo "İyi Akşamlar Saat Şuanda 23:00"; 
			break; 
			default:
			echo "BİLİNMEYEN BİR HATA MEYDANA GELDİ";		
			}
		break;
	}
	?>
</body>
</html>
