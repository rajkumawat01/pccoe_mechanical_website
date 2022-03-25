<!DOCTYPE html>
<html lang="en">
<head>
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
   <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
  <title>
    Special Interest Groups | Research | Department of Mechanical Engineering at PCCOE
  </title>
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
<section class="p-md-3 p-md-3">
  <div class="container-lg ">
  <div class="border-5 border-start border-primary shadow mb-4 ps-3 py-2 align-self-center text-dark">
    <h2>
      Special Interest Groups (SIG)
    </h2>
  </div>
  <div class="container mt-4 rounded p-4 hod-desk bg-light">
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
             <h6>A) Robotics & Automation: </h6> 
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <div class="row my-3">
              <div class="col-lg-4 col-md-6 text-lg-start">
                <p class="text-dark"><span class="fw-bold fs-5">Research areas: </span></p>
                <p>Mechatronics, Control systems, system engineering, and Biomedical field.
                </p>
                
              </div>
              <div class="col-lg-4 col-md-6">
                <p class="text-dark fw-bold">Team:</p>
                <center><img src="../faculty photo/SBMatekar.jpg" class="img-thumbnail mb-3" alt="Mr-Sanjay-Matekar" style="width: 200px;">
               </center><p class="text-dark fw-bold"> Prof. Sanjay Matekar (convener) & team</p>
              </div>
              <div class="col-lg-4 col-md-12">
                <img src="../research/img/a.jpg" class="img-thumbnail mb-3" alt="Team ambush">
              </div>
            </div>
            <hr>
            <h4 style="text-align: center;">Team Members</h4><br>
            <div class="row ">
                <div class="col-lg-4" style="margin-top: 11px;">
                  <center>
                  <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                      <div class="member-info">
                      <div class="pic" style="width: 120px;"><img src="../faculty photo/NVivekanand.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                      <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. N. Vivekanandan
                        
                        </h3>
                      <span>Secretary</span>
                      <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <p>Assistant Professor</p>
                      </div>
                  </div>
                  </center>
                </div>
                <div class="col-lg-4" style="margin-top: 11px;">
                  <center>
                  <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-3">
                      <div class="member-info">
                      <div class="pic" style="width: 120px;"><img src="../faculty photo/Mr-R-Radhakrishnan.png" class="img-fluid rounded-circle" alt=""></div><br>
                      <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Radhakrishnan
                        
                        </h3>
                      <span>Industry Mentor</span>
                      <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <p>Director,
                        Pentagon Assembly
                        Automation Pvt. Ltd</p>
                      </div>
                  </div>
                  </center>
                </div>
                <div class="col-lg-4" style="margin-top: 11px;">
                  <center>
                  <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-3">
                      <div class="member-info">
                      <div class="pic" style="width: 120px;"><img src="../faculty photo/RAGujar.webp" class="img-fluid rounded-circle" alt=""></div><br>
                      <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Rahul Gujar
                        
                        </h3>
                      <span>Member</span>
                      <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <p>Assistant Professor</p>
                      </div>
                  </div>
                  </center>
                </div>
                <div class="col-lg-4" style="margin-top: 11px;">
                  <center>
                  <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                      <div class="member-info">
                      <div class="pic" style="width: 120px;"><img src="../faculty photo/Mr-Vikram-Aher.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                      <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Vikram Aher
                        
                        </h3>
                      <span>Member</span>
                      <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <p>Assistant Professor</p>
                      </div>
                  </div>
                  </center>
                </div>
                <div class="col-lg-4" style="margin-top: 11px;">
                  <center>
                  <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                      <div class="member-info">
                      <div class="pic" style="width: 120px;"><img src="../faculty photo/RSPimpalkar.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                      <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mrs. Rita Pimpalkar
                        
                        </h3>
                      <span>Member</span>
                      <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <p>Assistant Professor</p>
                      </div>
                  </div>
                  </center>
                </div>
                <div class="col-lg-4" style="margin-top: 11px;">
                  <center>
                  <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                      <div class="member-info">
                      <div class="pic" style="width: 120px;"><img src="../faculty photo/NJSurwade.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                      <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Nikhil Surwade
                        
                        </h3>
                      <span>Member</span>
                      <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <p>Assistant Professor</p>
                      </div>
                  </div>
                  </center>
                </div>
                <div class="col-lg-4" style="margin-top: 11px;">
                  <center>
                  <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                      <div class="member-info">
                      <div class="pic" style="width: 120px;"><img src="../faculty photo/GDKale.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                      <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Ganesh Kale
                        
                        </h3>
                      <span>Member</span>
                      <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <p>Assistant Professor</p>
                      </div>
                  </div>
                  </center>
                </div>
                <div class="col-lg-4" style="margin-top: 11px;">
                  <center>
                  <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                      <div class="member-info">
                      <div class="pic" style="width: 120px;"><img src="../faculty photo/CRIngole.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                      <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Chandan Ingole
                        
                        </h3>
                      <span>Member</span>
                      <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <p>Assistant Professor</p>
                      </div>
                  </div>
                  </center>
                </div>
                <div class="col-lg-4" style="margin-top: 11px;">
                  <center>
                  <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                      <div class="member-info">
                      <div class="pic" style="width: 120px;"><img src="../faculty photo/VYGaikhe.webp" class="img-fluid rounded-circle" alt=""></div><br>
                      <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mrs. Varsharani Gaikhe
                        
                        </h3>
                      <span>Member</span>
                      <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <p>Assistant Professor</p>
                      </div>
                  </div>
                  </center>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-heading2">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
             <h6>B) Renewable & sustainable energy:</h6> 
          </button>
        </h2>
        <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <div class="row my-3">
              <div class="col-lg-4 col-md-6 text-lg-start">
                <p class="text-dark"><span class="fw-bold fs-5">Research areas: </span></p>
                <p>Integration design of Technologies with Renewable Energy sources, Design of innovative products powered by renewable energy, testing of batteries for off-grid solar power plants and electric vehicles, and design of off-grid power plants
                </p>
                
              </div>
              <div class="col-lg-4 col-md-6">
                <p class="text-dark fw-bold">Team:</p>
                <center><img src="../faculty photo/SPSalve.jpg" class="img-thumbnail mb-3" alt="Mr-Sanjay-Matekar" style="width: 150px;">
               </center><p class="text-dark fw-bold" style= "text-align : center;">Mr. S. P. Salve (convener)  & team</p>
              </div>
              <div class="col-lg-4 col-md-12">
                <img src="../research/img/b.jpg" class="img-thumbnail mb-3" alt="Team ambush">
              </div>
            </div>
            <hr>
            <h4 style="text-align: center;">Team Members</h4><br>
            <div class="row">
              <!-- <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/SPSalve.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. S. P. Salve
                      
                      </h3>
                    <span>Secretary</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Associate Professor</p>
                    </div>
                </div>
                </center>
              </div> -->
              
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../research/img/doctors-1.jpg" class="img-fluid rounded-circle" alt="Mr. Rajashri Sen"></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Rajashri Sen
                      
                      </h3>
                    <span>Industry Mentor</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Consultant, IESA</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/ANKore.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. A. N. Kore
                      
                      </h3>
                    <span>Secretory</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/HHKadam.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Hemant Kadam
                      
                      </h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/SSShinde.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Shriyash Shinde
                      
                     </h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-heading3">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
             <h6>C) Composites:</h6> 
          </button>
        </h2>
        <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <div class="row my-3">
              <div class="col-lg-4 col-md-6 text-lg-start">
                <p class="text-dark"><span class="fw-bold fs-5">Research areas: </span></p>
                <p>Optimization of composite materials, Reliability engineering
                </p>
                
              </div>
              <div class="col-lg-4 col-md-6">
                <p class="text-dark fw-bold">Team:</p>
                <center><img src="../faculty photo/LVAwadhani.jpg" class="img-thumbnail mb-3" alt="Mr-Sanjay-Matekar" style="width: 150px;">
               </center><p class="text-dark fw-bold">Prof. Laxman awdhani (convener) & team</p>
              </div>
              <div class="col-lg-4 col-md-12">
                <img src="../research/img/c.jpg" class="img-thumbnail mb-3" alt="Team ambush">
              </div>
            </div>
            <hr>
            <h4 style="text-align: center;">Team Members</h4><br>
            <div class="row">
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/Vrushali Bhalerao.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mrs. V. Y. Bhalerao
                      
                      </h3>
                    <span>Secretary</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/Dr-Raju-Kadam.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. Raju Kadam
                      
                      </h3>
                    <span>Industry Mentor</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Manager - R&D,
                      Bharat Forge</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/JPWagh.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mrs. Jayashri Wagh
                     
                     </h3>
                    <span> Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p> Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/RBPatil.JPG" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. Rajkumar Patil
                      
                      </h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-heading4">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
             <h6>D) NVH & Stress analysis: </h6> 
          </button>
        </h2>
        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <div class="row my-3">
              <div class="col-lg-4 col-md-6 text-lg-start">
                <p class="text-dark"><span class="fw-bold fs-5">Research areas: </span></p>
                <p> Testing in the field of Noise, Vibration, and Harshness
                </p>
                
              </div>
              <div class="col-lg-4 col-md-6">
                <p class="text-dark fw-bold">Team:</p>
                <center><img src="../faculty photo/AAPanchwadkar.jpg" class="img-thumbnail mb-3" alt="Mr-Sanjay-Matekar" style="width: 150px;">
               </center><p class="text-dark fw-bold"> Prof. Amit Panchawadkar (convener) & team</p>
              </div>
              <div class="col-lg-4 col-md-12">
                <img src="../research/img/d.jpg" class="img-thumbnail mb-3" alt="Team ambush">
              </div>
            </div>
            <hr>
            <h4 style="text-align: center;">Team Members</h4><br>
            <div class="row">
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/PRKale.webp" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. Pravin R. Kale
                      
                      </h3>
                    <span>Secretary</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Dean SDW, Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-3">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/Mr-Sachin-Sangamnerkar.png" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Sachin Sangamnerkar</h3>
                    <span>Industry Mentor</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Technology Head,
                      Urja Disha Boiler
                      Technologies, Pune</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/SSMore.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Swapnil S. More
                      
                      </h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/ASKashid.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Atul S. Kashid
                      
                      </h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-heading5">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
             <h6>E) Thermal & Fluidic:</h6> 
          </button>
        </h2>
        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <div class="row my-3">
              <div class="col-lg-4 col-md-6 text-lg-start">
                <p class="text-dark"><span class="fw-bold fs-5">Research areas: </span></p>
                <p>Combustion technology, electronic cooling, thermal storage technology, heat pipe technology, computational analysis of heat transfer product & processes, and thermal & fluid systems product and process design

                </p>
                
              </div>
              <div class="col-lg-4 col-md-6">
                <p class="text-dark fw-bold">Team:</p>
                <center><img src="../faculty photo/CLLadekar.jpg" class="img-thumbnail mb-3" alt="Mr-Sanjay-Matekar" style="width: 150px;">
               </center><p class="text-dark fw-bold">Dr. Chandrakishore Ladekar (convener) & team</p>
              </div>
              <div class="col-lg-4 col-md-12">
                <img src="../research/img/e.jpg" class="img-thumbnail mb-3" alt="Team ambush">
              </div>
            </div>
            <hr>
            <h4 style="text-align: center;">Team Members</h4><br>
            <div class="row">
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/Gauri_Phadtare.jpeg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mrs. Gauri Phadtare
                     </h3>
                    <span>Secretary</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p> Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-3">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/Dr-Dadasaheb-Shendage.png" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. Dadasaheb
                      Shendage
                      
                      </h3>
                    <span>Industry Mentor</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Sr. General Manager
                      H2E Power systems
                      Pvt Ltd.</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/PADeshmukh.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. Padmakar
                      Deshmukh
                      
                     </h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>HOD Mechanical
                      Engg. & Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/NRDeore.PNG" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. Narendra Deore
                      
                      </h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Associate Dean - III,
                      Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/UGPotdar.jpeg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. Umesh Potdar
                      
                      </h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Associate Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/PJTipole.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. P. J. Tipole
                      
                      </h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/NVGaikwad.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Nilesh Gaikwad
                      
                      </h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/Neeta_A_Mandhare.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mrs. Neeta Mandhare</h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-heading6">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
             <h6>F) Transportation and Automobile:</h6> 
          </button>
        </h2>
        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <div class="row my-3">
              <div class="col-lg-4 col-md-6 text-lg-start">
                <p class="text-dark"><span class="fw-bold fs-5">Research areas: </span></p>
                <p> Battery thermal management for electric vehicle (EV), electric motor technology for EV, alternative fuels for I.C. engines, biomechanics

                </p>
                
              </div>
              <div class="col-lg-4 col-md-6">
                <p class="text-dark fw-bold">Team:</p>
                <center><img src="../faculty photo/UIShaikh.jpg" class="img-thumbnail mb-3" alt="Mr-Sanjay-Matekar" style="width: 150px;">
               </center><p class="text-dark fw-bold" style = "text-align : center;">Prof. U.I. Shaikh & (convener) & team</p>
              </div>
              <div class="col-lg-4 col-md-12">
                <img src="../research/img/f.jpg" class="img-thumbnail mb-3" alt="Team ambush">
              </div>
            </div>
            <hr>
            <h4 style="text-align: center;">Team Members</h4><br>
            <div class="row">
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/SRWankhede.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Sagar Wankhede</h3>
                    <span>Secretary</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-3">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../research/img/doctors-1.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. Rutuj Deshpande</h3>
                    <span>Industry Mentor</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Founder & CEO,
                      GoVidyouth Mobility
                      Pvt. Ltd</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/SVPatil.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mrs. Sweta Patil</h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/Gaffar_G._Momin.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Gaffar Momin</h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/Ishansathone.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Ishan Sathone</h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="../faculty photo/JDGaneshkar.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mr. Jitendra Ganeshkar</h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                    <p>Assistant Professor</p>
                    </div>
                </div>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-heading6">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse6">
             <h6>G) Design for Sustainability:</h6> 
          </button>
        </h2>
        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <div class="row my-3">
              <div class="col-lg-9 text-lg-start">
                <p class="text-dark">This SIG was established in 2021 with a vision 
                  to be a nationally recognized center of excellence in sustainability 
                  engineering. We at Design for Sustainability SIG are committed to 
                  achieve our vision by,</p>
                <ul class="list-styled">
                  <li class="py-1" >Imparting synchronized and effective outcome-based education through SIG specific transdisciplinary courses, workshops, and training programs.</li>
                  <li class="py-1" >Preparing faculty members and students through skill-oriented courses, and project-based learning to excel in their profession.</li>
                  <li class="py-1" >Creating and sharing knowledge and technologies with ethical values and social responsibilities.</li>
                  <li class="py-1" >Promoting sustainable research to benefit the society.</li>
                </ul>
                
              </div>
              <div class="col-lg-3 col-md-6">
                <p class="text-dark fw-bold text-center">Convener</p>
                <center><img src="img\design_for_sustain\Rajkumar patil (2).jpg" class="img-thumbnail mb-3" alt="Mr-Sanjay-Matekar" style="width: 150px;">
               </center><p class="text-dark fw-bold" style = "text-align : center;">Dr Rajkumar B. Patil</p>
              </div>
              <div class="col-lg-6">
                <p class="text-dark"><span class="fw-bold fs-5">Research areas: </span></p>
                <ul class="list-styled">
                  <li class="py-1" >Reliability and safety</li>
                  <li class="py-1" >Renewable and non-conventional energy</li>
                  <li class="py-1" >Fault diagnosis and failure investigation of electronics</li>
                  <li class="py-1" >Developments in agriculture</li>
                  <li class="py-1" >Lithium-ion batteries</li>
                  <li class="py-1" >Agriculture and food systems</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <p class="text-dark"><span class="fw-bold fs-5">General areas: </span></p>
                <ul class="list-styled">
                  <li class="py-1" >Happiness and well-being</li>
                  <li class="py-1" >Education</li>
                  <li class="py-1" >Health</li>
                </ul>
              </div>
            </div>
            <hr>
            <h4 style="text-align: center;">Team Members</h4><br>
            <div class="row">
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="img\design_for_sustain\Rajkumar patil (2).jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr Rajkumar B. Patil</h3>
                    <span>Convener</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <span class="align-self-center text-muted">
                        Email&nbsp;:&nbsp;
                        <a href="mailto: rajkumar.patil@pccoepune.org" >
                          rajkumar.patil@pccoepune.org
                        </a>
                      </span>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-3">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="img\design_for_sustain\100KB.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. Amrita Francis</h3>
                    <span>Secretary</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <span class="align-self-center text-muted">
                        Email&nbsp;:&nbsp;
                        <a href="mailto: amrita.francis@pccoepune.org" >
                          amrita.francis@pccoepune.org
                        </a>
                      </span>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="img\design_for_sustain\ARoy-website (2).jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. Anindita Roy</h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <span class="align-self-center text-muted">
                        Email&nbsp;:&nbsp;
                        <a href="mailto: anindita.roy@pccoepune.org" >
                          anindita.roy@pccoepune.org
                        </a>
                      </span>   
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="img\design_for_sustain\SheetalB.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. Sheetal U. Bhandari</h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <span class="align-self-center text-muted">
                        Email&nbsp;:&nbsp;
                        <a href="mailto: sheetal.bhandari@pccoepune.org" >
                          sheetal.bhandari@pccoepune.org
                        </a>
                      </span>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="img\design_for_sustain\RSPimpalkar.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Mrs. Rita S. Pimpalkar</h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <span class="align-self-center text-muted">
                        Email&nbsp;:&nbsp;
                        <a href="mailto: rita.pimpalkar@pccoepune.org" >
                          rita.pimpalkar@pccoepune.org
                        </a>
                      </span>                    
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="img\design_for_sustain\Dr. Abhay Lingayat.jpg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. Abhay B. Lingayat</h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <span class="align-self-center text-muted">
                        Email&nbsp;:&nbsp;
                        <a href="mailto: abhay.lingayat@pccoepune.org" >
                          abhay.lingayat@pccoepune.org
                        </a>
                      </span>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="img\design_for_sustain\avinash.JPG" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. Avinash V. Borgaonkar</h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <span class="align-self-center text-muted">
                        Email&nbsp;:&nbsp;
                        <a href="mailto: avinash.borgaonkar@pccoepune.org" >
                          avinash.borgaonkar@pccoepune.org
                        </a>
                      </span>
                    </div>
                </div>
                </center>
              </div>
              <div class="col-lg-4" style="margin-top: 11px;">
                <center>
                <div class="member shadow bg-light rounded d-flex justify-content-center align-items-center p-4">
                    <div class="member-info">
                    <div class="pic" style="width: 120px;"><img src="img\design_for_sustain\Jaya Photo.jpeg" class="img-fluid rounded-circle" alt=""></div><br>
                    <h3 style="font-size: 16px; color: rgb(37, 103, 165);">Dr. Jaya Goyal</h3>
                    <span>Member</span>
                    <hr style="color: rgb(37, 103, 165); height: 2px;">
                      <span class="align-self-center text-muted">
                        Email&nbsp;:&nbsp;
                        <a href="mailto: jaya.goyal@pccoepune.org" >
                          jaya.goyal@pccoepune.org
                        </a>
                      </span>
                    </div>
                </div>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</section>
</body>
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
</html>