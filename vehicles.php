<html>
<header align="center">
    <strong><h1>Vehicles</h1></strong></br>
  </header>
<head>
<style>
h1{
  background-color: powderblue;
}
         .button-container-div {
			width: 130px;
            height: 50px;

            display: flex;
            justify-content: center;
            align-items: center;
        }
		form{
   margin-left: 15%;
    margin-right:25%;
    width: 50%;
    
}
</style>
	<title>Register New vehicle</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
 <div class="button-container-div">
      <a class="btn btn-info" href="index.php" role="button">Go home </a>
    </div>

	<br/><br/>

	<form action="vehicles.php" method="post" name="form1">
		<table width="85%" border="0">
		<tr>
				<td>Registration number </td>
				<td><input type="" name="reg_number"></td>
			</tr>
			
        <tr>
        <td>Type of vehicle:</td>
        <td>
  <input type="radio" id="type" name="type_vehicle" value="type">
  <label for="male">Moped</label><br>
  <input type="radio" id="female" name="type_vehicle" value="female">
  <label for="female">Ligh Motorcycle</label><br>
  <input type="radio" id="other" name="type_vehicle" value="other">
  <label for="other">Heavy Motorcycle</label><br>
  <input type="radio" id="other" name="type_vehicle" value="other">
  <label for="other">Tractor</label><br>
  <input type="radio" id="other" name="type_vehicle" value="other">
  <label for="other">Snow Scooter</label><br>
  <input type="radio" id="other" name="type_vehicle" value="other">
  <label for="other">Passenger car</label><br>
  <input type="radio" id="other" name="type_vehicle" value="other">
  <label for="other">Van</label><br>
  <input type="radio" id="other" name="type_vehicle" value="other">
  <label for="other">Light truck</label><br>
  <input type="radio" id="other" name="type_vehicle" value="other">
  <label for="other">Truck</label><br>
  <input type="radio" id="other" name="type_vehicle" value="other">
  <label for="other">Minibus</label><br>
  <input type="radio" id="other" name="type_vehicle" value="other">
  <label for="other">Bus</label>
  </td>
			</tr>
        <tr>
				<td>Manufacture</td>
				<td><input type="manufacture" name="manufacturer"></td>
			</tr>
        <tr>
				<td>Model</td>
				<td><input type="model" name="model"></td>
			</tr>
			<tr>
				<td>Year</td>
				<td><input type="date" name="year_model"></td>
			</tr>
			<tr>
				<td>Colour</td>
				<td>
  <select id="colour" name="colour">
    <option value="red">Red</option>
    <option value="blue">Blue</option>
    <option value="green">Green</option>
    <option value="yellow">Yellow</option>
     <option value="indigo">Indigo</option>
      <option value="violet">Violet</option>
  </select></td>
			</tr>
			<tr>
				<td>Engine Size</td>
				<td><input type="engine_size" name="engine_size"></td>
			</tr>
			<tr>
				<td>Type of fuel</td>
				<td>
                  <select id="type_of_fuel" name="type_of_fuel">
                    <option value="gasoline">Gasoline</option>
                    <option value="petrolium">Petrolium</option>
                    <option value="diesel">Diesel</option>
                    <option value="water">Water</option>
                  </select></td>
			</tr>
			</tr>
			<tr>
				<td>Empy weight</td>
				<td><input type="empty_weight" name="empty_weight" required></td>
			</tr>
            <tr>
				<td>Maximum weight</td>
				<td><input type="max_weight" name="max_weight" required></td>
			</tr>
            <tr>
				<td>Maximum Passengers</td>
				<td><input type="no_of_people" name="no_of_people" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$reg_number = $_POST['reg_number'];
		$type_vehicle = $_POST['type_vehicle'];
		$manufacturer = $_POST['manufacturer'];
		$model = $_POST['model'];
		$year_model = $_POST['year_model'];
		$colour = $_POST['colour'];
		$engine_size= $_POST['engine_size'];
		$type_of_fuel = $_POST['type_of_fuel'];
		$empty_weight = $_POST['empty_weight'];
		$max_weight = $_POST['max_weight'];
		$no_of_people = $_POST['no_of_people'];

		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli,
		 "INSERT INTO vehicle(reg_number,type_vehicle,manufacturer,model,year_model,colour,type_of_fuel,empty_weight,max_weight,no_of_people) VALUES('$reg_number','$type_vehicle','$manufacturer','$model','$year_model','$colour','$type_of_fuel','$empty_weight','$max_weight','$no_of_people')");

		// Show message when user added
		echo "Added successfully. <a href='index.php'>View data</a>";
	}
	?>
</body>
</html>