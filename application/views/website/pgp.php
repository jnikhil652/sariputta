<!DOCTYPE html>
<html>
<?php

$user_data = array(
    'title' => 'PGP',
    'pageType' => 'PGP'
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
        <div class="container">
        <div class="col-sm-8">
            <img src="https://bankedge.in/wp-content/uploads/2020/10/PGPBF_Banner_02_v05.png">

        </div>
        <div class="col-sm-4">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSccRcgLY5DebdBS5ZOW-kS4pfNvuAtMsfbyxUzPx6xT0mtCGA/viewform?embedded=true" width="400" height="300" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            
        </div>
        <div class="container">
        <div class="col-sm-3 mr-5" style="border-style: solid; height: 220px; width:250px;border-radius:20px">
            <span class="text-center text-primary">
            <div class="icon"><i class="fas fa-clock" style="font-size:72px;"></i></div>
            <h5>Duration</h5>
            <h2>450 Hours</h2>
            
            </span>
        </div>
        
        
        <div class="col-sm-3 mr-5" style="border-style: solid; height: 220px;width:250px;border-radius:20px">
            <span class="text-center text-primary">
            <div class="icon"><i class="fas fa-book-open" style="font-size:72px;"></i></div>
            <h5>Content Provider</h5>
            <h2>JAIN (Deemed-to-be University)</h2>
            
            </span>
        </div>
        
        
        <div class="col-sm-3 mr-5" style="border-style: solid; height: 220px;width:250px;border-radius:20px">
            <span class="text-center text-primary">
            <div class="icon"><i class="fas fa-user" style="font-size:72px;"></i></div>
            <h5>Mode of Delivery</h5>
            <h2>Blended</h2>
            </span>
        </div>
        
        
        <div class="col-sm-3 mr-5" style="border-style: solid; height: 220px; width:250px;border-radius:20px">
            <span class="text-center text-primary">
            <div class="icon"><i class="fas fa-chart-area" style="font-size:72px;"></i></div>
            <h5>Level</h5>
            <h2>Advanced</h2>
            </span>
        </div>
        </div>
    
        
        
        <div class="container">
            
            <div class="col-sm-7">
            <h5><p>Post Graduate Program in Banking and Financial Management is a one-year program focused on skills and practices needed in current financial market. This course will provide additional skills specialized to a particular business model, making candidates more competitive in the field, leading to a better likelihood of success for departments they are connected with.</p>

            <p>Post Graduate Programs are taught by the best in the Industry and covers latest tools and techniques along with their business applications. Our Corporate and Skilling Partners are deeply involved in Curriculum development, facilitating projects and Industry Lectures. The Programs also help the learner to interact with peers, who are working professionals from different Industries.</p>

            <p>On Successful Completion of the Course, JUx opens the doors for the learner to get access to the best jobs in the Industry and Academia.</p></h5>
        </div>
        <div class="col-sm-5">
            <img src="https://bankedge.in/wp-content/uploads/2020/02/landing-about.jpg">
            
        </div>
        <div class="container">
        <h4>Program Modules:</h4>
        <br>
        <ul><li>Retail Banking 2</li></ul>
        <ul><li>Retail Banking 2</li></ul>
        <ul><li>Wealth Management</li></ul>
        <ul><li>Credit Management</li></ul>
        <ul><li>Trade Finance</li></ul>
        <ul><li>Financial Risk Management</li></ul>
        <ul><li>Prsonality Development</li></ul>
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
