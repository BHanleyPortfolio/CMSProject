<?php if(session_status() != PHP_SESSION_ACTIVE){session_start();} ?>
<!doctype html>
<html lang="en-US">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/favicon.png"/>

    <!-- Font Files -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <title><?php echo htmlspecialchars($results['pageTitle']) //Use htmlspecialchars() to sanitize input and filter code?></title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css"  type="text/css"/>
    <link rel='stylesheet' id='nivoslider-css' href='js/nivo-slider/nivo-slider.css?ver=4.1.1'  type='text/css' media='all'/>
    <link rel='stylesheet' id='prettyPhoto-css' href='js/prettyPhoto/css/prettyPhoto.css?ver=4.1.1' type='text/css' media='all'/>
    <link rel='stylesheet' id='plupload_css-css' href='js/jquery.ui.plupload/css/jquery.ui.plupload.css?ver=4.1.1'  type='text/css' media='all'/>
    <link rel='stylesheet' id='select2-css'  href='css/select2.css?ver=4.1.1' type='text/css' media='all'/>
    <link rel='stylesheet' id='font-awesome-css' href='css/font-awesome.min.css?ver=4.1.1' type='text/css' media='all'/>
    <link rel="stylesheet" href="style.css" type="text/css" media="all"/>
    <link rel='stylesheet' id='responsive-css' href='responsive.css?ver=4.1.1' type='text/css' media='all'/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>

<!-- ============= HEADER STARTS HERE ============== -->
<div id="header-wrapper" class="clearfix">
    <div id="header" class="clearfix">
        <!-- WEBSITE LOGO -->
        <a class="responsive_logo" href="index.php"><img src="images/logo.png" alt="" class="logo"/></a>
        <a href="index.php"><h1 class="sitenametext">Food Recipes</h1></a>
        <a href="index.php"><img class="header-img" src="images/header-image.png" alt="Food Recipes"/></a>
    </div>
    <!-- end of header div -->

    <span class="w-pet-border"></span>

    <!-- NAVIGATION BAR STARTS HERE -->
    <div id="nav-wrap">
        <div class="inn-nav clearfix">

            <!-- MAIN NAVIGATION STARTS HERE -->
            <ul id="menu-main-navigation" class="nav">
                <li><a href="index.php">Home</a></li>
                <!--<li><a href="#">Slider</a>
                    <ul class="sub-menu">
                        <li><a href="basic-slider.html">Basic Slider</a></li>
                        <li><a href="nivo-slider.html">Nivo Slider</a></li>
                        <li><a href="thumbnail-slider.html">Thumbnail Slider</a></li>
                    </ul>
                </li>-->
                <li><a href="./?action=recipes">Recipes</a>
                    <!--<ul class="sub-menu">
                        <li><a href="recipe-single-1.html">Recipe Single one</a></li>
                        <li><a href="recipe-single-2.html">Recipe Single two</a></li>

                    </ul>-->
                </li>
                <li><a href="./?action=posts">Blog Posts</a>
                    <!--<ul class="sub-menu">
                        <li><a href="recipe-single-1.html">Recipe Single one</a></li>
                        <li><a href="recipe-single-2.html">Recipe Single two</a></li>

                    </ul>-->
                </li>


                <!--<li>
                    <a href="blog.html">Blog</a>
                    <ul class="sub-menu">
                        <li> <a href="single.html">Blog Single</a> </li>
                    </ul>
                </li>
                <li><a href="about-us.html">About</a></li>

                <li>
                    <a href="chef-listing.html">Chef Listing</a>
                    <ul class="sub-menu">
                        <li><a href="author.html">Chef Single</a></li>
                    </ul>
                </li>-->
                <?php if(!isset($_SESSION['username'])){ ?>
                <li><a href="admin.php">Login</a></li>
                <?php } ?>
                <?php if(isset($_SESSION['username'])){ ?>
                <li>
                    <a><?php echo htmlspecialchars( $_SESSION['username']) ?>'s Menu</a>
                    <ul class="sub-menu">
                        <li><a href="admin.php?action=newPost">New Post</a></li>
                        <li><a href="admin.php?action=listPosts">Posts</a></li>
                        <li><a href="admin.php?action=listRecipes">Recipes</a></li>
                        <li><a href="admin.php?action=newRecipe">New Recipe</a></li>
                        <li><a href="admin.php?action=logout">Logout</a></li>
                    </ul>
                </li>
                <?php } ?>
            </ul>
            <!-- MAIN NAVIGATION ENDS HERE -->


            <!-- SOCIAL NAVIGATION -->
            <ul id="menu-social-menu" class="social-nav">
                <li class="facebook"><a href="#"></a></li>
                <li class="twitter"><a href="#"></a></li>
                <li class="rss"><a href="#"></a></li>
                <li class="flickr"><a href="#"></a></li>
            </ul>
        </div>
    </div>
    <!-- end of nav-wrap -->
    <!-- NAVIGATION BAR ENDS HERE -->

</div>

<!-- end of header-wrapper div -->

<!-- ============= HEADER ENDS HERE ============== -->
