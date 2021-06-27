<header class="site-header header  header-style-6">
    <!-- top bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 col-sm-offset-0 col-xs-offset-0 top-bar-curve">
                    <div class="rdx-topbar-left list-unstyled e-p-bx ">
                        <ul>
                            <li><i class="fas fa-envelope"></i>enquiry@sariputtaedutech.co.in</li>
                            <li><i class="fas fa-phone"></i>+91 80 3503 8282</li>
                        </ul>
                    </div>
                    <div class="rdx-topbar-right">
                        <ul class="social-bx list-inline pull-right">
                            <li><a href="https://www.facebook.com/Sariputta-Edutech-LLP-100563025084734" target="_blank"
                                   class="fab fa-facebook-f"></a></li>
                            <li><a href="https://www.youtube.com/channel/UC3iEsSjz-H_REh5RrJ2yjGg" class="fab fa-youtube" target="_blank"></a></li>
                              <li><a href="https://www.linkedin.com/company/sariputta-edutech-llp" class="fab fa-linkedin-in" target="_blank"></a></li>
                              <li><a href="https://wa.me/919403311731/?text=" class="fab fa-whatsapp" target="_blank"></a></li>
                              
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- top bar END-->
    <!-- main header -->
    <div class="sticky-header main-bar-wraper is-fixed header-cost">
        <div class="main-bar clearfix ">
            <div class="container-fluid clearfix">
                <!-- website logo -->
                <div class="logo-header mostion"><a href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url(); ?>/assets/img/sariputta-logo.jpg" alt=""><h5 class="animate__animated animate__bounce  animate__delay-1s">An ISO 9001:2015 certified Company</h5></a></div>
                <!-- nav toggle button -->
                <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>

                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse">
                    <ul class=" nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>" class="nav-link <?php
                            if ($pageType == 'home') {
                                echo "active";
                            }
                            ?>">Home<i class="fas fa-chevron-down"></i></a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('our-services'); ?>" class="nav-link <?php
                            if ($pageType == 'Our-Services') {
                                echo "active";
                            }
                            ?>">Our Services<i class="fas fa-chevron-down"></i></a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('our-collaborations'); ?>" class="nav-link <?php
                            if ($pageType == 'Our-Collaboration') {
                                echo "active";
                            }
                            ?>">Our Collaboration<i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('contact-us'); ?>" class="nav-link <?php
                            if ($pageType == 'Contact-us') {
                                echo "active";
                            }
                            ?>">Contact Us<i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li>
                            <a href="https://rzp.io/l/SariputtaEdutech" target="_blank" class="nav-link">Payment<i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('blog'); ?>" target="_blank" class="nav-link">Blog<i class="fas fa-chevron-down"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>