<?php

	include("DBConnect.php");
	
	$konexioa = new DBConnect();
	
	if($konexioa->konektatu()!=true){
					die ("Errorea DBra konektatzen saiatzean.");
				} else {
					$id = $_POST["id"];
					$email = $_POST["email"];
					$pasahitza = $_POST["pasahitza"];
					$enpresa = $_POST["enpresa"];
					$kontaktua = $_POST["kontaktua"];
					$telefonoa = $_POST["telefonoa"];
					$helbidea = $_POST["helbidea"];
					$hiria = $_POST["hiria"];
					$pk = $_POST["pk"];
					$kk = $_POST["kk"];
					$sql = "INSERT INTO Enpresa
					VALUES ('$id', '$enpresa', '$kontaktua', '$telefonoa', '$helbidea', '$hiria', '$pk', '$kk');";
					mysql_query($sql);
					$sql = "INSERT INTO Erabiltzailea
					VALUES ('$id', '$email', '$pasahitza', 'enpresa');";
					mysql_query($sql);
					$konexioa->konexioaItxi();
				}

				header("Location: OrriNagusia.php");

?>