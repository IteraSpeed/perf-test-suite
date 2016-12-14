<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="iteratec">

    <title>perf-test-suite</title>

    <!-- Bootstrap Core CSS -->
	<link href="assets/cssMinified/bootstrap.css" rel="stylesheet">
	<!-- Jquery Magnific popup css -->
	<link rel="stylesheet" type="text/css" href="assets/cssMinified/magnific-popup.css">
	<!-- icons -->
	<link rel="stylesheet" type="text/css" href="assets/cssMinified/font-awesome.css">
	<!-- Custom CSS -->
	<link href="assets/cssMinified/header.css" rel="stylesheet">
	<link href="assets/cssMinified/main.css" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    

</head>

<body onload="RumReporter.sendBeacon({time: performance.now()});">

    <?php
        if (ob_get_level() == 0) ob_start();
		ob_flush();
		flush();
        //simulate server side processing time
        $sleep = (isset($_GET["sleep"]) ? $_GET["sleep"] : 0);
		if($sleep && ctype_digit(strval($sleep))) sleep($sleep);
    ?>

    <!-- Navigation -->
    <header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>

                <a href="index.php" class="navbar-brand">perf-test-suite</a>
            </div>

            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
              <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Optimizations <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                            <a  href="index_broken.php">Redirect and wrong image Url</a>
                        </li>
                        <li>
                            <a  href="optimized_chunked_encoding.php">Chunked encodig</a>
                        </li>
                        <li>
                            <a  href="optimized_css_sprites.php">CSS Sprites</a>
                        </li>
                        <li>
                            <a  href="optimized_font_awesome.php">Font Awesome</a>
                        </li>
                        <li>
                            <a  href="optimized_minified.php">Minified Resources</a>
                        </li>
                        <li>
                            <a  href="optimized_pictureload.php">Postload images</a>
                        </li>
                        <li>
                            <a  href="optimized_javascripts_end_of_body.php">Javascripts end of body</a>
                        </li>
                        <li>
                            <a  href="optimized_images.php">Optimized images</a>
                        </li>
                        <li>
                            <a  href="optimized_caching_headers.php">Sensible caching headers</a>
                        </li>
                        <li>
                            <a  href="optimized_compression_enabled.php">Compression enabled</a>
                        </li>
                        <li>
                            <a  href="optimized_rwd_avoid_loading_hidden_images.php">[RWD] Avoid loading hidden images</a>
                        </li>
                        <li>
                            <a class="selected" href="optimized_all.php">All optimizations</a>
                        </li>
                        <!-- we should add an about page
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        -->
                      </ul>
                    </li>
              </ul>
              <p class="navbar-text">optimized_all.php</p>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </header>

    <!-- Page Content -->
    <div class="container page" id="home">

        <h2>Example shop page</h2>

        <!-- carrousel -->
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-holder">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="assets/images_optimized/country-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" data-src="assets/images_optimized/boat-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" data-src="assets/images_optimized/snow-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" data-src="assets/images_optimized/beach-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" data-src="assets/images_optimized/glass-building-1170x400.jpeg" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- quotes -->
        <div class="row margin30">
            <div class="col-md-9 box-center">
                <blockquote>
                    <div class="col-sm-3 text-center">
                        <img class="img-circle" style="width: 100px;height:100px;" src="assets/images_optimized/person_3.png">
                    </div>
                    <div class="col-sm-9">
                        <p>
                            <i class="fa fa-quote-left"></i>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.
                            <i class="fa fa-quote-right"></i>
                        </p>
                        <small>Someone famous</small>
                    </div>
                </blockquote>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3><small>Recent Bookings</small></h3>
                <ul class="thumbnails">
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets/images_optimized/rila.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Rila mountain, Bulgaria" src="assets/images_optimized/rila_small.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="fa fa-photo"></i> Rila mountain, Bulgaria
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
                                    <i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                </p>
                                <p>22 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets/images_optimized/varna_panorama.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Varna" src="assets/images_optimized/varna.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="fa fa-suitcase"></i>
										Varna, Bulgaria
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                </p>
                                <p>28 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets/images_optimized/tsarevets.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Tzarevets, Veliko Tarnvo, Bulgaria" src="assets/images_optimized/tsarevets_small.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="fa fa-tree"></i> Tzarevets, Veliko Tarnovo, Bulgaria
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                </p>
								<p>28 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets/images_optimized/london.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="London" src="assets/images_optimized/london.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="fa fa-road"></i> London
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                </p>
								<p>15 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets/images_optimized/cibeles.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cibeles, Madrid, Spain" data-src="assets/images_optimized/cibeles_small_2.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="fa fa-home"></i> Cibeles, Madrid, Spain
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                </p>
								<p>12 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets/images_optimized/recife.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Recife, Brasil" data-src="assets/images_optimized/recife_small_1.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="fa fa-sun-o"></i> Recife, Brasil
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                </p>
								<p>6 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets/images_optimized/tree.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Asia" data-src="assets/images_optimized/tree.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="fa fa-pagelines"></i> Asia
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                </p>
								<p>31 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets/images_optimized/san-fran.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="San Francisco" data-src="assets/images_optimized/san-fran.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<i class="fa fa-car"></i> San Francisco
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                </p>
								<p>0 reviews</p>
                            </div>
                        </div>
                    </li>
                    <div class="only-visible-on-desktop">
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/cheetah.jpeg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cheetah" data-src="assets/images_optimized/cheetah.jpeg">
                                </a>
                                <div class="caption">
                                    <h4>
    									<a href="javascript:;">
    										<i class="fa fa-tree"></i> Africa
    									</a>
    								</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/louvre.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Louvre" data-src="assets/images_optimized/louvre.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
    									<a href="javascript:;">
    										<i class="fa fa-camera-retro"></i> Louvre, Paris, France
    									</a>
    								</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>28 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/cityview.jpeg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cityview" data-src="assets/images_optimized/cityview.jpeg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-road"></i> Cityview
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>15 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/finland.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Finland" data-src="assets/images_optimized/finland_small.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-home"></i> Finland
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>12 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/flying-duck.jpeg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Flying duck" data-src="assets/images_optimized/flying-duck.jpeg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-sun-o"></i> Flying duck
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>6 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/art-gallery.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Art gallery" data-src="assets/images_optimized/art-gallery.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-pagelines"></i> Art gallery
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>31 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/beginning-of-life.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Beginning of life" data-src="assets/images_optimized/beginning-of-life.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-car"></i> Beginning of life
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/cherry-blossom.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cherry blossom" data-src="assets/images_optimized/cherry-blossom.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-tree"></i> Cherry blossom
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/coffee-central.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Coffee central" data-src="assets/images_optimized/coffee-central.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-sun-o"></i> Coffee
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>6 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/frankfurt-waters.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Frankfurt waters" data-src="assets/images_optimized/frankfurt-waters.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-pagelines"></i> Frankfurt waters
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>31 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/man-made-skies.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Man made skies" data-src="assets/images_optimized/man-made-skies.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-car"></i> Man made skies
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/old-love.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Old love" data-src="assets/images_optimized/old-love.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-tree"></i> Old love
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/ungodly-skies.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Ungodly skies" data-src="assets/images_optimized/ungodly-skies.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-sun-o"></i> Ungodly skies
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>6 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/windy-day.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Windy day" data-src="assets/images_optimized/windy-day.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-pagelines"></i> Windy day
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>31 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/sky-and-building.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Sky and building" data-src="assets/images_optimized/sky-and-building.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-car"></i> Sky and building
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/trombone_player.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Trombone_player" data-src="assets/images_optimized/trombone_player.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-tree"></i> Trombone player
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
    					</li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/wasp.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Wasp" data-src="assets/images_optimized/wasp.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-sun-o"></i> Wasp
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>6 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/catcher-in-the-rye.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Catcher in the rye" data-src="assets/images_optimized/catcher-in-the-rye.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-pagelines"></i> Catcher in the rye
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>31 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/old-caddy.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Old caddy" data-src="assets/images_optimized/old-caddy.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-car"></i> Old Caddy
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets/images_optimized/oneway.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="One way only" data-src="assets/images_optimized/oneway.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <i class="fa fa-tree"></i> One way only
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-12" id="timingResult">
                Loading timing events, please wait...
            </div>
        </div>

    </div>
    <!-- /.container -->

    <div class="container page">
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-12">
                    <p>Performance test suite is created by iteratec and based on <a href="http://http2rulez.com/">HTTP 2.0 Rulez!</a> by <a href="https://twitter.com/ipeychev">Iliyan Peychev</a>.<br></p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
	<script src="assets/jsMinified/jquery-1.11.0.js"></script>
	<script src="assets/jsMinified/jquery-ui.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="assets/jsMinified/bootstrap.js"></script>
	<script src="assets/jsMinified/jquery.magnific-popup.js"></script>
	<script src="assets/jsMinified/shuffle.js"></script>
	<script src="assets/jsMinified/jquery.shapeshift.js"></script>
	<script src="assets/jsMinified/homepage.js"></script>
	<script src="assets/jsMinified/heavy_lifting_window_load.js"></script>
	<script src="assets/jsMinified/postPictureLoad.js"></script>

     <script type="text/javascript" src="assets/js/sendBeacon.js"></script>

</body>

</html>
