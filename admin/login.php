<?php
include "./shared/config.php";
include "./shared/functions.php";
$isError = 0;
if($_POST)
{

  $data = checkAuth($_POST);
  $result = $data;

  if($result) {
    session_start();
    $_SESSION["isloggedin"] = 1;
    header('Location: index.php');
  } else {
    $isError = 1;
  }
  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fair Future</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo $assets_url; ?>vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo $assets_url; ?>vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo $assets_url; ?>css/style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="<?php echo $assets_url; ?>images/favicon.png" /> -->
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo text-center">
                <img src="<?php echo $assets_url; ?>images/fairfuture-logo.png" alt="logo">
              </div>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="" method="post">
                <div class="form-group">
                  <input name="username" type="text" required class="form-control form-control-lg" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input name="pass" type="password" required class="form-control form-control-lg" id="pass" placeholder="Password">
                </div>
                <?php if ($isError):?>
              <h6 class="font-weight-light">Invalid Credentials</h6>
              <?php endif; ?>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo $assets_url; ?>vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo $assets_url; ?>js/off-canvas.js"></script>
  <script src="<?php echo $assets_url; ?>js/hoverable-collapse.js"></script>
  <script src="<?php echo $assets_url; ?>js/template.js"></script>
  <!-- endinject -->
</body>

</html>
