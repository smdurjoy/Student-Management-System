<?php 

session_start();

if(isset($_SESSION['uid'])) 
{
    echo "";
}
else
{
    header('location: ../login.php');
}

?>

<?php
    include('header.php');
?>

<div class="container">
<a href="admin.php" class="btn btn-primary" style="float:left; margin-top:10px; margin-bottom:20px">Back to Dashboard</a>
<form action="updatestudent.php" method="POST">
    <table class="table">
        <tr>
            <th>Enter Student Name:</th>
            <td><input type="name" class="form-control" name="name" placeholder="Name" require="required"></td>

            <th>Enter Class:</th>
            <td><input type="name" class="form-control" name="class" placeholder="Class" require="required"></td>

            <td><button type="submit" name="submit" class="btn btn-dark">Search</button></td>
        </tr>
    </table>
</form>

<table class="table">

    <tr>
        <th>NO</th>
        <th>Image</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Edit</th>
    </tr>

<?php

if(isset($_POST['submit']))
{
    include('../dbcon.php');

    $name = $_POST['name'];
    $class = $_POST['class'];

    $query = "SELECT * FROM `student` WHERE `name` LIKE '%$name%' AND `class` = '$class'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) <  1 )
    {
        echo "<tr> <td colspan='5'> No Record Found </td> </tr>";
    }

    else
    {
        $count = 0;
        while($data = mysqli_fetch_assoc($result))
        {
            $count++;
            ?>

            <tr>
                <td><?php echo $count?></td>
                <td> <img src="../dataimage/<?php echo $data['image'] ?>" style="max-width:100px;"/> </td>
                <td><?php echo $data['name']?></td>
                <td><?php echo $data['roll']?></td>
                <td> 
                    <a href="updateform.php?sid=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a> 
                    <a href="deletedata.php?sid=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a> 
                </td>
            </tr>

            <?php
        }
    }
}

?>


</table>
</div>