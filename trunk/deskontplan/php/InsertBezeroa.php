<?php

	include("DBConnect.php");
	
	$konexioa = new DBConnect();
	
	if($konexioa->konektatu()!=true){
					die ("Errorea DBra konektatzen saiatzean.");
				} else {
					$id = $_POST["id"];
					$email = $_POST["email"];
					$pasahitza = $_POST["pasahitza"];
					$izena = $_POST["izena"];
					$abizena = $_POST["abizena"];
					$hiria = $_POST["hiria"];
					$pk = $_POST["pk"];
					$visa = $_POST["visa"];
					$sql = "INSERT INTO Bezeroa
					VALUES ('$id', '$izena', '$abizena', '$hiria', '$pk', '$visa');";
					mysql_query($sql);
					$sql = "INSERT INTO Erabiltzailea
					VALUES ('$id', '$email', '$pasahitza', 'bezeroa');";
					mysql_query($sql);
					$konexioa->konexioaItxi();
				}
				header("Location: OrriNagusia.php");

?>