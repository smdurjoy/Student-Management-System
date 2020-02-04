<?php
    session_start();

    if(isset($_SESSION['uid']))
    {
        header('location: admin/admin.php');
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>login</title>
  </head>
  <body>

    <div class="container shadow p-3 mb-5 bg-white rounded" style="width:50%; margin-top:100px" >
    <h1 style="text-align:center">Login</h1>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="UserName">UserName</label>
                <input type="username" class="form-control" placeholder="type username.." name="uname">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control"  placeholder="password.." name="password">
            </div>
        
            <button type="submit" class="btn btn-primary" name="login">login</button>
        </form>
    </div>

    <?php
        include('dbcon.php');

        if (isset($_POST['login']))
        {
            $username = $_POST['uname'];
            $password = $_POST['password'];

            $query = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password' ";
            $result = mysqli_query( $con, $query);
            $row = mysqli_num_rows($result);

            if($row < 1)
            {
                ?>

                <script>
                    alert('Username or Password is Incorrect!');
                    window.open('login.php', '_self');
                </script>

                <?php
            }

            else
            {
                $data = mysqli_fetch_assoc($result);

                $id = $data['id'];

                session_start();

                $_SESSION['uid'] = $id;
                header('location:admin/admin.php');
            }
        }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>