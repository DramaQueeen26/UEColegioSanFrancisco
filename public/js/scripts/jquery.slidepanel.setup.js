$(document).ready(function() {
	
	// Abril panel
	$("#slideit").click(function(){
		$("div#slidepanel").slideDown("slow");
	
	});	
	
	// Cerrar panel
	$("#closeit").click(function(){
		$("div#slidepanel").slideUp("slow");	
	});		
	
	// Cambiar botones login y cerrar
	$("#toggle a").click(function () {
		$("#toggle a").toggle();
	});		
		
});