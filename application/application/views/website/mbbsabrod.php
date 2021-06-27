<!DOCTYPE html>
<html>
<?php

$user_data = array(
    'title' => 'Abroad',
    'pageType' => 'Abroad'
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
             style="background-image:url(<?php echo base_url(); ?>assets/img/mbbsabrod2.jpg);">
            <div class="container">
                <div class="rdx-bnr-inr-entry">
                    <h1 class="text-white">Education Consultant For Abroad</h1>
                    <div class="rdx-separator-outer">
                        <div class="rdx-separator bg-white style-liner"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->

        <!-- contact area -->
        <div class="content bg-white">
 		<div class="container">

 			<div class="col-sm-3">	
 			<button class="btn" data-toggle="modal" data-target="#myModal">
 				<img src="assets/img/country/russia.png">
 			<div class="carousel-caption">
              <h4 class="text-white">Russia</h4>
            </div>
			</button>
 			</div>
 			<div class="col-sm-3">
 			<button class="btn" data-toggle="modal" data-target="#myModal2">
 				<img src="assets/img/country/kyrgyzstan.jpg">
 			<div class="carousel-caption">
              <h4 class="text-white">Kyrgystan</h4>
            </div>
			</button>
 			</div>
 			<div class="col-sm-3">
 			<button class="btn" data-toggle="modal" data-target="#myModal3">
 				<img src="assets/img/country/kazakhstan.jpg">
 			<div class="carousel-caption">
              <h4 class="text-white">Kazakhstan</h4>
            </div>
			</button>
 			</div>
 			<div class="col-sm-3">
 			<button class="btn" data-toggle="modal" data-target="#myModal4">
 				<img src="assets/img/country/ukraine.jpg">
 			<div class="carousel-caption">
              <h4 class="text-white">Ukraine</h4>
            </div>
 			</button>
 			</div>

    </div>
    <div class="container">
 			<div class="col-sm-3">
 			<button class="btn" data-toggle="modal" data-target="#myModal5">
 				<img src="assets/img/country/china.jpg">
 			<div class="carousel-caption">
              <h4 class="text-white">China</h4>
            </div>
 			</button>
 			</div>
 			<div class="col-sm-3">
 			<button class="btn" data-toggle="modal" data-target="#myModal6">
 				<img src="assets/img/country/georgia.png">
 			<div class="carousel-caption">
              <h4 class="text-white">Georgia</h4>
            </div>
 			</button>
 			</div>
 			<div class="col-sm-3">
 			<button class="btn" data-toggle="modal" data-target="#myModal7">
 				<img src="assets/img/country/armenia.jpg">
 			<div class="carousel-caption">
              <h4 class="text-white">Armenia</h4>
            </div>
 			</button>
 			</div>
 			<div class="col-sm-3">
 			<button class="btn" data-toggle="modal" data-target="#myModal8">
 				<img src="assets/img/country/philippine.jpg">
 			<div class="carousel-caption">
              <h4 class="text-white">Philippines</h4>
            </div>
 			</button>
 			</div>
 		</div>
	</div>

	<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Russia</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
           <dl class="row">
            <dt>1.Bashkir State Medical University</dt>
            <dt>2.Kazan Federal University</dt>
            <dt>3.Ural State Medical University</dt>
            <dt>4.Kuban State Medical University</dt>
            <dt>5.Crimean Federal University</dt>
            <dt>6.Stavropol State Medical University</dt>          
             
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

  <div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Kyrgystan</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
          <dl>
            <dt>1.Asian Medical University (6 Yrs)</dt>
            <dt>2.Asian Medical University (5 Yrs)</dt>
            <dt>3.OSH State Medical University</dt>
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

  <div class="modal" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Kazakhstan</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <dl>
              <dt>1.Al-Farabi Kazakh National Medical University</dt>
              <dt>2.Kazak Russian Medical University</dt>
              <dt>3.Kokshetau State University</dt>
              <dt>4.Asfendiyarov Kazakh National Medical University</dt>
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


  <div class="modal" id="myModal4">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Ukraine</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <dl>
              <dt>1.Zaporozhye State Medical University</dt>
              <dt>2.Bogomolets National Medical University</dt>
              <dt>3.Petro Mohyla Black Sea National University</dt>
              <dt>4.Dnipropetrovsk State Medical University</dt>
              <dt>5.Vinnitsa National Medical University</dt>
              <dt>6.Ternopil State Medical University</dt>
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

  <div class="modal" id="myModal5">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">China</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <dl>
              <dt>1.China Medical University</dt>
              <dt>2.Guangzhou Medical University</dt>
              <dt>3.Xuzhou Medical University</dt>
              <dt>4.Soochow University</dt>
              <dt>5.Nanjing Medical University</dt>
              <dt>6.Qingdao Medical University</dt>
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

  <div class="modal" id="myModal6">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Georgia</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <dl>
              <dt>1.Caucasus International University</dt>
              <dt>2.East European University</dt>
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

  <div class="modal" id="myModal7">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Armenia</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <dl>
              <dt>1.Yerevan Haybusak University</dt>
              <dt>2.St. Tereza Medical University</dt>
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
  <div class="modal" id="myModal8">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Philippines</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <dl>
              <dt>1.University of Perpetual</dt>
              <dt>2.Lyceum Northwestern University</dt>
              <dt>3.Ama School Of Medicine</dt>
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
