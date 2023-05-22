<?php 
include("config/db.php");
if (isset($_GET['news'])) {
  $newsid = $_GET['news'];
  try {
    $sql = "SELECT * FROM news WHERE newsid=:newsid";
    $news = $db->prepare($sql);
    $news->execute(['newsid' => $newsid]);
    $row = $news->fetch();
    // convert date
    $newsdate = strtotime($row['newsdate']);
    $dateDetails= date("M d, Y", $newsdate);
    $ifotosrc='';
    if($row['photo']){
      $ifotosrc='img/'.$row['photo'];
    } elseif ($row['url']) {
      $ifotosrc=$row['url'];
    }else {
      $ifotosrc='img/avatar-news.png';
    }
  } catch(PDOException $e){
      $_SESSION['error'] = $e->getMessage();
      header('Location: newsDetails.php');
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
    <div class="container-fluid page-header" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://img.freepik.com/free-vector/realistic-news-studio-background_23-2149985600.jpg?w=740&t=st=1684610831~exp=1684611431~hmac=dccf60da883a1741f28ada6df4ee56508b1a413d0426e3731fb3594c5203dac7) no-repeat center center; background-size:cover">
        <div class="container">
            <div class="d-flex flex-column text-center justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">News Details</h3>
                <div class="align-self-center d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><a class="text-white" href="newsDetails.php">News</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">News Details</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h3 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">TICO News</h3>
            </div>
                
            <div class="row" id="pagination-data">
              <!-- Start News Data Details -->
              <div class="col-lg-3"></div>
              <div class="col-lg-6">
                <div class="mb-5">
                    <h6 class="text-primary mb-3"><?=$dateDetails?></h6>
                    <h1 class="mb-5"><?=$row['title']?></h1>
                    <img style="height:300px;" class="img-fluid rounded w-100 mb-4" src="<?=$ifotosrc?>" alt="Image">
                    <p style='text-align:justify;'><?=$row['details']?></p>
                                        
                </div>
              </div>  
              <div class="col-lg-3"></div>
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
	header('Location: newsDetails.php');
	} 
	?>