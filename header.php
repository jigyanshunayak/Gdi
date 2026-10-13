<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>GDI</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/skin-corporate-3.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		
		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 148, 'stickySetTop': '-148px', 'stickyChangeLogo': true}">
				<div class="header-body border-color-primary border-top-0 box-shadow-none">

				<!--	<div class="header-top header-top-default border-bottom-0 border-top-0">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills text-uppercase text-2">
												<li class="nav-item nav-item-anim-icon">
													<a class="nav-link pl-0" href="about-us.html" style="color: #fff;font-weight: bold"><i class="fas fa-angle-right"></i> 
Welcome to Global Devlopment Initiatives  
</a>
												</li>
												
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook" ><i class="fab fa-facebook-f" style="color: #fff"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter" style="color: #fff"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in" style="color: #fff"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>-->
					<div class="header-container container z-index-2">
						<div class="header-row py-2">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo header-logo-sticky-change">
										<a href="index.php">
											<img class="header-logo-sticky opacity-0" alt="logo" width="300" height="110" data-sticky-width="89" data-sticky-height="43"  src="img/logo.jpg">
											<img class="header-logo-non-sticky opacity-0" alt="Porto" width="100%" height="110" src="img/logo.jpg">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<ul class="header-extra-info d-flex align-items-center">
										<li class="d-none d-sm-inline-flex">
											<a href="https://www.payumoney.com/react/app/merchant/#/pay/merchant/9C8F59A58A9EAA6B1FC50F0C3ECFFEDA" target="_blank" class="btn btn-3d btn-primary mb-2">Donate Now</a>
										</li>
										<li>
											<a href="https://www.gdi.co.in/business/shop/" target="blank"><button type="button" class="btn btn-3d btn-secondary mb-2">E-Store</button></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

<style>
/* GDI Navigation - Preserve original blue color */
.header-nav-bar.bg-primary {
    background-color: #573e7a  !important;
    border: none;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
    position: relative;
    z-index: 1000;
}

.header-nav-bar .header-nav {
    width: 100%;
}

.header-nav-bar .nav.nav-pills {
    display: flex;
    align-items: center;
    gap: 5px;
}

.header-nav-bar .nav.nav-pills > li {
    position: relative;
}

.header-nav-bar .nav.nav-pills > li > a {
    color: #ffffff !important;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.3px;
    padding: 13px 16px !important;
    border-radius: 5px;
    text-transform: uppercase;
    transition: background-color 0.25s ease, color 0.25s ease;
}

.header-nav-bar .nav.nav-pills > li > a:hover,
.header-nav-bar .nav.nav-pills > li > a:focus,
.header-nav-bar .nav.nav-pills > li > a.active {
    background-color: rgba(255, 255, 255, 0.18) !important;
    color: #ffffff !important;
}

/* Dropdown menu */
.header-nav-bar .dropdown-menu {
    background: #ffffff;
    border: none;
    border-top: 3px solid #f2c14e;
    border-radius: 0 0 7px 7px;
    min-width: 225px;
    padding: 8px 0;
    margin-top: 0;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.16);
}

.header-nav-bar .dropdown-menu .dropdown-item {
    display: block;
    color: #333333 !important;
    font-size: 14px;
    font-weight: 500;
    padding: 11px 18px;
    white-space: normal;
    transition: all 0.2s ease;
}

.header-nav-bar .dropdown-menu .dropdown-item:hover,
.header-nav-bar .dropdown-menu .dropdown-item:focus {
    color: #573e7a  !important;
    background-color: #f0f8fc !important;
    padding-left: 24px;
}

/* Dropdown indicator */
.header-nav-bar .dropdown-toggle:after {
    margin-left: 7px;
    vertical-align: middle;
}

/* Mobile menu button */
.header-nav-bar .header-btn-collapse-nav {
    color: #ffffff !important;
    background-color: rgba(255, 255, 255, 0.15) !important;
    border: 1px solid rgba(255, 255, 255, 0.55) !important;
    border-radius: 5px;
    padding: 8px 13px;
}

.header-nav-bar .header-btn-collapse-nav:hover {
    background-color: rgba(255, 255, 255, 0.25) !important;
}

/* Desktop dropdown hover */
@media (min-width: 992px) {
    .header-nav-bar .dropdown:hover > .dropdown-menu {
        display: block;
    }
}

/* Responsive layout */
@media (max-width: 991px) {
    .header-nav-bar .header-nav {
        padding: 8px 0 !important;
    }

    .header-nav-bar .header-nav-main nav {
        background: #573e7a ;
        padding: 8px 12px 14px;
        border-radius: 6px;
        margin-top: 8px;
    }

    .header-nav-bar .nav.nav-pills {
        display: block;
    }

    .header-nav-bar .nav.nav-pills > li > a {
        display: block;
        padding: 11px 14px !important;
        margin: 2px 0;
    }

    .header-nav-bar .dropdown-menu {
        position: static;
        float: none;
        width: 100%;
        min-width: 100%;
        box-shadow: none;
        border-top: 2px solid #f2c14e;
        border-radius: 5px;
        margin: 4px 0 8px;
    }
}
</style>

<div class="header-nav-bar bg-primary"
     data-sticky-header-style="{'minResolution': 991}"
     data-sticky-header-style-active="{'background-color': 'transparent'}"
     data-sticky-header-style-deactive="{'background-color': '#0088cc'}">

    <div class="container">
        <div class="header-row">
            <div class="header-column">
                <div class="header-row justify-content-end">

                    <div class="header-nav header-nav-force-light-text justify-content-start py-2 py-lg-3"
                         data-sticky-header-style="{'minResolution': 991}"
                         data-sticky-header-style-active="{'margin-left': '135px'}"
                         data-sticky-header-style-deactive="{'margin-left': '0'}">

                        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                            <nav class="collapse">
                                <ul class="nav nav-pills" id="mainNav">

                                    <li class="dropdown dropdown-full-color dropdown-light">
                                        <a class="dropdown-item dropdown-toggle active" href="index.php">
                                            Home
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="about-gdi.php">About GDI</a></li>
                                            <li><a class="dropdown-item" href="boad-of-advisory.php">Board of Advisory</a></li>
                                            <li><a class="dropdown-item" href="leadership.php">Leadership</a></li>
                                            <li><a class="dropdown-item" href="who-we-are.php">Who We Are</a></li>
                                            <li><a class="dropdown-item" href="mission-vision.php">Mission &amp; Vision</a></li>
                                            <!-- <li><a class="dropdown-item" href="what-we-do.php">What We Do</a></li> -->
                                        </ul>
                                    </li>

                                    <li class="dropdown dropdown-full-color dropdown-light">
                                        <a class="dropdown-item dropdown-toggle" href="#">
                                            Initiatives
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="social-marketing.php">Social Marketing</a></li>
                                            <li><a class="dropdown-item" href="parivar-mitra.php">Parivar Mitra</a></li>
                                            <li><a class="dropdown-item" href="mobile-medical-units.php">Mobile Medical Units</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown dropdown-full-color dropdown-light">
                                        <a class="dropdown-item" href="achievments.php">
                                            Achievements
                                        </a>
                                    </li>

                                    <li class="dropdown dropdown-full-color dropdown-light">
                                        <a class="dropdown-item" href="gallery.php">
                                            Gallery
                                        </a>
                                    </li>

                                    <li class="dropdown dropdown-full-color dropdown-light">
                                        <a class="dropdown-item" href="career.php">
                                            Career
                                        </a>
                                    </li>

                                    <li class="dropdown dropdown-full-color dropdown-light">
                                        <a class="dropdown-item" href="contactus.php">
                                            Contact Us
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>

                        <button class="btn header-btn-collapse-nav my-2"
                                type="button"
                                data-toggle="collapse"
                                data-target=".header-nav-main nav"
                                aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

				</div>
			</header>