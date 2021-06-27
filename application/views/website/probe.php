<!DOCTYPE html>
<html>
<?php

$user_data = array(
    'title' => 'Probe',
    'pageType' => 'Probe'
);
$this->load->view(WEBSITE . INCLUDE_FILE . 'header', $user_data);
?>
<style type="text/css">
    .icon{
        text-align: center;
    }
</style>
<body id="bg">
<div class="page-wraper">
    <div id="loading-area"></div>
    <?php
    $this->load->view(WEBSITE . INCLUDE_FILE . 'menu');
    ?>
    <div class="page-content">
        <!-- inner page banner -->
        <div class="container">
        
        <div class="col-sm-8">
            <img src="https://bankedge.in/wp-content/uploads/2020/03/probe-banner-1-1536x666.jpg">

        </div>
        <div class="col-sm-4">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSccRcgLY5DebdBS5ZOW-kS4pfNvuAtMsfbyxUzPx6xT0mtCGA/viewform?embedded=true" width="400" height="280" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            
        </div>
        </div>
     
        <div class="container">
            <div class="col-sm-4" style="border-style: solid; border-radius: 20px">
                <span class="text-center">
                <h2>Duration</h2>
                <h2>150 Hours / 75 Hours</h2>
                </span>
            </div>
            <div class="col-sm-4" style="border-style: solid;border-radius: 20px">
                <span class="text-center">
                    <h2>Delivery</h2>
                    <h2>Classroom / Online</h2>
                </span>

            </div>
            <div class="col-sm-4" style="border-style: solid;border-radius: 20px">
                <span class="text-center">
                    <h2>Assessment</h2>
                    <h2>3 Hour Exam</h2>
                </span>
            </div>
        </div>
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
