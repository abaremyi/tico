<?php 
include("config/db.php");

?>

<!DOCTYPE html>
<html lang="en">

<?php include_once("includes/header.php");?>

<body>
    <!-- Topbar & Navbar Start -->
    <?php include_once("includes/navbar.php"); ?>
    <!-- Topbar & Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-1b.JPG" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white mb-md-3">TICO (Thriving Inclusive Community Organization)</h5>
                            <h6 class="display-3 text-white mb-md-4">Promoting human rights and fighting injustice against vulnerable and sexual minority’s
                            community</h6>
                            <a href="about.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-2b.JPG" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-white mb-md-3">TICO (Thriving Inclusive Community Organization)</h5>
                            <h1 class="display-3 text-white mb-md-4">Human Rights Program</h1>
                            <a href="#" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-3b.JPG" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-white mb-md-3">TICO (Thriving Inclusive Community Organization)</h5>
                            <h1 class="display-3 text-white mb-md-4">Community Health Program</h1>
                            <a href="#" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/about2.JPG" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">An Overview</h5>
                        <h1>TICO</h1>
                    </div>
                    <p>TICO (Thriving Inclusive Community Organization) is a health and human rights organization based in Kigali Rwanda started in 2019. TICO advocates for the protection and promotion of health and human rights of sexual minorities and vulnerable communities for better inclusive development.</p>
                    <a href="about.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Category Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
                <h1>Our Solutions</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2 photoHeight">
                        <img class="img-fluid" src="img/Program-Promo-5.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="programHumanRight.php">
                            <h5 class="text-center text-white font-weight-medium">Human Rights Promotion</h5>
                            <!-- <span>100 Courses</span> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2 photoHeight">
                        <img class="img-fluid" src="img/Program-Rights-5.png" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="programHumanRight.php">
                            <h5 class="text-center text-white font-weight-medium">Gender Equality</h5>
                            <!-- <span>100 Courses</span> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2 photoHeight">
                        <img class="img-fluid" src="img/Gallely-8.JPG" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="programHumanRight.php">
                            <h5 class="text-center text-white font-weight-medium">Academic Engagement</h5>
                            <!-- <span>100 Courses</span> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2 photoHeight">
                        <img class="img-fluid" src="img/Gallely-21.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="programHumanRight.php">
                            <h5 class="text-center text-white font-weight-medium">Community Advocacy</h5>
                            <!-- <span>100 Courses</span> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2 photoHeight">
                        <img class="img-fluid" src="img/Program-Health-5.png" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="programCommunity.php">
                            <h5 class="text-center text-white font-weight-medium">- Disease Prevention and Health Access</h5>
                            <!-- <span>100 Courses</span> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2 photoHeight">
                        <img class="img-fluid" src="img/Program-Health-2.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="programCommunity.php">
                            <h5 class="text-center text-white font-weight-medium">- Comprehensive Sexual Education</h5>
                            <!-- <span>100 Courses</span> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2 photoHeight">
                        <img class="img-fluid" src="img/Program-Health-3.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="programCommunity.php">
                            <h5 class="text-center text-white  font-weight-medium">Nutritional Support and Well-being</h5>
                            <!-- <span>100 Courses</span> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2 photoHeight">
                        <img class="img-fluid" src="img/Program-Health-4.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="programCommunity.php">
                            <h5 class="text-center text-white font-weight-medium">Non-communicable Disease Awareness</h5>
                            <!-- <span>100 Courses</span> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2 photoHeight">
                        <img class="img-fluid" src="img/Program-Promo-1.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="programEnvironment.php">
                            <h5 class="text-center text-white font-weight-medium">Games and Sports Open Program (GSOP)</h5>
                            <!-- <span>100 Courses</span> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2 photoHeight">
                        <img class="img-fluid" src="https://img.freepik.com/free-photo/group-happy-african-volunteers-planting-tree-park-africa-volunteering-charity-people-ecology-concept_627829-320.jpg?w=740&t=st=1683822831~exp=1683823431~hmac=fdcb9df3955c30b3c259b951b690a62b9c62c5f3e0a5cca894c48f8181721368" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="programEnvironment.php">
                            <h5 class="text-center text-white font-weight-medium">Environmental Conservation and Education</h5>
                            <!-- <span>100 Courses</span> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2 photoHeight">
                        <img class="img-fluid" src="img/Program-Promo-3.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="programEnvironment.php">
                            <h5 class="text-center text-white font-weight-medium">Youth Empowerment</h5>
                            <!-- <span>100 Courses</span> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category Start -->

    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Call for Application</h5>
                        <h1 class="text-white">Lets make the world A better Place together</h1>
                    </div>
                  
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Application</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                               
                                <div>
                                    <a href="applications.php" class="btn btn-primary btn-block border-0 py-3" type="submit">Apply Now</a href="membership.php">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Team Start -->
        <?php 
            $sql = "SELECT * FROM team WHERE firstname!= ''";
            $team = $db->prepare($sql);
            $team->execute();
            if($team->rowcount()> 0){
        ?>
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Team</h5>
                <h1>Meet Our Team</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/profile.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>TICO</h5>
                            <p class="m-0">Position</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/profile.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>TICO</h5>
                            <p class="m-0">Position</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/profile.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>TICO</h5>
                            <p class="m-0">Position</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/profile.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>TICO</h5>
                            <p class="m-0">Position</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- Team End -->


    <!-- Testimonial Start -->
        <?php 
            $sql = "SELECT * FROM testimonial WHERE memberName!= ''  order by testimonialid desc limit 3";
            $testimony = $db->prepare($sql);
            $testimony->execute();
            if($testimony->rowcount()> 0){
        ?>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5>
                <h1>What Say Our Community</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/profile.png" alt="">
                            <h5 class="m-0">Member</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/profile.png" alt="">
                            <h5 class="m-0">Member</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/profile.png" alt="">
                            <h5 class="m-0">Member</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- Testimonial End -->


    <!-- Blog Start -->
        <?php 
            $sql = "SELECT * FROM news WHERE title!= '' order by newsid desc limit 3";
            $news = $db->prepare($sql);
            $news->execute();
            if($news->rowcount()> 0){
        ?>
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">News</h5>
                <h1>Latest News</h1>
            </div>
            <div class="row pb-3"><?php
                        while($res = $news->fetch()){ 
                          // convert date
                            $newsdate = strtotime($res['newsdate']);
                            $finalDate = date('M d, Y',$newsdate);
                          $ifotosrc='';
                          if($res['photo']){
                            $ifotosrc='img/'.$res['photo'];
                          } elseif ($res['url']) {
                            $ifotosrc=$res['url'];
                          }else {
                            $ifotosrc='img/avatar-news.png';
                          }
                        ?>
                <div class="col-lg-4 mb-4">
                    <div style="height:300px;" class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img style="height:100%;" class="img-fluid" src="<?= $ifotosrc?>" alt="">
                        <a class="blog-overlay text-decoration-none" href="newsDetails.php">
                            <h5 class="text-white mb-3"><?= $res['title']?></h5>
                            <p class="text-primary m-0"><?= $finalDate ?> </p>
                            <button href='button' data-id='<?= $res['newsid'] ?>' class='btn edit btn-pill btn-outline-primary btn-sm'>Read More</button>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- Blog End -->

<!-- Partners Area -->

    <div class="container-fluid">
        <div class="container">
            <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <section class="customer-logos slider">
                    <?php 
                            $sql = "SELECT * FROM partners";
                            $partners = $db->prepare($sql);
                            $partners->execute();
                            while($res = $partners->fetch()){ 
                            $ifotosrc='';
                            if($res['logo']){
                                $ifotosrc='img/'.$res['logo'];
                            } 
                            ?>
                        <div class="slide"><img src="<?= $ifotosrc ?>"></div>
                    <?php } ?>
                
                </section>
            </div>
            <div class="col-md-1"></div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <?php include("includes/footer.php");?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script> -->
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!-- Added partners carousel slider -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
      <script src="js/slick.js"></script>

      <script src="js/custom.js"></script>
</body>

</html>