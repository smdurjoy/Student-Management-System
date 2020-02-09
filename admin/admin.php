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

<!-- <div class="container">

    <div class="button">
        <a href="../index.php" class="btn btn-info">Back to website</a>
        <a href="addstudent.php" class="btn btn-secondary">Insert Student</a>
        <a href="updatestudent.php" class="btn btn-success">Manage Student</a>
    </div>

</div> -->