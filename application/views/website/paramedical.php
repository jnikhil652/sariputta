<!DOCTYPE html>
<html>
<?php

$user_data = array(
    'title' => 'Paramedical',
    'pageType' => 'Paramedical'
);
$this->load->view(WEBSITE . INCLUDE_FILE . 'header', $user_data);
?>
<style type="text/css">
	.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<body id="bg">
<div class="page-wraper">
    <div id="loading-area"></div>
    <?php
    $this->load->view(WEBSITE . INCLUDE_FILE . 'menu');
    ?>
    <div class="page-content">
        <!-- inner page banner -->
        <div class="rdx-bnr-inr overlay-black-middle"
             style="background-image:url(<?php echo base_url(); ?>assets/img/paramedical.jpg);">
            <div class="container">
                <div class="rdx-bnr-inr-entry">
                    <h1 class="text-white">Paramedical courses, Healthcare & Sanitation Services</h1>
                    <div class="rdx-separator-outer">
                        <div class="rdx-separator bg-white style-liner"></div>
                    </div>
                </div>
            </div>
        </div>
        <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
        <!-- inner page banner END -->

        <!-- contact area -->
        <div class="content bg-white">
 		<!-- Faq END -->
		 	<div class="container">
		 		<h2> Courses we offer</h2>
		 		<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

				<ul id="myUL">
					<h5>Courses Available</h5>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE001</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN MEDICAL LABORATORY TECHNOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
				  <li><a id="myImg" href="asset/img/paramedical/ahs001.png">
				  	<dl class="row">
						<dt class="col-sm-3">AHS001</dt>
						<dd class="col-sm-6">DIPLOMA IN PATIENT CARE</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
				  <li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS002</dt>
						<dd class="col-sm-6">PATIENT CARE</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

				  <li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS003</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN PHYSIOTHERAPY & ACTIVITY THERAPY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS004</dt>
						<dd class="col-sm-6">PHYSIOTHERAPY & ACTIVITY THERAPY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS005</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN PATIENT CARE ASSISTANT</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS006</dt>
						<dd class="col-sm-6">PATIENT CARE ASSISTANT</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS007</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN FIRST AID AND PATIENT CARE</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS008</dt>
						<dd class="col-sm-6">FIRST AID AND PATIENT CARE</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS009</dt>
						<dd class="col-sm-6">HOSPITAL DOCUMENTATION AND RECORD KEEPING</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS010</dt>
						<dd class="col-sm-6">PHARMACY ASSISTANT</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS011</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN HEALTH INSPECTOR</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS012</dt>
						<dd class="col-sm-6">VILLAGE HEALTH WORKER</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS013</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN SANITARY HEALTH INSPECTOR</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS014</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN HOSPITAL MANAGEMENT</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS015</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN HOSPITAL DOCUMENTATION & RECORDS MANAGEMENT</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS016</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN MULTI PURPOSE HEALTH WORKER</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS017</dt>
						<dd class="col-sm-6">CERTIFICATE IN AWARENESS OF HIV & AIDS</dd>
						<dd class="col-sm-3">6 Months</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS018</dt>
						<dd class="col-sm-6">CERTIFICATE IN BLOOD BANK ASSISTANT</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS019</dt>
						<dd class="col-sm-6">CERTIFICATE IN HOSPITAL HOUSE KEEPING</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS020</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN HOSPITAL WASTE MANAGEMENT</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS021</dt>
						<dd class="col-sm-6">CERTIFICATE IN OLD AGE CARE</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS022</dt>
						<dd class="col-sm-6">CERTIFICATE IN FEMALE PATIENT CARE ASSISTANT</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS023</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN PATIENT CARE ADMINISTRATION</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS024</dt>
						<dd class="col-sm-6">CERTIFICATE IN PATIENT CARE & DEVELOPMENT</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS025</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN C.S.S.D TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS026</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN HEALTH CARE PROFESSIONAL TECHNICIAN</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS027</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN HEALTH CARE ASSISTANT</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS028</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN HOSPITAL DRESSING TECHNIQUES</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS029</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN C.S.S.D TECHNOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS030</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN HOSPITAL FRONT OFFICE MANAGEMENT</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS031</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN FEMALE PATIENT CARE</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS032</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN FEMALE PATIENT CARE ASSISTANT</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS033</dt>
						<dd class="col-sm-6">BSS ADVANCED DIPLOMA IN CELL THERAPY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS034</dt>
						<dd class="col-sm-6">BSS ADVANCED DIPLOMA IN PANCHGAVYA THERAPY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS035</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN PANCHGAVYA THERAPY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS036</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN SANITARY HEALTH INSPECTOR</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS037</dt>
						<dd class="col-sm-6">CERTIFICATE IN ANTI-MALARIA TRAINING</dd>
						<dd class="col-sm-3">3 Months</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS041</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN COMMUNITY HEALTH</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS042</dt>
						<dd class="col-sm-6">CERTIFICATE IN OPTICAL TECHNICIAN</dd>
						<dd class="col-sm-3">6 Months</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS044</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN FEG AND EMG TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS046</dt>
						<dd class="col-sm-6">CERTIFICATE COURSE IN DIET & NUTRITION</dd>
						<dd class="col-sm-3">6 Months</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS047</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN PATIENT CARE & DEVELOPMENT</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS048</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN FEMALE HEALTH WORKER</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS049</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN HOSPITAL ADMINISTRATION</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS050</dt>
						<dd class="col-sm-6">CERTIFICATION COURSE FOR HOSPITAL MANAGERS</dd>
						<dd class="col-sm-3">6 Months</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS051</dt>
						<dd class="col-sm-6">BSS POST DIPLOMA IN MEDICAL COSMETOLOGY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS052</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN HOSPITAL INFECTION CONTROL & PREVENTION</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS053</dt>
						<dd class="col-sm-6">CERTIFICATE IN HOSPITAL ASSISTANT & TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS054</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN HOSPITAL & HEALTH CARE MANAGEMENT</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS058</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN MULTIPURPOSE HEALTH WORKER</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS059</dt>
						<dd class="col-sm-6">CERTIFICATE IN HEALTH CARE ASSISTANT</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS060</dt>
						<dd class="col-sm-6">CERTIFICATE COURSE IN COMMUNITY HEALTH WORKER</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS061</dt>
						<dd class="col-sm-6">BSS ADVANCED DIPLOMA IN PATIENT CARE</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS062</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN GENERAL PATIENT CARE</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
				  	<dl class="row">
						<dt class="col-sm-3">AHS063</dt>
						<dd class="col-sm-6">CERTIFICATE IN APPLIED MICROBIOLOGY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHS064</dt>
						<dd class="col-sm-6">BSS CERTIFICATE IN NANNY CARE</dd>
						<dd class="col-sm-3">6 Month</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE001</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN MEDICAL LABORATORY TECHNOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE002</dt>
						<dd class="col-sm-6">MEDICAL LABORATORY TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE003</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN X-RAY TECHNOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE004</dt>
						<dd class="col-sm-6">X-RAY TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE005</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN OPERATION THEATRE TECHNOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE006</dt>
						<dd class="col-sm-6">OPERATION THEATRE TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE007</dt>
						<dd class="col-sm-6">LAB ASSISTANT</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE008</dt>
						<dd class="col-sm-6">E C G TECHNICIAN</dd>
						<dd class="col-sm-3">6 Months</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE009</dt>
						<dd class="col-sm-6">CT SCAN TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE010</dt>
						<dd class="col-sm-6">MRI SCAN TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE011</dt>
						<dd class="col-sm-6">EYE TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE012</dt>
						<dd class="col-sm-6">DENTAL TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE014</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN MEDICAL TRANSCRIPTION</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE016</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN OPTOMETRY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE017</dt>
						<dd class="col-sm-6">CERTIFICATE IN DIABETOLOGY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE019</dt>
						<dd class="col-sm-6">CERTIFICATE IN OPTHALMIC ASSISTANT</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE020</dt>
						<dd class="col-sm-6">ORTHO & TRAUMA CARE TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE021</dt>
						<dd class="col-sm-6">DENTAL LAB TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE024</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN TRAUMA CARE & CASUALTY TECHNOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE025</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN DIALYSIS TECHNOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE026</dt>
						<dd class="col-sm-6">MEDICAL EQUIPMENT TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE028</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN PALLIATIVE CARE THERAPIST</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE029</dt>
						<dd class="col-sm-6">CERTIFICATE IN DIALYSIS TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE030</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN ANESTHESIA TECHNOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE031</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN MEDICAL EQUIPMENT TECHNOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE032</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN ACCIDENT & EMERGENCY TECHNOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE033</dt>
						<dd class="col-sm-6">EMERGENCY PATIENT CARE TECHNICIAN</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE034</dt>
						<dd class="col-sm-6">BSS POST DIPLOMA IN PATIENT CARE MANAGEMENT</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE035</dt>
						<dd class="col-sm-6">PHYSIOTHERAPY TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE038</dt>
						<dd class="col-sm-6">POST DIPLOMA IN SANITARY HEALTH INSPECTOR</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE040</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN PHYSICIAN ASSISTANT</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE041</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN CRITICAL CARE MANAGEMENT</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE042</dt>
						<dd class="col-sm-6">ICU TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE043</dt>
						<dd class="col-sm-6">CERTIFICATE IN DIETICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE049</dt>
						<dd class="col-sm-6">DENTAL HYGIENIST</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE052</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN GENERAL HEALTHCARE & MATERNITY ASSISTANT</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE053</dt>
						<dd class="col-sm-6">AUDIO-METRY TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE055</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN LAPROSCOPY ASSISTANT</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE062</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN OPTOMETRY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE063</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN ANESTHESIA TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE064</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN OPTHALMIC ASSISTANCE</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE065</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN OPTHALMIC ASSISTANT</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE066</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN MEDICAL RECORD SCIENCES</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE070</dt>
						<dd class="col-sm-6">PHARMACY PROFESSION & COMMUNITY HEALTH</dd>
						<dd class="col-sm-3">6 Months</dd>
					</dl></a></li>

					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE071</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN CVTS TECHNOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE074</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN E C G TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE075</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN EEG & EMG TECHNOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE076</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN VISION CARE TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE077</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN ULTRA SONOGRAPHY TECHNICIAN</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE078</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN X RAY & IMAGING TECHNOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE082</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN DENTAL ASSISTANT</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE083</dt>
						<dd class="col-sm-6">CERTIFICATE IN EMERGENCY MEDICAL SERVICES</dd>
						<dd class="col-sm-3">6 Months</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE086</dt>
						<dd class="col-sm-6">ADVANCED DIPLOMA IN PHYSICIAN ASSISTANT</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE087</dt>
						<dd class="col-sm-6">ADVANCED DIPLOMA IN FORENSIC ODONTOLOGY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE088</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN RURAL MEDICAL CARE PROVIDER</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE089</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN OCCUPATIONAL HEALTH</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE090</dt>
						<dd class="col-sm-6">BSS ADVANCED DIPLOMA IN MEDICAL LABORATORY TECHNOLOGY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE091</dt>
						<dd class="col-sm-6">BSS ADVANCED DIPLOMA IN OPERATION THEATRE TECHNOLOGY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE092</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN SPECIAL EDUCATION (DEAF BLINDNESS)</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE093</dt>
						<dd class="col-sm-6">BSS ADVANCED DIPLOMA IN HEARING IMPAIRMENT</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE094</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN MENTAL RETRADATION</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE095</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN LEARNING DISABILITY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>

					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE096</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN EARLY CHILDHOOD SPECIAL EDUCATION</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE097</dt>
						<dd class="col-sm-6">BSS ADVANCED DIPLOMA IN LEARNING DISABILITY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE098</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN AUDIOLOGY AND SPEECH - LANGUAGE PATHOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE099</dt>
						<dd class="col-sm-6">BSS ADVANCED DIPLOMA IN AUDIOLOGY AND SPEECH-LANGUAGE PATHOLOGY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>

					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE0100</dt>
						<dd class="col-sm-6">BSS ADVANCED DIPLOMA IN REHABILITATION PSYCHOLOGY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE0101</dt>
						<dd class="col-sm-6">ADVANCED DIPLOMA IN MEDICAL PSYCHOLOGY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE0102</dt>
						<dd class="col-sm-6">BSS ADVANCED DIPLOMA IN CLINICAL LABORATORY TECHNOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE0103</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN PSYCHOLOGICAL GUIDANCE & COUNSELING</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE0106</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN BURNS MANAGEMENT AND SKIN BANKING</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE0107</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN AUTISM SPECTRUM DISORDER EDUCATION</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE0108</dt>
						<dd class="col-sm-6">BSS DIPLOMA IN REHABILITATION PSYCHOLOGY</dd>
						<dd class="col-sm-3">2 Years</dd>
					</dl></a></li>
					<li><a href="">
					<dl class="row">
						<dt class="col-sm-3">AHE0109</dt>
						<dd class="col-sm-6">BSS ADVANCED DIPLOMA IN COUNSELING PSYCHOLOGY</dd>
						<dd class="col-sm-3">1 Years</dd>
					</dl></a></li>


				  
				</ul>

				<script>
				function myFunction() {
				    var input, filter, ul, li, a, i, txtValue;
				    input = document.getElementById("myInput");
				    filter = input.value.toUpperCase();
				    ul = document.getElementById("myUL");
				    li = ul.getElementsByTagName("li");
				    for (i = 0; i < li.length; i++) {
				        a = li[i].getElementsByTagName("a")[0];
				        txtValue = a.textContent || a.innerText;
				        if (txtValue.toUpperCase().indexOf(filter) > -1) {
				            li[i].style.display = "";
				        } else {
				            li[i].style.display = "none";
				        }
				    }
				}
				</script>

				<button class="btn btn-danger" data-toggle="modal" data-target="#Enquiry">Enquiry
 				</button>
 				<div class="modal" id="Enquiry">
    				<div class="modal-dialog">
      					<div class="modal-content">
      					<table>
      						<thread>
      							<tr>
      								<td>sno</td>
      								<td>subject code</td>
      								<td>subject</td>
      							</tr>
      						</thread>
      						<tr>
      							<td>I Year</td>
      						</tr>
      						<tr>
      							<td>1</td>
      							<td>AHS001-01</td>
      							<td>COMMUNICATIVE ENGLISH AND COMPUTER FUNDAMENTALS</td>
      						</tr>
      						<tr>
      							<td></td>
      						</tr>
      					</table>
            			</div>
	        <div class="modal-footer">
          	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        	</div>
        
      		</div>
    		</div>
    		<div class="modal" id="Ahs001">
    				<div class="modal-dialog">
      					<div class="modal-content">
      					<img src="assets/img/paramedical/ahs001.png">
            			</div>
	        <div class="modal-footer">
          	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        	</div>
        
      		</div>
    		</div>
    		<div class="modal" id="Ahs002">
    				<div class="modal-dialog">
      					<div class="modal-content">
      					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfZKx6gjVjIEY-iq3X4L4TJDMHA9AWlWqeNjMZvDxyTshBP9g/viewform?embedded=true" width="600" height="705" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            			</div>
	        <div class="modal-footer">
          	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        	</div>
        
      		</div>
    		</div>
    		<div class="modal" id="Ahs003">
    				<div class="modal-dialog">
      					<div class="modal-content">
      					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfZKx6gjVjIEY-iq3X4L4TJDMHA9AWlWqeNjMZvDxyTshBP9g/viewform?embedded=true" width="600" height="705" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            			</div>
	        <div class="modal-footer">
          	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        	</div>
        
      		</div>
    		</div>
    		<div class="modal" id="Ahs004">
    				<div class="modal-dialog">
      					<div class="modal-content">
      					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfZKx6gjVjIEY-iq3X4L4TJDMHA9AWlWqeNjMZvDxyTshBP9g/viewform?embedded=true" width="600" height="705" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            			</div>
	        <div class="modal-footer">
          	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        	</div>
        
      		</div>
    		</div>
    		<div class="modal" id="Ahs002">
    				<div class="modal-dialog">
      					<div class="modal-content">
      					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfZKx6gjVjIEY-iq3X4L4TJDMHA9AWlWqeNjMZvDxyTshBP9g/viewform?embedded=true" width="600" height="705" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            			</div>
	        <div class="modal-footer">
          	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        	</div>
        
      		</div>
    		</div>
    		<div class="modal" id="Ahs005">
    				<div class="modal-dialog">
      					<div class="modal-content">
      					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfZKx6gjVjIEY-iq3X4L4TJDMHA9AWlWqeNjMZvDxyTshBP9g/viewform?embedded=true" width="600" height="705" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            			</div>
	        <div class="modal-footer">
          	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        	</div>
        
      		</div>
    		</div>
    		<div class="modal" id="Ahs006">
    				<div class="modal-dialog">
      					<div class="modal-content">
      					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfZKx6gjVjIEY-iq3X4L4TJDMHA9AWlWqeNjMZvDxyTshBP9g/viewform?embedded=true" width="600" height="705" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            			</div>
	        <div class="modal-footer">
          	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        	</div>
        
      		</div>
    		</div>
    		<div class="modal" id="Ahs007">
    				<div class="modal-dialog">
      					<div class="modal-content">
      					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfZKx6gjVjIEY-iq3X4L4TJDMHA9AWlWqeNjMZvDxyTshBP9g/viewform?embedded=true" width="600" height="705" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            			</div>
	        <div class="modal-footer">
          	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        	</div>
        
      		</div>
    		</div>
    		<div class="modal" id="Ahs008">
    				<div class="modal-dialog">
      					<div class="modal-content">
      					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfZKx6gjVjIEY-iq3X4L4TJDMHA9AWlWqeNjMZvDxyTshBP9g/viewform?embedded=true" width="600" height="705" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            			</div>
	        <div class="modal-footer">
          	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        	</div>
        
      		</div>
    		</div>
    		<div class="modal" id="Ahs009">
    				<div class="modal-dialog">
      					<div class="modal-content">
      					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfZKx6gjVjIEY-iq3X4L4TJDMHA9AWlWqeNjMZvDxyTshBP9g/viewform?embedded=true" width="600" height="705" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            			</div>
	        <div class="modal-footer">
          	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        	</div>
        
      		</div>
    		</div>
  </div>
 			</div>
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
