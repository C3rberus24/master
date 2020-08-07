<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Login</title>
</head>
<body class="bg-image">
    
<!--*********************** Login form ******************************-->

    <div class="container justify-content-center">
    <form class="form-signin" action="" method="post">
        <div id="img_logo">
            <center>
                <img src="pictures/adel-logo.png" class="rounded" width="150" height="150">
            </center>
        </div>
        <div>
            <br>
        </div>
      <div class="input-group">
        <i class="fa fa-user-o icons" aria-hidden="false"></i>
        <input type="text" name="login_u" placeholder="Usuario" class="form-control" autocomplete="off">
      </div>

      <div class="input-group">
        <i class="fa fa-lock icons" aria-hidden="false"></i>
        <input type="password" name="login_pass" placeholder="Contraseña" class="form-control" autocomplete="off">
      </div>

      <ul>
        
      </ul>

      <button type="submit" name="submit" class="btn btn-flat">Ingresar</button>
       <a href="/admin.view.php">Admin</a>
<!--        <a href="/Nuser.view.php">User</a>-->
    </form>

<!-- 
*****************************************************************--> 
    
<!--Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        </div>
    </body>
</html>
