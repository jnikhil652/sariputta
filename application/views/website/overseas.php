<!DOCTYPE html>
<html>
<?php
$user_data = array(
    'title' => 'Overseas',
    'pageType' => 'Overseas'
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
      <div class="bg-white">
      <div class="container">
        <div class="table table-bordered">
          
           
            <div class="col-sm-3" style="width: 293px; height: 155px"><a href="<?php echo base_url('usa'); ?>">
              <img src="assets/img/country/UnitedStates.png">
            USA</a></div>
            <div class="col-sm-3" style="width: 293px; height: 155px"><a href="<?php echo base_url('uk'); ?>">
              <img src="assets/img/country/UnitedKingdom.png">
            UK</a></div>
            <div class="col-sm-3" style="width: 293px; height: 155px"><a href="<?php echo base_url('canada'); ?>">
              <img src="assets/img/country/Canada.png">
            Canada</a></div>
            <div class="col-sm-3" style="width: 293px; height: 155px"><a href="<?php echo base_url('australia'); ?>">
              <img src="assets/img/country/Australia.png">
            Australia</a></div>
            <div class="col-sm-3" style="width: 293px; height: 195px"><a href="<?php echo base_url('germany'); ?>">
            <img src="assets/img/country/Germany.png">
            Germany</a></div>
            
            <div class="col-sm-3" style="width: 293px; height: 195px"><img src="assets/img/country/newzealand.png">New Zealand</div>
            
            <div class="col-sm-3" style="width: 293px; height: 195px"><img src="assets/img/country/ireland.png">Ireland</div>
            
            <div class="col-sm-3" style="width: 293px; height: 195px"><img src="assets/img/country/france.png">France</div>
            <div class="col-sm-3" style="width: 293px; height: 195px"><img src="assets/img/country/sweden.png">Sweden</div>
            
            <div class="col-sm-3" style="width: 293px; height: 195px"><img src="assets/img/country/spain.png">Spain</div>
            <div class="col-sm-3" style="width: 293px; height: 195px"><img src="assets/img/country/netherlands.png">Netherlands</div>
            
            <div class="col-sm-3" style="width: 293px; height: 195px"><img src="assets/img/country/italy.png">Italy</div>
            <div class="col-sm-3" style="width: 293px; height: 195px"><img src="assets/img/country/dubai.png">Dubai</div>
            <div class="col-sm-3" style="width: 293px; height: 195px"><img src="assets/img/country/finland.png">Finland</div>
            <div class="col-sm-3" style="width: 293px; height: 195px"><img src="assets/img/country/hongkong.png">Hong Kong</div>
            <div class="col-sm-3" style="width: 293px; height: 195px"><img src="assets/img/country/japan.png">Japan</div>
            <div class="col-sm-3"><img src="assets/img/country/switzerland.png">Switzerland</div>
            <div class="col-sm-3"><img src="assets/img/country/malaysia.png">Malaysia</div>
            <div class="col-sm-3"><img src="assets/img/country/singapore.png">Singapore</div>
            

          
          
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
