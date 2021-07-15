<head>
<header align="center">
    <strong><h1>Registered</h1></strong></br></br></br></br></br>
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
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo '<td align="center">' . $row['id'] . '</td>';
                echo '<td align="center">' . $row['fname'] . '</td>';
                echo '<td align="center">' . $row['lname'] . '</td>';
                echo '<td align="center">' . $row['email'] . '</td>';
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