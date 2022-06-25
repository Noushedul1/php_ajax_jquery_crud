<?php
$connect = mysqli_connect('localhost','root','','students');

$userId = $_POST['userId'];

$delete = "DELETE FROM studentdetails WHERE id= $userId";

$delete_row = mysqli_query($connect,$delete);
?>