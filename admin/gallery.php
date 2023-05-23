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
                        <h1 class="h3 mb-0 text-gray-800">Gallery Management Page</h1>
                        
                    </div>
										<!-- Content Row -->
										
										<div class="row">
										
											<!-- NEWS REGISTRATION -->
											<div class="col-xl-12 col-lg-11">
													<div class="card shadow mb-4">
															<!-- Card Header - Dropdown -->
															<div
																	class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
																	<h6 class="m-0 font-weight-bold text-primary">Gallery Photo Entry</h6>
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
																			<div class="row border-bottom">
																				<div class="col-md-3 ">
																					
																				</div>
																				<div class="col-md-6">
																					<div class="p-3">
																						<div class="row mt-3">
																							<div class="col-md-12">
																								<label class="labels">Photo Category&nbsp;<span class="text-danger">*</span></label>
																								<select name="category" id="categorySelect" class="form-control" required="required" data-validation-required-message="Please Select Photo Category">
																									<option value="">Choose Photo Category</option>
																									<option value="Event">Event</option>
																									<option value="Internship">Internship</option>
																									<option value="Training">Training</option>
																									<option value="Workshop">Workshop</option>
																								</select>
																								<p class="help-block text-danger"></p>
																							</div>
																						</div>																	
																				
																					</div>
																				</div>
																				<div class="col-md-3">
																				</div>
																			</div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <style>
                                            #ddArea {
                                              height: 200px;
                                              border: 2px dashed #ccc;
                                              line-height: 200px;
                                              text-align: center;
                                              font-size: 20px;
                                              background: #f9f9f9;
                                              margin-bottom: 15px;
                                            }

                                            .drag_over {
                                              color: #000;
                                              border-color: #000;
                                            }

                                            .thumbnail {
                                              width: 100px;
                                              height: 100px;
                                              padding: 2px;
                                              margin: 2px;
                                              border: 2px solid lightgray;
                                              border-radius: 3px;
                                              float: left;
                                            }

                                            .d-none {
                                              display: none;
                                            }

                                            .d-block {
                                              display: block;
                                            }

                                            /* Absolute Center Spinner */
                                            .loading {
                                              position: fixed;
                                              z-index: 999;
                                              height: 2em;
                                              width: 2em;
                                              overflow: visible;
                                              margin: auto;
                                              top: 0;
                                              left: 0;
                                              bottom: 0;
                                              right: 0;
                                            }

                                            /* Transparent Overlay */
                                            .loading:before {
                                              content: "";
                                              display: block;
                                              position: fixed;
                                              top: 0;
                                              left: 0;
                                              width: 100%;
                                              height: 100%;
                                              background-color: rgba(0, 0, 0, 0.3);
                                            }
                                          </style>

                                          <div class="loading d-none"><img src="../img/load.gif" alt="" /></div>
                                          <div id="ddArea">
                                            Drag and Drop Files Here or
                                            <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                              Select File(s)
                                            </a>
                                          </div>
                                          <div id="showThumb"></div>
                                          <input type="file" class="d-none" id="selectfile" multiple />
                                        </div>
                                      </div>
																			<br>
																				<!-- <div class="mt-50 text-center">
																					<button class="btn btn-primary profile-button" name="publish" id="publish" type="submit">Publish News</button>
																				</div> -->
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
															<h6 class="m-0 font-weight-bold text-primary">Photo Record</h6>
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
															<div class="table-responsive">
																	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
																			<thead style="text-align: center;">
																					<tr>
																							<th>N<sup><u>0</u></sup></th>
																							<th>Picture</th>
																							<th>Photo name</th>
																							<th>Category</th>
																							<th>Actions</th>
																					</tr>
																			</thead>
																			
																			<tbody>
																				<?php 
																					$news = $db->prepare("SELECT * FROM gallery order by gallerid DESC");
																					$news->execute();
																					$i = 1;
																					while($res = $news->fetch(PDO::FETCH_ASSOC)): 
																						if (!empty($res['photo'])) {
																							$image = '../img/'.$res['photo'];
																						}else {
																							$image = '../img/avatar-gallery.png';
																						}
																						
																						// $image = (!empty($res['photo'])) ? '../img/'.$res['photo'] : '../img/avatar-news.png';
																						// convert date
																						// $newsdate = strtotime($res['newsdate']);
																						// $finalDate = date('M d, Y',$newsdate);
																						
																				?>
																						
																						<tr>
																								<td style="width:15%;text-align:center;"><?= $i ?></td>
																								<td style="width:30%">
																									<img class="rounded-circle img-responsive mt-2" src='<?= $image ?>' height='60px' width='60px'>
																									<div class="btn-group btn-group-sm mt-2">
																										<button class="btn photo btn-pill btn-outline-primary btn-sm" type='button' data-id="<?=$res['gallerid']?>"><i class="fas fa-upload"></i></button>
																									</div>
																								</td>
																								<td style="width:30%"> <small> <?= $res['photo'] ?></small></td>
																							
																								<td style="text-align:center;" class="">
																									<?php
																										if($res['category'] == 'Event'){?>
																											<a class='badge badge-pill badge-primary' href="#">
																												Event
																											</a>
																										<?php }else if ($res['category'] == 'Internship'){ ?>
																											<a class='badge badge-pill badge-success' href="#">
																												Internship
																											</a>
																										<?php }else if ($res['category'] == 'Training'){ ?>
																											<a class='badge badge-pill badge-danger' href="#">
																												Training
																											</a>
																										<?php }else if ($res['category'] == 'Workshop'){ ?>
																											<a class='badge badge-pill badge-dark' href="#">
																												Workshop
																											</a>
																											<?php	 } ?>

																								</td>
																								<td class='table-action' style='width:10%'>
																									<div class='btn-group btn-group-sm mb-4' role='group' aria-label='Small button group'>
																										<button type='button' data-id='<?= $res['gallerid'] ?>' class='btn view btn-pill btn-outline-primary btn-sm'><i class='fa fa-book-open'></i></button>
																										<button type='button' data-id='<?= $res['gallerid'] ?>' class='btn delete btn-pill btn-outline-danger btn-sm'><i class='fas fa-trash'></i></button>
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
											<?php include('modals/galleryModals.php'); ?>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Scripts to Load Modals -->
      <script>
          $(function(){

					$(document).on('click', '.view', function(e){
							e.preventDefault();
							$('#viewModal').modal('show');
							var id = $(this).data('id');
							// console.log('id yabonetse '+id);
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
              url: 'controller/galleryRow.php',
              data: {id:id},
              dataType: 'json',
              success: function(response){
              $('#pictureId').val(response.gallerid);
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
              $('#photoName').val(response.photo);
              }
          });
          }

          function getRow(id){
							console.log('function irashaka '+id);
          $.ajax({
              type: 'POST',
              url: 'controller/galleryRow.php',
              data: { id:id },
              dataType: 'json',
							// dataType: 'text', 
							cache: false,
              success: function(response){
              $('#viewName').html(response.photo);
              $('#viewDate').html(response.addedDate);
							let cssClass ='';
              if (response.category == 'Event') {
								cssClass ='text-primary';
							} else if(response.category == 'Internship') {
								cssClass ='text-success';
							} else if(response.category == 'Training') {
								cssClass ='text-danger';
							}else if(response.category == 'Workshop') {
								cssClass ='text-dark';
							}
              $('#viewCategory').html(response.category).attr("class",cssClass);
							$('#photoContainer').css({
                'height'                : '200px',
                'min-width'             : '100px',
                'display'             	: 'flex',
								'align-items'						:  'center',
                'justify-content'       : 'center'
              });
							iphoto ='';
							if (response.photo) {
								iphoto = '../img/'+response.photo;
							} else {
								iphoto = '../img/avatar-gallery.png';
							}
							
              $('#viewPhoto').attr("src",iphoto).css({
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
              $('#deleteGallerid').val(response.gallerid);
              $('#deletePhotoName').html(response.photo);
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
    <!-- Hide or Show Photo Drop or Select area if select option is empty -->
    <script>
      $(function () {
        $('#ddArea').hide();
        $('#categorySelect').change(function(){
          if ($('#categorySelect').val() == 'Event' 
          || $('#categorySelect').val() == 'Internship'
          || $('#categorySelect').val() == 'Training'
          || $('#categorySelect').val() == 'Workshop') {
            $('#ddArea').show();
          } else {
            $('#ddArea').hide();
          }
        });
      });
    </script>
    <!-- End Hide or Show Photo Drop or Select area if select option is empty -->
    <!-- Upload multiple Photos at once -->
    <script>
      $(document).ready(function() {
        $("#ddArea").on("dragover", function() {
          $(this).addClass("drag_over");
          return false;
        });

        $("#ddArea").on("dragleave", function() {
          $(this).removeClass("drag_over");
          return false;
        });

        $("#ddArea").on("click", function(e) {
          file_explorer();
        });

        $("#ddArea").on("drop", function(e) {
          e.preventDefault();
          $(this).removeClass("drag_over");
          var category = $("select#categorySelect").val();
          var formData = new FormData();
          var files = e.originalEvent.dataTransfer.files;
          formData.append("category", category);
          for (var i = 0; i < files.length; i++) {
            formData.append("file[]", files[i]);
          }
          uploadFormData(formData);
        });

        function file_explorer() {
          document.getElementById("selectfile").click();
          document.getElementById("selectfile").onchange = function() {
            files = document.getElementById("selectfile").files;
            var category = $("select#categorySelect").val();
            var formData = new FormData();
            formData.append("category", category);

            for (var i = 0; i < files.length; i++) {
              formData.append("file[]", files[i]);
            }
            uploadFormData(formData);
          };
        }

        function uploadFormData(form_data) {
          $(".loading")
            .removeClass("d-none")
            .addClass("d-block");
          $.ajax({
            url: "actions/galleryManagement.php",
            method: "POST",
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
              $(".loading")
                .removeClass("d-block")
                .addClass("d-none");
              // $("#showThumb").append(data);
                window.location.reload();
            }
          });
        }
      });
    </script>
    <!-- End Upload multiple Photos at once -->

</body>

</html>
<?php 
}else{
	header('Location: logout.php');
	} 
	?>