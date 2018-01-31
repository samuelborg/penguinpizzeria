<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    $name = "Penguin Pizzeria";
    date_default_timezone_set('Europe/Malta');
    include('templates/arrays.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Official Site for Penguin Pizzeria">
    <meta name="author" content="Matthew Xuereb & Samuel Borg">

    <title><?php echo $pageInfo[$page]["title"]; ?> | <?php echo $name;?></title>
    <link rel="shortcut icon" href="/img/favicon.ico"/>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <link href="css/round-about.css" rel="stylesheet">
   <link href="css/carousel.css" rel="stylesheet">
    <link href="css/3-col-portfolio.css" rel="stylesheet">
    <link href="css/business-casual.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.2.3/release/featherlight.min.css" type="text/css" rel="stylesheet" title="Featherlight Styles" />


    <!-- Custom Fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway|Pacifico' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/parallax.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="//cdn.rawgit.com/noelboss/featherlight/1.2.3/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    <script>
       new WOW().init();
    </script>

  <script src="https://maps.googleapis.com/maps/api/js"></script>

  <script>
  function initialize() {
  /*  var mapCanvas = document.getElementById('map-canvas');
    var mapOptions = {
      center: new google.maps.LatLng(-62.592376, -59.924902),
      zoom: 8,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);*/
     var myLatlng = new google.maps.LatLng(-62.592376, -59.924902);
  var mapOptions = {
    zoom: 11,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
  }
              google.maps.event.addDomListener(window, 'load', initialize);

</script>

<script>
    $("#backtotop").click(function() {
    $("html, body").animate({scrollTop: 0}, 1000);
    });
</script>

</head>

<body>


 <?php include('templates/nav.php'); ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <?php
    if ($page != 'index')
    { ?>
    <header class="intro-header" data-parallax="scroll" data-image-src="/img/<?php echo $page;?>-bg2.jpg">
        <?php
        }
        else
        {
            ?>
        <header class="intro-header" data-parallax="scroll" data-image-src="/img/home.gif">
        <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1 class="wow fadeInUp"><?php echo $pageInfo[$page]["heading"];?></h1>
                        <hr class="small wow fadeInUp">
                        <span class="subheading wow fadeInUp"><?php echo $pageInfo[$page]["subheading"];?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
