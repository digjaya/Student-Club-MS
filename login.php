<?php
$servername='localhost';
$username='root';
$password='';
$dbname='iwptest';
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn ->connect_error){
die("error".$conn->connect_error);
}
$reg = $_POST['regno'];
$password = $_POST['password'];
$sql = "insert into userDB(regno,name,number,email,password,role,status) values('$reg','$name','$phone','$email','$password','$role','$0')";
if(mysqli_query($conn,$sql))
{
echo "Wait for approval.";
}
else{
echo "error".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>