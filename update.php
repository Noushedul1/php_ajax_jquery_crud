<?php
$connect = mysqli_connect('localhost','root','','students');
$fname = $_POST['fname'];
$age = $_POST['age'];
$city = $_POST['city'];
$userId = $_POST['userId'];

$update = "UPDATE studentdetails SET sname='$fname', age='$age', city='$city' WHERE id = $userId";

$ex = mysqli_query($connect,$update);
if($ex) {
    echo 'update successfull';
}
else{
    echo 'update not successfull';
}
?>