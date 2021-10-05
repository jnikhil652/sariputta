    <footer class="site-footer">
        <div class="footer-top bg-primary text-white">
            <div class="container  p-t50">
                <div class="row">
                    <div class="col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_about">
                            <h4 class="m-b15 ">Enquiry Form</h4>
                            <div class="rdx-separator-outer">
                                <div class="rdx-separator bg-white style-liner"></div>
                            </div>
                            <div id="enquiryDetails" style="">
                                <!-- <form role="form">
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
                                                <input type="button" value="Submit" class="site-button" onclick="saveEnquiryUs(this);" data-dismiss="modal">
                                            </div>
                                        </div>
                                    </div>
                                </form> -->
                            </div>
                            <div>
                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfTbM6c2FMK4kICCIFf5bDYcktiXb36D67krf88B_fTur6QBg/viewform?embedded=true" width="580" height="450" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 ">Usefull Links</h4>
                            <div class="rdx-separator-outer">
                                <div class="rdx-separator bg-white style-liner"></div>
                            </div>
                            <ul class="widget_getintuch">
                                <li><i class="fas fa-cog"></i> <a href="<?php echo base_url('/'); ?>">Home</a> </li>
                                <li><i class="fas fa-cog"></i> <a href="<?php echo base_url('our-services'); ?>">Our Services</a> </li>
                                <li><i class="fas fa-cog"></i> <a href="<?php echo base_url('our-collaborations'); ?>">Our Collaboration</a> </li>
                                <li><i class="fas fa-cog"></i> <a href="<?php echo base_url('contact-us'); ?>">Contact Us</a> </li>
                                <li><i class="fas fa-cog"></i> <a href="<?php echo base_url('terms'); ?>">Terms and Conditions</a> </li>
                                <li><i class="fas fa-cog"></i> <a href="<?php echo base_url('privacy'); ?>">Privacy Policy</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget ">
                            <h4 class="m-b15">Contact us</h4>
                            <div class="rdx-separator-outer">
                                <div class="rdx-separator bg-white style-liner"></div>
                            </div>
                            <ul class="widget_getintuch">
                                <li><i class="fas fa-map-marker"></i><strong class="text-white">address</strong>53, Mahesh Nagar near Dr.D.Y.Patil Medical College, Pimpri, Pune 411018, India </li>
                                <li><a href="tel:+917058870522"><i class="fas fa-phone"></i><strong class="text-white">phone</strong>+91 70588 70522</a></li>
                                <li><a href="mailto:enquiry@sariputtaedutech.co.in"><i class="fas fa-envelope"></i><strong class="text-white">email</strong>enquiry@sariputtaedutech.co.in</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-info-box clearfix p-tb30 p-lr15">
                    <div class="col-md-12 col-sm-6">
                        <div class="text-right" id="contact">
                            <p class="text-right m-t10 m-b0">Copyright © Sariputta Edutech LLP <?= date('Y') ?></p>
                            <p class="text-right m-t10 m-b0">Developed by <a>Nikhil Jadhav</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <script>
        var baseUrl = "<?php echo base_url(); ?>";
    </script>
    <!-- JavaScript  files ========================================= -->
    <script src="<?php echo base_url(); ?>/assets/js/vendor/jquery.min.js"></script>
    <!-- jquery.min js -->
    <script src="<?php echo base_url(); ?>/assets/js/vendor/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>/assets/js/vendor/bootbox.min.js"></script>
    <!-- bootstrap.min js -->
    <script src="<?php echo base_url(); ?>/assets/js/vendor/bootstrap-select.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/contact.js?v=1.0.0"></script>
    <script src="<?php echo base_url(); ?>assets/js/NikBootbox.js?v=1.0.0"></script>
    <!-- Google Analytics -->
    <script>
        window.ga = window.ga || function() {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        ga('create', 'UA-173538587-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- End Google Analytics -->