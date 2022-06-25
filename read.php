<?php
$connect = mysqli_connect('localhost','root','','students');

$read = "SELECT * FROM studentdetails";

$exu = mysqli_query($connect,$read);
?>
<?php while($row = mysqli_fetch_array($exu)) { ?>
    <?php $i = 1; ?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['sname']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td>
            <button class="btn btn-danger" onclick="Delete(<?php echo $row['id'] ?>)">DELETE</button>
            <button class="btn btn-success" onclick="Edit(<?php echo $row['id'] ?>)">EDIT</button>
        </td>
    </tr>
<?php }?>
