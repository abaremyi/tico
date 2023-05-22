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
															</div>
															<!-- Card Body -->
															<div class="card-body">
																<div class="row">
																	<div class="col-md-2"></div>
																	<div class="col-md-8" style="display:flex;align-items: center;justify-content: center;">
																		<!-- DATABASE ERROR CHECKING -->
																		<?php
																				if(isset($_SESSION['error'])){
																				echo "
																						<div class='alert alert-danger alert-dismissible  btn-icon-split' role='alert'>
																							<button style='margin-top:-10px;' type='button' class='close' data-dismiss='alert' aria-label='Close'>
																								<span aria-hidden='true'>&times;</span>
																							</button>
																							<span class='icon text-white-50'>
																									<i class='far fa-fw fa-bell'></i>
																							</span>
																							<span style='margin-right:35px' class='text'><small>".$_SESSION['error']."</small>&nbsp;</span>
																						</div>
																				";
																				unset($_SESSION['error']);
																				}
																				if(isset($_SESSION['success'])){
																				echo "
																						<div class='alert alert-success alert-dismissible btn-icon-split' role='alert'>
																							<button style='margin-top:-10px;' type='button' class='close' data-dismiss='alert' aria-label='Close'>
																								<span aria-hidden='true'>&times;</span>
																							</button>
																							<span class='icon text-white-50'>
																									<i class='fas fa-check'></i>
																							</span>
																							<span style='margin-right:35px' class='text'><small>".$_SESSION['success']."</small>&nbsp;</span>
																						</div>
																				";
																				unset($_SESSION['success']);
																				}
																			?>
																	</div>
																	<div class="col-md-2"></div>
																</div>
																
																<!-- Register News form -->
																<form id="newsForm"  action="actions/newsManagement.php" method="POST" enctype="multipart/form-data">
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
																										<input type="file" id="wizard-picture" name="photo" >
																								</div>
																								<h6 class="text-dark">Click in dark area to Choose a Photo</h6>
																							</div>
																							<p class="help-block text-danger"></p>
																						</div>
																						
																						<br><h4 class="font-weight-bold text-danger">OR</h4>
																						<div class="row text-center">
																							<div class="col-md-12">
																								<label class="labels">Use News Image URL <br> <small class="text-primary">( use web images to save storage)</small> </label>
																								<textarea name="url" id="url" class="form-control" placeholder="Add News Photo URL"  
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
																								<input type="text" class="form-control" name="title" id="title" placeholder="Add News Title" required="required" data-validation-required-message="Please add News Title">
																								<p class="help-block text-danger"></p>
																							</div>
																							<div class="col-md-12">
																								<label class="labels">News date&nbsp;<span class="text-danger">*</span></label>
																								<input type="date" class="form-control" name="newsdate" id="newsdate" placeholder="Add News Date" required="required" data-validation-required-message="Please Select Date">
																								<p class="help-block text-danger"></p>
																							</div>
																							<div class="col-md-12">
																								<label class="labels">News Status&nbsp;<span class="text-danger">*</span></label>
																								<select name="status" id="status" class="form-control" id="status" required="required" data-validation-required-message="Please Select News Status">
																									<option value="">Choose News Status</option>
																									<option value="New">New</option>
																									<option value="Recent">Recent</option>
																									<option value="Old">Old</option>
																								</select>
																								<p class="help-block text-danger"></p>
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
																							<textarea name="details" id="details" class="form-control" placeholder="Add News details" value="" cols="30"
																								rows="10" required="required" data-validation-required-message="Please Fill this Field"></textarea>
																								<p class="help-block text-danger"></p>
																						</div>
																					</div>
																				</div>
																			</div>
																			<br>
																				<div class="mt-50 text-center">
																					<button class="btn btn-primary profile-button" name="publish" id="publish" type="submit">Publish News</button>
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
										
											<!-- DataTabes News -->
											<div class="card shadow mb-4">
													<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
															<h6 class="m-0 font-weight-bold text-primary">News Record</h6>
																	<div class="dropdown no-arrow">
																			<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
																					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
																			</a>
																			<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
																					aria-labelledby="dropdownMenuLink">
																					<div class="dropdown-header">Dropdown Header:</div>
																					<a class="dropdown-item" href="#">Print Record</a>
																					<!-- <a class="dropdown-item" href="#">Another action</a>
																					<div class="dropdown-divider"></div>
																					<a class="dropdown-item" href="#">Something else here</a> -->
																			</div>
																	</div>
													</div>
													<div class="card-body">
															<div class="table-responsive table-sm">
																	<table class="table table-bordered" id="dataTable"  cellspacing="0">
																			<thead style="text-align: center;">
																					<tr>
																							<th>N<sup><u>0</u></sup></th>
																							<th>Picture</th>
																							<th>Title</th>
																							<th>Date</th>
																							<th>Photo URL</th>
																							<th style="width:25%">status</th>
																							<th>Actions</th>
																					</tr>
																			</thead>
																			
																			<tbody>
																				<?php 
																					$news = $db->prepare("SELECT * FROM news order by addedDate DESC");
																					$news->execute();
																					$i = 1;
																					while($res = $news->fetch(PDO::FETCH_ASSOC)): 
																						if (!empty($res['photo'])) {
																							$image = '../img/'.$res['photo'];
																						} else if(!empty($res['url']))  {
																							$image = $res['url'];
																						}else {
																							$image = '../img/avatar-news.png';
																						}
																						
																						// $image = (!empty($res['photo'])) ? '../img/'.$res['photo'] : '../img/avatar-news.png';
																						// convert date
																						$newsdate = strtotime($res['newsdate']);
																						$finalDate = date('M d, Y',$newsdate);
																						
																				?>
																						
																						<tr>
																								<td style="width:5%"><?= $i ?></td>
																								<td style="width:20%">
																									<img class="rounded-circle img-responsive mt-2" src='<?= $image ?>' height='40px' width='40px'>
																									<div class="btn-group btn-group-sm mt-2">
																										<button class="btn photo btn-pill btn-outline-primary btn-sm" type='button' data-id="<?=$res['newsid']?>"><i class="fas fa-upload"></i></button>
																									</div>
																								</td>
																								<td style="width:30%"> <small> <?= $res['title'] ?></small></td>
																								<td style="width:15%"><small><?= $finalDate ?></small></td>
																								<td style="width:10%">
																									<?php if ($res['url']) {
																									?>
																										<button type="button" class="btn btn-pill btn-outline-info btn-sm" data-toggle="popover" title="<?= $res['title'] ?>" data-content="<?= $res['url'] ?>">Click me</button>
																									<?php } ?>
																								</td>
																							
																								<td style="text-align:center;" class="">
																									<?php
																										if($res['status'] == 'Recent'){?>
																											<a class='btn btn-sm btn-primary' href="#">
																												Recent
																											</a>
																										<?php }else if ($res['status'] == 'New'){ ?>
																											<a class='btn btn-sm btn-success' href="#">
																												New
																											</a>
																										<?php }else if ($res['status'] == 'Old'){ ?>
																											<a class='btn btn-sm btn-danger' href="#">
																												Old
																											</a>
																											<?php	 } ?>

																								</td>
																								<td class='table-action' style='width:10%'>
																									<div class='btn-group btn-group-sm mb-4' role='group' aria-label='Small button group'>
																										<button type='button' data-id='<?= $res['newsid'] ?>' class='btn view btn-pill btn-outline-primary btn-sm'><i class='fas fa-envelope-open'></i></button>
																										<button type='button' data-id='<?= $res['newsid'] ?>' class='btn edit btn-pill btn-outline-success btn-sm'><i class='fas fa-edit'></i></button>
																										<button type='button' data-id='<?= $res['newsid'] ?>' class='btn delete btn-pill btn-outline-danger btn-sm'><i class='fas fa-trash'></i></button>
																									</div>
																								</td>
																							</tr>
																												
																										<?php $i++; endwhile ?>
																			</tbody>
																	</table>
															</div>
													</div>
											</div>
											<!-- End DataTabes News -->
											<!-- Include Modals Here -->
											<?php include('modals/newsModals.php'); ?>
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

		<!-- Validation Controller Javascript File -->
		<!-- <script src="controller/jqBootstrapValidation.min.js"></script> -->

		<!-- News Controller Javascript File -->
		<!-- <script src="controller/news.js"></script> -->

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Scripts to Load Modals -->
      <script>
          $(function(){

					$(document).on('click', '.view', function(e){
							e.preventDefault();
							$('#viewModal').modal('show');
							var id = $(this).data('id');
							console.log('id yabonetse '+id);
							getRow(id);
              // getPicRow(id);
					});

          $(document).on('click', '.edit', function(e){
              e.preventDefault();
              $('#editModal').modal('show');
              var id = $(this).data('id');
              getRow(id);
          });

          $(document).on('click', '.delete', function(e){
              e.preventDefault();
              $('#deleteModal').modal('show');
              var id = $(this).data('id');
              getRow(id);
          });

          $(document).on('click', '.photo', function(e){
              e.preventDefault();
              $('#profilePictureModal').modal('show');
              var id = $(this).data('id'); 
              getPicRow(id);
          });

          $(document).on('click', '.status', function(e){
              e.preventDefault();
              var id = $(this).data('id');
              getRow(id);
          });

          });

          function getPicRow(id){
          $.ajax({
              type: 'POST',
              url: 'controller/newsRow.php',
              data: {id:id},
              dataType: 'json',
              success: function(response){
              $('#pictureNews').val(response.newsid);
              $('.profileBg').css({
                'height'                : '180px',
                'margin-bottom'         : '30px',
                'background'            : 'url(../img/'+response.photo+')',
                'background-repeat'     : 'no-repeat',
                'background-position'   : 'center',
                'background-size'       : 'cover',
                '-webkit-filter'        : 'blur(10px)',
                '-moz-filter'           : 'blur(10px)',
                '-o-filter'             : 'blur(10px)',
                '-ms-filter'            : 'blur(10px)',
                'filter'                : 'blur(10px)',
                'min-width'             : '90%'
              });
              $('#newsTitle').val(response.title);
              }
          });
          }

          function getRow(id){
							console.log('function irashaka '+id);
          $.ajax({
              type: 'POST',
              url: 'controller/newsRow.php',
              data: { id:id },
              dataType: 'json',
							// dataType: 'text', 
							cache: false,
              success: function(response){
							// console.log('title yabonetse '+response);
              $('#viewTitle').html(response.title);
              $('#viewDetails').html(response.details);
              $('#viewDate').html(response.newsdate);
							let cssClass ='';
              if (response.status == 'New') {
								cssClass ='text-success';
							} else if(response.status == 'Recent') {
								cssClass ='text-info';
							} else if(response.status == 'Old') {
								cssClass ='text-danger';
							}
              $('#viewStatus').html(response.status).attr("class",cssClass);
							$('#photoContainer').css({
                'height'                : '200px',
                'min-width'             : '100px',
                'display'             	: 'flex',
								'align-items'						:  'center',
                'justify-content'       : 'center'
              });
							newsPhoto ='';
							if (response.photo) {
								newsPhoto = '../img/'+response.photo;
							} else if (response.url) {
								newsPhoto = response.url;
								console.log('Ifoto ni',newsPhoto);
							}
							<?php
								if (!empty($res['photo'])) {
									$image = '../img/'.$res['photo'];
								} else if(!empty($res['url']))  {
									$image = $res['url'];
								}else {
									$image = '../img/avatar-news.png';
								}
							?> 
							
              $('#viewPhoto').attr("src",newsPhoto).css({
                'height'                : '80%',
                'box-shadow'         		: '0 .15rem 1.75rem 0 rgba(58,59,69,.15)',
                'border-radius'      		: '5px',
                'width'             		: '70%'
              });
              $('#editNewsid').val(response.newsid);
              $('#editTitle').val(response.title);
              $('#editNewsdate').val(response.newsdate);
              $('#editStatus').val(response.status);
              $('#editUrl').html(response.url);
              $('#editDetails').html(response.details);
              $('#deleteNewsid').val(response.newsid);
              $('#deleteNewsTitle').html(response.title);
              // $('#deleteContent').val(response.content);
              // $('#deleteReminder').val(response.reminder);
              // $('.pictureNames').html(response.firstname+' '+response.lastname);
              },
            error: function (XMLHttpRequest,textStatus,errorThrown) {
                
							console.log('Byanze bite se ');
							console.log(XMLHttpRequest);
							console.log(textStatus);
							console.log(errorThrown);
            }
          });
          }
      </script>
    <!-- End Scripts to Load Modals -->

		<!-- script to load picture on profile picture update -->
		<script>
			$(document).ready(function(){

				$('#wizard-picture').change(function(){
				readURL(this);
				});

				$('#editWizard-picture').change(function(){
				readEditURL(this);
				});
			});

			//function to preview image before upload
			function readURL(input){
			if(input.files && input.files[0]){
				let reader = new FileReader();
				reader.onload = function (e) {
				$('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
				}
				reader.readAsDataURL(input.files[0]);
			}

			}
			function readEditURL(input){
			if(input.files && input.files[0]){
				let reader = new FileReader();
				reader.onload = function (e) {
				$('#EditWizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
				}
				reader.readAsDataURL(input.files[0]);
			}

			}

			$(function () {
				$('[data-toggle="popover"]').popover()
			})
		</script>

</body>

</html>
<?php 
}else{
	header('Location: logout.php');
	} 
	?>