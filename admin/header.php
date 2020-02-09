<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Student Managment System</title>
  </head>
  <body>

    <div class="container">
        <div class="admintitle">
            <a href="logout.php" class="logout" style="float:right; margin-top: 15px; color:#fff; margin-right:10px">Logout</a>
            <p class="h1">Welcome to Admin Dashboard</p>
        </div>

        <div class="navbar bg-light">
          <ul>
            <li class="active"><a href="admin.php">Dashboard</a></li>
            <li><a href="addstudent.php">Insert Student</a></li>
            <li><a href="updatestudent.php">Manage Student</a></li>
          </ul>
        </div>

        <script type="text/javascript"> 
          $(document).on('click', 'ul li', function(){
            $(this).addClass('active').siblings().removeClass('active')
          })
        </script>
        <!-- <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav mr-auto ml-auto">
              <li class="active"><a href="admin.php" class="nav-link">Dashboard</a></li>
              <li><a href="addstudent.php" class="nav-link">Insert Student</a></li>
              <li><a href="updatestudent.php" class="nav-link">Manage Student</a></li>
            </ul>
          </div>
        </nav> -->
        <!-- <div class="button">
          <a href="../index.php" class="btn btn-info">Back to website</a>
          <a href="addstudent.php" class="btn btn-secondary">Insert Student</a>
          <a href="updatestudent.php" class="btn btn-success">Manage Student</a>
        </div> -->

    </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>