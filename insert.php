<?php
$connect = mysqli_connect('localhost','root','','students');
$fname = $_POST['fname'];
$age = $_POST['age'];
$city = $_POST['city'];

$insert = "INSERT INTO studentdetails(sname,age,city) VALUES('$fname','$age','$city')";
$query = mysqli_query($connect,$insert);
if($query) {
    echo 'insert value';
}
else{
    echo 'not insert value';
}
?>
