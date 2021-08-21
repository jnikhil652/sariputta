<!DOCTYPE html>
<html>
<?php
$page = array(
    'title' => 'Sariputta || Romania',
    'pagetype' => 'dashboard'
);
?>
<!-- Header -->
<?php $this->load->view(ADMIN . INCLUDE_FILE . 'header', $page); ?>

<body>
    <!-- Sidenav -->
    <?php $this->load->view(ADMIN . INCLUDE_FILE . 'sidebar', $page); ?>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <?php $this->load->view(ADMIN . INCLUDE_FILE . 'navbar'); ?>
        <div class="container">
            <div class="row mt-3">
                <div class="col-sm-12">
                    <a href="javascript:void(0)" class="btn btn-danger" id="romaAddPosition">Add Position</a>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
        <?php $this->load->view(ADMIN . INCLUDE_FILE . 'footer'); ?>
    </div>
    <script src="<?= base_url() ?>/assets/js/admin/roma.js?v=1.0.0"></script>
    <!-- Argon Scripts -->
    <!-- Core -->
</body>

</html>