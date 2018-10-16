$(document).ready(function(){
var cuki=document.cookie.indexOf('ticket=');
if(cuki=="" || document.cookie==""){
		var person = {user:document.getElementById("user").value, senha:document.getElementById("pass").value, tipo:"1"};
		$(".butt").click(function(){
			$.post("../adm/login.php",person,
			function(data,status){
				if(status=="success"){
					if(data!="0"){
						document.cookie = "ticket="+data+";";
						window.location = "edit.php";
					}
				}else{
				}
			});
		});
	}else{
		alert('to aq');
		var person = {cookie:cuki,tipo:"2"};
		$(".butt").click(function(){
			$.post("../adm/login.php",person,
			function(data,status){
				if(status=="success"){
					if(data=="true"){
						window.location = "edit.php";						
					}else{
						//erro ticket invalido
						document.cookie ="ticket=;"
						
					}
				}else{
					
				}
			});
		});
		
	}
	
});