<?php

function showdetails($class, $roll)
{
    include('dbcon.php');

    $sql = " SELECT * FROM `student` WHERE `class` = '$class' AND `roll` = '$roll' ";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $data = mysqli_fetch_assoc($result);

        ?>
        <div class="container">
        <table class="table">

            <th colspan="3">
                <h2 style="text-align:center;">Student Information</h2>
            </th>

            <tr>
                <td rowspan="5"><img src="dataimage/<?php echo $data['image']; ?>"> </td>
                <th>Name</th>
                <td><?php echo $data['name'];?> </td>
            </tr>

            <tr>
                <th>Roll</th>
                <td><?php echo $data['roll'];?> </td>
            </tr>

            <tr>
                <th>Class</th>
                <td><?php echo $data['class'];?> </td>
            </tr>

            <tr>
                <th>Address</th>
                <td><?php echo $data['address'];?> </td>
            </tr>

            <tr>
                <th>Contact Number</th>
                <td><?php echo $data['contact'];?> </td>
            </tr>
        </table>
        </div>
        <?php
    }

    else
    {
        echo " <script> alert('No Student Found!'); </script> ";
    }
}

?>