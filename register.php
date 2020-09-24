<?php 
session_start();
if (isset($_SESSION['id'])) {
    header('location:account.php');
}
require_once 'vendor/autoload.php';
use App\classes\userController;

 if (isset($_POST['btn'])) {
    userController::register($_POST);
 }


 ?>
<html>
<head>
<title>address</title>
<link href="css/registration.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body style="background-image: url(login-bg.png)">
  <div class="total-container">
    <div class="form-head">
    <div class="form-head-title"><h2><b>SALTE STUDENT MULTI-PURPOSE CO-OPERATIVE SOCIETY (SALTESCOOP) LTD</b></h2></div>
          <div class="form-head-title RED"><h3><b>CAREFULLY COMPLETE THE FORM BELOW</b></h3></div>
          <div class="form-head-title application"><h4><b>WELCOME TO LOG-IN APPLICATION FORM</b></h4></div>
    </div>
    <div class="form-middle">
      <div class="middle-one">
        <div class="middle-two">
          <span class="blank"></span>
        <span class="blank-two"></span>
        </div>
        
      </div>
     <i class="fa fa-check"></i>

     <div class="middle-text">
       <li>Address</li>
       <li>Profile</li>
       <li>Plan</li>
       <li>Account</li>
     </div>
        
    </div>

    <div class="form-bottom">
        
      <form action="" method="POST">
        <div class="container">
            <h3 style="color: red;text-align: center;"><?php $error; ?></h3>
          <label for="surename"><b>SURENAME</b></label>
          <input type="text" name="sure_name" placeholder="Enter your surename" id="surename" required="">

          <label for="firstname"><b>FIRSTNAME</b></label>
          <input type="text" name="first_name" placeholder="Enter your firstname" id="firstname" required="">
      
          <label for="othername(s)"><b>OTHERNAME'S</b></label>
          <input type="text" name="other_name" placeholder="Enter your othername(s)" id="othername(s)" required="">

          <label for="Gender"><b>GENDER</b></label> <br>
          <input type="radio" name="gender" id="Gender" value="male" checked=""> Male
          <input type="radio" name="gender" id="Gender" value="female"> Female
          <input type="radio" name="gender" id="Gender" value="custom"> Custom <br><br>

          <label for="Gender"><b>DATE OF BIRTH</b></label>
          <input type="date" placeholder="Date-Of-Birth" name="date_of_birth" required="" id="Date-Of-Birth"><br><br>

          <label for="Telephone"><b>TELEPHONE</b></label>
          <input type="number" name="tel" placeholder="Telephone" id="Telephone" required="">


          <label for="email"><b>EMAIL</b></label>
          <input type="text" name="email" placeholder="Enter Email" id="email" required="">
      

          <label for="Nationality"><b>Nationality</b></label>
          <input type="text" name="nationality" placeholder="Nationality" id="Nationality" required="">
      
          <label for="email"><b>Mother's Maiden Name</b></label>
          <input type="text" name="mother_name" placeholder="mother's name" id="mother's-name" required="">
        
          <label for="email"><b>Religion</b></label>
          <input type="text" name="religion" placeholder="Religion" id="Religion" required="">
      
          <label for="email"><b>CONTACT/RESIDENTIAL ADDRESS</b></label>
          <input type="text" name="contact_address" placeholder="address" id="address" required="">
      
          <label for="email"><b>PERMANENT HOME ADDRESS</b></label>
          <input type="text" name="parmanent_address" placeholder="parmanent address" id="parmanent-address" required="">
      
          <label for="email"><b>L.G.A</b></label>
          <input type="text" placeholder="LGA" name="lga" id="LGA" required="">
      
        
          <label for="state"><b>STATE</b></label>
          <input type="text" placeholder="STATE" name="state" id="STATE" required="">

          <input type="hidden" value="<?php echo rand(10,1000000000000000000).'_'.'sitename'; ?>" id="STATE" name="random_number">
   
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit" name="btn" class="registerbtn">Register</button>
        </div>
      </form>

        <div class="container signin">
          <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
      
    </div>
  






  </div>
</body>
</html>