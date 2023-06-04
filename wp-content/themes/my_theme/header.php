<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="<?= get_template_directory_uri()."/style.css" ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<body>

<header>
<?php
    if (!is_home()){   ?>
            <div class="container-fluid">
                <div class="header-page-child-top-cover">
                    <div class="container">
                        <div class="header-page-child-top">
                            <div class="header-page-child-top-social-list">
                                <p class="header-page-child-top-social-item">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </p>

                                <p class="header-page-child-top-social-item">
                                    <i class="fa-brands fa-twitter"></i>
                                </p>

                                <p class="header-page-child-top-social-item">
                                    <i class="fa-brands fa-instagram"></i>
                                </p>

                                <p class="header-page-child-top-social-item">
                                    <i class="fa-brands fa-pinterest"></i>
                                </p>
                            </div>

                            <div class="header-page-child-top-logo">
                                <img src="<?= get_template_directory_uri().'/img/logo.png' ?>">
                            </div>

                            <div class="header-page-child-top-subscribe">
                                <span>Subscribe</span>
                                <span>
                                     <i class="fa-solid fa-magnifying-glass"></i>
                                </span>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

            <div class="header-menu-page-child-cover">
                <div class="container">
                    <div class="header-menu-page-child">
                        <ul>
                            <a href="">
                                <li>Home</li>
                            </a>

                            <a href="">
                                <li class="active">Home</li>
                            </a>
                            <a href="">
                                <li>Home</li>
                            </a>
                            <a href="">
                                <li>Home</li>
                            </a>
                            <a href="">
                                <li>Home</li>
                            </a>
                            <a href="">
                                <li>Home</li>
                            </a>

                            <a href="">
                                <li>Home</li>
                            </a>

                            <a href="">
                                <li>Home</li>
                            </a>

                        </ul>
                    </div>
                    <div class="header-menu-page-child-mobile">
                        <label for="header-menu-page-child-layer-checkbox">
                            <i class="fa-solid fa-bars"></i>
                            <span> Menu </span>
                        </label>



                        <input hidden type="checkbox" id="header-menu-page-child-layer-checkbox">

                        <div class="header-menu-page-child-mobile-layer">
                            <div class="header-menu-page-child-mobile-layer-cover">
                                <label class="header-menu-page-child-mobile-layer-cover-item-close" for="header-menu-page-child-layer-checkbox"><i class="fa-solid fa-xmark"></i></label>
                                <div class="header-menu-page-child-mobile-layer-cover-content">
                                    <img src="<?= get_template_directory_uri()."/img/logo_white.png" ?>" alt="">
                                    <ul>
                                        <a href="">
                                            <li>Home</li>
                                        </a>

                                        <a href="">
                                            <li>Features</li>
                                        </a>

                                        <a href="">
                                            <li>About</li>
                                        </a>
                                    </ul>

                                    <div class="header-menu-page-child-mobile-layer-cover-content-search-bar-cover">
                                        <div class="header-menu-page-child-mobile-layer-cover-content-search-bar">
                                            <div class="header-menu-page-child-mobile-layer-cover-content-search-bar-search">
                                                <input type="text" placeholder="Search">
                                            </div>
                                            <div class="header-menu-page-child-mobile-layer-cover-content-search-bar-icon">
                                                <span>
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="header-page-child-img-main" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url('<?= get_template_directory_uri()."/img/post-3-copyright.jpg" ?>')">
                <h1>About</h1>
                <div class="header-page-child-img-main-breadcum">
                        <span><a href="">Home</a></span>
                        <span>/</span>
                        <span class="active"><a href="">Child</a> </span>
                </div>
            </div>

    <?php }

?>
</header>





