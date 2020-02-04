<?php

    if(isset($_POST['submit']))
    {
        include('../dbcon.php');

        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $class = $_POST['class'];
        $address = $_POST['address'];
        $cnumber = $_POST['cnum'];
        $id = $_POST['sid'];
        $image = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];

        move_uploaded_file($tempname, "../dataimage/$image");

        $query = "UPDATE `student` SET `name` = '$name', `roll` = '$roll',  `class` = '$class', `address` = '$address', `contact` = '$cnumber' WHERE `student`.`id` = $id;";

        $result = mysqli_query( $con, $query );

        if($result == true)
        {
            ?>
            <script>
                alert('Data Updated Successfully.');
                window.open('updateform.php?sid=<?php echo $id;?>', '_SELF');
            </script>
            <?php
        }
    }

?>    