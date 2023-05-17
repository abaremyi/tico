<?php 
include('../config/db.php');

if($_SESSION['admin']){ 
?>
<!DOCTYPE html>
<html lang="en">

<?php include('includes/header.php'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('includes/sidebar.php');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('includes/navbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Report</h1>
<p class="mb-4">List of all Members Applicattion.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Members Application Report</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive table-sm">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead style="text-align: center;">
                    <tr>
                        <th>N<sup><u>0</u></sup></th>
                        <th>Picture</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Biography</th>
                        <th><small>How member heared<br/> about TICO</small></th>
                        <th><small>Reason to be<br/> a member</small></th>
                        <th>status</th>
                    </tr>
                </thead>
                <tfoot style="text-align: center;">
                    <tr>
                        <th>N<sup><u>0</u></sup></th>
                        <th>Picture</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Biography</th>
                        <th><small>How member heared<br/> about TICO</small></th>
                        <th><small>Reason to be<br/> a member</small></th>
                        <th>status</th>
                    </tr>
                </tfoot>
                <tbody>
                  <?php 
                    $members = $db->prepare("SELECT * FROM members");
                    $members->execute();
                    $i = 1;
                    while($res = $members->fetch(PDO::FETCH_ASSOC)): 
                      $image = (!empty($res['photo'])) ? '../img/'.$res['photo'] : '../img/profile.png';
                  ?>
                      
                      <tr>
                          <td><?= $i ?></td>
                          <td><script>console.log("Iphoto link ni ");</script>
                            <img src='<?= $image ?>' height='40px' width='40px'>
                          </td>
                          <td><?= $res['firstname'] ?></td>
                          <td><?= $res['lastname'] ?></td>
                          <td><?= $res['email'] ?></td>
                          <td><?= $res['phone'] ?></td>
                          <td><?= $res['dob'] ?></td>
                          <td><?= $res['address'] ?></td>
                          <td><?= $res['biography'] ?></td>
                          <td><small><?= $res['ticoWhereBy'] ?></small></td>
                          <td><small><?= $res['whyTicoMember'] ?></small></td>
                          <td>
                            <?php
                              if($res['status'] == 'Pending'){?>
                                <a class='btn btn-sm btn-primary' href="#">
                                  Pending
                                </a>
                              <?php }else if ($res['status'] == 'Approved'){ ?>
                                <a class='btn btn-sm btn-success' href="#">
                                  Approved
                                </a>
                              <?php }else if ($res['status'] == 'Canceled'){ ?>
                                <a class='btn btn-sm btn-danger' href="#">
                                  Rejected
                                </a>
                                <?php	 } ?>

                                </td>
                              </tr>
                                  
                              <?php $i++; endwhile ?>
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
                        <span>Copyright &copy; TICO <?php echo date('Y'); ?></span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php 
}else{
	header('Location: logout.php');
	} 
	?>