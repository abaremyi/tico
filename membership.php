<?php
include("config/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("includes/header.php");?>

<body>

    
    <!-- Application Form Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5" style="background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(), no-repeat center center;background-size:cover; border-radius:15px 15px 0px 0px; padding-top: 7px; ">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Application</h5>
                <h1>Member Application Form</h1>
            </div>
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="text-justify mb-5">
                  <p>
                    Thank you for your interest in becoming a member of Thriving Inclusive Community Organization. 
                    <br>To become a member of Thriving Inclusive Community Organization,
                    
                      <ul class="list-inline text-dark m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>please fill out the application form below and click "submit" once you have completed all of the required sections.</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>If you have any questions or concerns, please email us at at info@tico.rw.</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Once we receive your application, we will review the information and come back to you to finalize the membership.</li>
                      </ul> 
                  </p>
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
            <div class="row">
                    <div class="col-md-12" style="height:100px;">
                      <!-- DATABASE ERROR CHECKING -->
                      <?php
                          // if(isset($_SESSION['error'])){
                          // echo "
                          //     <div class='alert alert-danger alert-dismissible' role='alert'>
                          //       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          //         <span aria-hidden='true'>&times;</span>
                          //       </button>
                          //       <div class='alert-icon text-center'>
                          //         <i class='far fa-fw fa-bell'></i>
                          //       </div>
                          //       <div class='alert-message'>
                          //         <strong>Error! </strong> ".$_SESSION['error']."
                          //       </div>
                          //     </div>
                          // ";
                          // unset($_SESSION['error']);
                          // }
                          // if(isset($_SESSION['success'])){
                          // echo "
                          //     <div class='alert alert-success alert-dismissible' role='alert'>
                          //       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          //         <span aria-hidden='true'>&times;</span>
                          //       </button>
                          //       <div class='alert-icon'>
                          //         <i class='fa fa-fw fa-check'></i>
                          //       </div>
                          //       <div class='alert-message'>
                          //         <strong>Well Done! </strong> ".$_SESSION['success']."
                          //       </div>
                          //     </div>
                          // ";
                          // unset($_SESSION['success']);
                          // }
                        ?>
                    </div>
                  </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <!-- method="POST" enctype="multipart/form-data" -->
                            <div class="control-group profile-content">
                              <label for="wizard-picture">Profile Picture.&nbsp;<span class="text-danger">*</span> </label>
                              <div class="picture-container">
                                <div class="picture">
                                    <img class="picture-src" id="wizardPicturePreview" title=""/>
                                    <input type="file" id="wizard-picture" name="photo" required="required" data-validation-required-message="Please Select your Photo" >
                                </div>
                                <h5 style=" color:#28a745">Click in dark area to Choose a Picture</h5>
                              </div>
                              <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              <label for="email">Email &nbsp;<span class="text-danger">*</span> </label>
                              <input type="email" class="form-control border-0 p-4" name="email" id="email" placeholder="" required="required" data-validation-required-message="Please enter your email" />
                              <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              <label for="title">Title &nbsp;<span class="text-danger">*</span> </label>
                                <select class="custom-select border-0 px-4" name="title" id="title" style="height: 47px;" required="required" data-validation-required-message="Please Choose Title" >
                                  <option value="" selected>Choose</option>
                                  <option value="Mr.">Mr.</option>
                                  <option value="Miss">Miss</option>
                                  <option value="Mrs.">Mrs.</option>
                                  <option value="Dr.">Dr.</option>
                                  <option value="Other">Other</option>
                                </select>
                              <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              <label for="firstname">First Name &nbsp;<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control border-0 p-4" name="firstname" id="firstname" placeholder="" required="required" data-validation-required-message="Please enter a Firstname" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              <label for="lastname">Last Name &nbsp;<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control border-0 p-4" name="lastname" id="lastname" placeholder="" required="required" data-validation-required-message="Please enter a Last name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              <?php 
                              $currentYear = date('Y'); 
                              ?>
                              <!-- <script> console.log('current year '+currentYear?>);</script> -->
                              <label for="dob">Year of Birth &nbsp;<span class="text-danger">*</span> </label>
                                <input type="number" class="form-control border-0 p-4" min="0" max="<?=$currentYear?>" name="dob" id="dob" placeholder="" required="required" data-validation-required-message="Please enter a Year of Birth" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              <label for="phone">Telephone Number &nbsp;<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control border-0 p-4" name="phone" id="phone" placeholder="+250..." required="required" data-validation-required-message="Please enter a Telephone Number" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              <label for="address">Where do you currently live? &nbsp;<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control border-0 p-4" name="address" id="address" placeholder="Address..." required="required" data-validation-required-message="Please enter address" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              <label for="biography">Tell us a little about yourself.&nbsp;<span class="text-danger">*</span> </label>
                              <textarea class="form-control border-0 py-3 px-4" rows="3" name="biography" id="biography" placeholder="..." required="required" data-validation-required-message="Please Tell us about you"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              <label for="ticoWhereBy">How did you hear about TICO? &nbsp;<span class="text-danger">*</span> </label>
                              <textarea class="form-control border-0 py-3 px-4" rows="3" name="ticoWhereBy" id="ticoWhereBy" placeholder="..." required="required" data-validation-required-message="Please Fill this Field"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              <label for="whyTicoMember">Why do you want to be a member of TICO? &nbsp;<span class="text-danger">*</span> </label>
                              <textarea class="form-control border-0 py-3 px-4" rows="3" name="whyTicoMember" id="whyTicoMember" placeholder="..." required="required" data-validation-required-message="Please Fill this Field"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" name="submitApplication" id="sendApplicationButton">Submit Application</button>
                                <br><hr><a href="index.php">Back Home</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Application End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<!-- <script src="mail/contact.js"></script> -->

<!-- Application Javascript File -->
<script src="controller/membershipHandler.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<!-- script to load picture on profile picture update -->
<script>
  $(document).ready(function(){

    $('#wizard-picture').change(function(){
    readURL(this);
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
</script>
</body>

</html>



