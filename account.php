
<?php
    //echo $name. " "$email." ".$message;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "customer";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($conn){
    echo"you are connected";
    }
    else{
        echo "Couldn't connected";
    }
?>

//capturing the values

$sql = "INSERT INTO customer_data(Name,Email,Message) Values('$Name', '$Email', '$Message')"; 
if ($conn->query ($sql) === TRUE) {
    echo "New Record added successfully";
} else {
    echo "Error: " . $sql. "<br>" . $conn->error;
}
$conn->close();
}else {
    // If not a POST request, display a simple error message
    echo "Invalid request";
}