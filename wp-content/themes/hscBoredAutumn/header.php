<?php
// Works in single post outside of the Loop
$PostID = $wp_query->post->ID;
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php $options = get_option('H-SC_Bored'); ?>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"><!-- Use CDN for development. Switch to full URL when on server-->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
        <script src="js/vendor/modernizr-2.8.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/?locale=en">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">
            <div class="row aboveHeader">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <a href="#" title="Home"><img src="http://localhost:8888/wordpress/HSC_Bored-Wordpress/wp-content/themes/hscBoredAutumn/img/logo.png" alt="H-SC Bored Logo"></a>
                </div>
                <div class="col-lg-offset-6  col-lg-2  col-md-offset-6 col-md-2 col-sm-offset-6 col-sm-2">
                    <a href="#" target="_blank" title="H-SC Bored on Facebook"><img src="http://localhost:8888/wordpress/HSC_Bored-Wordpress/wp-content/themes/hscBoredAutumn/img/socialMedia/facebook.png" alt="H-SC Bored on Facebook"></a>
                    <a href="#" target="_blank" title="H-SC Bored on Twitter"><img src="http://localhost:8888/wordpress/HSC_Bored-Wordpress/wp-content/themes/hscBoredAutumn/img/socialMedia/twitter.png" alt="H-SC Bored on Twitter"></a>
                </div>
            </div>
            <div class="row">
                <nav class="navbar navbar-default" role="navigation">
                    <!--Toggle for better mobile display-->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavCollapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!--Nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="mainNavCollapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    INTEREST <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Free</a>
                                    </li>
                                    <li>
                                        <a href="#">Club Meetings</a>
                                    </li>
                                    <li>
                                        <a href="#">Comedy</a>
                                    </li>
                                    <li>
                                        <a href="#">Community Involvement</a>
                                    </li>
                                    <li>
                                        <a href="#">Diversity &amp; Awareness</a>
                                    </li>
                                    <li>
                                        <a href="#">Film</a>
                                    </li>
                                    <li>
                                        <a href="#">Food</a>
                                    </li>
                                    <li>
                                        <a href="#">Music</a>
                                    </li>
                                    <li>
                                        <a href="#">Outdoor</a>
                                    </li>
                                    <li>
                                        <a href="#">Speaker</a>
                                    </li>
                                    <li>
                                        <a href="#">Sports &amp; Wellbeing</a>
                                    </li>
                                    <li>
                                        <a href="#">Theatre &amp; the Arts</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    LOCATION <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">A Short Drive</a>
                                    </li>
                                    <li>
                                        <a href="#">One Hour Drive</a>
                                    </li>
                                    <li>
                                        <a href="#">Two Hour Drive</a>
                                    </li>
                                    <li>
                                        <a href="#">Day Trip</a>
                                    </li>
                                    <li>
                                        <a href="#">Road Trip</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    CLUB/ORG <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Academic &amp; Career</a>
                                    </li>
                                    <li>
                                        <a href="#">Arts &amp; Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Cultural &amp; Religious</a>
                                    </li>
                                    <li>
                                        <a href="#">Outdoor</a>
                                    </li>
                                    <li>
                                        <a href="#">Service &amp; Activism</a>
                                    </li>
                                    <li>
                                        <a href="#">Student Government</a>
                                    </li>
                                    <li>
                                        <a href="#">H-SC Departments</a>
                                    </li>
                                    <li>
                                        <a href="#">Other</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    DAY <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Sunday</a>
                                    </li>
                                    <li>
                                        <a href="#">Monday</a>
                                    </li>
                                    <li>
                                        <a href="#">Tuesday</a>
                                    </li>
                                    <li>
                                        <a href="#">Wednesday</a>
                                    </li>
                                    <li>
                                        <a href="#">Thursday</a>
                                    </li>
                                    <li>
                                        <a href="#">Friday</a>
                                    </li>
                                    <li>
                                        <a href="#">Saturday</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    ALL EVENTS
                                </a>
                            </li>
                        </ul>

                        <!--Begin Search Form-->
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search&hellip;">
                            </div>
                            <button type="submit" class="btn btn-default">
                                Submit
                            </button>
                        </form>
                    </div>
                </nav><!--End NavBar-->
            </div><!--End Row-->
            <div class="row">
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="#"><i class="fa fa-home" title="Home"></i> Home</a>
                    </li>
                </ol>
            </div><!--End Row-->
