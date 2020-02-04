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

if(isset($_GET['sid']))
{
    include('../dbcon.php');

    $id = $_GET['sid'];
    $sql = " DELETE FROM `student` WHERE `id` = '$id' ";
    $data = mysqli_query($con, $sql);
    header('location: updatestudent.php');

    ?>

    <?php
}

?>