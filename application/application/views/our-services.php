<!DOCTYPE html>
<html>
<?php

$user_data = array(
    'title' => 'OurServices',
    'pageType' => 'Our-Services'
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
        <!-- inner page banner -->
        <div class="rdx-bnr-inr overlay-black-middle"
             style="background-image:url(<?php echo base_url(); ?>assets/img/services_sariputta.jpg);">
            <div class="container">
                <div class="rdx-bnr-inr-entry">
                    <h1 class="text-white">Services</h1>
                    <div class="rdx-separator-outer">
                        <div class="rdx-separator bg-white style-liner"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->

        <!-- contact area -->
        <div class="content bg-white">
            <!-- Faq -->
            <section class="section-full content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 m-b30">
                            <div class="ow-carousel-entry">
                                <div class="ow-entry-media rdx-img-effect zoom-slow"><a href="#"><img
                                                src="<?php echo base_url(); ?>/assets/img/trainingNdevelopment1.jpg"
                                                alt=""></a></div>
                                <div class="ow-entry-content p-a15">
                                    <div class="ow-entry-title"><h4 class="m-tb0"><a href="#">Training and
                                                Development</a></h4></div>
                                    <div class="ow-entry-text">
                                        <p>Training and Development is one of the main functions that intends to enhance
                                            the present or future performance of an employee, by improving his/her
                                            ability through the process of learning, by changing approach, sharpening
                                            skills, strengthening competencies and increasing the knowledge base.</p>
                                    </div>
                                </div>
                                <div class="ow-entry-footer text-center">
                                    <button name="submit" type="submit" value="Submit" id="enquiry1"
                                            class="site-button"><span>Enquiry</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 m-b30">
                            <div class="ow-carousel-entry">
                                <div class="ow-entry-media rdx-img-effect zoom-slow"><a href="#"><a href="#"><img
                                                    src="<?php echo base_url(); ?>/assets/img/placementServices.jpg"
                                                    alt=""></a></div>
                                <div class="ow-entry-content p-a15">
                                    <div class="ow-entry-title"><h4 class="m-tb0"><a href="#">Placement Services</a>
                                        </h4></div>
                                    <div class="ow-entry-text">
                                        <p>Placement Service we help our candidates to get an appropriate place
                                            according to his qualifications and abilities, thus enabling him to get
                                            absorbed successfully in industries like Bank, IT sector, Hospital, Digial
                                            Marketing etc.</p>
                                    </div>
                                </div>
                                <div class="ow-entry-footer text-center">
                                    <button name="submit" type="submit" value="Submit" id="enquiry2"
                                            class="site-button "><span>Enquiry</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 m-b30">
                            <div class="ow-carousel-entry">
                                <div class="ow-entry-media rdx-img-effect zoom-slow"><a href="#"><img
                                                src="<?php echo base_url(); ?>/assets/img/distanceLearning.jpg" alt=""></a>
                                </div>
                                <div class="ow-entry-content p-a15">
                                    <div class="ow-entry-title"><h4 class="m-tb0"><a href="#">Distance Learning & Higher
                                                Education</a></h4></div>
                                    <div class="ow-entry-text">
                                        <p>Distance Education, the top benefit of distance education is its flexibility.
                                            Students can choose when, where, and how they learn by selecting the time,
                                            place, and medium for their education. Studying a degree through distance
                                            learning gives you a number of benefits: You get to decide exactly when and
                                            where you study. You can gain a degree from anywhere in the world.<br>Courses 
                                            provided by us from Savitribai Phule Pune university: MBA/MBA plus PHD/ PGDM/ 
                                            BBA(CA)/ BBA(Finance, HR, Marketing)</p>
                                    </div>
                                </div>
                                <div class="ow-entry-footer text-center">
                                    <button name="submit" type="submit" value="Submit" id="enquiry3"
                                            class="site-button "><span>Enquiry</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 m-b30">
                            <div class="ow-carousel-entry">
                                <div class="ow-entry-media rdx-img-effect zoom-slow"><a href="#"><img
                                                src="<?php echo base_url(); ?>/assets/img/councelling.jpg" alt=""></a>
                                </div>
                                <div class="ow-entry-content p-a15">
                                    <div class="ow-entry-title"><h4 class="m-tb0"><a href="#">Career Counseling</a></h4>
                                    </div>
                                    <div class="ow-entry-text">
                                        <p>Career Counseling, we help you to know and understand yourself and the world
                                            of work in order to make career, educational, and life decisions. Career
                                            development is more than just deciding on a major and what job you want to
                                            get when you graduate. Helping make you shape your Career.</p>
                                    </div>
                                </div>
                                <div class="ow-entry-footer text-center">
                                    <button name="submit" type="submit" value="Submit" id="enquiry4"
                                            class="site-button "><span>Enquiry</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 m-b30">
                            <div class="ow-carousel-entry">
                                <div class="ow-entry-media rdx-img-effect zoom-slow"><a href="#"><img
                                                src="<?php echo base_url(); ?>/assets/img/healthcare.jpg" alt=""></a>
                                </div>
                                <div class="ow-entry-content p-a15">
                                    <div class="ow-entry-title"><h4 class="m-tb0"><a href="#">Healthcare & Sanitation
                                                Services</a></h4></div>
                                    <div class="ow-entry-text">
                                        <p>Healthcare service, we train your paramedic staff for quick emergency
                                            response suitation. Train staff for basic healthcare sanitization and proper
                                            care. <br> 
                                            We provide paramedical courses and provide 50 courses in paramedical. We provide dual certification courses under paramedical courses.</p>
                                    </div>
                                </div>
                                <div class="ow-entry-footer text-center">
                                    <button name="submit" type="submit" value="Submit" id="enquiry5"
                                            class="site-button "><span>Enquiry</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 m-b10">
                            <div class="ow-carousel-entry">
                                <div class="ow-entry-media rdx-img-effect zoom-slow"><a href="#"><img
                                                src="<?php echo base_url(); ?>/assets/img/digitalMarketing.jpg" alt=""></a>
                                </div>
                                <div class="ow-entry-content p-a15">
                                    <div class="ow-entry-title"><h4 class="m-tb0"><a href="#">Digital Marketing</a></h4>
                                    </div>
                                    <div class="ow-entry-text">
                                        <p>Digital marketing is the use of the Internet, mobile devices, social media,
                                            search engines, and other channels to reach consumers. We help our student
                                            to be experts in digital marketing.</p>
                                    </div>
                                </div>
                                <div class="ow-entry-footer text-center">
                                    <button name="submit" type="submit" value="Submit" id="enquiry6"
                                            class="site-button "><span>Enquiry</span></button>
                                </div>
                            </div>
                        </div>

                    </div>
     
                    <div class="row">
                        <div class="col-md-4 col-sm-6 m-b10">
                            <div class="ow-carousel-entry">
                                <div class="ow-entry-media rdx-img-effect zoom-slow"> <a href="#"><img src="<?php echo base_url(); ?>/assets/img/international.jpg" alt=""></a> </div>
                                <div class="ow-entry-content p-a15">
                                    <div class="ow-entry-title"><h4 class="m-tb0"><a href="#">International Education Consultant For MBBS Abroad</a></h4></div>
                                    <div class="ow-entry-text">
                                        <p>We guide students in getting admission in countries like Russia, China, Georgia, Ukraine etc All these colleges from above countries are government recognised colleges and MCI/WHO approved colleges.<br>
                    Once you are sure about going abroad and have chosen a university, right from admission to visa to accommodation flight tickets (one way free )visa renewal every year is taken care by us. Our parent company is into the same field since last 11 years have till date helped at least 1000+ students get admission in various colleges abroad. All the process starts with a contract made on a stamp paper to keep it authentic and legal.
                                        </p><br><br>
                                        <button name="submit" type="submit" value="Submit" id="enquiry7" class="site-button "> <span>Enquiry</span> </button>
                                    </div>
                                </div>
                           </div>
                            <div class="ow-carousel-entry">
                                <div class="ow-entry-media rdx-img-effect zoom-slow"> <a href="#"><img src="<?php echo base_url(); ?>/assets/img/international.jpg" alt=""></a> </div>
                                <div class="ow-entry-content p-a15">
                                    <div class="ow-entry-title"><h4 class="m-tb0"><a href="#">International Education Consultant For MBBS Abroad</a></h4></div>
                                    <div class="ow-entry-text">
                                        <p>We guide students in getting admission in countries like Russia, China, Georgia, Ukraine etc All these colleges from above countries are government recognised colleges and MCI/WHO approved colleges.<br>
                    Once you are sure about going abroad and have chosen a university, right from admission to visa to accommodation flight tickets (one way free )visa renewal every year is taken care by us. Our parent company is into the same field since last 11 years have till date helped at least 1000+ students get admission in various colleges abroad. All the process starts with a contract made on a stamp paper to keep it authentic and legal.
                                        </p><br><br>
                                        <button name="submit" type="submit" value="Submit" id="enquiry7" class="site-button "> <span>Enquiry</span> </button>
                                    </div>
                                </div>
                           </div>
                       </div>
            
                     </div>

            
                     </div>

                </div>
            </section>
            <!-- Faq END -->
        </div>
        <!-- contact area  END -->
    </div>

    <?php
    $this->load->view(WEBSITE . INCLUDE_FILE . 'footer');
    ?>

    <div id="enquiryDetails" style="display:none">
        <form role="form">
            <div class="enquiry-form">
                <div class="row item">
                    <div class="col-md-12">
                        <label for="name">Name</label>
                        <span class="form-field"><input type="text" name="name" value="" size="40"
                                                        class="form-control" aria-required="true" aria-invalid="false"
                                                        placeholder="Name"></span>
                    </div>
                </div>
                <div class="row item">
                    <div class="col-md-12">
                        <label for="email">Email</label>
                        <span class="form-field"><input type="email" name="email" value="" size="40"
                                                        class="form-control" aria-required="true" aria-invalid="false"
                                                        placeholder="Email"></span>
                    </div>
                </div>
                <div class="row item">
                    <div class="col-md-12">
                        <label for="number">Phone Number</label>
                        <span class="form-field"><input type="text" name="phone" value="" size="40" maxlength="10"
                                                        class="form-control" aria-required="true" aria-invalid="false"
                                                        placeholder="Number"></span>
                    </div>
                </div>
                <div class="row item">
                    <div class="col-md-12">
                        <label for="message">Message</label>
                        <span class="form-field"><textarea name="message" cols="40" rows="3" class="form-control"
                                                           aria-required="true" aria-invalid="false"
                                                           placeholder="Your Queries"></textarea></span>
                    </div>
                </div>
                <div class="row sube">
                    <div class="col-xs-12 col-md-12 col-sm-12">
                        <input type="button" value="Submit" class="site-button" onclick="saveEnqueryUs(this);"
                               data-dismiss="modal">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="<?php echo base_url(); ?>/assets/js/services.js?v=1.0.2"></script>
</body>
</html>
