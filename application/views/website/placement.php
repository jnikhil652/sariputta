<!DOCTYPE html>
<html>
<?php
$user_data = array(
  'title' => 'Placement',
  'pageType' => 'Placement'
);
$this->load->view(WEBSITE . INCLUDE_FILE . 'header', $user_data);
$data;
$variable = array(
  'title' => 'For Sales in Banking and Finance',
  'position' => 'fresher',
  'ctc' => 'Up to 3 Lac',
  'location' => 'Pune',
  'job type' => 'Sales, Open Market, Field sales'
);
?>

<body id="bg">
  <div class="page-wraper">
    <div id="loading-area"></div>
    <?php
    $this->load->view(WEBSITE . INCLUDE_FILE . 'menu');
    ?>
    <div class="page-content">
      <div class="container">
        <div class="col-md-3">
          <?php foreach ($variable as $key => $value) { ?>
            <div class="card">
              <div class="card-header">

              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <?php $this->load->view(WEBSITE . INCLUDE_FILE . 'footer'); ?>
  </div>
  <script src="<?php echo base_url(); ?>/assets/js/home.js?v=1.0.0"></script>
</body>

</html>