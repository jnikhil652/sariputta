<!DOCTYPE html>
<html>
<?php
$user_data = array(
    'title' => 'Romania Candidates form',
    'pageType' => 'Romania Requirement'
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
            <!-- <div class="rdx-bnr-inr overlay-black-middle" style="background-image:url(<?php echo base_url(); ?>assets/img/contactus.jpg);">
                <div class="container">
                    <div class="rdx-bnr-inr-entry">
                        <h1 class="text-white">Contact Us</h1>
                        <div class="rdx-separator-outer">
                            <div class="rdx-separator bg-white style-liner"></div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- inner page banner END -->

            <!-- contact area -->
            <div class="content-area bg-white">
                <div class="container ">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form id="romaniaForm">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Full Name<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="roma_name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" name="roma_email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Phone<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="roma_phone" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Birth Date<span class="text-danger">*</span></label>
                                            <input type="date" name="roma_birth" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Highest Qualification<span class="text-danger">*</span></label>
                                            <input type="text" name="roma_qualification" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Experiance<span class="text-danger">*</span></label>
                                        <select class="form-control" name="roma_experience" id="exampleFormControlSelect2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Passport<span class="text-danger">*</span></label>
                                        <select class="form-control" name="roma_passport" id="exampleFormControlSelect2">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Bond<span class="text-danger">*</span></label>
                                        <select class="form-control" name="roma_bond" id="exampleFormControlSelect2">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>marital status<span class="text-danger">*</span></label>
                                        <select class="form-control" name="roma_marital" id="exampleFormControlSelect2">
                                            <option value="1">Married</option>
                                            <option value="0">Unmarried</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Job profile<span class="text-danger">*</span></label>
                                        <select class="form-control" name="roma_profile" id="exampleFormControlSelect2">
                                            <option value="1">profile</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <a class="btn btn-danger pt-5" href="javascript:void(0);" id="romaSubmit" style="margin-top: 22px;">Submit</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $this->load->view(WEBSITE . INCLUDE_FILE . 'footer');
        ?>
        <script src="<?= base_url() ?>/assets/js/form.js?v=1.0.0"></script>
</body>

</html>