<?php 
session_start();

require_once 'vendor/autoload.php';
use App\classes\userController;

if (isset($_SESSION['id'])) {
     $id = $_SESSION['id'];
     userController::checkFromProfile($id);
}
if (isset($_GET['logout'])) {
    userController::logout();
}

 ?>
<html>
<head>
<title>account</title>
<link href="css/account.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body style="background-image: url(login-bg.png)">
  <div class="total-container">
    <div class="form-head">
    <div class="form-head-title"><h2><b>SALTE STUDENT MULTI-PURPOSE CO-OPERATIVE SOCIETY (SALTESCOOP) LTD</b></h2></div>
          <div class="form-head-title RED"><h3><b>CAREFULLY COMPLETE THE FORM BELOW</b></h3></div>
          <div class="form-head-title application"><h4><b>WELCOME TO ADD/ACCOUNT INFORMATION FORM</b></h4></div>
    </div>
    <div class="form-middle">
      <div class="middle-one">
        <div class="middle-two">
          <span class="blank"></span>
         <span class="blank-two"></span>
         <span class="blank-three"></span>
         <span class="blank-four"></span>
         
        </div>
        
      </div>
     <i class="fa fa-check"></i>
     <i class="fa fa-check icon-two"></i>
     <i class="fa fa-check icon-three"></i>
     <i class="fa fa-check icon-four"></i>

     <div class="middle-text">
       <li>Address</li>
       <li>Profile</li>
       <li>Plan</li>
       <li>Account</li>
     </div><br>
 <style type="text/css">
   li{padding: 6px;}
 </style>    
        <h1 style="color: green;text-align: center;">Hello Sir !</h1>
        <h3 style="color: red;text-align: center;">Please active your account first !!</h3>
        <ol>
          <li> Pay your registration fee (N1,500) 
               by 
               <a href="https://www.firstbanknigeria.com/"><img src="image/firstbank.png" style="height: 30px;width: 50px;"></a>
               <a href="https://www.paypal.com/"><img src="image/paypal.png" style="height: 30px;width: 50px;"></a>
               <a href="https://paystack.com/"><img src="image/paystack.jpeg" style="height: 30px;width: 50px;"></a>
          </li>
          <li> After payment, please contact us with email us or call us </li>
          <li> We will  confirm your payment and make you an active user </li>
          <li> After all your ca login in your active account </li>
          <li>!! Stay with us !!</li>
          <li>For any query, please contact with us</li>
        </ol>
        <p style="text-align: center;"> or   <a href="?logout" style="font-size: 30px;color: green;"> Logout </a> </p>
    </div>

    
 
  
  </div>
</body>
</html>