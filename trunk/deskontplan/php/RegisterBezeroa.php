<html>
<head>
<script type="text/javascript" src="../js/skriptak.js"></script>
</head>
<body>

<form name="erregistroaBezeroa" method="post">
	<table>
	<tr><th>Bezeroen erregistro gunea</th></tr>
	<tr><td>Erabiltzaile ID:</td><td><input type="text" name="id"></td></tr>
	<tr><td>Zure eMail-a:</td><td><input type="text" name="email"></td></tr>
	<tr><td>Pasahitza:</td><td><input type="password" name="pasahitza"></td></tr>
	<tr><td>Berriro sartu pasahitza:</td><td><input type="password" name="pasahitza2"></td></tr>
	<tr><td>Izena:</td><td><input type="text" name="izena"></td></tr>
	<tr><td>Abizena:</td><td><input type="text" name="abizena"></td></tr>
	<tr><td>Hiria:</td><td><input type="text" name="hiria"></td></tr>
	<tr><td>Posta kodea:</td><td><input type="text" name="pk"></td></tr>
	<tr><td>Visa zenbakia:</td><td><input type="text" name="visa"></td></tr>
	<tr><td><input type="button" value="Bidali" onclick="bezeroaErregistratu();">
	<input type="button" value="Atzera" onclick="history.back()"></td></tr>
	</table>

</form>
<?php
?>
</body>
</html>