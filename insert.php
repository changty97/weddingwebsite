<?php

$name = $_POST['name'];
$guests = $_POST['guests'];

if(!empty($name) || !empty($guests))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "wedding";

    //Create connection
    $connect = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {
        $SELECT = "SELECT name From register where name = ? Limit 125";
        $INSERT = "INSERT Into register (name, guests) values(?,?)";
        
        //Prepare Statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $stmt->bind_result($name);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 0)
        {
            $stmt->close();

            $stmt = $connect->prepare($INSERT);
            $stmt->bind_param("ssssii", $name, $guests);
            $stmt->execute();
            echo "New record inserted sucessfully";
        }
        else
        {
            echo "Sorry Max Occupancity filled!";
        }
        $stmt->close();
        $connect->close();
    }
}

else
{
    echo "All field's are required!";
    die();
}

?>