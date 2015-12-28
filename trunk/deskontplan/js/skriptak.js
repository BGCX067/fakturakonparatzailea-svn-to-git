function logeatu() {
	
	if (document.formularioa.email.value != "" &&
		document.formularioa.pasahitza.value != "") {
		document.formularioa.action = "Login.php";
		document.formularioa.method = "POST";
		document.formularioa.submit();
		return 0;
		}
	alert('Erabiltzailea eta pasahitza sartu behar dituzu.');
	}

function erregistratu() {
	document.formularioa.action = "Register.php";
	document.formularioa.submit();
}

function enpresaFormularioa() {
	document.erregistroa.action = "RegisterEnpresa.php";
	document.erregistroa.submit();
}

function bezeroFormularioa() {
	document.erregistroa.action = "RegisterBezeroa.php";
	document.erregistroa.submit();
	}

function enpresaErregistratu(){
	if (document.erregistroaEnpresa.id.value == "" || 
		document.erregistroaEnpresa.email.value == "" ||
		document.erregistroaEnpresa.pasahitza.value == "" ||
		document.erregistroaEnpresa.pasahitza2.value == "" ||
		document.erregistroaEnpresa.enpresa.value == "" || 
		document.erregistroaEnpresa.kontaktua.value == "" || 
		document.erregistroaEnpresa.telefonoa.value == "" || 
		document.erregistroaEnpresa.helbidea.value == "" || 
		document.erregistroaEnpresa.hiria.value == "" || 
		document.erregistroaEnpresa.pk.value == "" ||
		document.erregistroaEnpresa.kk.value == ""){
		alert("Datu guztiak sartu behar dituzu!");
	}
	else { if (document.erregistroaEnpresa.pasahitza.value != 
		document.erregistroaEnpresa.pasahitza2.value){
		alert("Pasahitzak berdinak izan behar dira!");
		} else {
			document.erregistroaEnpresa.action = "InsertEnpresa.php";
			document.erregistroaEnpresa.method = "POST";
			document.erregistroaEnpresa.submit();
		}
	}
}

function bezeroaErregistratu(){
	if (document.erregistroaBezeroa.id.value == "" || 
		document.erregistroaBezeroa.email.value == "" ||
		document.erregistroaBezeroa.pasahitza.value == "" ||
		document.erregistroaBezeroa.pasahitza2.value == "" ||
		document.erregistroaBezeroa.izena.value == "" || 
		document.erregistroaBezeroa.abizena.value == "" || 
		document.erregistroaBezeroa.hiria.value == "" || 
		document.erregistroaBezeroa.pk.value == "" || 
		document.erregistroaBezeroa.visa.value == ""){
		alert("Datu guztiak sartu behar dituzu!");
	}
	else { if (document.erregistroaBezeroa.pasahitza.value != 
		document.erregistroaBezeroa.pasahitza2.value){
		alert("Pasahitzak berdinak izan behar dira!");
		} else {
			document.erregistroaBezeroa.action = "InsertBezeroa.php";
			document.erregistroaBezeroa.method = "POST";
			document.erregistroaBezeroa.submit();
		}
	}
}

function deslogeatu() {
	document.formularioa.action = "Logout.php";
	document.formularioa.method = "POST";
	document.formularioa.submit();
	alert("Agur!");
}
