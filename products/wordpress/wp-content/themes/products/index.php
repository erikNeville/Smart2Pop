<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- load bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- load font awesome for social media icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- our local style sheet -->
    <link rel="stylesheet" href="../../../../../css/style.css">
    <link href="../wordpress/wp-content/themes/products/style.css" type="text/css" rel="stylesheet">
    <!-- A google api font, really easy to change -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119802114-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119802114-1');

    </script>
</head>


<body>
    <!-- Begin Header (navbar) section -->
    <!-- This section should stay with each static page, as is, with the exception of changing out
        which links are available in the nav bar depending on where you are -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- This creates the navbar button that changes with smaller screen sizes -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <!-- these spans are meant to be empty, they just create the lines inside the button -->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is bootstrap, this is where our logo image in the top left goes -->
                <a class="navbar-brand" href="../index.html"><img class="logo" src="../images/test.png"></a>
            </div>
            <!-- this continues to create the navbar/button which changes with screen size -->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="local">
                        <a href="../index.html">Home</a>
                    </li>
                    <li class="local">
                        <a href="../aboutUs.html">About Us</a>
                    </li>
                    <li class="active">
                        <a href="/products/">Products</a>
                    </li>
                    <li class="local">
                        <a href="../blog/">Blog</a>
                    </li>
                    <li class="local">
                        <a href="../contactUs.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- end collapsing navigation section -->
        </div>
    </nav>
    <!-- end header (navbar) section -->


    <!-- intentionally empty -->
    <div class="container" id="products"></div>
    <!-- intentionally empty -->




    <?php

	
    if(have_posts()):
		while(have_posts()) : the_post();
		$category = get_post_meta(get_the_id(), 'Category', true);
		$age = get_post_meta(get_the_id(), 'Age', true);
		$video = get_post_meta(get_the_id(), 'Video', true);
		?>
        <div class="container" style="border-bottom:#F0F0F0 1px solid">
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        <strong><font color="#77B5FE"><?php the_title();?></font></strong>
                    </h3>

                    <div class="a"><strong>Category &nbsp</strong>
                        <?php echo $category;?>
                    </div>
                    <div class="a"><strong>Age &nbsp</strong>
                        <?php echo $age; ?>
                    </div>
                    <div class="a"><strong>Description &nbsp</strong>
                        <?php echo the_content();?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php echo $video?>"></iframe>

                    </div>
                    <div class="a"></div>
                </div>
                
            </div>
		<div class="a"></div>
                <div class="mb-5 text-center">
                    <a href=""><img src="wordpress/wp-content/themes/products/images/apple_2.PNG" alt="Apple" height="42" width="142" style="float: middle;"></a>
                    <font>&nbsp&nbsp&nbsp&nbsp&nbsp</font>
                    <a href=""><img src="wordpress/wp-content/themes/products/images/google_2.PNG" alt="Google" height="42" width="142" style="float: middle;"></a>
                </div>
                <div class="a"></div>

        </div>
        <!--end container-->
        <!--end container-->
        <?php
		endwhile;
	else :
		echo '<p>No content found</p>';
	endif;

?>



            <footer class="page-footer font-small indigo pt-0">
                <hr class="footer-hr">

                <div class="container-fluid">
                    <div class="row justify-content-md-center text-center">

                        <div class="col-md-3 mb-3">
                        </div>
                        <div class="col-md-2 mb-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <a class="footer-info" href="../privacyPolicy.html">Privacy Policy</a>
                            </h6>
                        </div>
                        <div class="col-md-2 mb-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <a class="footer-info" href="../legal.html">legal</a>
                            </h6>
                        </div>
                        <div class="col-md-2 mb-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <a class="footer-info" href="../safeZone.html">safe zone</a>
                            </h6>
                        </div>

                    </div>

                    <hr class="footer-hr">

                    <div class="row pb-3">

                        <div class="col-md-12">
                            <div class="mb-5 text-center">
                                <a href="https://facebook.com/popsmartkids/" class="fab fa-facebook-square"></a>
                                <a href="https://twitter.com/popsmartkids/" class="fab fa-twitter-square"></a>
                                <a href="https://linkedin.com/in/priyankaraha/" class="fab fa-linkedin"></a>
				<a href="https://linkedin.com/in/priyankaraha/" class="fab fa-google-plus-square"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Copyright-->
                <div class="footer-copyright py-3 text-center">
                    © 2018 Copyright: PopSmartKids
                </div>
                <!--/Copyright-->

            </footer>

            <!-- I'm honestly not sure if bootstrap even uses jquery but the tutorial said to put this here -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>

</html>
