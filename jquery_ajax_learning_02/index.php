<!DOCTYPE html>
<html>
<head>
	<title>ajax pratice</title>
	<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
<h2>jquery_ajax practice</h2>


<div>
	
	<p id="message"></p>

	<form method="post">

		<table cellpadding="5" cellspacing="5">
			<tr><th>Enter the Name</th><td><input type"text" id="name" name="name"</td></tr>
			<tr><th>Enter the Email</th><td><input type"email" id="email" name="email"</td></tr>
			<tr><th>Enter the contact</th><td><input type"text" id="contact" name="contact"</td></tr>

			<tr><td colspan="2" align="center"><input type="submit" name="insert" id="insert"></th><tr>

		</table>
			
	</form>	
	

</div>



 <div>
	
	 

	<form method="post">

		<table cellpadding="5" cellspacing="5">
			



			<tr><td colspan="2" align="center"><input type="submit" name="load" id="load" value="Load"></th><td>

		</table>
			
	</form>	

			<div  id="result"></div></td>
	

</div>



</body>
</html>