<head>
<header align="center">
    <strong><h1>Registered Cars</h1></strong></br></br></br></br></br>
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
    border-collapse: collapse;
}
table, th, td {
  border: 1px solid black;
}
form{
   margin-left: 15%;
    margin-right:25%;
    width: 50%;
    
}
</style>
	<title>Registereed cars</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
</head>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3308", "root", "", "we");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM owner";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>  First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Security Number</th>";
                echo "<th>Assigned car</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['security_no'] . "</td>";
                echo "<td>" . $row['vehicle_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


<div class="button-container-div">
      <a class="btn btn-info" href="index.php" role="button">Go home </a>
    </div>