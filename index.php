<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.message a').click(function() {
                $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
            });
        })
    </script>
</head>

<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  First name:<br>
  <input type="text" name="firstname" value = "John"><br>
  Last name:<br>
  <input type="text" name="lastname" value = "Doe"><br>
  Email:<br>
  <input type="email" name="email" value="example@example.com">
  <input type="submit" name= "submit" value= "Submit">
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "cruddb";

$conn = new mysqli($servername, $username, $password, $db);

/*
if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
}else{
	echo ("Success");
}

$sql = "CREATE DATABASE crudDB";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/

/*$sql = 
"
CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)

";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/


$firstname = $_POST['firstname'] ;
$lastname = $_POST['lastname'] ;
$email = $_POST['email'] ;

echo ($firstname);
echo ($lastname);
echo ($email);

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</body>
</html>