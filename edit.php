<?php
$connect = mysqli_connect('localhost','root','','students');
$userId = $_POST['userId'];
$edit = "SELECT * FROM studentdetails WHERE id = $userId";
$ex = mysqli_query($connect,$edit);

$row = mysqli_fetch_array($ex);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="mb-3">
            <label for="" class="form-label">Name </label>
            <input type="text" id="fname" value="<?php echo $row['sname']; ?>" class="form-control" placeholder="Enter name ">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Enter age </label>
            <input type="text" id="age" value="<?php echo $row['age']; ?>" class="form-control" placeholder="Enter age ">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">City </label>
            <input type="text" id="city" value="<?php echo $row['city']; ?>" class="form-control" placeholder="Enter city ">
        </div>
        <button id="btn" class="btn btn-secondary" onclick="UPDATE_DATA(<?php echo $row['id'] ?>)">Edit data</button>
        <button class="btn btn-primary" onclick="editHome()" ">Home</button>
    </div>
</body>
</html>