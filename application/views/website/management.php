<!DOCTYPE html>
<html>
<?php
$user_data = array(
    'title' => 'Home',
    'pageType' => 'home'
);
$this->load->view(WEBSITE . INCLUDE_FILE . 'header', $user_data);
?>

<body id="bg">
    <div class="page-wraper">
        <?php
        $this->load->view(WEBSITE . INCLUDE_FILE . 'menu');
        ?>
        <div class="page-content">
            <div class="contaier">
                <div class="col-md-9">
                    <form action="">
                        <input type="text">
                    </form>
                </div>
            </div>
            <?php
            $this->load->view(WEBSITE . INCLUDE_FILE . 'footer');
            ?>
            <script src="<?php echo base_url(); ?>/assets/js/home.js?v=1.0.0"></script>
        </div>
    </div>
</body>

</html>