<!DOCTYPE html>
<html>
<head>
<title>php test</title>
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
</head>
<body>


<?php

$conn = new mysqli("https://github.com/RaulS963/webconnect","root","");
if(mysqli_connect_error()){
	die("error in connection".mysqli_connect_error());	
}
else{
	echo "connection successfull";
}
$conn->close();



?>


</body>
</html>
