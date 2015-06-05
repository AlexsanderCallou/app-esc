$(function(){
	
	$('#form1').submit(function()){
		
		$.ajax({
			type:'post',
			dataType:'json',
			url:$(this).attr('action'),
			data:$(this).serialize(),
			sucess: ok
		})

		return false;
	});

	function ok (data){

	}
});