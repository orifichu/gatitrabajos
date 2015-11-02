$(document).on('submit','form.form-signin',function(e){
	//check campo nickname
	var nickname = $('input#nickname').val();
	if ( nickname == '' ) {
		alert('Escribe tu Usuario');
		$('input#nickname').focus();
		return false;
	};

	//check campo password
	var password = $('input#password').val();
	if ( password == '' ) {
		alert('Escribe tu Contraseña');
		$('input#password').focus();
		return false;
	};

	//si todo está bien entonces submit
	
});
