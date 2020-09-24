<?php include 'includes/header.php'; ?>

<?php 
 require_once '../vendor/autoload.php';
 use App\classes\userController;

 $users=userController::userslist();
 
 $updateMessage='';
 if (isset($_GET['update_to_active'])) {
     $id = $_GET['update_to_active'];
     $updateMessage=userController::updateToActive($id);
 }
 $deleteMessage='';
 if (isset($_GET['delete_user'])) {
     $id = $_GET['delete_user'];
     $deleteMessage=userController::deleteUser($id);
 }

 ?>

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Users</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users list</h6>
              <p class="m-0 font-weight-bold text-primary">(you can search by anything)</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <h1 class="text-center text-success"><?php echo($updateMessage); ?>
                  <?php if($updateMessage) {?>
                    <a href="users.php"><i class="fa fa-refresh fa-lg"></i></a>
                  <?php } ?>
                  </h1>
                  <h1 class="text-center text-danger"><?php echo($deleteMessage); ?>
                  <?php if($deleteMessage) {?>
                    <a href="users.php"><i class="fa fa-refresh fa-lg"></i></a>
                    <?php } ?>
                  </h1>
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Picture</th>
                      <th>Date of birth</th>
                      <th>Account Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
 <?php while ($user = mysqli_fetch_assoc($users)) { ?>
                    <tr>
                      <td><?php echo($user['user_name']); ?></td>
                      <td><?php echo($user['email']); ?></td>
                      <td><img src="../<?php echo($user['profile_pic']); ?>" style="height: 60px;width: 70px;"></td>
                      <td><?php echo($user['date_of_birth']); ?></td>
                      <td>
                      <?php if($user['acc_status']=='active'){ ?>
                         Paid
                      <?php } else { ?>   
                         Not paid
                      <?php } ?>
                      </td>
                      <td>
                      <?php if($user['acc_status']=='active'){ ?>
                         <a href="" class="btn btn-success"><i class="fa fa-check"></i></a>
                      <?php } else { ?>   
                         <a href="?update_to_active=<?php echo($user['id']); ?>" class="btn btn-info"><i class="fa fa-times"></i></a>
                      <?php } ?>
                         <a href="?delete_user=<?php echo($user['id']); ?>" class="btn btn-danger" title="Delete this user" onclick="return confirm('Are you sure to delete this user!');"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
 <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>








<?php include 'includes/header.php'; ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
