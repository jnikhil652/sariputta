<!DOCTYPE html>
<html>
<?php

$user_data = array(
    'title' => 'Stepapp',
    'pageType' => 'Stepapp'
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
        <div class="rdx-bnr-inr"
             style="background-image:url(<?php echo base_url(); ?>assets/img/stepappbanner.jpg);">
             <div class="container">
                <div class="rdx-bnr-inr-entry">
                    <h1 class="text-white">Products</h1>
                    <div class="rdx-separator-outer">
                        <div class="rdx-separator bg-white style-liner"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="container" style="border-bottom: 1px">
            <div class="col-sm-4">
                <h4>Now you can learn while you play,<br>
                    anywhere, anytime</h4>
            </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="p-2">
            <div class="container">
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#lite">Stepapp Lite Plan</button>
                <div id="lite" class="collapse">
                    
                        <div class="container" style="border-radius: 50px;">
                    <span class="text-center" >
                        <h3>STEPapp</h3>
                            <h5>Lite plan</h5>
                    
                    <dl>
                              <dt>Concepts</dt>
                          </dl>
                          <dl>
                              <dd>Adaptive personalised learning in a gamified format</dd>
                          </dl>
                         
                          
                            <h5>INR 5000</h5>
                            <h4><button class="btn" data-toggle="modal" data-target="#step">For Discount</button></h4>
                          </span>
                </div>
                </div>
                
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#comprehensive">Stepapp Comprehensive Plan</button>
                <div id="comprehensive" class="collapse">
                    
                        <div class="container" style="border-radius: 50px;">
                    <span class="text-center" >

                        <h3>STEPapp Tab</h3>
                        <h5>Comprehensive plan</h5>
                    
                    
                    <dl>
                        <dt>Concepts in the Tab M7 tab</dt>
                    </dl>
                    <dl>
                        <dd>Learn concepts in a gamified way on the game-changing Lenovo Tab 4</dd>
                    </dl>
                    <dl>
                        <dt>Snail Rush</dt>
                    </dl>
                    <dl>
                        <dd>Prepare for all major national and Olympiad in a gamified format</dd>
                    </dl>
                    <dl>
                        <dt>PACE IIT and Medical* Study Material</dt>
                    </dl>
                    <dl>
                        <dd>Crucial study material for IIT, NEET, and all the major competitive exams, available for ready reference</dd>
                    </dl>
                    
                    
                        <h5>INR 25000</h5>
                        <h4><button class="btn" data-toggle="modal" data-target="#step">For Discount</button></h4>
                        

                    </span>
                </div>
                </div>
               
                    
                    
                        
                       
                        
                        
                    </div>
                </div>
            </div>
        
                <div class="container">
                    <h1>What do you get?</h1>
                    
                </div>
                <div class="container">
                    <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Concepts</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
            <div class="container">
            <ul>
                <li>Adaptive, personalised learning in a gamified format</li>
            </ul>
            <ul>
                <li>Learning outcomes reported to parents and teachers</li>
            </ul>
            <ul>
                <li>Students are in control with self-paced learning</li>
            </ul>
            <ul>
                <li>Augments current pedagogy as a homework and revision app</li>
            </ul>
            <ul>
                <li>Gamification backed by years of extensive research</li>
            </ul>
        </div>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Snail Rush</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="container">
            <ul><li>Competitive study application for olympiad preparation</li></ul>
            <ul><li>Prepare for all major national and international olympiads for grades 1st-10th</li></ul>
            <ul><li>Gamified format for immersive preparation</li></ul>
            <ul><li>Developed by PACE IIT & Medical* faculties in association with leading authors</li></ul>
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">PACE Study Material
            <a href="Digital Pace.pdf" target="_blank"><button type="button" class="btn btn-danger">Broucher</button></a></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="container">
            <ul><li>Comprehensive study material from PACE IIT & Medical*, leading institute in preparation of competitive exams</li></ul>
            <ul><li>Previous years’ question papers</li></ul>
            <ul><li>Question banks for competitive exams like IIT and NEET</li></ul>
            <ul><li>Reference books for conceptual learning</li></ul>
            <ul><li>Developed by veteran educators</li></ul>
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Panacea Portal</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="container">
            <ul><li>Complete range of digital learning material</li></ul>
            <ul><li>Ebooks, videos, learning material in one place</li></ul>
            <ul><li>No more hunting for learning material on the internet</li></ul>
            <ul><li>Curated by top professors at PACE IIT & Medical*</li></ul>
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Tablet</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
            Model : ZA500083IN, Product : Lenovo TB-X605LC , Machine Type : ZA50, Processor : Qualcomm Snapdragon 450 (8C, 8x A53 @1.8GHz),Graphics : Integrated Qualcomm Adreno 506 GPU, Chipset : Qualcomm SoC Platform, Memory : 2GB Soldered, Display : 10.1" FHD (1920x1200) IPS 320nits, Touchscreen : 10-point Multi-touch, Expandable Memory : MicroSD card (Up to 256GB), Storage : 16GB eMMC, WLAN + Bluetooth : 11a/b/g/n/ac, 1x1 + BT4.2, WWAN : 4G LTE, Optional Ports : Micro USB, Card Slot : Single Nano-SIM & MicroSD Card Holder Tray, Camera : Front 5.0MP / Rear 8.0MP, Microphone : Mono , Battery : Integrated 7000mAh, Power Adapter : 5.2V / 2.0A, Operating System : Android 9.0
            
        </div>
      </div>
    </div>
  </div>
                </div>
            </div>
           
        </div>

    </div>
        <div class="modal" id="step">
            <div class="modal-dialog">
                <div class="modal-content">
      
        <!-- Modal Header -->
                
        
        <!-- Modal body -->
                
                  
                  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe0uUmdqeinHRuGTx4rMggLaRkTP2mQzwOBbq_dm-IAW-r4tg/viewform?embedded=true" width="600" height="808" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            
                  
          
                </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
