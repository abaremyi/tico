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
    <!-- insert Gallery CSS Here -->
    <style>
        body {
        height: 100vh;
        width: 100vw;
        /* padding: 20px;
        background-color: #121212; */
        position: relative;
        /* overflow: hidden; */
        }

        #grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        grid-auto-rows: 350px;
        gap: 5px;
        height: 100vh;
        overflow-y: scroll;
        padding-right: 10px;
        grid-auto-flow: dense;
        }

        #grid::-webkit-scrollbar {
        background-color: #dedede;
        width: 10px;
        }

        #grid::-webkit-scrollbar-thumb {
        background-color: #757575;
        }

        .grid-item {
        overflow: hidden;
        cursor: pointer;
        transition: all 0.2s ease;
        }

        #nature-2,
        #nature-7,
        #nature-16 {
        grid-column: span 2;
        }

        #nature-4,
        #nature-5,
        #nature-10 {
        grid-row: span 2;
        }

        #nature-13 {
        grid-column: span 2;
        grid-row: span 2;
        }

        .grid-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.2s ease;
        }

        .grid-item:hover {
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
        z-index: 2; /*bug correction */
        }

        .grid-img:hover {
        transform: scale(1.2);
        }

        #popup-bg {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 83.3vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 3;
        justify-content: center;
        align-items: center;
        }

        #popup-bg.active {
        display: flex;
        }

        #popup-content {
        max-width: 80%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        }

        #popup-img {
        width: 100%;
        /* height: auto; */
        height: 600px;
        }

        #popup-close {
        position: absolute;
        top: 0;
        right: 0;
        transform: translate(50%, -50%);
        height: 40px;
        width: 40px;
        border-radius: 50%;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 40px;
        cursor: pointer;
        transition: background-color 0.2s ease;
        }

        #popup-close:hover {
        background-color: orange;
        }
    </style>
    <!-- End Gallery CSS  -->
    <!-- Header Start -->
    <div class="container-fluid page-header" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/Gallely-1.jpg) no-repeat center center; background-size:cover">
        <div class="container">
            <div class="d-flex flex-column text-center justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Gallery</h3>
                <div class="align-self-center d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Gallery</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">TICO Gallery</h5>
                <!-- <h1>Meet Our Teachers</h1> -->
            </div>
                <div class="row">
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- <h1 class="gallery-title">Gallery</h1> -->
                    <div align="center" class=" mb-3">
                        <button class="btn btn-default filter-button" data-filter="all">All</button>
                        <button class="btn btn-default filter-button" data-filter="Event">Event</button>
                        <button class="btn btn-default filter-button" data-filter="Internship">Internship</button>
                        <button class="btn btn-default filter-button" data-filter="Training">Training</button>
                        <button class="btn btn-default filter-button" data-filter="Workshop">Workshop</button>
                    </div><hr/>
                </div>
                <div class="gallery col-md-12 col-sm-12 col-xs-12">
                    <div id="popup-bg">
                        <div id="popup-content">
                            <div id="popup-close">
                            <ion-icon name="close-circle"></ion-icon>
                            </div>
                            <img id="popup-img" src="#" alt="" />
                        </div>
                    </div>
                    <div id="grid">
                        <?php 
                            $sql = "SELECT * FROM gallery";
                            $photo = $db->prepare($sql);
                            $photo->execute();
                            while($res = $photo->fetch()){ 
                        ?>
                        <div class="grid-item filter <?=$res['category']?>" id="<?=$res['photo']?>">
                            <img src="img/<?= ($res['photo'])? $res['photo'] :'avatar-gallery.png' ?>" alt="" class="grid-img" />
                        </div>
                        <?php } ?>
                    </div>

                </div>
        </section>

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
    
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/gallery.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script>
        $(document).ready(function(){

            $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');
                
                if(value == "all")
                {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                }
                else
                {
            //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
            //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');
                    
                }
            });

            if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
            }
            $(this).addClass("active");

            });
    </script>

</body>

</html>