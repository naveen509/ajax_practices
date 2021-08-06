<?php


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"collage");

$strSql="SELECT * FROM student";


echo "<table><tr><th>ID</th><th>name</th><th>email</th><th>contact</th></tr>";

if($data=mysqli_query($link,$strSql)){

	while($row=mysqli_fetch_assoc($data)){

		echo "<tr><th>$row[id]</th><th>$row[name]</th><th>$row[email]</th><th>$row[contact]</th></tr>";
	}
}else{
	echo "kk";
}




//print_r($_POST);    it will show the the details in web page with index name
?>