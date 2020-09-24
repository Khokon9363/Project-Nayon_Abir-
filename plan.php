<?php 
session_start();
if (isset($_SESSION['id'])) {
    header('location:account.php');
}

require_once 'vendor/autoload.php';
use App\classes\userController;

 $error='';
 if (isset($_POST['btn'])) {
    $error=userController::registerPlan($_POST);
 }


?>
<html>
<head>
<title>plan</title>
<link href="css/plan.css" rel="stylesheet" type="text/css" />
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
          <h2>Which Of Our Plans Are You Interested In</h2>
          <label for="inlineFormCustomSelectPref">Choice Of Remuneration</label>
          <select class="custom-select my-1 mr-sm-2" name="plan" id="inlineFormCustomSelectPref" required>
            <option value="" selected="" disabled="">-- Choose a plan --</option>
            <option value="fixed">FIXED </option>
            <option value="risk_sharing">RISK SHARING </option>
          </select>

          <br>
            <input type="checkbox" id="student" name="student " value="student " required="">
            <label class="test" for="student "> <b>I agree that:</b>I am a student of life with the School of Accountable Living, Timing and Earning (SALTE). I believe that the human community gives value to her moneys; that money only facilitates our improving each other (by our efforts) but does not in itself give better value to anyone. I hereby request to be enlisted as a member of the SALTE Student Multipurpose Cooperative Society, pledging to abide by the rules governing this community of investors.<br></b><br></label> 
            <input type="checkbox" id="DISCLAIMER-CLAUSE" name="DISCLAIMER CLAUSE" value="DISCLAIMER CLAUSE" required="">
            <label for="vehicle2"><b>I agree on this DISCLAIMER CLAUSE :</b>The SALTE Student Multi-Purpose Cooperative Society disclaims liability for any funds/assets deposited with us directly or to our bank by you or through a proxy which are subsequently found to have derived from illegal source(s) or activities. You confirm that the funds/assets deposited with us directly or to our bank by you or through a proxy are not proceeds of crime or illegal activities.<br><br> </label>
            <input type="checkbox" id="DELCARATION" name="DELCARATION" value="DELCARATION" required="">
            <label for="DELCARATION"><b>I agree on this DELCARATION :</b> solemnly declare that the details given in this form are correct and that I conscientiously believe same to be true by virtue of the Oaths act of 1990.<br></label><br><br>

            <input type="hidden" name="random_number" value="<?php echo($_GET['random_number']); ?>">
            <button type="submit" name="btn" class="registerbtn">Finish</button>
         
         
        </div>
      </form>
    </div>
  
  </div>
</body>
</html>