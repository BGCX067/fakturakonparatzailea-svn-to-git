<html>
<head>
<script type="text/javascript" src="../js/skriptak.js"></script>
</head>
<body>

<form name="erregistroaEnpresa" method="post">
	<table>
	<tr><th>Enpresen erregistro gunea</th></tr>
	<tr><td>Erabiltzaile ID:</td><td><input type="text" name="id"></td></tr>
	<tr><td>Zure eMail-a:</td><td><input type="text" name="email"></td></tr>
	<tr><td>Pasahitza:</td><td><input type="password" name="pasahitza"></td></tr>
	<tr><td>Berriro sartu pasahitza:</td><td><input type="password" name="pasahitza2"></td></tr>
	<tr><td>Enpresaren izena:</td><td><input type="text" name="enpresa"></td></tr>
	<tr><td>Kontaktuaren izena:</td><td><input type="text" name="kontaktua"></td></tr>
	<tr><td>Telefonoa:</td><td><input type="text" name="telefonoa"></td></tr>
	<tr><td>Helbidea:</td><td><input type="text" name="helbidea"></td></tr>
	<tr><td>Hiria:</td><td><input type="text" name="hiria"></td></tr>
	<tr><td>Posta kodea:</td><td><input type="text" name="pk"></td></tr>
	<tr><td>Kontu korronte zenbakia:</td><td><input type="text" name="kk"></td></tr>
	<tr><td><input type="button" value="Bidali" onclick="enpresaErregistratu();"></input>
	<input type="button" value="Atzera" onclick="history.back()"></input></td></tr>	
	</table>

</form>
<?php
?>
</body>
</html>