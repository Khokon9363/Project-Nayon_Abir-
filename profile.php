<?php 
session_start();
if (isset($_SESSION['id'])) {
    header('location:account.php');
}

require_once 'vendor/autoload.php';
use App\classes\userController;

 $error='';
 if (isset($_POST['btn'])) {
    $error=userController::registerProfile($_POST);
 }


?>
<html>
<head>
<title>profile</title>
<link href="css/address.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-image: url(login-bg.png)">
  <div class="total-container">
    <div class="form-head">
    <div class="form-head-title"><h2><b>SALTE STUDENT MULTI-PURPOSE CO-OPERATIVE SOCIETY (SALTESCOOP) LTD</b></h2></div>
          <div class="form-head-title RED"><h3><b>CAREFULLY COMPLETE THE FORM BELOW</b></h3></div>
          <div class="form-head-title application"><h4><b>WELCOME TO ACC/PLANT INFORMATION FORM</b></h4></div>
    </div>
    <div class="form-middle">
      <div class="middle-one">
        <div class="middle-two">
          <span class="blank"></span>
         <span class="blank-two"></span>
         <span class="blank-three"></span>
        </div>
        
      </div>
     <i class="fa fa-check"></i>
     <i class="fa fa-check icon-two"></i>

     <div class="middle-text">
       <li>Address</li>
       <li>Profile</li>
       <li>Plan</li>
       <li>Account</li>
     </div>
        
    </div>

    
    <div class="form-bottom">

      <form action="" method="POST" enctype="multipart/form-data">
        <div class="container">

           <?php if ($error) { ?>
                <div class="card text-center">
                  <div class="card-body">
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong class="text-danger"><?php echo($error); ?></strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
               </div>
           <?php } ?>
          
          <label for="firstname"><b>USERNAME</b></label>
          <input type="text" placeholder="username" name="user_name" id="firstname" required>
    
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="psw" required>
      

          <label for="psw-repeat"><b>CONFARM PASSWORD</b></label>
          <input type="password" placeholder="Confarm Password" name="confirm_password" id="psw-repeat" required>
          
          <input type="hidden" name="random_number" value="<?php echo $_GET['random_number']; ?>">
          <label for="psw-repeat"><b>PROFILE PICTURE</b></label>   </br>       
          <input type="file" id="myFile" name="profile_pic" required>
          
          
          
          <hr>
      


          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit" class="registerbtn" name="btn">Register</button>
        </div>
      </form>
      
        <div class="container signin">
          <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
    </div>
  
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>