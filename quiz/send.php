<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$score=$_GET['score'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO quiz (result) VALUES ($score)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
    $ask="SELECT * FROM quiz";
    $result=$conn->query($ask);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo $row["id"]."<br />".$row["result"]."<hr/>";
        }
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>