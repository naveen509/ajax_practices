<?php


//print_r($_POST);    it will show the the details in web page with index name


global $con;

$con = mysqli_connect('localhost','root','','collage');


$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];



if(!empty($name) && !empty($email) && !empty($contact)){

$query = $con->prepare("INSERT into student (name,email,contact) VALUES (?,?,?)");

		$query->bind_param('sss',$name,$email,$contact);

		$result = $query->execute();

		if ($result) {

			echo "data saved successfully";
		}else{


			exit(mysli_error($con));
		}


}




?>

