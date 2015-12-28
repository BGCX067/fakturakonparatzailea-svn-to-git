<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/estiloak.css"></link>
		<script type="text/javascript" src="../js/skriptak.js"></script>
</head>
<body>

<form name="formularioa" action="" method="POST">
<?php session_start();
if(isset($_SESSION['web_erabiltzaile'])) { ?>
Kaixo, <?php echo $_SESSION['web_erabiltzaile']; ?> !!!
<input type="button" name="deslogeatuBotoia" value="Irten!"
onclick="deslogeatu();"></input>
<?php } else {?>
Nor zara?
<input type="text" name="email" value=""></input>
<input type="password" name="pasahitza" value=""></input>
<input type="button" name="logeatuBotoia" value="Sartu!" onclick="logeatu();"></input>
<input type="button" name="erregistratuBotoia" value="Erregistro berria" onclick="erregistratu();"></input>
<?php } ?>
</form>

</body>
</html>