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
<a href="admin.php" class="btn btn-primary" style="float:left; margin-top:10px; margin-bottom:10px">Back to Dashboard</a>
    <form action="addstudent.php" method="POST" enctype="multipart/form-data">
        <table class="table">
            
            <tr>
            <th scope="col">Name</th>
            <td><input type="text" class="form-control" name="name" placeholder="Enter Name" required></td>
            </tr>

            <tr>
            <th scope="col">Roll</th>
            <td><input type="text" class="form-control" name="roll" placeholder="Enter Roll No." required></td>
            </tr>

            <tr>
                <th scope="col">Class</th>
                <td><input type="number" class="form-control" name="class" placeholder="Enter Class" required></td>
            </tr>

            <tr>
                <th scope="col">Address</th>
                <td><input type="text" class="form-control" name="address" placeholder="Enter Address" required></td>
            </tr>

            <tr>
                <th scope="col">Contact Number</th>
                <td><input type="number" class="form-control" name="cnum" placeholder="Enter Contact Number" required></td>
            </tr>

            <tr>
                <th scope="col">Image</th>
                <td><input type="file" name="image"></td>
            </tr>

            <tr>
                <td colspan="2"> <input type="submit" class="btn btn-success" name="submit" value="submit"> </td>
            </tr>
        </table>
    </form>
</div>

<?php

    if(isset($_POST['submit']))
    {
        include('../dbcon.php');

        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $class = $_POST['class'];
        $address = $_POST['address'];
        $cnumber = $_POST['cnum'];
        $image = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];

        move_uploaded_file($tempname, "../dataimage/$image");

        $query = "INSERT INTO `student`(`name`, `roll`, `class`, `address`, `contact`, `image`) VALUES ('$name', '$roll', '$class', '$address', '$cnumber', '$image')";

        $result = mysqli_query( $con, $query );

        if($result == true)
        {
            ?>
            <script>
                alert('Data Insert Successfully.');
            </script>
            <?php
        }
    }

?>    