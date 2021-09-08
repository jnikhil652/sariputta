<!DOCTYPE html>
<html>
<?php
$user_data = array(
    'title' => 'Home',
    'pageType' => 'home'
);
$this->load->view(WEBSITE . INCLUDE_FILE . 'header', $user_data);
?>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area"></div>
        <?php
        $this->load->view(WEBSITE . INCLUDE_FILE . 'menu');
        ?>
        <div class="page-content">
            <div class="container-fluid home-banner">
                <img src="<?php echo base_url(); ?>/assets/img/home3.jpg" alt="">
                <div class="home-overlay">
                    <div class="title animate__animated animate__rubberBand animate__delay-1s">Welcome to<br>SARIPUTTA EDUTECH LLP</div>
                </div>
            </div>


            <div class="section-full about-block bg-white">
                <div class="container">
                    <div class="row">
                        <div class="icon-bx-wraper center col-md-3 col-sm-3 bg-green icon-box p-a0">
                            <div class="icon-bx-lg text-white"><a href="<?php echo base_url('our-services'); ?>" class="icon-cell"><i class="fas fa-graduation-cap"></i></a></div>
                            <div class="icon-content text-white p-lr15 p-tb30">
                                <h2 class="rdx-tilte font-weight-900 m-b10">Training & Development </h2>
                                <p>Sariputta Edutech provides students and employees the best training and self development
                                    platforms and make them job ready.</p>
                            </div>
                        </div>
                        <div class="icon-bx-wraper center col-md-3 col-sm-3 bg-yello icon-box p-a0">
                            <div class="icon-bx-lg text-white"><a href="<?php echo base_url('paramedical'); ?>" class="icon-cell"><i class="fas fa-id-badge"></i></a>
                            </div>
                            <div class="icon-content text-white p-lr15 p-tb30">
                                <h2 class="rdx-tilte font-weight-900 m-b10">HealthCare & Paramedical Training</h2>
                                <p>Sariputta Edutech provides healthcare services and paramedical courses. <br> We provide 50 courses in <br>paramedical.</p>
                            </div>
                        </div>
                        <div class="icon-bx-wraper center col-md-3 col-sm-3 bg-red icon-box p-a0">
                            <div class="icon-bx-lg text-white"><a href="<?php echo base_url('higherEducation'); ?>" class="icon-cell"><i class="fas fa-desktop"></i></a></div>
                            <div class="icon-content text-white p-lr15 p-tb30">
                                <h2 class="rdx-tilte font-weight-900 m-b10">Distance Learning & Higher Education</h2>
                                <p>Sariputta Edutech provides best platforms for student to full-fill their aspirations for distance learning & higher education.</p>
                            </div>
                        </div>
                        <div class="icon-bx-wraper center col-md-3 col-sm-3 bg-primary icon-box p-a0">
                            <div class="icon-bx-lg text-white"><a href="<?php echo base_url('our-services'); ?>" class="icon-cell"><i class="fas fa-briefcase"></i></a>
                            </div>
                            <div class="icon-content text-white p-lr15 p-tb30">
                                <h2 class="rdx-tilte font-weight-900 m-b10">Career Counseling & Placement Services</h2>
                                <p>We guide and counsel every student for better career and
                                    bright future. Industry expert with more than 15yrs of experience mentor you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="testimonial_3_columns_text_carousel" class="carousel slide testimonial_columns_text_carousel_wrapper" data-ride="carousel" data-interval="2000" data-pause="hover">
                <div class="section-full box-shadow bg-white content-inner">
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-12 text-center section-head">
                                    <h2 class="h2"><span class="text-primary">Our Services</span></h2>
                                    <div class="rdx-separator-outer">
                                        <div class="rdx-separator bg-primary style-liner"></div>
                                    </div>
                                    <div class="clear"></div>
                                    <h1>
                                        <p class="m-b0">Sariputta Edutech is an education consultant in the training and education industry and helps students develop and meet their career aspirations and dreams.</p>
                                    </h1>
                                </div>
                            </div>
                            <div class="carousel-inner" role="listbox">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="rdx-box rdx-img-effect border-1 mb-1 rotate">
                                                <div class="rdx-media"><a href="<?php echo base_url('our-services'); ?>"><img src="<?php echo base_url(); ?>/assets/img/trainingNdevelopment1.jpg" alt=""></a>
                                                </div>
                                                <div class="rdx-info p-a20 text-center">
                                                    <h2 class="rdx-title m-t0 m-b10 font-weight-700"><a href="<?php echo base_url('our-services'); ?>">Training &
                                                            Development</a></h2>
                                                    <p>Training & Development service intends to enhance the present or
                                                        future performance of the students, by improving through the process
                                                        of learning, sharpening skills.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="rdx-box rdx-img-effect border-1 mb-1 rotate">
                                                <div class="rdx-media"><a href="<?php echo base_url('our-services'); ?>"><img src="<?php echo base_url(); ?>/assets/img/placementServices.jpg" alt=""></a>
                                                </div>
                                                <div class="rdx-info p-a20 text-center">
                                                    <h2 class="rdx-title m-t0 m-b10 font-weight-700"><a href="<?php echo base_url('our-services'); ?>">Placement
                                                            Services</a></h2>
                                                    <p>Placement Service we help our candidates to get an appropriate job
                                                        according to his qualifications and abilities.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="rdx-box rdx-img-effect border-1 mb-1 rotate">
                                                <div class="rdx-media "><a href="<?php echo base_url('our-services'); ?>"><img src="<?php echo base_url(); ?>/assets/img/distanceLearning.jpg" alt=""></a>
                                                </div>
                                                <div class="rdx-info p-a20 text-center">
                                                    <h2 class="rdx-title m-t0 m-b10 font-weight-700"><a href="<?php echo base_url('our-services'); ?>">Distance
                                                            Learning & Higher Education</a></h2>
                                                    <p>Distance Education, Students can choose when, where, and how they
                                                        learn by selecting the time, place, and medium for their
                                                        education.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="rdx-box rdx-img-effect border-1 mb-1 rotate">
                                                <div class="rdx-media "><a href="<?php echo base_url('our-services'); ?>"><img src="<?php echo base_url(); ?>/assets/img/councelling.jpg" alt=""></a>
                                                </div>
                                                <div class="rdx-info p-a20 text-center">
                                                    <h2 class="rdx-title m-t0 m-b10 font-weight-700"><a href="<?php echo base_url('our-services'); ?>">Career
                                                            Counseling</a></h2>
                                                    <p>Career Counseling, we help you to know and understand yourself and
                                                        the world of work in order to make career, educational and life
                                                        decisions.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="rdx-box rdx-img-effect border-1 mb-1 rotate">
                                                <div class="rdx-media "><a href="<?php echo base_url('our-services'); ?>"><img src="<?php echo base_url(); ?>/assets/img/healthcare1.jpg" alt=""></a>
                                                </div>
                                                <div class="rdx-info p-a20 text-center">
                                                    <h2 class="rdx-title m-t0 m-b10 font-weight-700"><a href="<?php echo base_url('our-services'); ?>">Healthcare
                                                            Training</a></h2>
                                                    <!-- <p>Healthcare service, we train your paramedic staff for quick emergency
                                                    response suitation. Train staff for basic healthcare sanitization
                                                    and proper care.</p>  -->
                                                    <p> We provide paramedical courses and provide 50 courses in paramedical. We provide dual certification courses under paramedical courses.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="rdx-box rdx-img-effect border-1 mb-1 rotate">
                                                <div class="rdx-media "><a href="<?php echo base_url('our-services'); ?>"><img src="<?php echo base_url(); ?>/assets/img/sanitation1.jpg" alt=""></a>
                                                </div>
                                                <div class="rdx-info p-a20 text-center">
                                                    <h2 class="rdx-title m-t0 m-b10 font-weight-700"><a href="<?php echo base_url('our-services'); ?>">Sanitation
                                                            Services</a></h2>
                                                    <p>Sanitation service is done for all Corporate building, malls to
                                                        protect from COVID-19.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ol class="carousel-indicators testimonial_columns_text_carousel_indicators">
                                <li data-target="#testimonial_3_columns_text_carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#testimonial_3_columns_text_carousel" data-slide-to="1" class=""></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-full text-white bg-img-fix content-inner bg-primary choose-us" style="background-image:url(<?php echo base_url(); ?>/assets/img/patter-bg.png);">
                <div class="container">
                    <div class="section-head  text-center text-white">
                        <h2 class="h2">Our Philosophy</h2>
                        <div class="rdx-separator-outer ">
                            <div class="rdx-separator bg-white style-liner"></div>
                        </div>
                        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p> -->
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 m-b30 ">
                            <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
                                <div class="icon-bx-md radius bg-white m-b20">
                                    <span class="icon-cell text-primary"><i class="fas fa-graduation-cap"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="rdx-tilte">Job Ready</h4>
                                    <p>To make student job ready, by providing right education and right tools</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
                                <div class="icon-bx-md radius bg-white m-b20">
                                    <span class="icon-cell text-red"><i class="fas fa-thumbs-up"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="rdx-tilte">Make Learning Easy</h4>
                                    <p>Providing students with knowledge & tools to make learning easy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
                                <div class="icon-bx-md radius bg-white m-b20">
                                    <span class="icon-cell text-yello"><i class="fas fa-briefcase"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="rdx-tilte">Maximum Employment</h4>
                                    <p>Our mission is to provide maximum employment to the youth</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
                                <div class="icon-bx-md radius bg-white m-b20">
                                    <span class="icon-cell text-green"><i class="fas fa-certificate"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="rdx-tilte">Certified Tutors</h4>
                                    <p>Our expertise begins at the age of brain development to the age of brain
                                        saturation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="section-head text-center ">
                        <h2 class="h2"><span class="text-primary">Our Collaborations</span></h2>
                        <div class="rdx-separator-outer">
                            <div class="rdx-separator bg-primary style-liner"></div>
                        </div>
                        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p> -->
                    </div>
                    <div class="section-content text-center ">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 m-b30">
                                <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>/assets/img/custom–1.png">
                            </div>
                            <div class="col-md-3 col-sm-6 m-b30">
                                <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>/assets/img/custom–10.png">
                            </div>
                            <div class="col-md-3 col-sm-6 m-b30">
                                <img class="img-fluid img-thumbnail" style="height:135px;width:265px;" src="<?php echo base_url(); ?>/assets/upgrad.jpg">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-3 col-sm-6 m-b30">
                                <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>/assets/img/custom–5.png">
                            </div>
                            <div class="col-md-3 col-sm-6 m-b30">
                                <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>/assets/img/custom–6.png">
                            </div>
                            <div class="col-md-3 col-sm-6 m-b30">
                                <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>/assets/img/custom–7.png">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 m-b30">
                                <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>/assets/img/custom–11.png">
                            </div>
                            <div class="col-md-3 col-sm-6 m-b30">
                                <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>/assets/img/custom–8.png">
                            </div>
                            <div class="col-md-3 col-sm-6 m-b30">
                                <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>/assets/img/expertron_logo.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="section-head text-center ">
                        <h2 class="h2"><span class="text-primary">Our Finance Partner</span></h2>
                        <div class="rdx-separator-outer">
                            <div class="rdx-separator bg-primary style-liner"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 m-b30">
                            <img class="img-fluid img-thumbnail" style="width:265px;height:151px;" src="<?php echo base_url(); ?>/assets/hdfc.png">
                        </div>
                        <div class="col-md-3 col-sm-6 m-b30">
                            <img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>/assets/credin.jpg">
                        </div>



                    </div>


                </div>
                <div class="section-full content-inner-2">
                    <div class="container">
                        <div class="section-head text-center">
                            <h2 class="h2"><span class="text-primary">Our Event Gallery</span></h2>
                            <div class="rdx-separator-outer">
                                <div class="rdx-separator bg-primary style-liner"></div>
                            </div>
                            <p>Our events and achivements in field of education and training.</p>
                        </div>
                        <div class="section-content">
                            <div class="row">

                                <div align="center" class="col-12 mb-3">
                                    <button class="btn btn-default filter-button active" data-filter="all">Show All</button>
                                    <button class="btn btn-default filter-button" data-filter="events">Events</button>
                                    <button class="btn btn-default filter-button" data-filter="achivements">Achivements</button>
                                    <button class="btn btn-default filter-button" data-filter="videos">Promotions</button>
                                </div>

                                <div class="gallery-product col-md-3 filter events">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/event_lm.jpg" alt="">
                                </div>
                                <div class="gallery-product col-md-3 filter achivements">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/gallery/achivement1.jpg" alt="">
                                </div>
                                <div class="gallery-product col-md-3 filter achivements">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/gallery/achivement2.jpg" alt="">
                                </div>
                                <div class="gallery-product col-md-3 filter events">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/gallery/event1.jpg" alt="">
                                </div>
                                <div class="gallery-product col-md-3 filter events">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/gallery/event2.jpg" alt="">
                                </div>
                                <div class="gallery-product col-md-3 filter achivements">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/gallery/achivement3.jpg" alt="">
                                </div>


                                <div class="gallery-product col-md-3 filter events">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/gallery/event3.jpg" alt="">
                                </div>
                                <div class="gallery-product col-md-3 filter events">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/gallery/event4.jpg" alt="">
                                </div>
                                <div class="gallery-product col-md-3 filter events">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/gallery/event5.jpg" alt="">
                                </div>
                                <div class="gallery-product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter videos" style="height: 201px">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qk7RS8JHKyY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                                 gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="gallery-product col-md-3 filter videos">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/promotions/Sariputta7.jpeg" alt="addmission">
                                </div>
                                <div class="gallery-product col-md-3 filter videos">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/promotions/Sariputta5.jpeg" alt="mbbs">
                                </div>
                                <div class="gallery-product col-md-3 filter videos">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/promotions/Sariputta2.jpeg" alt="paramedical">
                                </div>
                                <div class="gallery-product col-md-3 filter achivements">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/gallery/achivement4.jpeg" alt="">
                                </div>

                                <div class="gallery-product col-md-3 filter videos">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/promotions/Sariputta3.jpeg" alt="mba">
                                </div>

                                <div class="gallery-product col-md-3 filter videos">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/promotions/Sariputta1.jpeg" alt="abroad">
                                </div>



                                <div class="gallery-product col-md-3 filter videos" style="height: 371px">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/promotions/Sariputta4.jpeg" alt="diet">
                                </div>

                                <div class="gallery-product col-md-3 filter videos" style="height: 371px">
                                    <img class="img-thumbnail img-fluid imageZoom" src="<?php echo base_url(); ?>/assets/img/promotions/Sariputta6.jpeg" alt="dmlt">
                                </div>
                                <div class="gallery-product col-md-3 filter videos" style="height: 371px">
                                    <iframe width="" height="371" src="https://www.youtube.com/embed/4U0QX2Cv9x0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="gallery-product col-md-3 filter videos" style="height: 371px">
                                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="" height="371" type="text/html" src="https://www.youtube.com/embed/Fd5DOUe1j6Q?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0"></iframe>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $this->load->view(WEBSITE . INCLUDE_FILE . 'footer');
            ?>

            <script src="<?php echo base_url(); ?>/assets/js/home.js?v=1.0.0"></script>
</body>

</html>