<head>
<header align="center">
    <strong><h1>Assign Cars</h1></strong></br></br></br></br></br>
  </header>
<style>
h1{
  background-color: powderblue;
}
    table
{ 
    margin-left: auto;
    margin-right: auto;
    width: 70%;
    border: 1px solid black;
}
table, th, td {
  border: 1px solid black;
}
button{
  background-color: powderblue;
}
form{
   margin-left: 25%;
    margin-right:25%;
    width: 50%;
    
}
</style>
</style>
	<title>Assign</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
</head>
<?php

$db = mysqli_connect("localhost:3308","root","","we");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Assign</title>
</head>
<body>

<form action="assign.php" method="post" name="form1">
  This Owner:
  <select name="id">
    <option disabled selected name="id" required>-- Select owner --</option>
    <?php
          // Using database connection file here
        $records = mysqli_query($db, "SELECT * From owner"); 
         // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['fname'] ."'>" .$data['lname'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select></br></br></br>


 Owns:
  <select name="vehicle_id">
    <option disabled selected name="vehicle_id" required>-- Select the vehicle --</option>
    <?php
          // Using database connection file here
        $records = mysqli_query($db, "SELECT * From vehicle"); 
         // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['type_vehicle'] ."'>" .$data['reg_number'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select></br></br>
  
  <td><input type="submit" name="Submit" value="Save"></td>
</form>
<?php mysqli_close($db);  // close connection ?>

<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id = $_POST['id'];
		$vehicle_id = $_POST['vehicle_id'];
		

		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli,"INSERT INTO owner(id,vehicle_id) VALUES('$id','$vehicle_id')");
    
		// Show message when user added
		echo "Added successfully.";
	}
	?>
</body>
</html>
