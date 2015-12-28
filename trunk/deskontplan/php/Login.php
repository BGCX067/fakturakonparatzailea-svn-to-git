<?php
	include("DBConnect.php");
	
	$konexioa = new DBConnect();
	
	if($konexioa->konektatu()!=true){
					die ("Errorea DBra konektatzen saiatzean.");
				} else {
					$email = $_POST["email"];
					$pasahitza = $_POST["pasahitza"];
					$sql = "SELECT profila FROM Erabiltzailea WHERE
					emaila = '$email' AND pasahitza = '$pasahitza'";
					$result = mysql_query($sql);
					$konexioa->konexioaItxi();
					echo (mysql_result($result, 0));
					if(mysql_result($result, 0) == "bezeroa"){
						//bezeroaren orria erakutsi
						session_start();
						//Sesioan erabiltzailea gorde
						$_SESSION['web_erabiltzaile'] = $_POST["webErabiltzaile"];
					} else { if (mysql_result($result, 0) == "enpresa"){
						//enpresaren orria erakutsi
						session_start();
						//Sesioan erabiltzailea gorde
						$_SESSION['web_erabiltzaile'] = $_POST["webErabiltzaile"];
					} else { if (mysql_result($result, 0) == "administratzailea"){
						//administratzailearen orria erakutsi
						session_start();
						//Sesioan erabiltzailea gorde
						$_SESSION['web_erabiltzaile'] = $_POST["webErabiltzaile"];
					} else { 
						//ez da erabiltzailea existitzen
					}
						session_start();
						//Sesioan erabiltzailea gorde
						die ("Ez da erabiltzailea existitzen");
						header("Location: OrriNagusia.php");
						}
					}
				}
				
?>