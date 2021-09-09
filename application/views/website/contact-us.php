<!DOCTYPE html>
<html>
<?php
$user_data = array(
    'title' => 'ContactUs',
    'pageType' => 'Contact-us'
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
            <div class="rdx-bnr-inr overlay-black-middle" style="background-image:url(<?php echo base_url(); ?>assets/img/contactus.jpg);">
                <div class="container">
                    <div class="rdx-bnr-inr-entry">
                        <h1 class="text-white">Contact Us</h1>
                        <div class="rdx-separator-outer">
                            <div class="rdx-separator bg-white style-liner"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->

            <!-- contact area -->
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <!-- Left part start -->
                        <div class="col-md-8">
                            <h4>Contact form</h4>
                            <div class="dzFormMsg"></div>
                            <div class="p-a30 bg-white clearfix m-b30">
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
                                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfTbM6c2FMK4kICCIFf5bDYcktiXb36D67krf88B_fTur6QBg/viewform?embedded=true" width="640" height="400" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                            </div>
                        </div>
                        <!-- Left part END -->
                        <!-- right part start -->
                        <div class="col-md-4">
                            <h4>Contact Info</h4>
                            <div class="p-a30 bg-white m-b30">
                                <ul class="no-margin">
                                    <li class="icon-bx-wraper left m-b40">
                                        <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-b0 rdx-tilte">Address</h6>
                                            <p>Flat no 1, Sukh Samrudhi Apt. Opp GKN Sintered Company, Kharalwadi,<br>
                                                Pimpri, Pune 411018, India</p>
                                        </div>
                                    </li>
                                    <li class="icon-bx-wraper left m-b40">
                                        <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-b0 rdx-tilte">EMAIl</h6>
                                            <a href="mailto:enquiry@sariputtaedutech.co.in">
                                                <p>enquiry@sariputtaedutech.co.in</p>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="icon-bx-wraper left m-b40">
                                        <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-b0 rdx-tilte">PHONE</h6>
                                            <a href="tel:+917058870522">
                                                <p>+91 70588 70522</p>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- right part END -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Map part start -->
                            <h4>Our Location</h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d945.1949784761774!2d73.8112391291528!3d18.62896637004967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9d30c90edd3%3A0x86055ed98e10ccc3!2sSariputta%20Edutech%20LLP!5e0!3m2!1sen!2sin!4v1607756203739!5m2!1sen!2sin" width="1150" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                            <!-- Map part END -->
                        </div>
                    </div>

                </div>
            </div>
            <!-- contact area  END -->
        </div>
        <?php
        $this->load->view(WEBSITE . INCLUDE_FILE . 'footer');
        ?>
</body>

</html>