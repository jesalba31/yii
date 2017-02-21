<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fundo Laguna Nueva</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/js/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/simple-line-icons.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/animate.css">
    <!-- Carousel -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/js/plugins/carousel/owl.carousel.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/main.css">
    <!-- Feature detection -->
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/vendor/modernizr-2.6.2.min.js"></script>

    <!-- SLIDER-->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/js/plugins/swiper/css/swiper.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/vendor/html5shiv.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>


    <!-- NAVBAR
    ================================================== -->
    <header class="navbar-wrapper">
        <div class="navbar navbar-default navbar-static-top home-navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--logo start-->
                    <div>
                        <a href="index.php" class="logo">
                            <!--<i class="icon-layers"></i>
                            <span>Fundo</span> Laguna Nueva</a>-->
                            <img width="60px" src="<?php echo Yii::app()->baseUrl; ?>/img/logo-lagunue.png">
                            <span>Fundo</span> Laguna Nueva</a>
                    </div>
                    <!--logo end-->
                </div>
                <div class="navbar-collapse collapse">
                    <ul style="padding-top:11px" class="nav navbar-nav pull-right" id="main-menu">
                        <li><a href="#intro">Inicio</a>
                        </li>
                        <li><a href="#features">Productos y Servicios</a>
                        </li>
                        <!--<li><a href="#pricing">Pricing</a>
                        </li>-->
                        <li><a href="nosotros/index">Nosotros</a>
                        <!--<li><?php echo CHtml::link("Nosotros","nosotros/index"); ?>-->

                        </li>
                        <!--<li><a href="#team">Team</a>
                        </li>-->
                        <li><a href="#contact">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

	<?php echo $content; ?>

<!-- Footer
    ================================================== -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-sm-6 col-md-6 col-lg-6">
                    <p>Fundo Laguna Nueva</p>
                    <p class="copy">Agropecuaria Industrial D & A - RIF: J-406118346 &copy; 2011</p>
                </div>
                <div  class="col-xs-8 col-sm-6 col-md-6 col-lg-6 text-right">
                    <span>Siguenos en </span>  <a href="javascript:void(0)" class="social instagram"><i class="fa fa-instagram"></i></a> <a href="javascript:void(0)" class="social twitter"><i class="fa fa-twitter"></i></a> <a href="javascript:void(0)" class="social facebook"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
    </footer>


    <!--Global JS-->
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/vendor/jquery-1.11.1.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/plugins/nav/jquery.nav.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/plugins/sticky/jquery.sticky.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/plugins/scrollTo/jquery.scrollTo.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/plugins/wow/wow.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/plugins/carousel/owl.carousel.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/src/app.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/js/plugins/swiper/js/swiper.min.js"></script>

</body>

</html>

<script>

     var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true,
        autoplay: 4500,
        autoplayDisableOnInteraction: false,
        preloadImages: false,
        lazyLoading: true,
        mousewheelControl: false,

    });



$('.swiper-container').hover(function() {

    swiper.stopAutoplay();
    swiper.params.autoplay = 100000
    swiper.startAutoplay();
},

function() {
    swiper.stopAutoplay();
    swiper.params.autoplay = 4500
    swiper.startAutoplay();

});
//Laminas Principales
$('.swiper-button-next').click(function() {
    bucler=2;
});

$('.swiper-button-prev').click(function() {
    bucler=2;
});
$('.swiper-pagination').click(function() {
    bucler=2;
});

</script>