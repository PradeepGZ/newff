<?php
if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
}
if(isset($_SESSION["isloggedin"])) {

} else {
    header('Location: login.php');
}

include "./shared/config.php";
include "./shared/functions.php";

$data = getinTouch();
$touch = $data["result"];

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
    <link rel="stylesheet" href="<?php echo $assets_url; ?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo $assets_url; ?>css/style.css">
    <!-- endinject -->
    <!-- <link rel="shortcut icon" href="<?php echo $assets_url; ?>images/favicon.png" /> -->
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include "./shared/header.php"; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include "./shared/nav.php"; ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="d-flex align-items-end flex-wrap">
                                <div class="mr-md-3 mr-xl-5">
                                    <!-- <h2>Welcome back!</h2> -->
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                <a href="export_write.php" class="btn btn-primary mt-2 mt-xl-0">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Contact Us Data</h4>
                            <p class="card-description">
                            </p>
                            <div class="table-responsive">
                            <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>
                            First Name
                          </th>
                          
                          <th>
                            Email ID
                          </th>
                          <th>
                            Contact No.
                          </th>
                          <th>
                           City
                          </th>
                          <th>
                            Study Destination
                          </th>
                            <th>
                            Source
                          </th>
                            <th>
                            Medium
                          </th>
                            <th>
                            Campaign
                          </th>
                            <th>
                            Term
                          </th>
                            <th>
                            Content
                          </th>
                           
                          <th>
                            Registered On
                          </th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($touch as $m) :?>
                        <tr>
                          <td class="py-3">
                            <?php echo $m["tname"];?>
                          </td>
                          <td class="py-3">
                            <?php echo $m["temail"];?>
                          </td>
                          <td class="py-3">
                            <?php echo $m["tphoneno"];?>
                          </td>
                          
                          <td class="py-3">
                            <?php echo $m["tcity"];?>
                          </td>
                          <td class="py-3">
                            <?php echo $m["tstudy_destination"];?>
                          </td>
                          
                            <td class="py-3">
                            <?php echo $m["tutm_source"];?>
                          </td>
                            <td class="py-3">
                            <?php echo $m["tutm_medium"];?>
                          </td>
                            <td class="py-3">
                            <?php echo $m["tutm_campaign"];?>
                          </td>
                            <td class="py-3">
                            <?php echo $m["tutm_term"];?>
                          </td>
                            <td class="py-3">
                            <?php echo $m["tutm_content"];?>
                          </td>
                           
                          <td class="py-3">
                            <?php echo date("F d, Y", strtotime($m["created_at"]));?>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                            </div>
                        </div>
                    </div>
                </div>





                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © fairfutureonline.com <?= date('Y')?></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="<?php echo $assets_url; ?>vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <?php /*
  <!-- Plugin js for this page-->
  <script src="<?php echo $assets_url; ?>vendors/chart.js/Chart.min.js"></script>
  <script src="<?php echo $assets_url; ?>vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?php echo $assets_url; ?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo $assets_url; ?>js/off-canvas.js"></script>
  <script src="<?php echo $assets_url; ?>js/hoverable-collapse.js"></script>
  <script src="<?php echo $assets_url; ?>js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo $assets_url; ?>js/dashboard.js"></script>
  <script src="<?php echo $assets_url; ?>js/data-table.js"></script>
  <script src="<?php echo $assets_url; ?>js/jquery.dataTables.js"></script>
  <script src="<?php echo $assets_url; ?>js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
  <script src="<?php echo $assets_url; ?>js/jquery.cookie.js" type="text/javascript"></script>
  */?>
</body>

</html>