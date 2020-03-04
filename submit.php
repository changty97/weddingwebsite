<style>
.text {
    font-size: 25px;
    text-align: center;
}

.img {
    display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>

<?php

$name[] = $_POST['name'];
$guests = $_POST['guests'];
$accept = $_POST['accept'];
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
if(isset($accept)) {
    echo "<h1 class='text'><b>Thank You!</b></h1><br>";
    foreach($name as $index) {
        $i = implode(", ",$index);
        $sql = "INSERT INTO `accept` (`name`, `guests`) VALUES ('$i','$guests')";
      }
    
    if($conn->query($sql) === TRUE) {
        echo "<p class='text'>You Have RSVP'd Successfully! We hope to see you at the Wedding!</p>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else {
    echo "<h1 class='text'><b>Thank You!</b></h1><br>";
    foreach($name as $index) {
        $i = implode(", ",$index);
        $sql = "INSERT INTO `decline` (`name`, `guests`) VALUES ('$i','$guests')";
      }
    
    if($conn->query($sql) === TRUE) {
        echo "<p class='text'>AW NO! We hope to see you soon!</p>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

//Close the connection to the server
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Wedding RSVP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="glossorydev.json"></script>
    <link rel="stylesheet" type="text/css" href="./src/assets/mystyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.min.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.picbox.css">
    <link rel="stylesheet" href="css/googlemaps.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <img src="./images/weddinglogo2.png" class="img" style="width: 200px; height: 80px;"><br>
    <a href="index.php" class="text" style="text-decoration: none;"><center>Back to Home Page</center></a>

        <footer>
            <div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <span class="to-top-wrapper"><a href="#top" class="to-top"><i class="fa fa-angle-up"></i></a></span>
                        <p>Developed by Tyler Chang</p>
                        <small>&copy; Copyright 2019, Changber Corporation</small>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>