<?php
include("config/db.php");
?>

<!-- Login Control -->
<?php
  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
        //Query to check username in admin table
    $sqlQuery = "SELECT * FROM admin WHERE username = :username";
    $statement = $db->prepare($sqlQuery);
    $statement->execute(
      array(
        ':username' => $username
        )
      );
        $res=$statement->fetch(PDO::FETCH_ASSOC);
  
        //Query to check username in admin table
      if($statement->rowCount() > 0){
        if($password == $res['password']){
          $_SESSION['admin']=$username;
          header("location: admin/");
        }else{
          // echo "<script>alert('')</script>";
          $alert_class = "class='alert alert-danger alert-dismissable alert-sm'";
          $result = "<small>Incorrect Password</small>";
        }
      }
        else{
        // echo "<script>alert('Username not found')</script>";
        $alert_class = "class='alert alert-warning alert-dismissable alert-sm'";
      $result = "<small>Invalid Username</small>";
      }
    }
        
    // echo "Login is working";
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TICO - Login</title>
    
    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  
  <div class="container">
    
    <!-- Outer Row -->
    <div class="row justify-content-center">
      
      <div class="col-xl-10 col-lg-12 col-md-9">
        
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-4 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Login To Dashboard!</h1><br/>
                      <?php 
                        if(isset($result)){ 
                          echo "<div ".$alert_class.">$result<a href='publicvoid0' class='close' data-dismiss='alert' aria-label='close'>&times;</a></div>"; 
                        } 
                      ?>
                    </div>
                    <form class="user" method="post">
                        <div class="form-group">
                          <input type="text" name="username" class="form-control form-control-user"
                              id="username" aria-describedby="UsernameHelp"
                              placeholder="Enter Username...">
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" class="form-control form-control-user"
                              id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input onclick="ShowPassword();" type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Show Password</label>
                            </div>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                            Login
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                      <a class="small" href="forgotPassword.php">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                      <a class="small" href="index.php">Go to TICO Home Page!</a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

    <!-- Show Password -->
    <script>
      let password = document.getElementById('password');
      function ShowPassword(){
        if (password.type === "password"){
          password.type = "text";
          // console.log("changed");
        }else{
          password.type = "password";
        }
      }
    </script>

</body>

</html>