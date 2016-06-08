$(function() {

    var menu_ul = $('.menu > li > ul'),
        menu_a  = $('.menu > li > a');
    
    menu_ul.hide();

    menu_a.click(function(e) {
        e.preventDefault();
        if(!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp('normal');
            $(this).addClass('active').next().stop(true,true).slideDown('normal');
        } else {
            $(this).removeClass('active');
            $(this).next().stop(true,true).slideUp('normal');
        }
    });
    
	$( "#login_form" ).submit(function(event) {
		$.ajax({
		    // la URL para la petición
		    url : 'login2.php',	 
		    // la información a enviar
		    // (también es posible utilizar una cadena de datos)
		    data : { usuLogin : $("#usuLogin").val(), passwLogin : $("#passwLogin").val() },	 
		    // especifica si será una petición POST o GET
		    type : 'POST',	 
		    // código a ejecutar si la petición es satisfactoria;
		    // la respuesta es pasada como argumento a la función
		    success : function(data) {
		    	if(data.indexOf("Bienvenido") != -1){
		    		arr = data.split("|")
		        	alert("Bienvenido " + " " + arr[1] + ", usted ha ingresado exitosamente a nuestro sistema")
		        	if(arr[2] == 'e'){
						window.location.href = "indexAdmin.php";
					}else{
						window.location.href = "indexCliente.php";						
					}
		        	
				}else{
					alert(data)
				}
		    }
		});
		event.preventDefault();
	});

});

function validateForm() {
	txt = "";
	
    if(document.forms["contact_form"]["ciclo"].value < 0){
		alert("- El numero ingresado para probar el ciclo debe ser mayor que cero");
		return false;
	}
	
	ciclo = "";
	for(i = 1; i <= document.forms["contact_form"]["ciclo"].value; i++){
		ciclo += "\n - VUELTA #"+i;
	}
	
	alert(ciclo)
	
	var r = confirm("Confirme el envio de este formulario! \n NOMBRE: "+document.forms["contact_form"]["nomb"].value+"\n EMAIL: "+document.forms["contact_form"]["email"].value+"\n TELEFONO: "+document.forms["contact_form"]["telef"].value+"\n FECHA DE NACIMIENTO: "+document.forms["contact_form"]["date"].value);

	if (r == true) {
	    alert("Formulario enviado correctamente!");
	    return false;
	} else {
	    alert("Usted ha cancelado el envio del formulario!");
	    return false;
	}
}

function mostrar_virtual(){
	document.getElementById('VIRTUAL').style.display = 'block';
	document.getElementById('TRASLA').style.display = 'none';
	document.getElementById('MONIT').style.display = 'none';
	document.getElementById('RESPAL').style.display = 'none';
}

function mostrar_trasla(){
	document.getElementById('VIRTUAL').style.display = 'none';
	document.getElementById('TRASLA').style.display = 'block';
	document.getElementById('MONIT').style.display = 'none';
	document.getElementById('RESPAL').style.display = 'none';
}

function mostrar_monit(){
	document.getElementById('VIRTUAL').style.display = 'none';
	document.getElementById('TRASLA').style.display = 'none';
	document.getElementById('MONIT').style.display = 'block';
	document.getElementById('RESPAL').style.display = 'none';
}

function mostrar_respal(){
	document.getElementById('VIRTUAL').style.display = 'none';
	document.getElementById('TRASLA').style.display = 'none';
	document.getElementById('MONIT').style.display = 'none';
	document.getElementById('RESPAL').style.display = 'block';
}
