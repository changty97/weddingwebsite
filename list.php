
<style>
  table {
        border-collapse: collapse;
        width: 50%;
        color: #666;
        font-size: 25px;
        text-align: center;
    }

    th {
        background-color: rgba(158, 158, 158, 0.61);
        color: white;
    }

    td {
        color: black;
    }
</style>
<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "wed";

$conn = new mysqli($server, $user, $pass, $db);

//Make a connection to the server
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Check to see if the Accept button was selected else it was Declined
$sql = "SELECT id, name, guests FROM accept";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    //output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>" . $row["guests"] . "</td></tr>";
    }
    echo "</table>";
}
else 
{
    echo "Sorry No one is on the list yet!";
}

//Close the connection to the server
$conn->close();
?>
