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
    include('../dbcon.php');

    $sid= $_GET['sid'];

    $sql = " SELECT * FROM `student` WHERE `id` = '$sid' ";

    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    
?>

<div class="container">
<a href="admin.php" class="btn btn-primary" style="float:left; margin-top:10px; margin-bottom:10px">Back to Dashboard</a>
    <form action="updatedata.php" method="POST" enctype="multipart/form-data">
        <table class="table">
            
            <tr>
            <th scope="col">Name</th>
            <td><input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>" required></td>
            </tr>

            <tr>
            <th scope="col">Roll</th>
            <td><input type="text" class="form-control" name="roll"  value="<?php echo $data['roll']; ?>" required></td>
            </tr>

            <tr>
                <th scope="col">Class</th>
                <td><input type="number" class="form-control" name="class"  value="<?php echo $data['class']; ?>" required></td>
            </tr>

            <tr>
                <th scope="col">Address</th>
                <td><input type="text" class="form-control" name="address"  value="<?php echo $data['address']; ?>" required></td>
            </tr>

            <tr>
                <th scope="col">Contact Number</th>
                <td><input type="number" class="form-control" name="cnum"  value="<?php echo $data['contact']; ?>" required></td>
            </tr>

            <tr>
                <th scope="col">Image</th>
                <td><input type="file" name="image"></td>
            </tr>

            <tr>
                <td colspan="2"> 
                <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
                <input type="submit" class="btn btn-success" name="submit" value="Update"> 
                </td>
            </tr>
        </table>
    </form>
</div>