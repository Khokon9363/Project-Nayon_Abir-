 <?php include 'includes/header.php'; ?>

<?php 
 require_once '../vendor/autoload.php';
 use App\classes\userController;

 $usersNumber=userController::usersNumber();
 $usersPending=userController::usersPending();

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" download="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-6">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Number of Users</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Users : <?php echo($usersNumber); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-user fa-4x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Earnings (Monthly) Card Example -->
            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Pending Requests Card Example -->
            <div class="col-xl-6 col-md-6 mb-6">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Users</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Pending : <?php echo($usersPending); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-paper-plane fa-4x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

<div class="container mt-5">
<div class="row">
    <div class="col-md-6 col-sm-8 col-lg-8 col-xl-8 m-auto">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <h1 class="text-center" id="time">Current Time</h1>
        </div>
      </div>
    </div>
</div>
</div>
<script type="text/javascript">
  
    setInterval(function(){ 
           var date = new Date();
           var hour = date.getHours();
           var minute = date.getMinutes();
           var second = date.getSeconds();
           // document.getElementById('time').innerHTML = hour +':'+minute+':'+second;  
           document.getElementById('time').innerHTML = date;  

       }, 1000);

</script>


              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->







 <?php include 'includes/footer.php'; ?>