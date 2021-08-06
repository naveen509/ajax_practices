	
		
		$(document).ready(function(){
			$('#insert').click(function(event){
				event.preventDefault();
			$.ajax({
				url:"insert.php",
				method:"post",
				data:$('form').serialize(),
				dataType:"text",
				success:function(strMessage){
					$('#message').text(strMessage)
				}


			})




			})

				$('#load').click(function(event){
				event.preventDefault();
			$.ajax({
				url:"load.php",
				method:"post",
				data:$('form').serialize(),
				dataType:"html",
				success:function(Results){
					$('#result').html(Results)
				}

				})
		
		})







});