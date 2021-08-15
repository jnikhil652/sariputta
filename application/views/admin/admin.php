<!DOCTYPE html>
<html>
<?php
$page = array(
    'title' => 'Sariputta || Admin',
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
        <div class="container-fluid mt--6">

            hiiii
            <!-- Footer -->

        </div>
        <?php $this->load->view(ADMIN . INCLUDE_FILE . 'footer'); ?>
    </div>

    <!-- Argon Scripts -->
    <!-- Core -->
</body>

</html>