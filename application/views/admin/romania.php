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
            <h1>Hii</h1>
        </div>
        <?php $this->load->view(ADMIN . INCLUDE_FILE . 'footer'); ?>
    </div>

    <!-- Argon Scripts -->
    <!-- Core -->
</body>

</html>