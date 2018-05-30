<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Popsmartkids - (iOS/Android)
    </title>

    
    <!-- load font awesome for social media icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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
	<?php wp_head(); ?>
</head>
<body>
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
                <a class="navbar-brand" href="http://smart2.icoolshow.net/index.html"><img class="logo" src="http://smart2.icoolshow.net/images/test.png"></a>
            </div>
            <!-- this continues to create the navbar/button which changes with screen size -->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="local">
                        <a href="http://smart2.icoolshow.net/index.html">Home</a>
                    </li>
                    <li class="local">
                        <a href="http://smart2.icoolshow.net/aboutUs.html">About Us</a>
                    </li>
                    <li class="local">
                        <a href="http://smart2.icoolshow.net/products/">Products</a>
                    </li>
                    <li class="active">
                        <a href="http://smart2.icoolshow.net/blog/">Blog</a>
                    </li>
                    <li class="local">
                        <a href="http://smart2.icoolshow.net/contactUs.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- end collapsing navigation section -->
        </div>
    </nav>