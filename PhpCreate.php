<?php
//To connect to a server and create a database
function OpenCon($servername,$username,$password,$dbname){
  
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error."<br>");
    }
    echo "Connected successfully<br>";
    
    // Create database
    $sql = "CREATE DATABASE newDB";
    if ($conn->query($sql) === TRUE) {
      echo "Database newDB created successfully<br>";

    } else {
      echo "Error creating database: " . $conn->error."<br>";
    }
    $conn = new mysqli($servername, $username, $password,$dbname);
    return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}
?>