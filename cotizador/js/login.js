$(document).ready(function(){

	$("#aceptar").click(function(){
		doLogin();
	});

	$("#contrasenia").keyup(function(e){
		var code = (e.keyCode ? e.keyCode : e.which);
    	if (code == 13) {
    		doLogin();
    	}
	});

	$("#usuario").keyup(function(e){
		var code = (e.keyCode ? e.keyCode : e.which);
    	if (code == 13) {
    		doLogin();
    	}
	});		

	function doLogin(){
		$.ajax({
			type: "POST",
			url: "../backoffice/services/serviceLogin.php",
			data : {"service": "doLogin", "usuario" : $("#usuario").val(), "password" : $("#contrasenia").val()},
			accepts: {
				mycustomtype : 'application/json'
			},
			statusCode: {
				404 : function(){
					$("#loader").hide();
					$("#msgErrorInc").html("Error 404: P&aacute;gina no encontrada en el servidor, por favor contacte al &aacute;rea de sistemas").show();		
				},
				500 : function(){
					$("#loader").hide();
					$("#msgErrorInc").html("Error 500: Error interno en el servidor, por favor contacte al &aacute;rea de sistemas").show();			
				}
			},
			dataType : "json",		
			timeout: 300000,
			success : function(result){
				if(result.error == "S01"){			
					alertaModal('error', result.codErr);
				}else if(result.error == "0"){			
					window.location = '/backoffice/';
				}else{			
					alertaModal('error', result.codErr);
				}	
			},
			error : function(XHR,textStatus, error){
				$("#loader").hide();
				if(textStatus == "parsererror"){
					$("#msgErrorInc").html("Error: Formato recepci&oacute;n de datos incorrecto, por favor contacte al &aacute;rea de sistemas").show();
				}	
				if(textStatus == "timeout"){
					$("#msgErrorInc").html("Error: Tiempo de conexi&oacute;n expirado, intentelo de nuevo o contacte al &aacute;rea de sistemas").show();
				}		
			}
		});
	}		

});