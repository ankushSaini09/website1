<?php
$directoryURL = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURL,PHP_URL_PATH);
$components = explode('/',$path);
$page = $components[2];
 
?>


<div class="header-top-wapper bg-dark-8 py-1">
    <div class="container">
        <div class="row align-items-center social-links">
            <div class="col text-center text-sm-start"><span class="header-email"><a class="text-decoration-none text-light" href="mailto:info@sidavitech.com"><img src="./assets/images/email.svg" class="me-2" alt="Sidavi email">info@sidavitech.com</a></span></div>
            <div class="col d-none d-sm-block text-end">
                <span class="me-2"><a href="#"> <img src="./assets/images/twitter.svg" alt=""></a></span>
                <span class="me-2"><a href="#"> <img src="./assets/images/youtube.svg" alt=""></a></span>
                <span class="me-2"><a href="#"> <img src="./assets/images/facebook.svg" alt=""></a></span>
                <span><a href="#"> <img src="./assets/images/instagram.svg" alt=""></a></span>
            </div>
        </div>
    </div>
</div> 
<!-- close-header-top -->
<header class="header-wrapper"> 
    <nav class="navbar-1 navbar navbar-expand-lg shadow py-3">
        <div class="container">
            <!-- site-logo -->
            <div class="site-logo"> <a class="navbar-brand" href="index.php"><img src="./assets/images/sidavi-logo.svg" alt="Sidavi logo"></a></div>
            <!-- mobile-menu -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon position-relative" id="btnToggle" onclick="toggleBtnNav()"><img class="open-btn" src="./assets/images/toggle-bar.svg" alt="toggle-btn"><img class="close-btn" src="./assets/images/close.svg" alt="toggle-btn"></span>
            </button> 
            <!-- navbar menu -->
            <div class="collapse navbar-collapse text-center text-sm-left" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link text-uppercase color-secondary <?php if($page == 'index.php'){echo 'active';} else {echo '';} ?>" aria-current="page" href="index.php">Home</a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-uppercase color-secondary <?php if($page == 'services.php' || $page == 'artificial-intelligence.php' || $page == 'data-science.php' || $page == 'data-engineering.php' || $page == 'cloud-computing.php' || $page == 'software-development.php' || $page == 'design-and-web-solutions.php' || $page == 'it-consulting.php')
                        {echo 'active';} else {echo '';} ?>"
                        href="services.php" role="button"  aria-expanded="false">
                        Services
                    </a>

                    
                    <ul class="dropdown-menu text-center text-sm-start">
                        <li><a class="dropdown-item text-uppercase color-secondary <?php if($page == 'artificial-intelligence.php'){echo 'active';} else {echo '';} ?> " href="artificial-intelligence.php">Artificial Intelligence</a></li>
                        <li><a class="dropdown-item text-uppercase color-secondary <?php if($page == 'data-science.php'){echo 'active';} else {echo '';} ?> " href="data-science.php">Data Science</a></li>
                        <li><a class="dropdown-item text-uppercase color-secondary <?php if($page == 'data-engineering.php'){echo 'active';} else {echo '';} ?> " href="data-engineering.php">Data Engineering</a></li>
                        <li><a class="dropdown-item text-uppercase color-secondary <?php if($page == 'cloud-computing.php'){echo 'active';} else {echo '';} ?> " href="cloud-computing.php">Cloud Computing</a></li>
                        <li><a class="dropdown-item text-uppercase color-secondary <?php if($page == 'software-development.php'){echo 'active';} else {echo '';} ?> " href="software-development.php">Software Development</a></li>
                        <li><a class="dropdown-item text-uppercase color-secondary <?php if($page == 'design-and-web-solutions.php'){echo 'active';} else {echo '';} ?> " href="design-and-web-solutions.php">Design & Web Solutions</a></li>
                        <li><a class="dropdown-item text-uppercase color-secondary <?php if($page == 'it-consulting.php'){echo 'active';} else {echo '';} ?> " href="it-consulting.php">IT Consulting</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase color-secondary <?php if($page == 'about-us.php'){echo 'active';} else {echo '';} ?>" href="about-us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase color-secondary <?php if($page == 'contact-us.php'){echo 'active';} else {echo '';} ?>" href="contact-us.php">Contact Us </a>
                    </li> 
                </ul> 
            </div>
        </div>
    </nav>  
    <!-- navbar close -->
</header>
<!-- header close -->
