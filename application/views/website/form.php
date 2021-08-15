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
            <div class="rdx-bnr-inr overlay-black-middle" style="background-image:url(<?php echo base_url(); ?>assets/img/contactus.jpg);">
                <div class="container">
                    <div class="rdx-bnr-inr-entry">
                        <h1 class="text-white">Contact Us</h1>
                        <div class="rdx-separator-outer">
                            <div class="rdx-separator bg-white style-liner"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->

            <!-- contact area -->
            <div class="content-area bg-white">
                <div class="container ">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Full Name<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Phone<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Birth Date<span class="text-danger">*</span></label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Highest Qualification<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Experiance<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleFormControlSelect2">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Passport<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleFormControlSelect2">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Bond<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleFormControlSelect2">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>marital status<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleFormControlSelect2">
                                            <option>Married</option>
                                            <option>Unmarried</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Job profile<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleFormControlSelect2">
                                            <option>Married</option>
                                            <option>Unmarried</option>
                                        </select>
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
</body>

</html>