<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"><!--<![endif]-->

<head>
    <title>LovenatureBD</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Lovenature -  Tours & Travel Agency In Bangladesh.">

    <base>

    <!-- viewport settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href="{{url('resources')}}/assets/vantage_home/img/logo_0.png" type="image/png"/>
    <script src="{{url('resources')}}/assets/vantage_home/js/modernizr.custom.27294.js"></script>
    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,300,400,700'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700' rel='stylesheet' type='text/css'>
    <!--<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>-->

    <!-- CSS -->
    <link rel="stylesheet" href="{{url('resources')}}/assets/vantage_home/css/bootstrap.css">
    <link rel="stylesheet" href="{{url('resources')}}/assets/vantage_home/css/owl.carousel.css">
    <link rel="stylesheet" href="{{url('resources')}}/assets/vantage_home/css/owl.theme.css">
    <link rel="stylesheet" href="{{url('resources')}}/assets/vantage_home/css/owl.transitions.css">
    <link rel="stylesheet" href="{{url('resources')}}/assets/vantage_home/css/nanoscroller.css">
    <link rel="stylesheet" href="{{url('resources')}}/assets/vantage_home/css/ionicons.min.css">
    <!--<link rel="stylesheet" href="css/font-awesome.css">-->
    <link rel="stylesheet" href="{{url('resources')}}/assets/vantage_home/css/metrize-icon.css">
    <link rel="stylesheet" href="{{url('resources')}}/assets/vantage_home/css/animate.min.css">
    <link href="{{url('resources')}}/assets/vantage_home/css/alertify.core.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('resources')}}/assets/vantage_home/css/alertify.default.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{url('resources')}}/assets/vantage_home/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('resources')}}/assets/vantage_home/css/lightslider.css"/>
    <link rel="stylesheet" href="{{url('resources')}}/assets/vantage_home/css/main.css">
    <link rel="stylesheet" href="{{url('resources')}}/assets/vantage_home/css/style.css">

    <link rel="stylesheet" href="{{url('resources')}}/assets/vantage_home/pgfile/chocolat.css" type="text/css" media="screen" charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="{{url('resources')}}/assets/vantage_home/funcybox/source/jquery.fancybox.css" media="screen"/>
    @yield('specifiedCss')
</head>

<body id="home">

<!-- Section Header Begin -->
@include('home.layout.authHeader');
<!-- Section Header End -->
@yield('content')


<!-- Footer Begin -->
@include('home.layout.footer');
<!-- Footer End -->

<!-- Bootstrap core JavaScript ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{url('resources')}}/assets/vantage_home/js/jquery-1.11.0.min.js"></script>
<script src="{{url('resources')}}/assets/vantage_home/js/alertify.min.js" type="text/javascript"></script>
<script src="{{url('resources')}}/assets/vantage_home/pgfile/jquery.chocolat.js"></script>
<script type="text/javascript" charset="utf-8">
    $(function () {
        $('.moments-bottom a').Chocolat();
    });
</script>
<script>
    //key validation//
    function OnlyNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode

        if ((charCode < 48 || charCode > 57) && (charCode !== 8) && (charCode !== 9) && (charCode !== 46))

            return false;
    }
    //Alphpa Numeric validation//
    function AlphaNumericKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode

        if ((charCode < 48 || charCode > 57) && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122))

            return false;
    }
</script>


<script src="{{url('resources')}}/assets/vantage_home/js/lightslider.js"></script>
<script>
    $(document).ready(function () {
        $("#content-slider").lightSlider({
            loop: true,
            keyPress: true
        });
        $('#image-gallery').lightSlider({
            gallery: true,
            item: 1,
            thumbItem: 9,
            slideMargin: 0,
            speed: 500,
            auto: true,
            loop: true,
            onSliderLoad: function () {
                $('#image-gallery').removeClass('cS-hidden');
            }
        });
    });
</script>
<script src="{{url('resources')}}/assets/vantage_home/js/bootstrap.min.js"></script>
<script src="{{url('resources')}}/assets/vantage_home/js/owl.carousel.js"></script>
<script src="{{url('resources')}}/assets/vantage_home/js/smooth-scroll.js"></script>
<script src="{{url('resources')}}/assets/vantage_home/js/jquery.nanoscroller.min.js"></script>
<script src="{{url('resources')}}/assets/vantage_home/js/wow.min.js"></script>
<script src="{{url('resources')}}/assets/vantage_home/js/jquery.stellar.min.js"></script>
<script src="{{url('resources')}}/assets/vantage_home/js/main.js"></script>
<script>
    $("#immersive_slider").immersive_slider({
        animation: "bounce", // As usual, you can change the animation to these: slide (default), bounce, fade, slideUp, and bounceUp
        slideSelector: ".slide", // This option will let you assign custom selector for each slides in case .slide is already taken
        container: ".main", // This option lets you define the container of which the background will appear. Make sure the slider is inside this container as well.
        cssBlur: true, // Experimental: In case you don't want to keep adding new data-blurred attributes, trigger this to true and it will generate the blur image on the fly (more info below).
        pagination: true, // Toggle this to false if you don't want a pagination
        loop: true, // Toggle to false if you don't want the slider to loop. Default is true.
        autoStart: 5000 // Define the number of milliseconds before it navigates automatically. Change this to 0 or false to disable autoStart. The default value is 5000.
    });
</script>

<script>
    function setLang(lang){
        var ert= '{{session('language')}}';
        //alert(ert);
        $.ajax({
            url:'{{url("set_lang")}}',
            type:'get',
            data:{
                val:lang
            },success:function(msg){
                location.reload();
                //var ert= '{{session('language')}}';
                //alert(msg+'---'+ert);

            }
        });
    }
</script>
<a href="javascript:" id="return-to-top"><img src="{{url('resources')}}/assets/vantage_home/top.png" alt=""></a>
<script>
    // ===== Scroll to Top ====
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function () {      // When arrow is clicked
        $('body,html').animate({
            scrollTop: 0                       // Scroll to top of body
        }, 500);
    });
</script>
<!-- Visa Scroll  -->
<script type="text/javascript" src="{{url('resources')}}/assets/vantage_home/visascroll/jquery.easing.min.js"></script>
<script type="text/javascript" src="{{url('resources')}}/assets/vantage_home/visascroll/jquery.easy-ticker.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        var dd = $('.vticker').easyTicker({
            direction: 'down',
            easing: 'easeInOutBack',
            speed: 'slow',
            interval: 2000,
            height: 'auto',
            visible: 3,
            mousePause: 0,
            controls: {
                up: '.up',
                down: '.down',
                toggle: '.toggle',
                stopText: 'Stop !!!'
            }
        }).data('easyTicker');

        cc = 1;
        $('.aa').click(function () {
            $('.vticker ul').append('<li>' + cc);
            cc++;
        });

        $('.vis').click(function () {
            dd.options['visible'] = 3;

        });

        $('.visall').click(function () {
            dd.stop();
            dd.options['visible'] = 0;
            dd.start();
        });

    });
</script>
<script type="text/javascript" src="{{url('resources')}}/assets/vantage_home/funcybox/source/jquery.fancybox.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $('.fancybox').fancybox();
    });
</script>
</a><br/>

@yield('specifiedJs')
</body>
<!-- Mirrored from lovenaturebd.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2017 12:33:46 GMT -->
</html>