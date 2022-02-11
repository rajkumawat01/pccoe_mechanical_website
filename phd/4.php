<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Icon -->
    <link href="../vender/img/logo/PCCOE_LOGO_b.jpg"  rel="shortcut icon" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="../vender/css/bootstrap.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
    <link href="../vender/css/navbar.css" rel="stylesheet" />
    <link href="../vender/css/style1.css" rel="stylesheet" />
     <!-- Icon Link -->
     <link href="../vender/icon/css/brands.css" rel="stylesheet" />
     <link href="../vender/icon/css/fontawesome.css" rel="stylesheet" />
     <link href="../vender/icon/css/solid.css" rel="stylesheet" />
     <link href="imp-pccoe-style.css" rel="stylesheet">
    <title>List of Registered PhD Students and Research Topic | Ph. D | Academics | Department of Mechanical Engineering at PCCOE</title>
    <style>
      html {
        scroll-behavior: smooth;
      }
    </style>
</head>

<body>

<!-- Start Header -->
<?php include("pccoe-header.php"); ?>
 <header>
  <div class="container-fluid header">
      <div class="row">
          <div class="col-lg-3 text-center d-flex justify-content-around align-items-center">
              <div>
                <div class="extern-btn">
                  <a href="http://www.pccoepune.com/" class="text-decoration-none">
                    <i class="fas fa-home"></i> PCCOE
                  </a>
                </div>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="text-center">
                   <h4 class="dept-name fs-3 mb-3">Department Of Mechanical Engineering</h4>
              </div>
          </div>
          <div class="col-lg-3"></div>
      </div>
  </div>
</header>
<!-- End Header -->

<!-- Start Navbar -->
  <div class="menu-section d-flex justify-content-around">
    <nav id="menu">
        <label for="tm" id="toggle-menu"><b>Menu</b> <span class="drop-icon"><b>&#9776;</b></span></label>
        <input type="checkbox" id="tm">
        <ul class="main-menu cf">
            <li class="b-left"><a href="../index.php">Home</a></li>
            <li class="b-left"><a href="#">About us
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm0">▾</label>
                </a>
                <input type="checkbox" id="sm0">
                <ul class="sub-menu">
                    <li><a href="../aboutus/hod_desk.php">HOD Desk</a></li>
                    <li><a href="../aboutus/vision-mission.php">Vision and Mission</a></li>
                    <li><a href="../aboutus/program_outcome.php">Program Outcomes</a></li>
                    <li><a href="../aboutus/BOS.php">Board Of Studies</a></li>
                    <li><a href="../aboutus/student_alumni.php">Student and Alumni's</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">People
              <span class="drop-icon">▾</span>
              <label title="Toggle Drop-down" class="drop-icon" for="sm88">▾</label>
              </a>
              <input type="checkbox" id="sm88">
              <ul class="sub-menu">
                  <li><a href="../people/faculty.php">Faculty</a></li>
                  <li><a href="../people/staff.php">Staff</a></li>
              </ul>
          </li>
            <li class="b-left"><a href="#">Academics
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm8">▾</label>
                </a>
                <input type="checkbox" id="sm8">
                </a>
                <ul class="sub-menu">
                    <li><a href="../ug/co_cordinator_desk.php">UG</a></li>
                    <li>
                      <a href="">PG
                        <span class="drop-icon">▸</span>
                        <label title="Toggle Drop-down" class="drop-icon" for="sm5">▾</label>
                      </a>
                      <input type="checkbox" id="sm5">
                      </a>
                      <ul class="sub-menu">
                          <li><a href="../pg/me-design.php">M.Tech Design Engineering</a></li>
                          <li><a href="../pg/me-heatpower.php">M.Tech Heat Power Engineering</a></li>
                      </ul>
                    </li>
                    <li><a href="../phd/phd_home.php">Ph. D</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Research
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smr">▾</label>
                </a>
                <input type="checkbox" id="smr">
                </a>
                <ul class="sub-menu">
                    <li><a href="../research/research_team.php">Research Team</a> </li>
                    <li><a href="../research/sig.php">Special Interest Groups (SIG)</a></li>
                    <li><a href="../research/publication.php">Publication</a></li>
                    <li><a href="../research/copyright.php">Intellectual Property Rights</a></li>
                    <li><a href="../research/research funding.php">Research Funding </a></li>
                    <li><a href="../research/cs_projects.php">Consultancy/Sponsored Projects</a></li>
                    <li><a href="../research/student_achivements.php">Student Achievements</a></li>
                    <li><a href="../research/entrepreneurship.php">Entrepreneurship</a></li>
                </ul>
            </li>

            <li class="b-left"><a href="#">Training & Placement
              <span class="drop-icon">▾</span>
              <label title="Toggle Drop-down" class="drop-icon" for="sm50">▾</label>
              </a>
              <input type="checkbox" id="sm50">
              </a>
              <ul class="sub-menu">
                  <li><a href="../placement/recruiter.php">Major Recruiters</a></li>
                  <li><a href="../placement/placement.php">Placement</a></li>
                  <li><a href="../placement/internship.php">Internship</a></li>
                  <li><a href="../placement/training.php">Industrial Visit & Training Program</a></li>
                  <li><a href="../placement/mou.php">MOU's</a></li>
              </ul>
            </li>
            <li class="b-left"><a href="#">Facilities
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smsfc">▾</label>
                </a>
                <input type="checkbox" id="smsfc">
                </a>
                <ul class="sub-menu">
                    <li><a href="../facilities/public_html/laboratories.php">Laboratories</a></li>
                    <li><a href="../facilities/public_html/library.php">Library</a></li>
                    <li><a href="../facilities/public_html/seminar_hall.php">Seminar Hall</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Student Development & Welfare
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smsdw">▾</label>
                </a>
                <input type="checkbox" id="smsdw">
                </a>
                <ul class="sub-menu">
                    <li><a href="../Student_development&Welfare/public_html/higher_studies.php">Higher study cell</a></li>
                    <li><a href="../Student_development&Welfare/public_html/Communication_Personality_Development.php">Communication and Personality Development Cell</a></li>
                    <li><a href="../Student_development&Welfare/public_html/professional_development.php">Professional Development Cell</a></li>
                    <li><a href="../Student_development&Welfare/public_html/ISR.php">Institutional Social Responsibility</a></li>
                    <li><a href="../Student_development&Welfare/public_html/nation_services_scheme.php">National Service Scheme</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Clubs
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm9">▾</label>
                </a>
                <input type="checkbox" id="sm9">
                </a>
                <ul class="sub-menu">
                    <li><a href="../clubs/mesa.php">MESA</a></li>
                    <li><a href="../clubs/ambush.php">Team Ambush</a></li>
                    <li><a href="../clubs/redbaron.php">Team Red Baron</a></li>
                    <li><a href="../clubs/kratos.php">Team Kratos Racing</a></li>
                    <li><a href="../clubs/solarium.php">Team Solarium</a></li>
                    <li><a href="../clubs/automaton.php">Team Automatons</a></li>
                    <li><a href="../clubs/maverick.php">Team Maverick</a></li>
                    <li><a href="../clubs/ishrae.php">ISHRAE</a></li>
                    <li><a href="../clubs/iei.php">IEI</a></li>
                    <li><a href="../clubs/sport.php">Sports</a></li>
                </ul>
            </li>
            <li class="b-left b-right"><a href="../contact_us/contact.php">Contact us</a></li>
        </ul>
    </nav>
  </div>
<!-- End Navbar -->

<br><br>

<div class="container-fluid pt-2 mt-3">
  <div class="row">
    <div class="col-lg-3">
      <div class="section bg-light">
        <div class="border-bottom border-1 border-primary pt-3">
          <p class="fs-5 color-blue">&nbsp; <i class="fas fa-angle-double-right"></i>&nbsp;Ph.D. Mechanical Engineering</p>
        </div>
        <ul class="section-list">
          <a href="1.php">
            <li>Mechanical Engineering PhD</li>
          </a>
          <a href="2.php">
            <li>Coordinator Desk</li>
          </a>
          <a href="3.php">
            <li>PhD Guides Vacancy Positions</li>
          </a>
          <a href="4.php">
            <li>List of Registered PhD Students and Research Topic</li>
          </a>
          <a href="5.php">
            <li>Coursework Details</li>
          </a>
          <a href="6.php">
            <li>Infrastructure Facilities</li>
          </a>
          <a href="7.php">
            <li>Downloads Important Notices</li>
          </a>
        </ul>
      </div>
    </div>
    <div class="col-lg-9">
      <div class="container-fluid p-3 about-section bg-light rounded">
        <div class="container program-outcome hod-desk">
          <div class="border-bottom border-1 border-primary">
            <p class="fs-4 color-blue">List of Registered PhD Students and Research Topic</p>
          </div>
          <br>
          <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <h6>PhD Admissions 2021-22</h6>
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="row bg-light mx-lg-6 mx-md-3 mx-sm-1 mt-2 rounded">
                    <div class="col-sm-3 text-center align-self-center container-fluid">
                        <img src="img/NVGaikwad.jpg" class="card-img" style="width: 150px;" alt="Faculty Image">
                        <br/>
                    </div>
                    <div class="col-sm-9 align-self-center pt-2 ">
                        <div>
                            <dl class="row">
                                <dt class="col-sm-5 col-4">Name of the Research Scholar</dt>
                                <dd class="col-sm-7 col-8">Mr. Gaikwad Nilesh V.</dd>
                                <dt class="col-sm-5 col-4">Date of Registration</dt>
                                <dd class="col-sm-7 col-8">02/03/2021</dd>
                                <dt class="col-sm-5 col-4">Name of Supervisor</dt>
                                <dd class="col-sm-7 col-8">Dr. N. R. Deore</dd>
                                <dt class="col-sm-5 col-4">PhD Research Title</dt>
                                <dd class="col-sm-7 col-8">-</dd>
                            </dl>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      <h6>PhD Admissions 2019-20</h6>
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="row bg-light mx-lg-6 mx-md-3 mx-sm-1 mt-2 rounded">
                      <div class="col-sm-3 text-center align-self-center container-fluid">
                          <img src="../research/img/doctors-1.jpg" class="card-img" style="width: 150px;" alt="Faculty Image">
                          <br/>
                      </div>
                      <div class="col-sm-9 align-self-center pt-2 ">
                          <div>
                              <dl class="row">
                                  <dt class="col-sm-5 col-4">Name of the Research Scholar</dt>
                                  <dd class="col-sm-7 col-8">Mr. Gajanan Shravan Datar</dd>
                                  <dt class="col-sm-5 col-4">Date of Registration</dt>
                                  <dd class="col-sm-7 col-8">26/02/2020</dd>
                                  <dt class="col-sm-5 col-4">Name of Supervisor</dt>
                                  <dd class="col-sm-7 col-8">Dr. R.M. Warkhedkar</dd>
                                  <dt class="col-sm-5 col-4">PhD Research Title</dt>
                                  <dd class="col-sm-7 col-8">Performance Improvement of Photovoltaic Solar Cell by Combined Use of Passive Cooling and Wavelength Frequency Band Filters </dd>
                              </dl>
                          </div>
                      </div>
                    </div>
                    <div class="row bg-light mx-lg-6 mx-md-3 mx-sm-1 mt-2 rounded">
                      <div class="col-sm-3 text-center align-self-center container-fluid">
                          <img src="../research/img/doctors-1.jpg" class="card-img" style="width: 150px;" alt="Faculty Image">
                          <br/>
                      </div>
                      <div class="col-sm-9 align-self-center pt-2 ">
                          <div>
                              <dl class="row">
                                  <dt class="col-sm-5 col-4">Name of the Research Scholar</dt>
                                  <dd class="col-sm-7 col-8">Ms. Chandana Rameshchandra Shah</dd>
                                  <dt class="col-sm-5 col-4">Date of Registration</dt>
                                  <dd class="col-sm-7 col-8">26/02/2020</dd>
                                  <dt class="col-sm-5 col-4">Name of Supervisor</dt>
                                  <dd class="col-sm-7 col-8">Dr. R.M. Warkhedkar</dd>
                                  <dt class="col-sm-5 col-4">PhD Research Title</dt>
                                  <dd class="col-sm-7 col-8">A Novel Approach In Design And Development of 3D Radial Pulse Measurement System</dd>
                              </dl>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                     <h6>PhD Admissions 2017-18</h6> 
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="row bg-light mx-lg-6 mx-md-3 mx-sm-1 mt-2 rounded">
                      <div class="col-sm-3 text-center align-self-center container-fluid">
                          <img src="../research/img/doctors-1.jpg" class="card-img" style="width: 150px;" alt="Faculty Image">
                          <br/>
                      </div>
                      <div class="col-sm-9 align-self-center pt-2 ">
                          <div>
                              <dl class="row">
                                  <dt class="col-sm-5 col-4">Name of the Research Scholar</dt>
                                  <dd class="col-sm-7 col-8">Mr. Anjankar Pankaj Ganesh</dd>
                                  <dt class="col-sm-5 col-4">Date of Registration</dt>
                                  <dd class="col-sm-7 col-8">12/04/2018</dd>
                                  <dt class="col-sm-5 col-4">Name of Supervisor</dt>
                                  <dd class="col-sm-7 col-8">Dr. S. S. Lakade</dd>
                                  <dt class="col-sm-5 col-4">PhD Research Title</dt>
                                  <dd class="col-sm-7 col-8">Performance Evaluation of Falling Film Evaporator using low GWP Refrigerants.</dd>
                              </dl>
                          </div>
                      </div>
                    </div>
                    <div class="row bg-light mx-lg-6 mx-md-3 mx-sm-1 mt-2 rounded">
                      <div class="col-sm-3 text-center align-self-center container-fluid">
                          <img src="img/Aditya Bawane.jpg" class="card-img" style="width: 150px;" alt="Faculty Image">
                          <br/>
                      </div>
                      <div class="col-sm-9 align-self-center pt-2 ">
                          <div>
                              <dl class="row">
                                  <dt class="col-sm-5 col-4">Name of the Research Scholar</dt>
                                  <dd class="col-sm-7 col-8">Mr. Bawane Aditya Shivaji </dd>
                                  <dt class="col-sm-5 col-4">Date of Registration</dt>
                                  <dd class="col-sm-7 col-8">12/04/2018</dd>
                                  <dt class="col-sm-5 col-4">Name of Supervisor</dt>
                                  <dd class="col-sm-7 col-8">Dr. S. S. Lakade, Dr. Virendra K. Bhojwani</dd>
                                  <dt class="col-sm-5 col-4">PhD Research Title</dt>
                                  <dd class="col-sm-7 col-8">Performance Assessment of Thermo syphon Steam Cooking System.</dd>
                              </dl>
                          </div>
                      </div>
                    </div>
                    <div class="row bg-light mx-lg-6 mx-md-3 mx-sm-1 mt-2 rounded">
                      <div class="col-sm-3 text-center align-self-center container-fluid">
                          <img src="img/Vrushali Bhalerao.jpg" class="card-img" style="width: 150px;" alt="Faculty Image">
                          <br/>
                      </div>
                      <div class="col-sm-9 align-self-center pt-2 ">
                          <div>
                              <dl class="row">
                                  <dt class="col-sm-5 col-4">Name of the Research Scholar</dt>
                                  <dd class="col-sm-7 col-8">Mrs. Bhalerao Vrushali Yogesh</dd>
                                  <dt class="col-sm-5 col-4">Date of Registration</dt>
                                  <dd class="col-sm-7 col-8">13/04/2018</dd>
                                  <dt class="col-sm-5 col-4">Name of Supervisor</dt>
                                  <dd class="col-sm-7 col-8">Dr. S. S. Lakade</dd>
                                  <dt class="col-sm-5 col-4">PhD Research Title</dt>
                                  <dd class="col-sm-7 col-8">Optimization of bearing life with surface improvement by boron nanoparticle doping on bearing rings and rollers.</dd>
                              </dl>
                          </div>
                      </div>
                    </div>
                    <div class="row bg-light mx-lg-6 mx-md-3 mx-sm-1 mt-2 rounded">
                      <div class="col-sm-3 text-center align-self-center container-fluid">
                          <img src="img/Dive.jpg" class="card-img" style="width: 150px;" alt="Faculty Image">
                          <br/>
                      </div>
                      <div class="col-sm-9 align-self-center pt-2 ">
                          <div>
                              <dl class="row">
                                  <dt class="col-sm-5 col-4">Name of the Research Scholar</dt>
                                  <dd class="col-sm-7 col-8">Mr. Dive Vikas Pralhad</dd>
                                  <dt class="col-sm-5 col-4">Date of Registration</dt>
                                  <dd class="col-sm-7 col-8">12/04/2018</dd>
                                  <dt class="col-sm-5 col-4">Name of Supervisor</dt>
                                  <dd class="col-sm-7 col-8">Dr. S. S. Lakade</dd>
                                  <dt class="col-sm-5 col-4">PhD Research Title</dt>
                                  <dd class="col-sm-7 col-8">Development of a NDT Set-up for In Situ Through-Thickness Measurement of Residual Stresses in Metallic Materials.</dd>
                              </dl>
                          </div>
                      </div>
                    </div>
                    <div class="row bg-light mx-lg-6 mx-md-3 mx-sm-1 mt-2 rounded">
                      <div class="col-sm-3 text-center align-self-center container-fluid">
                          <img src="../faculty photo/ANKore.jpg" class="card-img" style="width: 150px;" alt="Faculty Image">
                          <br/>
                      </div>
                      <div class="col-sm-9 align-self-center pt-2 ">
                          <div>
                              <dl class="row">
                                  <dt class="col-sm-5 col-4">Name of the Research Scholar</dt>
                                  <dd class="col-sm-7 col-8">Mr. Kore Abhijeet Narayan</dd>
                                  <dt class="col-sm-5 col-4">Date of Registration</dt>
                                  <dd class="col-sm-7 col-8">12/04/2018</dd>
                                  <dt class="col-sm-5 col-4">Name of Supervisor</dt>
                                  <dd class="col-sm-7 col-8">Dr. S. S. Lakade</dd>
                                  <dt class="col-sm-5 col-4">PhD Research Title</dt>
                                  <dd class="col-sm-7 col-8">Thermal Analysis of Jaggery Plant Based on Dual Fuel.</dd>
                              </dl>
                          </div>
                      </div>
                    </div>
                    <div class="row bg-light mx-lg-6 mx-md-3 mx-sm-1 mt-2 rounded">
                      <div class="col-sm-3 text-center align-self-center container-fluid">
                          <img src="img/Deb.jpg" class="card-img" style="width: 150px;" alt="Faculty Image">
                          <br/>
                      </div>
                      <div class="col-sm-9 align-self-center pt-2 ">
                          <div>
                              <dl class="row">
                                  <dt class="col-sm-5 col-4">Name of the Research Scholar</dt>
                                  <dd class="col-sm-7 col-8">Mr. Samantaraya Debabrata Banamali</dd>
                                  <dt class="col-sm-5 col-4">Date of Registration</dt>
                                  <dd class="col-sm-7 col-8">12/04/2018</dd>
                                  <dt class="col-sm-5 col-4">Name of Supervisor</dt>
                                  <dd class="col-sm-7 col-8">Dr. S. S. Lakade</dd>
                                  <dt class="col-sm-5 col-4">PhD Research Title</dt>
                                  <dd class="col-sm-7 col-8">Experimental Investigation of Hard Turning of Automotive Gears Using Polycrystalline Cubic Boron Nitride (PCBN) Tools as an Alternate Machining Process to Grinding.</dd>
                              </dl>
                          </div>
                      </div>
                    </div>
                    <div class="row bg-light mx-lg-6 mx-md-3 mx-sm-1 mt-2 rounded">
                      <div class="col-sm-3 text-center align-self-center container-fluid">
                          <img src="../research/img/doctors-1.jpg" class="card-img" style="width: 150px;" alt="Faculty Image">
                          <br/>
                      </div>
                      <div class="col-sm-9 align-self-center pt-2 ">
                          <div>
                              <dl class="row">
                                  <dt class="col-sm-5 col-4">Name of the Research Scholar</dt>
                                  <dd class="col-sm-7 col-8">Mr. Solepatil Sandesh Babanrao</dd>
                                  <dt class="col-sm-5 col-4">Date of Registration</dt>
                                  <dd class="col-sm-7 col-8">12/04/2018</dd>
                                  <dt class="col-sm-5 col-4">Name of Supervisor</dt>
                                  <dd class="col-sm-7 col-8">Dr. N.R. Deore</dd>
                                  <dt class="col-sm-5 col-4">PhD Research Title</dt>
                                  <dd class="col-sm-7 col-8">Design and Performance analysis of Combined Linear and Rotational Micro Positioning System with Compliant Mechanism</dd>
                              </dl>
                          </div>
                      </div>
                    </div>
                    <div class="row bg-light mx-lg-6 mx-md-3 mx-sm-1 mt-2 rounded">
                      <div class="col-sm-3 text-center align-self-center container-fluid">
                          <img src="img/Ishansathone.jpg" class="card-img" style="width: 150px;" alt="Faculty Image">
                          <br/>
                      </div>
                      <div class="col-sm-9 align-self-center pt-2 ">
                          <div>
                              <dl class="row">
                                  <dt class="col-sm-5 col-4">Name of the Research Scholar</dt>
                                  <dd class="col-sm-7 col-8">Mr. Satone Ishan</dd>
                                  <dt class="col-sm-5 col-4">Date of Registration</dt>
                                  <dd class="col-sm-7 col-8">12/09/2018</dd>
                                  <dt class="col-sm-5 col-4">Name of Supervisor</dt>
                                  <dd class="col-sm-7 col-8">Dr. R.M. Warkhedkar</dd>
                                  <dt class="col-sm-5 col-4">PhD Research Title</dt>
                                  <dd class="col-sm-7 col-8">Analysis and Investigation for failure reduction and surgical requirement of TIBIA Implant</dd>
                              </dl>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- start footer -->
<footer class="container-fluid">
  <div class="row bg-blue d-flex justify-content-center px-5 pb-3 mt-md-4">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="text-white">
          <div class="mt-5">
            <h5>
              <p class="text-white text-center">
                Follow us
              </p>
            </h5>
          </div>
          <div class="d-flex justify-content-evenly align-self-center">
            <a targrt="_blank" href="https://www.instagram.com/pccoepune/" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-instagram"></i>
              </span> 
            </a>
            <a targrt="_blank" href="https://www.linkedin.com/company/pccoe-pune/?trk=biz-companies-cym" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-linkedin-in"></i>
              </span> 
            </a>
            <a targrt="_blank" href="https://www.facebook.com/PCCOENigadi/" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-facebook"></i>
              </span> 
            </a>
            
            <a targrt="_blank" href="https://twitter.com/pccoe_pune?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-twitter"></i>
              </span> 
            </a>
            <a targrt="_blank" href="https://www.youtube.com/channel/UCQiPDETOiteTLmAvvPk1WjA" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-youtube"></i>
              </span> 
            </a>
          </div>
      </div>
    </div>
    <div class="col-md-4"></div>
    
  </div>
  <div class="row bg-blue d-flex justify-content-center px-5 pt-md-5">
    <div class="col-lg-4 col-md-6 mb-3 ps-md-5">
      <div class="border-bottom border-2 border-white mb-3">
        <h5>
          <p class="text-white">
            <i class="fas fa-map-marker-alt"></i> Location
          </p>
        </h5>
      </div>
      <div class="text-white">
        <address>
          <h6>Sector - 26, Pradhikaran, Nigdi,</h6>
          <h6>Near Akurdi Railway Station,</h6>
          <h6>Pune - 411 044.</h6>
        </address>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-3 ps-md-5">
      <div class="border-bottom border-2 border-white mb-3">
        <h5>
          <p class="text-white">
            <i class="fas fa-phone"></i> Contact us
          </p>
        </h5>
      </div>
      <div class="text-white">
          <h6>Tele : 020 – 2765 3168</h6>
          <h6>Tele : 020 – 2765 3166</h6>
          <h6>Ph : +91 9960984347</h6>
          <h6>
            <a targrt="_blank"  href="mailto:admin@pccoepune.org" class="text-decoration-none text-white">
              <i class="fas fa-envelope"></i>&nbsp; admin@pccoepune.org</a>
            </a>
          </h6>
      </div>
    </div>
    <div class="col-lg-4 col-md-12 mb-3 ps-md-5">
      <div class="border-bottom border-2 border-white mb-3">
        <h5>
          <p class="text-white">
            <i class="fas fa-link"></i> Useful Links
          </p>
        </h5>
      </div>
      <div>
        <div>
          <p>
            <a targrt="_blank"  href="index.php" class="text-decoration-none text-white">
              <h6>
                <i class="fas fa-external-link-alt"></i> Homepage
              </h6>
            </a>
          </p>
          <p>
            <a targrt="_blank" href="http://www.pccoepune.com/" class="text-decoration-none text-white">
              <h6>
                <i class="fas fa-external-link-alt"></i> PCCOE
              </h6>
            </a>
          </p>
          <p>
            <a targrt="_blank" href="http://pcet.org.in/" class="text-decoration-none text-white">
              <h6>
                <i class="fas fa-external-link-alt"></i> PCET
              </h6>
            </a>
          </p>
      </div>
      </div>
    </div>
  </div>
</footer><?php include("pccoe-footer.php"); ?>
  <!-- End footer -->
    
  <script src="../vender/js/bootstrap.bundle.js"></script>
  <!-- <script src="vender/js/navbar.js"></script> -->

</body>
</html>