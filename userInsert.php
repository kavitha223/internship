<?php
include "conn.php";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password= password_hash($password,PASSWORD_BCRYPT);

$query = "INSERT INTO `user` (`name`, `email`,`password`) VALUES('$name','$email','$password')";
echo $query;
$result = mysqli_query($con,$query);
if($result){
	echo "successfully Inserted";

}
else{
	echo "failed to insert";
}
?>
