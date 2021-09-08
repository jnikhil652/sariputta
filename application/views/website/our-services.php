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
            <div class="rdx-bnr-inr overlay-black-middle" style="background-image:url(<?php echo base_url(); ?>assets/img/services_sariputta.jpg);">
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
                                    <div class="ow-entry-media rdx-img-effect zoom-slow"><a href="#"><img src="<?php echo base_url(); ?>/assets/img/trainingNdevelopment1.jpg" alt=""></a></div>
                                    <div class="ow-entry-content p-a15">
                                        <button style="background-color: #ffffff; border: none;text-align: left;" data-toggle="modal" data-target="#trainingmain">
                                            <div class="ow-entry-title">
                                                <h4 class="m-tb0"><a>Training and Development</a></h4>
                                            </div>

                                            <div class="ow-entry-text">

                                                <p>Training and Development is one of the main functions that intends to enhance
                                                    the present or future performance of an employee, by improving his/her
                                                    ability through the process of learning, by changing approach, sharpening
                                                    skills, strengthening competencies and increasing the knowledge base.</p>

                                            </div>
                                        </button>
                                    </div>
                                    <br><br>
                                    <div class="ow-entry-footer text-center">
                                        <button name="submit" type="submit" value="Submit" class="site-button" data-toggle="modal" data-target="#training" data-target="#training"><span>Enquiry</span></button>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4 col-sm-6 m-b30">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media rdx-img-effect zoom-slow"><a href="<?php echo base_url('placement'); ?>"><img src="<?php echo base_url(); ?>/assets/img/placementServices.jpg" alt=""></a></div>
                                    <div class="ow-entry-content p-a15">
                                        <div class="ow-entry-title">
                                            <h4 class="m-tb0"><a href="<?php echo base_url('placement'); ?>">Placement Services</a>
                                            </h4>
                                        </div>
                                        <div class="ow-entry-text">
                                            <p>Placement Service we help our candidates to get an appropriate place
                                                according to his qualifications and abilities, thus enabling him to get
                                                absorbed successfully in industries like Bank, IT sector, Hospital, Digial
                                                Marketing etc.</p>
                                        </div>
                                    </div><br><br>
                                    <div class="ow-entry-footer text-center">
                                        <button name="submit" type="submit" value="Submit" class="site-button" data-toggle="modal" data-target="#placement"><span>Enquiry</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-b30">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media rdx-img-effect zoom-slow"><a href="<?php echo base_url('higherEducation'); ?>"><img src="<?php echo base_url(); ?>/assets/img/distanceLearning.jpg" alt=""></a>
                                    </div>
                                    <div class="ow-entry-content p-a15">
                                        <div class="ow-entry-title">
                                            <h4 class="m-tb0"><a href="<?php echo base_url('higherEducation'); ?>">Distance Learning and Higher Education</a></h4>
                                        </div>
                                        <div class="ow-entry-text">
                                            <p>Distance Education, the top benefit of distance education is its flexibility.
                                                Students can choose when, where, and how they learn by selecting the time,
                                                place, and medium for their education. Studying a degree through distance
                                                learning gives you a number of benefits. You can gain a degree from anywhere in the world.<br>Courses
                                                provided by us from <b>Savitribai Phule Pune university: MBA/MBA plus PHD/ PGDM/
                                                    BBA(CA)/ BBA(Finance, HR, Marketing)</b></p>
                                        </div>
                                    </div>
                                    <div class="ow-entry-footer text-center">
                                        <button name="submit" type="submit" value="Submit" class="site-button" data-toggle="modal" data-target="#higher"><span>Enquiry</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-b30">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media rdx-img-effect zoom-slow"><a href="#"><img src="<?php echo base_url(); ?>/assets/img/rsz_stepapp1.jpg" alt=""></a>
                                    </div>
                                    <div class="ow-entry-content p-a15">
                                        <div class="ow-entry-title">
                                            <h4 class="m-tb0"><a href="<?php echo base_url('stepapp'); ?>">Stepapp For 6th to 12th student </a></h4>
                                        </div>
                                        <div class="ow-entry-text">
                                            <p>STEPapp is a revolutionary Ed-Tech app that makes learning fun and easy
                                                through its gamified format and gives children conceptual clarity in math
                                                and science. The content in STEPapp is created by a team of 400+ IITians and
                                                doctors who have worked for over 5 years on the concept delivery in a unique
                                                gamified format.</p>
                                        </div>
                                    </div>
                                    <div class="ow-entry-footer text-center">
                                        <button name="submit" type="submit" value="Submit" class="site-button " data-toggle="modal" data-target="#stepapp"><span>Enquiry</span></button>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-b30">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media rdx-img-effect zoom-slow"><a href="#"><img src="<?php echo base_url(); ?>/assets/img/healthcare.jpg" alt=""></a>
                                    </div>
                                    <div class="ow-entry-content p-a15">
                                        <div class="ow-entry-title">
                                            <h4 class="m-tb0"><a href="<?php echo base_url('paramedical'); ?>">Paramedical courses, Healthcare & Sanitation Services</a></h4>
                                        </div>
                                        <div class="ow-entry-text">
                                            <p>Healthcare service, we train your paramedic staff for quick emergency
                                                response suitation. Train staff for basic healthcare sanitization and proper
                                                care. <br>
                                                We provide paramedical courses and provide 50 courses in paramedical. We provide dual certification courses under paramedical courses.</p>
                                        </div>
                                    </div>
                                    <div class="ow-entry-footer text-center">
                                        <button name="submit" type="submit" value="Submit" class="site-button " data-toggle="modal" data-target="#paramedical"><span>Enquiry</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-b10">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media rdx-img-effect zoom-slow"><a href="http://gurcharanamacademy.in/" target="_blank"><img src="<?php echo base_url(); ?>/assets/img/rszgurcharnam1.jpg" alt=""></a>
                                    </div>
                                    <div class="ow-entry-content p-a15">
                                        <div class="ow-entry-title">
                                            <h4 class="m-tb0"><a href="http://gurcharanamacademy.in/" target="_blank">NEET/ JEE / Pre-Foundation</a></h4>
                                        </div>
                                        <div class="ow-entry-text">
                                            <p>Gurcharanam Academy is a Premier Coaching Institute for JEE (Main + Advanced)
                                                | JEE-Main | NEET (UG) | NTSE | OLYMPIAD Entrance Exams Preparation.
                                                Gurcharanam gives the students an environment that is very important for
                                                their future. They learn in the classroom how to prepare for competition
                                                exams, How to solve difficult question in secinds, how to develop to
                                                thinking ability to solve problems.</p>
                                        </div>
                                    </div>
                                    <div class="ow-entry-footer text-center">
                                        <button name="submit" type="submit" value="Submit" class="site-button " data-toggle="modal" data-target="#gurcharanam"><span>Enquiry</span></button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4 col-sm-6 m-b10">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media rdx-img-effect zoom-slow"> <a href="#"><img src="<?php echo base_url(); ?>/assets/img/international.jpg" alt=""></a> </div>
                                    <div class="ow-entry-content p-a15">
                                        <div class="ow-entry-title">
                                            <h4 class="m-tb0"><a href="<?php echo base_url('mbbsabrod'); ?>">
                                                    International Education Consultant For MBBS Abroad</a></h4>
                                        </div>
                                        <div class="ow-entry-text">
                                            <p>We guide students in getting admission in countries like Russia, China, Georgia, Ukraine etc All these colleges from above countries are government recognised colleges and MCI/WHO approved colleges.<br>
                                                Once you are sure about going abroad and have chosen a university, right from admission to visa to accommodation flight tickets (one way free )visa renewal every year is taken care by us. Our parent company is into the same field since last 11 years have till date helped at least 1000+ students get admission in various colleges abroad. All the process starts with a contract made on a stamp paper to keep it authentic and legal.
                                            </p><br><br>
                                            <button name="submit" type="submit" value="Submit" class="site-button " data-toggle="modal" data-target="#international"> <span>Enquiry</span> </button>
                                            <a href="Sariputta Edutech MBBS Broucher.pdf" target="_blank"><button name="submit" type="submit" value="Submit" class="site-button"> <span>Broucher</span> </button></a>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="col-md-4 col-sm-6 m-b10">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media rdx-img-effect zoom-slow"> <a href="#"><img src="<?php echo base_url(); ?>/assets/img/national.jpg" alt=""></a> </div>
                                    <div class="ow-entry-content p-a15">
                                        <div class="ow-entry-title">
                                            <h4 class="m-tb0"><a href="<?php echo base_url('medicalindia'); ?>">Education Consultant For India</a></h4>
                                        </div>
                                        <div class="ow-entry-text">
                                            <p>We provide consultation for Admission in India
                                                <br>For:
                                            <ul>
                                                <li>MBBS/MD/MS/Msc-Nursing</li>
                                                <li>BPS/BAMS/BHMS/BPTH/Bsc-Nursing</li>
                                                <li>CPS/FCPS</li>
                                                <li>PHARMACY</li>
                                                <li>GNM/P.B.Bsc</li>
                                                <br>
                                                All guidance right from AIQ-State resistration to Choice filling. Best counselling to get college of your choice inspite of low scores.
                                                </p>
                                                <p>Bsc-Nursing from INC, MNC and KNC approved institutes only</p>
                                                <p>P.B.Bsc/Bsc-Nursing/GNM/Msc-Nursing inclusive of Food and Hostel</p>
                                                <br>
                                                <button name="submit" type="submit" value="Submit" class="site-button " data-toggle="modal" data-target="#india"> <span>Enquiry</span> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-b10" style="height:806px;">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media rdx-img-effect zoom-slow"> <a href="#"><img style="width:361px;height:238px;" src="<?php echo base_url(); ?>/assets/img/overseas.jpg" alt=""></a> </div>
                                    <div class="ow-entry-content p-a15">
                                        <div class="ow-entry-title">
                                            <h4 class="m-tb0"><a href="#">Overseas Education Consultant</a></h4>
                                        </div>
                                        <div class="ow-entry-text">
                                            <div class="container">
                                                <p>We provide consultation for students going abroad <br>
                                                    For:
                                                <ul>
                                                    <li>Graduation</li>
                                                    <li>MBA</li>
                                                    <li>MS</li>
                                                    <li>Diploma</li>
                                                    <li>Other Certification</li>
                                                </ul>
                                                <br>
                                                We guide students in:</p>
                                                <ul>
                                                    <li>How to apply</li>
                                                    <li>Important documents</li>
                                                    <li>Standard format for drafting LOR </li>
                                                    <li>SOP’s</li>
                                                    <li>Visa processing</li>
                                                    <li>Scholarships</li>
                                                    <li>Accommodation</li>
                                                    <li>assistance in getting loan</li>

                                                </ul>
                                            </div><br>
                                            <button name="submit" type="submit" value="Submit" class="site-button " data-toggle="modal" data-target="#overseas"> <span>Enquiry</span> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 m-b10" style="height:806px;">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media rdx-img-effect zoom-slow"> <a href="https://www.indianabacus.com/" target="_blank"><img src="<?php echo base_url(); ?>/assets/img/abacus.jpg" alt="" style="height: 241px"></a> </div>
                                    <div class="ow-entry-content p-a15">
                                        <div class="ow-entry-title">
                                            <h4 class="m-tb0"><a href="https://www.indianabacus.com/" target="_blank">Indian Abacus</a></h4>
                                        </div>
                                        <div class="ow-entry-text">

                                            <p>We are State Franchise</p>
                                            <b>We are the only company to provide digital Abacus with a unique Abacus tool.</b>
                                            <p>Indian Abacus group company has rich experience in Abacus based mental
                                                arithmetic skill development program in India, since 1999. The Program
                                                teaches skill management techniques that activate the infinite hidden
                                                potential of the human brain and its effective use.</p>
                                            <br><br><br>

                                            <a href="<?php echo base_url('IndianAbacus'); ?>">
                                                <button name="submit" type="submit" value="Submit" class="site-button"><span>Video</span>
                                                </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-b10" style="height:806px;">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media rdx-img-effect zoom-slow"><a href="#"><img src="<?php echo base_url(); ?>/assets/img/expertron.png" alt=""></a>
                                    </div>
                                    <div class="ow-entry-content2 p-a15">
                                        <div class="ow-entry-title">
                                            <h4 class="m-tb0"><a href="#">Expertron</a>
                                            </h4>
                                        </div>
                                        <div class="ow-entry-text">
                                            <br>
                                            <p>Expertrons is the world's first AI video bot-assisted platform for aspiring candidates to prepare for interviews and get jobs through referrals in top organizations. An ideal application for you to get correct professional guidance that will help you reach your career goals. Get ready for interviews with an understanding of the top organization interview process. A simple method to connect with experts from your aspired fields and find answers to your questions.</p>
                                            <br><br><br><a href="Broucher.pdf"><button name="submit" type="submit" value="Submit" class="site-button " data-toggle="modal" data-target="#overseas"> <span>Broucher</span> </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-b10" style="height:806px;">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media rdx-img-effect zoom-slow"> <a href="http://careertest.sariputtaedutech.co.in/" target="_blank"><img src="<?php echo base_url(); ?>/assets/img/careers.jpg" alt="" style="height: 241px"></a> </div>
                                    <div class="ow-entry-content p-a15">
                                        <div class="ow-entry-title">
                                            <h4 class="m-tb0"><a href="https://careertest.sariputtaedutech.co.in/" target="_blank">Career Counseling</a></h4>
                                        </div>
                                        <div class="ow-entry-text">
                                            <div class="col">

                                                <p>SARIPUTTA CAREER COUNSELING. TOOL THAT HELPS YOU UNDERSTAND YOURSELF BETTER.</p>
                                                <p>THE REPORT INCLUDES FOLLOWING POINTS</p>
                                                <p>
                                                <ul>
                                                    <li>
                                                        1)STREAM CHART- INTEREST VS SKILL</li>

                                                    <li>2)CAREER CHART- INTEREST VS SKILL </li>
                                                    <li>3) HOLISTIC SCORE-PRESENTS STUDENTS HOLISTIC

                                                        QUOTIENT a)IQ b)PQ c)SQ</li>

                                                    <li>4)SKILL MAP- COMPARISON OF THE SKILL AREAS WITH

                                                        PEERS AT SAME LEVEL.</li>

                                                    <li>5)AREA WISE ANALYSIS-8 SKILL AREAS WHICH DEPICTS OVERALL SPECTRUM OF STUDENTS PERFORMANCE</li>

                                                    <li>6)PERSONA- STUDENTS OVERALL PERSONA ACROSS 10 UNIQUE PERSONALITY DIMENSIONS </li>

                                                    <!--<li>7)SKILL GAP- DETAILES SKILL WISE DESCRIPTION WILL BE GIVEN</li>-->

                                                    <!--<li>8)LEARNING RECOMMENDATIONS- STRENGHTS RECOMMENDATIONS AND IMPROVEMENT RECOMMENDATIONS.</li>-->

                                                    <!--<li>9)CAREER RECOMMENDATIONS- BASED ON SKILL AND INTEREST SHOWS-->

                                                    <!--TOP CAREER RANK</li>-->

                                                    <!--<li>10)CAREER CUSTOMIZATION- (FOR INTERNATIONAL CAREER OPORTUNITIES-->

                                                    <!--SELECT YOUR RECOMMENDED CAREER, SELECT COUNTRY OF CHOICE). WE WILL PROVIDE YOU BEST UNIVERSITIES IN THAT COUNTRY ALONG WITH WORLD WIDE UNIVERSITIES RECOMMENDED.</li>-->
                                                </ul>
                                                </p>
                                            </div>
                                            <a href="https://careertest.sariputtaedutech.co.in/"><button name="submit" type="submit" value="Submit" class="site-button " data-toggle="modal" data-target="#overseas" target="_blank"> <span>Careertest</span> </button></a>
                                            <a href="sample_report.pdf"><button name="submit" type="submit" value="Submit" class="site-button " data-toggle="modal" data-target="#overseas"> <span>Sample Report</span> </button></a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-b10">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media rdx-img-effect zoom-slow"> <a href="#" target="_blank"><img src="<?php echo base_url(); ?>/assets/img/brain.jpg" alt="" style="height: 241px"></a> </div>
                                    <div class="ow-entry-content p-a15">
                                        <div class="ow-entry-title">
                                            <h4 class="m-tb0"><a href="#" target="_blank">DMIT test</a></h4>
                                        </div>
                                        <div class="ow-entry-text">

                                            <p>Dermatoglyphics is the study of ridged skin patterns (also known as dermatoglyphs) which can be found on fingers, palms, toes and soles. These patterns are formed from the external ectoderm and usually occur during the fetal development stage, 13 to 19 weeks after fertilization. Through research geneticists have proven that dermatoglyph formations are controlled by chromosomes, and the patterns are influenced by polygenetic inheritance These genes do not exhibit dominance, and they are very resistant to acquired changes from the environment.</p>

                                            <p>Since 1823, scientists have discovered that fingerprints and innate intelligences are related. Through medical researches, it is found that fingerprints are formed during the 13th to 19 prenatal week. The neocortex is developed during the same period as well. This principle has been verified by many researchers and has been published in various literatures as well. According to prime genetics research sector in China, fingerprints are formed during the 13th to 19th prenatal week. Fingerprints are invariable throughout the lifetime, unless some form of disturbances are introduced during the development stage that alter genetic composition.</p>

                                            <p>From then onwards, scientists integrated genetics, embryology, dermatoglyphics and neural science with the theory of multiple intelligences. With that, a person's personality and talents can be analysed and classified accordingly. According to Sunday Times, several scientist from Barcelona University studied fingerprints of hundred of students and concluded that fingerprints reflect intelligence. Intellectually disabled people usually have fingerprints that substantially different than that of a normal person.</p>
                                            <a href="sampledmit.pdf"><button name="submit" type="submit" value="Submit" class="site-button " data-toggle="modal" data-target="#overseas"> <span>Sample Report</span> </button></a>
                                            <a href="https://play.google.com/store/apps/details?id=com.cfmid.uniq"><button name="submit" type="submit" value="Submit" class="site-button " data-toggle="modal" data-target="" target="_blank"> <span>For test</span> </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-b10">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media rdx-img-effect zoom-slow"> <a href="#" target="_blank"><img src="<?php echo base_url(); ?>/assets/img/brain.jpg" alt="" style="height: 241px"></a> </div>
                                    <div class="ow-entry-content p-a15">
                                        <div class="ow-entry-title">
                                            <h4 class="m-tb0"><a href="#" target="_blank">Qualifying Tests for Studying Abroad</a></h4>
                                        </div>
                                        <div class="ow-entry-text">
                                            <div class="container">
                                                <p>We offer coaching in:</p>
                                                <ul>
                                                    <li>IELTS, TOEFL, PET, Duolingo</li>
                                                    <li>GMAT</li>
                                                    <li>LSAT</li>
                                                    <li>MCAT</li>
                                                    <li>GRE</li>
                                                    <li>SAT</li>
                                                    <li>ACT</li>
                                                </ul>
                                                <p>International coach for English Training and <br>
                                                    Expert trainin for all other Exam</p>
                                            </div>
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

    <div class="modal" id="trainingmain">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h1 class="modal-title">Banking and Finance</h1>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <dl class="row">
                            <dt><a href="<?php echo base_url('pgp'); ?>" target=_blank>1.Post Graduate Program(PGP)</a></dt>
                            <dt><a href="<?php echo base_url('pgdm'); ?>" target=_blank>2.Post Graduate Diploma in Management(PGDM)</a></dt>
                            <dt><a href="<?php echo base_url('probe'); ?>" target=_blank>3.PROBE+</a></dt>
                            <dt><a href="<?php echo base_url('cfp'); ?>" target=_blank>4.Certified Financial Planner</a></dt>

                        </dl>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal" id="training">
        <div class="modal-dialog">
            <div class="modal-content">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf3R1JRiN4YfVMquOMJEXIWppxImVxjcWWP5tbWLYChSFwn1Q/viewform?embedded=true" width="600" height="808" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>

    <div class="modal" id="placement">
        <div class="modal-dialog">
            <div class="modal-content">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScchKHvQG3Otmj929JkF-2r4fVB7Ysd1Ekv9cEEhsvfGy-POQ/viewform?embedded=true" width="600" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>

    <div class="modal" id="higher">
        <div class="modal-dialog">
            <div class="modal-content">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe21ZyqJpZVpEWNPrjXHFlQOQWL2OIyN7g6rReZGXEOeA8z_g/viewform?embedded=true" width="600" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>

    <div class="modal" id="stepapp">
        <div class="modal-dialog">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe0uUmdqeinHRuGTx4rMggLaRkTP2mQzwOBbq_dm-IAW-r4tg/viewform?embedded=true" width="600" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>



        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

    </div>

    <div class="modal" id="paramedical">
        <div class="modal-dialog">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfZKx6gjVjIEY-iq3X4L4TJDMHA9AWlWqeNjMZvDxyTshBP9g/viewform?embedded=true" width="600" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>



        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

    </div>


    <div class="modal" id="gurcharanam">
        <div class="modal-dialog">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdQZ3H4Uz0G6870vmTnlYI7G8Ja7Q0JJ84hhUTNyi-ncyBS1A/viewform?embedded=true" width="600" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>



        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

    </div>


    <div class="modal" id="international">
        <div class="modal-dialog">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd9cyGJ926NLoXEsmGvkqq87kx-KUy0O-OATxrayt_mI3Y8-w/viewform?embedded=true" width="600" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>



        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

    </div>


    <div class="modal" id="india">
        <div class="modal-dialog">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc6qEPD2aNqEZURkQUi3eYJWo7Gqys8_vQoCfDUTM94HmLQnQ/viewform?embedded=true" width="600" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>



        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

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
                        <span class="form-field"><input type="text" name="name" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Name"></span>
                    </div>
                </div>
                <div class="row item">
                    <div class="col-md-12">
                        <label for="email">Email</label>
                        <span class="form-field"><input type="email" name="email" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Email"></span>
                    </div>
                </div>
                <div class="row item">
                    <div class="col-md-12">
                        <label for="number">Phone Number</label>
                        <span class="form-field"><input type="text" name="phone" value="" size="40" maxlength="10" class="form-control" aria-required="true" aria-invalid="false" placeholder="Number"></span>
                    </div>
                </div>
                <div class="row item">
                    <div class="col-md-12">
                        <label for="message">Message</label>
                        <span class="form-field"><textarea name="message" cols="40" rows="3" class="form-control" aria-required="true" aria-invalid="false" placeholder="Your Queries"></textarea></span>
                    </div>
                </div>
                <div class="row sube">
                    <div class="col-xs-12 col-md-12 col-sm-12">
                        <input type="button" value="Submit" class="site-button" onclick="saveEnqueryUs(this);" data-dismiss="modal">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="<?php echo base_url(); ?>/assets/js/services.js?v=1.0.2"></script>
</body>

</html>