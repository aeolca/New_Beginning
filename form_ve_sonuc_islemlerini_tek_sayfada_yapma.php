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
	if (!$_POST){
		?>
		<form action="index.php" method="post" >
	Kullanıcı Adı		:	<input type="text" name="Kadi" required><br/>
	Adınız ve Soyadını	:	<input type="text" name="AdiSoyadi" required><br/>
	E-Mail Adresiniz 	:	<input type="email" name="Email" required><br/>
	Şifreniz 			:	<input type="password" name="sifre" required><br/>
		<input type="submit" value="Kayıt Ol">
	</form>
	<?php
	}else {
		$Kadi			=$_POST["Kadi"];
		$AdiveSoyadi	=$_POST["AdiSoyadi"];
		$Email			=$_POST["Email"];
		$Sifre			=$_POST["sifre"];
		
		echo "<B><U>TEBRİKLER KAYIT BAŞARILI :)</B></U>" . "<br/>" . "<br/>";
		echo "Kullanıcı Adı		:" . $Kadi. "<br/>";
		echo "Adınız ve Soyadınız	:" . $AdiveSoyadi. "<br/>";
		echo "E-Mail Adresiniz 	:" . $Email. "<br/>";
		echo "Şifreniz 			:" . $Sifre. " " . "<br/>" . "<b><U>ŞİFRENİZİ KİMSEYLE PAYLAŞMAYINIZ </U></b>" . "<br/>";

	}
	?>
	

	
</body>
</html>
