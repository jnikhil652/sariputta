<!DOCTYPE html>
<html>
<?php

$user_data = array(
    'title' => 'PGDM',
    'pageType' => 'PGDM'
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
        <div class="container">
        <!-- inner page banner -->
        
        
        <div class="col-sm-8">
            <img src="https://bankedge.in/wp-content/uploads/2020/10/aima-banner-3.jpg">

        </div>
        <div class="col-sm-4">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSccRcgLY5DebdBS5ZOW-kS4pfNvuAtMsfbyxUzPx6xT0mtCGA/viewform?embedded=true" width="400" height="330" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            
        </div>
    
       <div class="container">
        <div class="col-sm-3 mr-5" style="border-style: solid; height: 220px; width:250px;border-radius:20px;">
            <span class="text-center text-primary">
            <div class="icon"><i class="fas fa-clock" style="font-size:72px;"></i></div>
            <h5>Duration</h5>
            <h2>2 Years</h2>
            </span>
        </div>
        
        
        <div class="col-sm-3 mr-5" style="border-style: solid; height: 220px;width:250px;border-radius:20px;">
            <span class="text-center text-primary">
            <div class="icon"><i class="fas fa-book-open" style="font-size:72px;"></i></div>
            <h5>Content Provider</h5>
            <h2>AIMA & BANKEDGE</h2>
            </span>
        </div>
        
        
        <div class="col-sm-3 mr-5" style="border-style: solid; height: 220px;width:250px;border-radius:20px;">
            <span class="text-center text-primary">
            <div class="icon"><i class="fas fa-user" style="font-size:72px;"></i></div>
            <h5>Mode of Delivery</h5>
            <h2>Blended</h2>
            </span>
        </div>
        
        
        <div class="col-sm-3 mr-5" style="border-style: solid; height: 220px; width:250px;border-radius:20px;">
            <span class="text-center text-primary">
            <div class="icon"><i class="fas fa-chart-area" style="font-size:72px;"></i></div>
            <h5>Level</h5>
            <h2>Advanced</h2>
            </span>
        </div>
        </div>
        <div class="container">
            
            
            <p>PGDM is the most sought programme of Bankedge-AIMA Centre for Management Education off. Bankedge-AIMA PGDM is designed with the objective of nurturing the competencies of working professional and fresh graduates aspiring to work. The curriculum is aligned to cover all the management specializations in the most-flexi learning and interactive way as per the industry needs.</p>
            <h3>Regulatory Status of the Programme</h3>
           
                The PGDM programme is approved by All India Council for Technical Education (AICTE), Ministry of Education, and Government of India ODL Mode.
            
            <h3>Programme Features</h3>
            
                <ul>
                    <li>This programme allows students to balance the work life challenges and professional management commitments.</li>
                </ul>
                <ul>

                    <li>Bankedge-AIMA PGDM is a designed management programme meeting the need of flexibility and convenience through virtual classes, online library and high tech support along with conventional face to face teacher and student interaction.</li>
                </ul>
                <ul>
                    <li>Provides participants with the opportunity to experience the latest management trends through interaction with industry leaders and academia at various Bankedge-AIMA conventions, business summits and forums.</li>
                </ul>
            
            <h3>Program Delivery</h3>
            Student can opt either of the below mentioned option to pursue PGDM Program from Bankedge AIMA:
            <ul>
                <li>Option A : 15 hours of teaching (per subject) via Face to Face Class room teaching on weekends and Industry Interaction, Foundation Program etc</li>
            </ul>
            <ul>
                <li>Option B : 15 hours of e-learning content (per subject) on weekends which includes sessions by subject experts, Industry Interaction, Foundation Program etc.
                </li>
            </ul>
            
            <h3>Evaluation</h3>
            On the basis of two assignments per subject and term-end examination. Term end Examination is Paper pen based and is conducted Pan India in month of June and December.
            <h3>Certification</h3>
            Upon successful completion on each module/semester, the modular certification will be awarded.
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
