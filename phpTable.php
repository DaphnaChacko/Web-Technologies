<?php
include 'PhpCreate.php';

$servername = "localhost";
$username = "sample";
$password = "daphna";
$dbname = "newDB";
//Connect to sql
$conn = OpenCon($servername,$username,$password,$dbname);

// sql to create table
$sql = "CREATE TABLE WTStudents (
  reg_id VARCHAR(10) PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  if ($conn->query($sql) === TRUE) {
    echo "Table WTStudents created successfully in newDB <br>";
  } else {
    echo "Error creating table: " . $conn->error."<br>";
  }
 
// prepare and bind
$stmt = $conn->prepare("INSERT INTO WTStudents (reg_id,firstname, lastname, email) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $regid, $firstname, $lastname, $email);

// set parameters and execute
$regid="21MCN7034";
$firstname = "John";
$lastname = "Dennis";
$email = "john@gmail.com";
$stmt->execute();

$regid="19MBA7654";
$firstname = "Marlin";
$lastname = "Mohan";
$email = "mmo@example.com";
$stmt->execute();

echo "New records created successfully <br>";

$stmt->close();

//insert to table
$sql = "INSERT INTO WTStudents (reg_id, firstname,lastname, email)
VALUES ('20BNE8731','Digil','Divakar', 'dd@gmail.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error."<br>";
}

//inserting second value
$sql = "INSERT INTO WTStudents (reg_id,firstname, lastname, email)
VALUES ('18BCE0484','Padma', 'Seshadri', 'ps@gmail.com')";
if (mysqli_query($conn,$sql) === TRUE) {
  echo "New record created successfully<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error."<br>";
}

//multiple insert
$sql = "INSERT INTO WTStudents (reg_id,firstname, lastname, email)
VALUES ('17BCE9084','Sachin', 'Singh', 'ss@gmail.com');";
$sql .= "INSERT INTO WTStudents (reg_id,firstname, lastname, email)
VALUES ('18BCF0436','Padma', 'Seshadri', 'ss@gmail.com');";
$sql .= "INSERT INTO WTStudents (reg_id,firstname, lastname, email)
VALUES ('19BCH1673','Salma', 'Muneer', NULL )";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records inserted successfully into WTStudents<br>";
} else {
  echo "Error: " . $sql . $conn->error . "<br>";
}

//Select data
$sql = "SELECT reg_id, firstname, lastname FROM WTStudents";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["reg_id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results<br>";
}
//where and order by clause
$sql = "SELECT reg_id, firstname, lastname FROM WTStudents WHERE firstname='Padma' ORDER BY reg_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["reg_id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
  }
  echo "</table><br>";
} else {
  echo "0 results<br>";
}
//update
$sql = "UPDATE WTStudents SET lastname='Sankar' WHERE reg_id='18BCF0436'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully<br>";
} else {
  echo "Error updating record: " . mysqli_error($conn)."<br>";
}
//delete
// sql to delete a record
$sql = "DELETE FROM WTStudents WHERE firstname='Padma'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully<br>";
} else {
  echo "Error deleting record: " . $conn->error."<br>";
}
CloseCon($conn);
?>