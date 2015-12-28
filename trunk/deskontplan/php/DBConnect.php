<?php
class DBConnect{
	var $konexioa;
	var $izena;
	var $host;
	var $user;
	var $pass;
	function DBConnect(){
		$this->izena = "deskontplan";
		$this->host="127.0.0.1";
		$this->user = "root";
		$this->pass = "euiti";
	}

	function konektatu() {
		if(!($kon=@mysql_connect($this->host, $this->user,$this->pass))){
			die("Errorea. Ezin da datubasera konektatu.");
			return false;
		}
		if (!@mysql_select_db($this->izena,$kon)){
			die("Errorea datubasea aukeratzean.");
			return false;
		}
		$this->konexioa=$kon;
		return true;
	}

    function konexioaItxi(){
        mysql_close($this->konexioa);
    }
}
?>