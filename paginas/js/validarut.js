		
function validacampos(){
	var rut;
	rut = document.frm.rut.value
	nombres = document.frm.nombres.value;
	apellidos = document.frm.apellidos.value;
      
        
		if( rut == ""){
			alert("Ingrese un RUT");
			return false;
		}
		
		if ( !validarut(document.frm.rut.value) ){ 
		return false;
		}

		return true;
	}
function validarut(rut){
	var tmpstr = "";
	var largo;
	var i;
	var j;
	var cnt;
	for ( i=0; i < rut.length ; i++ )
		if ( rut.charAt(i) != ' ' && rut.charAt(i) != '.' && rut.charAt(i) != '-' )
	tmpstr = tmpstr + rut.charAt(i);
	rut = tmpstr;
	largo = rut.length;
	// [VARM+]
	tmpstr = "";
	for ( i=0; rut.charAt(i) == '0' ; i++ );
		for (; i < rut.length ; i++ )
			tmpstr = tmpstr + rut.charAt(i);
	rut = tmpstr;
	largo = rut.length;
	// [VARM-]
	if ( largo < 2 ){
		alert("Debe ingresar el RUT completo.");
		document.frm.rut.focus();
		document.frm.rut.select();
		return false;
	}
	for (i=0; i < largo ; i++ ){
		if ( rut.charAt(i) != "0" && rut.charAt(i) != "1" && rut.charAt(i) !="2" && rut.charAt(i) != "3" && rut.charAt(i) != "4" && rut.charAt(i) !="5" && rut.charAt(i) != "6" && rut.charAt(i) != "7" && rut.charAt(i) !="8" && rut.charAt(i) != "9" && rut.charAt(i) !="k" && rut.charAt(i) != "K" ){
		alert("El RUT no es valido.");
		document.frm.rut.focus();
		document.frm.rut.select();
		return false;
		}
	}
	var invertido = "";
	for ( i=(largo-1),j=0; i>=0; i--,j++ )
		invertido = invertido + rut.charAt(i);
	var drut = "";
	drut = drut + invertido.charAt(0);
	drut = drut + '-';
	cnt = 0;
	for ( i=1,j=2; i<largo; i++,j++ ){
		if ( cnt == 3 ){
			drut = drut + '.';
			j++;
			drut = drut + invertido.charAt(i);
			cnt = 1;
		}
		else{
			drut = drut + invertido.charAt(i);
			cnt++;
		}
	}
	invertido = "";
	for ( i=(drut.length-1),j=0; i>=0; i--,j++ )
		invertido = invertido + drut.charAt(i);
	document.frm.rut.value = invertido;
	if ( comprueba_dv(rut) )
		return true;
	return false;
}

function comprueba_dv( crut ){
	var largo;
	var rut;
	var dv;
	var rut;
	var suma;
	var mul;
	var dvr;
	var dvi;
	var res;
	var i;
	largo = crut.length;
	if ( largo < 2 ){
		alert("Debe ingresar el RUT completo.");
		document.frm.rut.focus();
		document.frm.rut.select();
		return false;
	}
	if ( largo > 2 )
		rut = crut.substring(0, largo - 1);
	else
		rut = crut.charAt(0);
		dv = crut.charAt(largo-1);
		comprueba_cdv( dv );
	if ( rut == null || dv == null )
		return 0;
	var dvr = '0';
	suma = 0;
	mul = 2;
	for (i= rut.length -1 ; i >= 0; i--){
		suma = suma + rut.charAt(i) * mul;
		if (mul == 7)
			mul = 2;
		else
			mul++;
	}
	res = suma % 11;
	if (res==1)
		dvr = 'k';
	else
		if (res==0)
			dvr = '0';
		else{
			dvi = 11-res;
			dvr = dvi + "";
		}
	if ( dvr != dv.toLowerCase() ){
		alert("EL RUT es incorrecto.");
		document.frm.rut_aux.focus();
		document.frm.rut_aux.value = "";
		return false;
	}
	return true;
}

function comprueba_cdv( dvr ){
	var dv;
	dv = dvr + "";
	if ( dv != '0' && dv != '1' && dv != '2' && dv != '3' && dv != '4' && dv != '5' && dv != '6' && dv != '7' && dv != '8' && dv != '9' && dv != 'k'  && dv != 'K'){
		alert("Debe ingresar un digito verificador valido.");
		document.frm.rut_aux.focus();
		document.frm.rut_aux.select();
		return false;
	}
	return true;
}
