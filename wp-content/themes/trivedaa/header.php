<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<!-- Mobile Meta -->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- Favicons and Icons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#ffffff">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

	</head>

    <body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a class="logo" href="index.html"> <img src="img/logo.png" class="logo-img" alt=""> </a>
                <!-- <a class="logo" href="index.html"> <h2>BAUEN</h2> </a> -->
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Services <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="services.html" class="dropdown-item"><span>Services 1</span></a></li>
                            <li><a href="services2.html" class="dropdown-item"><span>Services 2</span></a></li>
                            <li><a href="services3.html" class="dropdown-item"><span>Services 3</span></a></li>
                            <li><a href="services4.html" class="dropdown-item"><span>Services 4</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Projects <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="projects.html" class="dropdown-item"><span>Projects 1</span></a></li>
                            <li><a href="projects2.html" class="dropdown-item"><span>Projects 2</span></a></li>
                            <li><a href="projects3.html" class="dropdown-item"><span>Projects 3</span></a></li>
                            <li><a href="projects4.html" class="dropdown-item"><span>Projects 4</span></a></li>
                            <li><a href="project-gallery.html" class="dropdown-item"><span>Project Gallery</span></a></li>
                            <li><a href="project-page.html" class="dropdown-item"><span>Project Page</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="kenburns-slider.html" class="dropdown-item"><span>Kenburns Slider</span></a></li>
                            <li><a href="grid-background.html" class="dropdown-item"><span>Grid Background</span></a></li>
                            <li><a href="video.html" class="dropdown-item"><span>Video Background</span></a></li>
                            <li><a href="before-after.html" class="dropdown-item"><span>Before After</span></a></li>
                            <li><a href="pricing.html" class="dropdown-item"><span>Pricing</span></a></li>
                            <li><a href="team.html" class="dropdown-item"><span>Team</span></a></li>
                            <li><a href="careers.html" class="dropdown-item"><span>Careers</span></a></li>
                            <li><a href="gallery.html" class="dropdown-item"><span>Gallery</span></a></li>
                            <li><a href="video-gallery.html" class="dropdown-item"><span>Video Gallery</span></a></li>
                            <li><a href="process.html" class="dropdown-item"><span>Process</span></a></li>
                            <li><a href="parallax-home.html" class="dropdown-item"><span>Parallax Home</span></a></li>
                            <li class="dropdown-submenu dropdown"> <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Other Pages <i class="ti-angle-right"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="testimonials.html" class="dropdown-item"><span>Testimonials</span></a></li>
                                    <li><a href="faqs.html" class="dropdown-item"><span>Faqs</span></a></li>
                                    <li><a href="not-found-404.html" class="dropdown-item"><span>404 Page</span></a></li>
                                    <li><a href="coming-soon.html" class="dropdown-item"><span>Coming Soon</span></a></li>
                                </ul>
                            </li>
                        </ul> 
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Blog <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html" class="dropdown-item"><span>Blog 1</span></a></li>
                            <li><a href="blog2.html" class="dropdown-item"><span>Blog 2</span></a></li>
                            <li><a href="blog3.html" class="dropdown-item"><span>Blog 3</span></a></li>
                            <li><a href="blog4.html" class="dropdown-item"><span>Blog 4</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>