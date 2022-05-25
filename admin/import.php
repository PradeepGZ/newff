<?php
session_start();
if(isset($_SESSION["isloggedin"]) && $_SESSION["isloggedin"] == 1) {

} else {
    header('Location: login.php');
}
include "./shared/config.php";
include "./shared/functions.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SAA</title>
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
                                <a href="assets/Member%20Sample%20Sheet.xlsx" class="btn btn-primary mt-2 mt-xl-0" download=""><i class="mdi mdi-download menu-icon"></i> Download Sample Excel</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Import Member Data</h4>

                           <div class="col-md-8 offset-2">

                              <div class="alert-msg text-center mb-3">
                                  <span id="message"></span>
                              </div>

                               <form method="post" id="import_excel_form" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <input type="file" name="import_excel"  class="form-control" />
                                  </div>
                                  <div class="form-group text-center">
                                      <input type="submit" name="import" id="import" class="btn btn-primary" value="Submit" />
                                  </div>
                               </form>

                           </div>

                        </div>
                    </div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © swarnaadarshabhiyan.com 2021</span>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="<?php echo $assets_url; ?>vendors/base/vendor.bundle.base.js"></script>


    <script>
        $(document).ready(function(){
            $('#import_excel_form').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:"upload.php",
                    method:"POST",
                    data:new FormData(this),
                    contentType:false,
                    cache:false,
                    processData:false,
                    beforeSend:function(){
                        $('#import').attr('disabled', 'disabled');
                        $('#import').val('Importing...');
                    },
                    success:function(data)
                    {
                        $('#message').html(data);
                        $('#import_excel_form')[0].reset();
                        $('#import').attr('disabled', false);
                        $('#import').val('Import');
                    }
                })
            });
        });
    </script>

</body>

</html>