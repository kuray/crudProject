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