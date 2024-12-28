<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salman All-shafa</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/easy.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/slick.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/header.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
    <link rel="shortcut icon" href="Images/home/cli_log.png" type="image/x-icon">

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Start site wrapper -->
    <div class="site-wrapper">
        <div class="header-index">
            <!-- ====== 1.1. Header section ====== -->
            <header>
                <nav class="container navbar">
                    <div class="container-nav flex">
                        <!-- site logo -->
                        <a class="navbar-logo" href="/"><img src="Images/home/cli_log.png" alt="logo" style='  width: 120px;'></a>
                        <button class="navbar-toggler" onclick="openNav()" type="button">
                            <span class="fa-solid fa-bars"></span>
                        </button>
                        <!-- menus -->
                        <ul class="navbar-nav flex">
                            <li><a class="nav-link active" href="/">Home</a></li>
                            <li><a class="nav-link" href="#about">About</a></li>
                            <li><a class="nav-link" href="<?php echo e(route('contacts')); ?>">Contact</a></li>
                            <li><a class="nav-link" href="<?php echo e(route('blogs.index')); ?>">Blogs</a></li>
                            <li><a class="nav-link" href="#rendezvous">Rendez-vous</a></li>
                        </ul>
                    </div>

                    <div class="flex nav-right">
                        <p>Call Us: <span>+253 77 25 42 13</span></p>
                        <!-- header buttons -->
                        <i onclick="open_search_bar()" class="fa-solid fa-magnifying-glass"></i>
                        <i onclick="open_right_side()" class="fa-solid fa-bars"></i>
                    </div>
                </nav>
    
        <!-- Sidebar -->
        <aside id="mySidepanel" class="sidepanel">
                    <div class="sidebar flex">
                        <a href=""><img src="Images/logo.png" alt="logo"></a>
                        <button class="closebtn btn_hover1" onclick="closeNav()"><i
                                class="fa-solid fa-xmark"></i></button>
                    </div>
                    <div>
                        <!-- side menus -->
                        <ul>
                            <li><a class="nav-link active" href="index.html">Home</a></li>
                            <li><a class="nav-link" href="about.html">About</a></li>
                            <li><a class="nav-link" href="contact.html">Contact</a></li>
                            <li class="pages"><a href="#">More</a></li>
                            <li class="collapse_btn">
                                <a class="nav-link plus_collapse" data-bs-toggle="collapse" href="javascript:void(0);"
                                    onclick="toggleCollapse('pages')" aria-expanded="false" aria-controls="pages">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                                <div class="collapse" id="pages">
                                    <ul>
                                        <li><a class="nav-link" href="services.html">Services</a></li>
                                        <li><a class="nav-link" href="pricing.html">Pricing Plan</a></li>
                                        <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                                        <li><a class="nav-link" href="team.html">Team</a></li>
                                        <li><a class="nav-link" href="testimonials.html">Testimonials</a></li>
                                        <li><a class="nav-link" href="faq.html">FAQ</a></li>
                                        <li><a class="nav-link" href="blog.html">Blog</a></li>
                                        <li><a class="nav-link" href="coming_soon.html">Coming Soon</a></li>
                                        <li><a class="nav-link" href="404.html">404</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </aside>

                <!-- searchbar -->
                <div id="search-bar">
                    <div class="btn_hover1" onclick="close_search_bar()"><i class="fa-solid fa-xmark"></i></div>
                    <form method="search" action="#">
                        <input type="search" required placeholder="Search...">
                        <button type="submit" class="btn_hover1">Search</button>
                    </form>
                </div>

                <!-- Right Sidebar -->
                <section class="header-right-sidebar" id="right_side">
                    <div class="flex flex-sb">
                        <a href="/"><img src="Images/home/cli_log.png" alt="logo"></a>
                        <button class="close_right_sidebar fa-solid fa-xmark" onclick="close_right_sade()"> </button>
                    </div>
                    <p>Bienvenue sur Salman Al-shifa, votre destination pour des soins de santé de qualité et personnalisés.
                    </p>
                    <a href="#about" class="btn_hover1">Discover More</a>
                    <hr>
                    <h4>Connected details:</h4>
                    <ul class="flex">
                        <li>
                            <a href="#"> <i class="fa-solid fa-phone"></i></a>
                            <a href="#" class="text-lowercase">+253 77 25 42 13</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa-regular fa-envelope"></i></a>
                            <a href="#">soule@gmail.com</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa-sharp fa-regular fa-clock"></i></a>
                            <a href="#">Office Hours: 8AM - 11PM Sunday -
                                Weekend Day</a>
                        </li>
                    </ul>
                    <span class="flex">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </span>
                </section>
            </header>
            <!-- Page Content -->
            <main>
            <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
        <footer>
       
            <div class="container">
                <div class="footer-hr flex flex-col">
                    <div class="flex gap-1" data-aos="fade-left">
                        <hr>
                        <h6>Newsletter</h6>
                    </div>
                    <h3>JOIN OUR MAILING LIST</h3>
                    <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been
                        the industry's standard dummy text ever.
                    </p>
                </div>
                <form id="footer-form" class="flex flex-sb gap-2" data-aos="zoom-in" data-aos-delay="400">
                    <div id="footer-message"></div>
                    <input type="email" required placeholder="Enter your mail">
                    <button type="submit" class="btn_hover1">Get Started</button>
                </form>
            </div>
            <div class="footer-menu">
                <div class="container">
                    <div class="flex flex-start footer-center">
                        <div class="w-33 flex flex-col gap-2 flex-start">
                            <a href="index.html"><img src="Images/home/cli_log.png" alt="footer-logo" style="  width: 160px;"></a>
                            <p style="margin-top:-40px;">Bienvenue sur Salman Al-shifa, 
                                votre destination pour des soins de santé de qualité et personnalisés.
                            </p>
                            <span class="flex gap-2">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </span>
                        </div>
                        <div class="w-16 mt-1">
                            <h4>Quick Links</h4>
                            <ul class="flex flex-col gap-2 flex-start">
                                <li><a href="/">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="<?php echo e(route('blogs.index')); ?>">Blogs</a></li>
                            </ul>
                        </div>
                        <div class="w-16 mt-45 flex-end">
                            <ul class="flex flex-col gap-2 flex-start">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="<?php echo e(route('contacts')); ?>">Contact</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Privacy policy</a></li>
                            </ul>
                        </div>
                        <div class="w-33 mt-1 flex flex-col flex-start">
                            <h4>Get Connected</h4>
                            <ul class="flex flex-col gap-2 flex-start">
                                <li>
                                    <a href="#"> <i class="fa-solid fa-phone"></i></a>
                                    <a href="tel:+25377254213" class="text-lowercase">+253 77 25 42 13</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa-regular fa-envelope"></i></a>
                                    <a href="mailto:Soule2004asi@gmail.com">Soule2004asi@gmail.com</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa-sharp fa-regular fa-clock"></i></a>
                                    <a href="#">Office Hours: 8AM - 11PM
                                        Vendredi - Weekend Day</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container flex flex-sb gap-2 flex-wrap">
                    <h6>Copyright © 2024 pixeldjib <a href="https://pixeldjib.free.nf/pixeldjib" class="p-0">
                            pixeldjib. </a> All Rights Reserved.
                    </h6>
                    <h6>Powered By <b> Moussa </b></h6>
                </div>
            </div>
        
        </footer>
    </body>
</html>
<?php /**PATH C:\Users\ADMIN\OneDrive\Desktop\gestion_rdv\gestion_cli\resources\views/layouts/app.blade.php ENDPATH**/ ?>