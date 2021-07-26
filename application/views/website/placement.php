<!DOCTYPE html>
<html>
<?php
$user_data = array(
  'title' => 'Placement',
  'pageType' => 'Placement'
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
      <div class="container">
        <h2>Current Openings</h2>






        <div class="col-sm-4">
          <div class="container">
            <h4><b>For Sales in Banking and Finance</b></h4>
            <p>
            <h5><i class="fas fa-briefcase"></i>Fresher</h5>
            </p>
            <p>
            <h5><i class="fas fa-rupee-sign"></i>Up to 3 Lac </h5>
            </p>
            <p>
            <h5><i class="fas fa-door-open"></i>Location- Pune</p>
              <p>Job Type- Sales, Open Market, Field sales</p>
              <p>Products- CASA,</p>

              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#EnquiryPlacement">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScchKHvQG3Otmj929JkF-2r4fVB7Ysd1Ekv9cEEhsvfGy-POQ/viewform?usp=sf_link" target="_blank"><span class="text-white">Apply</span></a></button>

          </div>
        </div>
        <div class="col-sm-4">
          <div class="container">
            <h4><b>For Insurance in Banking and Finance</b></h4>
            <p>
            <h5><i class="fas fa-briefcase"></i>Fresher</h5>
            </p>
            <p>
            <h5><i class="fas fa-rupee-sign"></i>Up to 3 Lac </h5>
            </p>
            <p>
            <h5><i class="fas fa-door-open"></i>Location- Pune</p>
              <p>Job Type- Open Market, Field sales</p>
              <p>Products- CASA,</p>
              <p>Loan, Insurance, etc</p>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#EnquiryPlacement">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScchKHvQG3Otmj929JkF-2r4fVB7Ysd1Ekv9cEEhsvfGy-POQ/viewform?usp=sf_link" target="_blank"><span class="text-white">Apply</span></a></button>


          </div>
        </div>
        <div class="col-sm-4">
          <div class="container">
            <h4><b>Jobs Abroad</b></h4>
            <p>
            <h5><i class="fas fa-briefcase"></i>Fresher</h5>
            </p>
            <p>
            <h5><i class="fas fa-rupee-sign"></i>Min 30,000 to 1 Lac</h5>
            </p>
            <p>
            <h5><i class="fas fa-door-open"></i>Location- Pune</p>
              <p>VNC operator, VMC operator, Welder</p>
              <p>Fitter, Helper, Construction Worker, Worker</p>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#EnquiryPlacement">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScchKHvQG3Otmj929JkF-2r4fVB7Ysd1Ekv9cEEhsvfGy-POQ/viewform?usp=sf_link" target="_blank"><span class="text-white">Apply</span></a></button>


          </div>
        </div>

        <div class="col-sm-4">
          <div class="container">
            <h4><b>Jobs in India</b></h4>
            <p>
            <h5><i class="fas fa-briefcase"></i>Fresher/Experienced</h5>
            </p>
            <p>
            <h5><i class="fas fa-rupee-sign"></i>As per Qualification</h5>
            </p>
            <p>
            <h5><i class="fas fa-door-open"></i>All over India</p>
              <p>Managers, General Managers, Vice president,</p>
              <p>Accounts Manager,
                Projet Manager, HR manager,</p>
              <p> Developer etc.</p>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#EnquiryPlacement">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScchKHvQG3Otmj929JkF-2r4fVB7Ysd1Ekv9cEEhsvfGy-POQ/viewform?usp=sf_link" target="_blank"><span class="text-white">Apply</span></a></button>


          </div>
        </div>
      </div>

    </div>
    <div class="modal" id="Details1">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Job Description</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">

            <h3>RESPONSIBILITIES AND DUTIES</h3>

            <p>We are looking for an Application Support Analyst to join our team. The responsibilities and duties of an Application Support Analyst include the following, but can vary based on the project at hand.</p>

            <h5>Assess Problems:</h5>

            <p>Application Support Analysts will receive customer complaints and inquiries through a variety of channels,

              including email, phone and live chat. In addition to making sure that each individual complaint is properly particular areas of concern can be identified.

              dealt with, Application Support Analysts also need to assess customer problems as a whole so that</p>

            <h5>Proactively Problem Solve:</h5>

            <p>Beyond solving problems which have already arisen, Application Support Analysts must also come up with plans designed to help avoid problems in the first place. This involves regularly evaluating the current state of the application, identifying aspects which could be improved and recommend changes in order to

              facilitate those improvements.</p>

            <h5>Communicate with Developers:</h5>

            <p>Quickly responding to customer-reported issues is a large part of an Application Support Analyst's job, but

              it's not all there is to it. Ensuring consistent day-to-day maintenance is also a crucial responsibility, and Application Support Analysts must direct a team of software developers and production support staff in

              order to accomplish this.</p>

            <h5>Keep Records</h5>

            <p>Application Support Analysts need to take long-term positive changes into consideration as well as short term problem-solving. To lay the groundwork for those changes to take place, they will be required to keep detailed records of the application's performance and shortcomings for senior-level staff to review and

              analyse.</p>

            <h5>Provide On-Call Support</h5>

            <p>Along with analysing big-picture problems and solutions, Application Support Analysts will often need to provide on-call tech support to an application's users. Depending on their employer, this can either occur on an as-needed basis or be a regular responsibility. Interaction with users can take place through phone calls, emails or live chat and requires Application Support Analysts to give each user their full attention.</p>

            <h5>REQUIREMENTS:</h5>
            <div class="container">
              <ul>
                <li>

                  Excellent command over English (written and verbal), good communications skills.</li>
                <li> Ability to work with cross-functional teams.</li>

                <li>Ability to juggle multiple projects simultaneously.</li>



                <li>Knowledge of Structured Query Language (SQL)</li>

                <li>Excellent project management skills.</li>

                <li>Proficient with Excel, word and PowerPoint.</li>

                <li>Experience in customer service</li>

                <li>High attention to detail</li>

                <li>Willing to work on weekends and/or after hours.</li>
              </ul>

              <h5>QUALIFICATIONS:</h5>
              <ul>

                <li>A minimum of a Bachelor's degree in any field of computers, IT or engineering steam.</li>

                <li>Proven track record in academics and extra curriculars</li>

                Knowledge of computer programming languages will be seen as a plus.
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
    <div class="modal" id="Details2">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Job Description</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <h5>RESPONSIBILITIES AND DUTIES:</h5>
              <p>Analyse, design, develop, troubleshoot and debug software programs for commercial or end user applications. Write code, complete programming, perform testing and debugging of applications. As a member of the software engineering division you will specify, design and implement major and minor changes to the existing software architecture. Build complex enhancements and resolve complex bugs. Build and execute unit tests and unit plans. Review integration and regression test plans created by QA. Communicate with QA and porting engineering as necessary to discuss changes to product functionality and to ensure quality and consistency across specific products are maintained as per set industry standards.</p>
              <p>We are looking for software developers with a minimum of 3 years of experience in, .NET, C#, Java, MVC, Entity framework, web API's, SQL and HTML 5 technologies to join our product support and development team. Duties and tasks are varied and complex needing independent judgement. Candidate must be fully competent in own area of expertise and may have project lead role and or supervise lower level personnel depending on projects assigned. BS or MS degree or equivalent experience relevant to functional area is a must. It is an exciting opportunity for anyone who wants to work on cutting edge technologies in a fast-paced and agile environment that offers rapid growth.</p>
              <h5>QUALIFICATIONS:</h5>
              <ul>
                <li>Engineering / Master's Degree in Computer Science or any computer related engineering field.</li>
                <li>Preferred 3+ years' experience in .Net, MVC, JavaScript, knowledge of Entity framework, web API's and SQL development and strong fundamentals in UI design principles.</li>
                <li>Understanding of product life-cycle and the ability to work with Java development teams in the creation of cutting-edge UI.</li>
                <li>Excellent HTML5, XHTML, C553, JavaScript, programming skills.</li>
                <li>Any knowledge or expertise in User Experience (UX) design concepts is a plus.</li>
                <li>Demonstrated ability to learn and quickly comprehend new concepts.</li>
                <li>Ability to think creatively to propose innovative solutions to complex problems</li>
              </ul>

              <h5>KEY SKILLS:</h5>
              <ul>
                <li>Web Development</li>
                <li>NET Development, MVC</li>
                <li>Web Api's</li>
                <li>SQL</li>
                <li>Entity Framework</li>
                <li>C#</li>
                <li>AngularJS</li>
                <li>HTML</li>
                <li>JavaScript development</li>
                <li>HTMLS</li>
                <li>XHTML</li>
                <li>CSS3</li>
                <li>JavaScript programming</li>
              </ul>
              Additional Programming knowledge is a plus.


            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
    <div class="modal" id="Details3">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Job Description</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <h5>Job Profile:</h5>
              <p>Website Developer will be responsible for development of responsive websites, working on
                CMS like WordPress, Drupal, Woo Commerce, Shopify, Maintaining and Updating existing
                website, testing and quality check of diverse applications.</p>
              <ul>
                <li>Candidate must be well versed with technologies like WordPress, Ajax, PHP.</li>
                <li>Writing clean and readable codes for responsive websites as well as maintaining them.</li>
                <li>Knowledge of unit, integration and end to end testing strategies is expected.</li>
                <li>Basic idea of HTTP Request, Session management, Cookies and cache, Linux, Web
                  Server, FTP, UDP and TCP is imperative.
                </li>
                <li>Designing and implementing new features and functionality</li>
                <li>Establishing and guiding the website’s architecture</li>
                <li>Ensuring high-performance and availability, and managing all technical aspects of the
                  CMS</li>
                <li>Helping formulate an effective, responsive design and turning it into a working theme</li>
                <li>Creating and maintaining responsive design</li>
                <li>Build and maintain mobile-first templates for the content management system (CMS)</li>
                <li>Deliver top quality HTML, CSS, jQuery and JavaScript front-end code across a broad array of interactive projects</li>
                <li>Basic knowledge of Sass</li>
                <li>Proven work experience as Web programmer or developer</li>
                <li>Knowledge of Object-Oriented Programming and web application</li>
              </ul>
              <h5>Experience with the following</h5>
              <ul>
                <li>Front-end technologies (such as HTML, JavaScript, CSS, and jQuery)</li>
                <li>Back-end technologies (such as PHP)</li>
                <li>Debugging tools (such as Chrome Inspector and Firebug)</li>
                <li>WordPress</li>
              </ul>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
    <div class="modal" id="Details4">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Job Description</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <p>Who is ready to dive into projects and showcase their skills and capabilities; someone who wants to be a part of a full-stack creative team, responsible for multiple aspects of ongoing software development building and supporting functionality.</p>
              <h5>Responsibilities :</h5>
              <ul>
                <li>Work with management and company leaders to help architect our next generation of applications</li>

                <li>Contribute in all phases of the development lifecycle</li>

                <li>Write "clean" / well-designed code to facilitate applications delivering video content, as well as compute analytical data collected</li>

                <li>Mentor and lead junior developers</li>

                <li>Help perform code reviews</li>

                <li>Follow industry best practices</li>

                <li>Produce detailed specifications of application needs and requirements</li>

                <li>Troubleshoot, test and maintain the core product software and databases to ensure strong optimization and functionality</li>
              </ul>

              <h5>Qualification (Mandatory) :</h5>
              <ul>

                <li>3+ years development experience in PHP</li>

                <li>2+ years experience using Laravel</li>

                <li>BSc/BCA/MSc/MCA degree in IT/Computer Science, B.Tech/M.Tech or Equivalent Engineering Degree in IT/Computer Science</li>

                <li>Working knowledge in applying TDD or BDD practices.</li>

                <li>Solid understanding of database concepts (MySQL / MariaDB)</li>

                <li>Proficient knowledge of version control tools</li>

                <li>Experience developing RESTful services and loosely coupled systems</li>

                <li>Experience writing and integrating with API's</li>

                <li>Experience with Laravel Nova/Admin LTE</li>

                <li>Ability to be On-site in our office</li>
              </ul>

              <h5>Qualification (Non-Mandatory but Preffered) :</h5>
              <ul>
                <li>Experience with Vue.js</li>

                <li>Experience with Scrollmagic.js,Three.js and AOS</li>

                <li>Experience with java script animation libraries</li>

                <li>Experience managing and computing large data</li>

                <li>Experience working with scalable applications</li>

                <li>Job Type: Full-time*</li>

                <li>Location : Neo corporate, madad west.( As of now work from home)</li>

                <li>Salary : upto 40%hike on last ctc</li>

                <li>Experience : 2 + years of experience</li>
              </ul>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
    <div class="modal" id="Details5">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Job Description</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <p>Location :Chinchwad, Pune</p>

              <p>Education: B-tech / BE (Mechanical / Electronic)</p>

              <p>Skilled: SDLC Model,

                ASPICE Level3, Basic knowledge on C language and basic knowledge on Microsoft project planning and basic knowledge on DOORS</p>
              <p>Job Purpose: Monitor the software Development activity & test Planning</p>
              <h5>Principal Accountabilities/Role Description:</h5>
              <p>Prepare, Maintain the Software Quality assurance plan and keep it up to date
                Define project related quality objectives and verify them
                Review of project related work products
                Document deviations that have been found in the reviews
                Assist in the planning of the software project
                Execute internal release of software with respect to process conformance
                SW- Release estimation, if necessary give recommendation for special release
                Reviewing and monitoring of Work Breakdowns structures of Work packets and Time schedules
                Facilitation in analysis of defects and participate in Defect Prevention Meetings
                Contribute in monitoring and supporting the changed processes and also adhere to the QMS</p>
              <h5>Additional knowledge Required:</h5>
              <ul>
                <li>Software requirements management</li>
                <li>Software requirements analysis </li>
                <li>Software change management </li>
                <li>Software project management </li>
                <li>Software configurations management</li>
                <li>System analytics and design </li>
                <li>Module design </li>
                <li>Module test Software-Integration </li>
                <li>Software-Implementation </li>
                <li>Software-Test</li>
                <li>System-Test </li>
                <li>General Testing </li>
                <li>CM tool (basic knowledge) </li>
                <li>Project Management (basic knowledge)</li>
                <li>Hardware electronics (basic knowledge)</li>
              </ul>

            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
    <div class="modal" id="Details6">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Job Description</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <p>Job responsibility:</p>
              <p>Builds business by identifying and selling prospects.</p>
              <p>Maintaining relationships with clients by providing support, information and guidance.</p>
              <p>Organising sales visits.</p>
              <p>Demonstrating and presenting products.</p>
              <p>Establishing new business.</p>
              <p>Open market sales.</p>
              <p>Field sales.</p>
              <p>Account opening(Current and Savings)</p>

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

      <script src="<?php echo base_url(); ?>/assets/js/home.js?v=1.0.0"></script>
</body>

</html>