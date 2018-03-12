<!DOCTYPE html>
<html>
<head>
  <title>FaceClone</title>
  
  <script src="js/jquery.js"/> </script>
  <script src="js/bootstrap.min.js"/> </script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <?php 
  include 'PHP/header.php';
  ?>

</head>
<body>
  <!-- nav -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">FaceClone</a>
      </div>
    </div>
  </nav>
  <!-- ./nav -->

  <!-- main -->
  <main class="container">
  <h1 class="text-center">Welkom bij FaceClone! <br><small>Een eenvoudige Facebook clone.</small></h1>

    <div class="row">
      <div class="col-md-6">
        <h4>Login om te beginnen.</h4>

        <!-- login form -->
        <form method="post" action="home.php">
          <div class="form-group">
            <input class="form-control" type="text" name="username" placeholder="Username">
          </div>

          <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>

          <div class="form-group">
            <input class="btn btn-primary" type="submit" name="login" value="Login">
          </div>
        </form>
        <!-- ./login form -->
      </div>
      <div class="col-md-6">
        <h4>Nog geen account? Meldt je aan.</h4>

        <!-- register form -->
        <form method="post" action="home.php">
          <div class="form-group">
            <input class="form-control" type="text" name="username" placeholder="Username">
          </div>

          <div class="form-group">
            <input class="form-control" type="text" name="location" placeholder="Location">
          </div>

          <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>

          <div class="form-group">
            <input class="btn btn-success" type="submit" name="register" value="Aanmelden">
          </div>
        </form>
        <!-- ./register form -->
      </div>
    </div>
  </main>
  <!-- ./main -->

  <!-- footer -->
  <footer class="container text-center">
    <ul class="nav nav-pills pull-right">
      <li>FaceClone - Door Andrés Bechger - onderdeel van het Webmaster College programma.</li>
    </ul>
  </footer>
  <!-- ./footer -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>