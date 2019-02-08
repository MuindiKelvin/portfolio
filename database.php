<! DOCTYPE html>
<html>
<body>
</body>
</html>
<?php
//create server and database connection constants
$host = "localhost";
$user = "root";
$pwd = "";
$db = "myinfo";

$con= new mysqli ($host, $user, $pwd, $db);

//Check server connection
if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Welcome all <br />";
		//receive  values from user form and trim white spaces
$name=trim($_POST['name']);
$email=trim($_POST["email"]);
 $subject=trim($_POST['subject']);
$message=trim($_POST['message']);

//now insert the received values into database using defined variables
$sqli ="INSERT INTO info(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
if ($con->query($sqli) === TRUE) {
    echo "Your Message Has Been Received Successfully! Thank You";
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}
$con->close(); //close the connection for security reason
}
?>