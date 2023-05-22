<?php 
include("config/db.php");
if (isset($_GET['event'])) {
  $applid = $_GET['event'];
  try {
    $sql = "SELECT * FROM applications WHERE applid=:applid";
    $application = $db->prepare($sql);
    $application->execute(['applid' => $applid]);
    $row = $application->fetch();
    $is_Epmty = $application->rowCount();
  
    if (empty($is_Epmty)) {
      header('Location: applications.php');
      
    }
    // convert date
    $addedDate = strtotime($row['addedDate']);
    $added= date("M d, Y", $addedDate);
    $deadline = strtotime($row['deadline']);
    $evdeadline= date("M d, Y", $deadline);
    $googleForm = ($row['googleForm'])? $row['googleForm'] :'#';
    $ifotosrc='';
    if($row['photo']){
      $ifotosrc='img/'.$row['photo'];
    } elseif ($row['url']) {
      $ifotosrc=$row['url'];
    }else {
      $ifotosrc='img/applicationIllustration.jpg';
    }
      $title = $row['title'];
      $description = $row['description'];
      $status = $row['status'];
      $btnClass = '';
      if ($status=='In-Progress') {
        $btnClass = 'badge-success';
      }else if ($status=='Closed') {
        $btnClass = 'badge-danger';
      }
      $googleForm = ($row['googleForm'])? $row['googleForm'] :'#';
      $category = $row['category'];
  } catch(PDOException $e){
      $_SESSION['error'] = $e->getMessage();
      header('Location: applications.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once("includes/header.php");?>

<body>
    <!-- Topbar Start -->
    <?php include_once("includes/navbar.php");?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://img.freepik.com/free-vector/gradient-background-wave-minimalist-style-design_483537-3860.jpg?w=826&t=st=1684611536~exp=1684612136~hmac=5f53639d4512cf0dbc9562d2d5d540980f65710a7920802969050f90867d0f6a) no-repeat center center; background-size:cover">
        <div class="container">
            <div class="d-flex flex-column text-center justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Application Details</h3>
                <div class="align-self-center d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><a class="text-white" href="applications.php">Applications</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Application Details</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h3 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">TICO Applications</h3>
            </div>
                
            <div class="row" id="pagination-data">
              <!-- Start News Data Details -->
              <div class="col-lg-1"></div>
              <div class="col-lg-7">
                <div class="mb-5">
                  <h6 class="text-primary mb-3"><?=$added?></h6>
                  <h1 class="mb-5"><?=$title?></h1>
                  <img style="height:330px;" class="img-fluid rounded w-100 mb-4" src="<?=$ifotosrc?>" alt="Image">
                  <p style='text-align:justify;'><?=$description?></p>
                  <hr/>
                </div>
              </div>  
              <div class="col-lg-4">
                <!-- More Details Section -->
                <div class="mb-5">
                  <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">More Info</h3>
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                          <a href="" class="text-decoration-none h6 m-0">Category</a>
                          <span class="badge badge-secondary badge-pill"><?=$category?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                          <a href="" class="text-decoration-none h6 m-0">Application Deadline</a>
                          <span class="badge badge-warning badge-pill"><?=$evdeadline?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                          <a href="" class="text-decoration-none h6 m-0">Status</a>
                          <span class="badge <?=$btnClass?> badge-pill"><?=$status?></span>
                      </li>
                  </ul>
                </div>
                <!-- End More Details Section -->
                <!-- Links Section -->
                <div class="mb-5">
                  <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Links</h3>
                  <div class="d-flex flex-wrap m-n1">
                    <a href="applications.php" class="btn btn-outline-primary m-1">Back on Applications</a>
                    <a href="<?=$googleForm?>" class="btn btn-outline-danger m-1">Apply Here</a>
                  </div>
                </div>
                <!-- End Links Section -->
              </div>
              <!-- End News Data Details -->
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <?php include_once('includes/footer.php');?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    
    
</body>

</html>
<?php 
}else{
	header('Location: applications.php');
	} 
	?>