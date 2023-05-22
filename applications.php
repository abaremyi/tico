<?php 
include("config/db.php");

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
                <h3 class="display-4 text-white text-uppercase">Applications</h3>
                <div class="align-self-center d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Applications</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">TICO Call up Application</h4>
                <!-- <h1>Meet Our Teachers</h1> -->
            </div>
            <div class="row">
                <?php 
                        $sql = "SELECT * FROM applications WHERE title!= ''";
                        $applications = $db->prepare($sql);
                        $applications->execute();
                        while($res = $applications->fetch()){ 
                          // convert date
                          $evdate = strtotime($res['deadline']);
                          $dateDetails= date("d/M/Y", $evdate);
                          $ifotosrc='';
                          if($res['photo']){
                            $ifotosrc='img/'.$res['photo'];
                          } elseif ($res['url']) {
                            $ifotosrc=$res['url'];
                          }else {
                            $ifotosrc='img/applicationIllustration.jpg';
                          }
                        ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="<?= $ifotosrc ?>" alt="ApplicationIllustrationImg">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-shapes text-primary mr-2"></i><?= $res['category'] ?></small>
                                <small class="m-0"><i class="far fa-calendar text-primary mr-2"></i><?= $dateDetails ?></small>
                            </div>
                            <a class="h5" href="#"><?= $res['title'] ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><a href="<?= ($res['googleForm'])? $res['googleForm'] :'#' ?>" class="btn btn-sm btn-primary py-2 px-4 ml-auto  d-lg-block">Apply</a></h6>
                                    <h6 class="m-0 text-success"><small> <?= $res['status'] ?></small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <?php include_once("includes/footer.php");?>
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