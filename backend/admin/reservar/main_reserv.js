$(document).ready(function(){

	$('#btngeneratersv').click(function(){
		var datos=$('#example-form').serialize();
		$.ajax({
			type:"POST",
			url:'../../includes/generate_rsv.php',
			data:datos,
			succes: function(r){
			
			}
		});
 location.reload();
	});	

});
