<?php 
session_start();

require_once 'vendor/autoload.php';
use App\classes\userController;

 $error='';
 if (isset($_POST['btn'])) {
    $error=userController::login($_POST);
 }
 if (isset($_SESSION['id'])) {
     $id = $_SESSION['id'];
     userController::check($id);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

    <div class="continer" style="background-image: url(login-bg.png);width: 100%;height: 1000px;">
        <div class="form-row">
            <div class="form-container">
                  <div class="form-left">
                    <img src="image/banner/login-img.png">
                

                </div>
                <div class="form-right">
                    <div class="form-right-container">
                        <div class="right-top">
                            <h3><b>SALTES MULTIPURPOSE COOPERATIVE LIMITED</b></h3>
                            <img src="image/logo/logo.jpg">
                            <h4>Enter your credentials to login.</h4>
                            <h4 style="color: red;"><?php echo $error; ?></h4>

                        </div>
                        <div class="right-bottom">

                            <form action="" method="POST">
                                <div class="right-form-container">
                                    <label for="surename"><b>USERNAME</b></label>
                                    <input type="text" placeholder="username" name="user_name" id="username" required>
                          
                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="password" id="psw" required>
                                
                        
                              
                                  
                                  <button type="submit" name="btn" class="registerbtn">LogIn</button>
                                </div>
                            </form>
                              
                                <div class="signin">
                                  <a href="register.php">Sign Up</a>
                                </div>
                                <div class="forget-pwd">
                                   <a href="#">forget password</a>
                                </div>

                        </div>
                    </div>

                </div>

            </div>
          
        </div>

    </div>
    <div class="bottom">

    </div>



    
</body>
</html>