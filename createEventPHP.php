<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwptest";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['eventname'];
$coordinator = $_POST['coordinator'];
$date = $_POST['date'];
$venue = $_POST['venue'];
$from = $_POST['from'];
$to = $_POST['to'];
$description = $_POST['eventDescription'];
 
/*
YEH TABLE BANANI HAI
table name -> events
attributes
name varvhar(20)
coordinator varchar(20)
date varchar(10)
venue varchar(20)
from varchar(5)
to varchar(5)
description varchar(200)
status boolean
*/
$sql = "insert into events (name, coordinator, date, venue, from, to, description, status) values ('$name','$coordinator','$date','$venue','$from','$to','$description','0')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

