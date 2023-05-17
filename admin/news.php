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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">News Page</h1>
                        
                    </div>
										<!-- Content Row -->
										
										<div class="row">
										
											<!-- NEWS REGISTRATION -->
											<div class="col-xl-12 col-lg-11">
													<div class="card shadow mb-4">
															<!-- Card Header - Dropdown -->
															<div
																	class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
																	<h6 class="m-0 font-weight-bold text-primary">News Entry</h6>
																	<div class="dropdown no-arrow">
																			<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
																					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
																			</a>
																			<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
																					aria-labelledby="dropdownMenuLink">
																					<div class="dropdown-header">Dropdown Header:</div>
																					<a class="dropdown-item" href="#">Action</a>
																					<a class="dropdown-item" href="#">Another action</a>
																					<div class="dropdown-divider"></div>
																					<a class="dropdown-item" href="#">Something else here</a>
																			</div>
																	</div>
															</div>
															<!-- Card Body -->
															<div class="card-body">
																<!-- Register News form -->
																<form action="" method="post">
																	<div class="row">
																		<div class="col-md-12" style="padding:10px 10px; background:white;">
																			<div class="row">
																				<div class="col-md-3 border-right">
																					<div class="d-flex flex-column align-items-center text-center p-3 py-5">
																						
																						<!-- <img src="../img/avatar-news.png" style="height:30%;width:30%;" alt="avatar" class="img-circle"> -->
																						
																						<div class="control-group profile-content">
																							<label for="wizard-picture">News Profile Photo&nbsp;<span class="text-danger">*</span> </label>
																							<div class="picture-container">
																								<div class="picture">
																										<img class="picture-src" id="wizardPicturePreview" title=""/>
																										<input type="file" id="wizard-picture" name="photo" required="required" data-validation-required-message="Please Select your Photo" >
																								</div>
																								<h5 style=" color:#28a745">Click in dark area to Choose a Picture</h5>
																							</div>
																							<p class="help-block text-danger"></p>
																						</div>
																						
																						<br><h4 class="font-weight-bold">OR</h4>
																						<div class="row text-center">
																							<div class="col-md-12">
																								<label class="labels">Use News Image URL <br> <small class="text-primary">( use web images to save storage)</small> </label>
																								<textarea name="url" class="form-control" placeholder="Add News Photo URL"  
																								rows="5"></textarea>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="col-md-5 border-right">
																					<div class="p-3 py-5">
																						<div class="row mt-3">
																							<div class="col-md-12">
																								<label class="labels">News Title&nbsp;<span class="text-danger">*</span> <small class="text-primary">( Don't exceed 200 words )</small></label>
																								<input type="text" class="form-control" name="title" placeholder="Add News Title">
																							</div>
																							<div class="col-md-12">
																								<label class="labels">News date&nbsp;<span class="text-danger">*</span></label>
																								<input type="date" class="form-control" name="newsdate" placeholder="Add News Date">
																							</div>
																							<div class="col-md-12">
																								<label class="labels">News Status&nbsp;<span class="text-danger">*</span></label>
																								<select name="status" class="form-control" id="status">
																									<option value="">Choose News Status</option>
																									<option value="New">New</option>
																									<option value="Recent">Recent</option>
																									<option value="Old">Old</option>
																								</select>
																							</div>
																						</div>
																						<!-- Additional Form inputs -->
																						<!-- <div class="row mt-3">
																							<div class="col-md-6"><label class="labels">Zip Code</label>
																								<input type="text" class="form-control" name="zip_code" placeholder="zip">
																							</div>
																							<div class="col-md-6"><label class="labels">State/Region</label>
																								<input type="text" class="form-control" name="state" placeholder="state">
																							</div>
																							<div class="col-md-12">
																								<label class="labels">Email ID</label>
																								<input type="text" class="form-control" placeholder="enter email" name="email">
																							</div>
																						</div>
																						<div class="row mt-2">
																							<div class="col-md-6">
																								<label class="labels">Last Name</label>
																								<input type="text" class="form-control" name="lastname" placeholder="Last Name">
																							</div>
																							<div class="col-md-6"><label class="labels">First Name</label>
																								<input type="text" class="form-control" name="firstname" placeholder="first name">
																							</div>
																						</div> -->
																						
																				
																					</div>
																				</div>
																				<div class="col-md-4">
																					<div class="p-3 py-5">
																						<div class="col-md-12">
																							<label class="labels">News Details&nbsp;<span class="text-danger">*</span> <small class="text-primary">( Don't exceed 3000 words )</small></label>
																							<textarea name="details" class="form-control" placeholder="Add News details" value="" cols="30"
																								rows="10"></textarea>
																						</div>
																					</div>
																				</div>
																			</div>
																			<br>
																				<div class="mt-50 text-center">
																					<button class="btn btn-primary profile-button" name="publish" type="submit">Publish News</button>
																				</div>
																				<br>
																		</div>
																	</div>
																</form>
																	<!-- End Register News form -->
															</div>
													</div>
											</div>
											<!-- END NEWS REGISTRATION -->
										</div>
										<!-- /.content row -->

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