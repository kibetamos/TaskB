<html>
<head>
<header align="center">
    <strong><h1>Register Owners</h1></strong></br>
  </header>
<style>
h1{
  background-color: powderblue;
}
         .button-container-div {
			width: 130px;       
            display: flex;
            justify-content: center;
            align-items: center;
        }
		body{
             background-color: powderblue;
        }
		.button{
  background-color: powderblue;
}
form{
   margin-left: 15%;
    margin-right:25%;
    width: 50%;
    
}
</style>
	<title>Add Owner</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
 <div class="button-container-div">
      <a class="btn btn-info" href="index.php" role="button">Go home </a>
    </div>

	<br/><br/>

	<form action="owners.php" method="post" name="form1">
		<table width="85%" border="0">
			<tr>
				<td>Social Security number</td>
				<td><input type="security_no" name="security_no"></td>
			</tr>
			</tr>
			<tr>
				<td>Firstname</td>
				<td><input type="text" name="fname" required></td>
			</tr>
            <tr>
				<td>Lastname</td>
				<td><input type="text" name="lname" required></td>
			</tr>
            <tr>
				<td>Address</td>
				<td><input type="text" name="address" required></td>
			</tr>
            <tr>
				<td>Postal Code</td>
				<td><input type="postal_address" name="postal_address" required></td>
			</tr>
            <tr>
				<td>City</td>
				<td><input type="text" name="city" required></td>
			</tr>
            <tr>
				<td>Telephone</td>
				<td><input type="text" name="telephone" required></td>
			</tr>
            <tr>
				<td>E-mail</td>
				<td><input type="text" name="email" required></td>
			</tr>
			<tr>
				<td>Submit</td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$security_no = $_POST['security_no'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$address = $_POST['address'];
        $postal_address = $_POST['postal_address'];
        $city = $_POST['city'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];

		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO owner(security_no,fname,lname,address,postal_address,city,telephone,email) VALUES('$security_no','$fname','$lname','$address','$postal_address','$city','$telephone','$email')");

		// Show message when user added
		echo "Added successfully. <a href='index.php'>View data</a>";
	}
	?>
</body>
</html>