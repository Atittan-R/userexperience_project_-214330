<html>

<head>
    <title>UX</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/primary.css">

</head>

<body>
    <!-- Navigation -->
    <?php include 'navbar.php'; ?>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active text-center">
                    <img class="img-fluid" src="img/header1.png" style="max-height: 100vh;max-width: auto;">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4"></h2>
                        <p class="lead"></p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item text-center">
                    <img class="img-fluid " src="img/fitness_info.png" style="max-height: 100vh;max-width: auto;">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4"></h2>
                        <p class="lead"></p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item text-center">
                    <img class="img-fluid " src="img/swimming_info.png" style="max-height: 100vh;max-width: auto;">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4"></h2>
                        <p class="lead"></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <section class="page-section" style="padding: 30px">
        <div class="container">
            <center>
                <h1 class="display-4">SUT Sport and Health Center</h1>
            </center>
        </div>
    </section>

    <section class="bg-light page-section" id="news" style="padding: 60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h2 class="section-heading text-uppercase">ข่าวสาร</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div id="carouselExampleIndicators2" class="carousel slide carousel-fade" data-ride="carousel" style="width:auto;height: 400px;">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="" src="img/fitness.jpg" alt="First slide" style="width:auto;height: 400px;">
                            </div>
                            <div class="carousel-item">
                                <img class="" src="img/poor.jpg" alt="Second slide" style="width:auto;height: 400px;">
                            </div>
                            <div class="carousel-item">
                                <img class="" src="img/yoga.jpg" alt="Third slide" style="width:auto;height: 400px;">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-md-offset-1">
                    <center>
                        <h3>Topic Here</h3>
                    </center>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    <div class="read-button text-right">
                        อ่านต่อ
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Services -->
    <section class="page-section" id="services" style="padding: 60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h2 class="section-heading text-uppercase">บริการ</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <img class="img-fluid" src="img/fitness.jpg" id="img-service" alt="">

                    </span>
                    <h4 class="service-heading">ห้องออกกำลังกาย</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <img class="img-fluid" src="img/poor.jpg" id="img-service" alt="">
                    </span>
                    <h4 class="service-heading">สระว่ายน้ำ</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <img class="img-fluid" src="img/yoga.jpg" id="img-service" alt="">
                    </span>
                    <h4 class="service-heading">โยคะ-ลีลาศ</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <img class="img-fluid" src="img/fitness.jpg" id="img-service" alt="">
                    </span>
                    <h4 class="service-heading">แอโรบิก</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- article -->
    <section class="bg-light page-section" id="article" style="padding: 60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h2 class="section-heading text-uppercase">บทความ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/test.png" alt="">

                    <div class="portfolio-caption">
                        <h4>Threads</h4>
                        <p class="text-muted">Illustration</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/test.png" alt="">

                    <div class="portfolio-caption">
                        <h4>Explore</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/test.png" alt="">

                    <div class="portfolio-caption">
                        <h4>Finish</h4>
                        <p class="text-muted">Identity</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/test.png" alt="">

                    <div class="portfolio-caption">
                        <h4>Lines</h4>
                        <p class="text-muted">Branding</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/test.png" alt="">

                    <div class="portfolio-caption">
                        <h4>Southwest</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/test.png" alt="">

                    <div class="portfolio-caption">
                        <h4>Window</h4>
                        <p class="text-muted">Photography</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- booking -->
    <section class="page-section" id="booking" style="padding: 60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h2 class="section-heading text-uppercase">ระบบยืมและจอง</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 portfolio-item">
                    <center>
                        <img class="img-fluid" src="img/test.png" alt="" height="400">

                        <div class="portfolio-caption">

                            <h4>ยืม</h4>

                        </div>
                    </center>
                </div>


                <div class="col-md-6  portfolio-item">
                    <center>
                        <img class="img-fluid" src="img/test.png" alt="" height="400">
                        <div class="portfolio-caption">
                            <h4>จอง</h4>
                        </div>
                    </center>
                </div>


            </div>
        </div>
    </section>

    <!-- map -->
    <section class="bg-light page-section" id="map" style="padding: 60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h2 class="section-heading text-uppercase">แผนที่</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img class="img-fluid" src="img/map.png">
                </div>
            </div>

        </div>
    </section>


    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer -->

</body>

</html>