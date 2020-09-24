<?php 
Namespace App\classes;



class userController
{
  

	public function register($data)
	{   
		include 'dbConnection.php';

		$sql = "INSERT into users(sure_name,first_name,other_name,gender,date_of_birth,tel,email,nationality,mother_name,religion,contact_address,parmanent_address,lga,state,user_name,password,profile_pic,random_number,acc_status) VALUES('$data[sure_name]','$data[first_name]','$data[other_name]','$data[gender]','$data[date_of_birth]','$data[tel]','$data[email]','$data[nationality]','$data[mother_name]','$data[religion]','$data[contact_address]','$data[parmanent_address]','$data[lga]','$data[state]','','','','$data[random_number]','deactive')";

		if (mysqli_query($link,$sql)) {
              $random_number = $data['random_number'];
        header('location:profile.php?random_number='.$random_number);
        
		} else {
			die("sql problem".mysqli_error($link));
		}

	
}
     public function registerProfile($data)
     {
     	include 'dbConnection.php';

      $imageName=$_FILES['profile_pic']['name'];
      $imagetype=$_FILES['profile_pic']['type'];
      $imageSize=$_FILES['profile_pic']['size'];
      $imageTempLoc=$_FILES['profile_pic']['tmp_name'];
      $imageStore="profile_pics/".$imageName;
      move_uploaded_file($imageTempLoc, $imageStore);


     	if ($data['password']==$data['confirm_password']) {

     		$sql = "UPDATE users SET password=md5('$data[password]'),user_name='$data[user_name]',profile_pic='profile_pics/$imageName' WHERE random_number='$data[random_number]'";
     		if (mysqli_query($link,$sql)) {
                 $random_number = $data['random_number'];
               	 header('location:plan.php?random_number='.$random_number);
	     	} else {
	     		die("sql problem".mysqli_error($link));
	     	}
     	} else {
     		 return $error = 'Password & Confirm Password does not match .';
     	}
     	
     	
}
     public function registerPlan($data)
     {
    	include 'dbConnection.php';
    	$sql = "UPDATE users SET plan='$data[plan]' WHERE random_number='$data[random_number]'";
     		if (mysqli_query($link,$sql)) {
                 
                 $sql2 = "SELECT * FROM users WHERE random_number='$data[random_number]'";
                 if (mysqli_query($link,$sql2)) {
                     $all = mysqli_query($link,$sql2);
                     $alldata = mysqli_fetch_assoc($all);

                     switch ($alldata['acc_status']) {
                         case 'active':
                                session_start();
                                $_SESSION['id'] = $alldata['id'];
                                header('location:dashboard.php');
                             break;
                        case 'deactive':
                                session_start();
                                $_SESSION['id'] = $alldata['id'];
                                header('location:account.php');
                             break;
                         
                      }
                 }
                 
	     	} else {
	     		die("sql problem".mysqli_error($link));
	     	}
}

     public function login($data)
     {
    	include 'dbConnection.php';
    	$sql = "SELECT * FROM users WHERE user_name='$data[user_name]'";

     		if (mysqli_query($link,$sql)) {
                 $all = mysqli_query($link,$sql);
                 $alldata = mysqli_fetch_assoc($all);
                 if ($alldata['password']==md5($data['password']) && $alldata['acc_status']=='active') {
                      session_start();
                      $_SESSION['id'] = $alldata['id'];
                      header('location:dashboard/user_dashboard.php');
                 } elseif ($alldata['password']==md5($data['password']) && $alldata['acc_status']=='deactive') {
                      session_start();
                      $_SESSION['id'] = $alldata['id'];
                      header('location:profile.php');
                 } else {
                      return $error = 'Invalid Name & Password .';
                      
                 }
                 
	     	} else {
	           die("sql problem".mysqli_error($link));
	     	}
}
      
      public function check($id)
      {   
          include 'dbConnection.php';
          $sql = "SELECT acc_status FROM users WHERE id=$id";

          if (mysqli_query($link,$sql)) {
                 $acc_status = mysqli_fetch_assoc(mysqli_query($link,$sql));
                 $acc_status =  $acc_status['acc_status'];
                 
                 switch ($acc_status) {
                     case 'active':
                           header('location:dashboard');
                         break;
                     
                     case 'deactive':
                         header('location:account.php');
                         break;
                 }

          } else {
                 die("sql problem".mysqli_error($link));
          }
          
      }
      public function checkFromDashboard($id)
      {   
          include 'dbConnection.php';
          $sql = "SELECT acc_status FROM users WHERE id=$id";

          if (mysqli_query($link,$sql)) {
                 $acc_status = mysqli_fetch_assoc(mysqli_query($link,$sql));
                 $acc_status =  $acc_status['acc_status'];
                 
                 switch ($acc_status) {
                     case 'deactive':
                         header('location:../account.php');
                         break;
                 }

          } else {
                 die("sql problem".mysqli_error($link));
          }
          
      }
      public function checkFromProfile($id)
      {   
          include 'dbConnection.php';
          $sql = "SELECT acc_status FROM users WHERE id=$id";

          if (mysqli_query($link,$sql)) {
                 $acc_status = mysqli_fetch_assoc(mysqli_query($link,$sql));
                 $acc_status =  $acc_status['acc_status'];
                 
                 switch ($acc_status) {
                     case 'active':
                           header('location:dashboard');
                         break;
                 }

          } else {
                 die("sql problem".mysqli_error($link));
          }
          
      }
      public function logout()
      {   
          session_destroy();
          header('location:index.php');
      }
      public function logoutdashboard()
      {   
          session_destroy();
          header('location:../index.php');
      }





   // Dashboard
      public function userslist()
      {
         include 'dbConnection.php';
         $sql = "SELECT * FROM users WHERE user_name!='Edward'";

         if (mysqli_query($link,$sql)) {
              return $users = mysqli_query($link,$sql);
         } else {
              die("sql problem".mysqli_error($link));
         }
         
      }
      public function usersNumber()
      {
         include 'dbConnection.php';
         $sql = "SELECT COUNT(id) as total FROM users";

         if (mysqli_query($link,$sql)) {

               $data = mysqli_fetch_assoc(mysqli_query($link,$sql));
               return $usersNumber = $data['total']-1;
         } else {
              die("sql problem".mysqli_error($link));
         }
         
      }
      public function usersPending()
      {
         include 'dbConnection.php';
         $sql = "SELECT COUNT(id) as total FROM users WHERE acc_status='deactive'";

         if (mysqli_query($link,$sql)) {

               $data = mysqli_fetch_assoc(mysqli_query($link,$sql));
               return $usersPending = $data['total'];
         } else {
              die("sql problem".mysqli_error($link));
         }
         
      }

      public function updateToActive($id)
      {
         include 'dbConnection.php';
         $sql = "UPDATE users SET acc_status='active' WHERE id=$id";

         if (mysqli_query($link,$sql)) {

               return $updateMessage = 'This user has been updated as a paid user';
               header('location:users.php');

         } else {
              die("sql problem".mysqli_error($link));
         }
         
      }
      public function deleteUser($id)
      {
         include 'dbConnection.php';
         $sql = "DELETE FROM users WHERE id=$id";

         if (mysqli_query($link,$sql)) {

               return $deleteMessage = 'This user has been deleted';
               header('location:users.php');

         } else {
              die("sql problem".mysqli_error($link));
         }
         
      }
      public function allaboutme($id)
      {
         include 'dbConnection.php';
         $sql = "SELECT * FROM users WHERE id=$id";

         if (mysqli_query($link,$sql)) {

               return $allaboutme = mysqli_fetch_assoc(mysqli_query($link,$sql));

         } else {
              die("sql problem".mysqli_error($link));
         }
         
      }





   




}








 ?>