<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Icon -->
  <link href="../vender/img/logo/PCCOE_LOGO_b.jpg" rel="shortcut icon" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="../vender/css/bootstrap.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
  <link href="../vender/css/navbar.css" rel="stylesheet" />
  <link href="../vender/css/style1.css" rel="stylesheet" />

  <!-- Icon Link -->
  <link href="../vender/icon/css/brands.css" rel="stylesheet" />
  <link href="../vender/icon/css/fontawesome.css" rel="stylesheet" />
  <link href="../vender/icon/css/solid.css" rel="stylesheet" />
   <!-- PCCOE HEADER FOOTER CSS FILE -->	
   <link rel="stylesheet" href="../imp-pccoe-style.css" type="text/css" />

  <title>Student and Alumini's | About us | Department of Mechanical Engineering at PCCOE</title>
  <style></style>
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
            <li><a href="../aboutus/program_outcome.php">PO's/PSO/PEO's</a></li>
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
            <li><a
                href="../Student_development&Welfare/public_html/Communication_Personality_Development.php">Communication
                and Personality Development Cell</a></li>
            <li><a href="../Student_development&Welfare/public_html/professional_development.php">Professional
                Development Cell</a></li>
            <li><a href="../Student_development&Welfare/public_html/ISR.php">Institutional Social Responsibility</a>
            </li>
            <li><a href="../Student_development&Welfare/public_html/nation_services_scheme.php">National Service
                Scheme</a></li>
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
            <li><a href="../clubs/automaton.php">Team Maverick</a></li>
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
  <!-- Content page-->
  <div class="container">
      <div class="row border-5 border-start border-primary shadow mb-4 ps-3 py-2 align-self-center text-dark mt-4">
          <h2>Academic Coordinator</h2>
      </div>
  </div>
  <div class="container p-2 mt-4 student-alumni">
    <div class="container-fluid title"><span></span></div>
    <div class="container-fluid content-panel">
      <div class="row justify-content-around">
        <div class="col-lg-3 col-sm-6">
          <div class="item    text-center">
            <div class="text-center"><img src="../vender/img/staff/JPWagh.jpg"></div>
            <h6 class="h6 text-center">Mrs. J. P. Wagh</h6>
            <p class="description">Academic Coordinator</p><br>
            <p class="batch">~ SY All Division</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="item    text-center">
            <div class="text-center"><img src="../vender/img/staff/LVAwadhani.jpg"></div>
            <h6 class="h6 text-center">Mr. L. V. Awadhani</h6>
            <p class="description">Overall Academic Coordinator</p><br>
            <p class="batch">~ TE All Division</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="item    text-center">
            <div class="text-center"><img src="../vender/img/staff/CLLadekar.jpg"></div>
            <h6 class="h6 text-center">Dr. C. L. Ladekar</h6>
            <p class="description">Academic Coordinator</p><br>
            <p class="batch">~ BE All Division</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
 

  <div class="mt-5 bg-light container p-3">
    <ul class="nav nav-tabs nav-fill bg-light pb-1" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active border-0" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
          role="tab" aria-controls="home" aria-selected="true"><b>Second Year</b></button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link border-0" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
          role="tab" aria-controls="profile" aria-selected="false"><b>Third Year</b></button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link border-0" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
          role="tab" aria-controls="contact" aria-selected="false"><b>Final Year</b></button>
      </li>
    </ul>
    <div class="tab-content bg-white" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <h5 class="text-center p-3">SY B. Tech</h5>
        <!-- start accordion -->
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                <h6>Course Outline</h6>
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <ul class="fa-ul text-primary">
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/course_outline/Course Outline Materials Engineering.pdf">Materials Engineering</a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/course_outline/Course Outline_Engineering Thermodynamics.pdf">Engineering Thermodynamics</a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" hre f="../vender/files/course_outline/">Strength of Materials</a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" hre f="../vender/files/course_outline/">Applied Mathematics </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" hre f="../vender/files/course_outline/">Statistics and Probability </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" hre f="../vender/files/course_outline/">Material Testing Lab </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" hre f="../vender/files/course_outline/">Manufacturing Practices </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" hre f="../vender/files/course_outline/">HSMC-III </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" hre f="../vender/files/course_outline/">Computer Aided Machine Drawing-I </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" hre f="../vender/files/course_outline/">Life Skill-III</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingctd">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapsectd" aria-expanded="false" aria-controls="flush-collapsectd">
                <h6>Class Teacher Details</h6>
              </button>
            </h2>
            <div id="flush-collapsectd" class="accordion-collapse collapse" aria-labelledby="flush-headingctd"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="container p-2 mt-1 class-teacher">
                  <div class="container-fluid content-panel">
                    <div class="row justify-content-around">
                      <div class="col-lg-3 col-sm-6">
                        <div class="item  text-center">
                          <div class="text-center"><img src="../vender/img/staff/ASKashid.jpg"></div>
                          <h6 class="h6 text-center">Mr. A. S. Kashid</h6>
                          <p class="batch">~ SY Division-A</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="item    text-center">
                          <div class="text-center"><img src="../faculty%20photo/Neeta_A_Mandhare.jpg"></div>
                          <h6 class="h6 text-center">Mrs. N. A. Mandhare</h6>
                          <p class="batch">~ SY Division-B</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="item    text-center">
                          <div class="text-center"><img src="../faculty%20photo/Dr.%20Abhay%20Lingayat.jpg"></div>
                          <h6 class="h6 text-center">Mr. A. B. Lingayat</h6>
                          <p class="batch">~ SY Division-C</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingctdsy">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapsectdsy" aria-expanded="false" aria-controls="flush-collapsectdsy">
                <h6>Class Assistants</h6>
              </button>
            </h2>
            <div id="flush-collapsectdsy" class="accordion-collapse collapse" aria-labelledby="flush-headingctdsy"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="container p-2 mt-1 class-teacher">
                  <div class="container-fluid content-panel">
                    <div class="row justify-content-around">
                      <div class="col-lg-3 col-sm-6">
                        <div class="item  text-center">
                          <div class="text-center"><img src="../people/Staff Photo/AbhiPhuge.jpg"></div>
                          <h6 class="h6 text-center">Mr. A.K. Phuge</h6>
                          <p class="batch">~ SY Division-A</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="item    text-center">
                          <div class="text-center"><img src="../people/Staff Photo/Rahul Gogawale 2.jpg"></div>
                          <h6 class="h6 text-center">Mr. R.S. Gogawale</h6>
                          <p class="batch">~ SY Division-B</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="item    text-center">
                          <div class="text-center"><img src="../people/Staff Photo/Shantaram Nalawade.jpg"></div>
                          <h6 class="h6 text-center">Mr. S.D. Narawade</h6>
                          <p class="batch">~ SY Division-C</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingac">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseac" aria-expanded="false" aria-controls="flush-collapseac">
                <h6>Activity Calender</h6>
              </button>
            </h2>
            <div id="flush-collapseac" class="accordion-collapse collapse" aria-labelledby="flush-headingac"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <ul class="fa-ul text-primary">
                <!-- <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none"
                      href="https://drive.google.com/file/d/1jvT1UGbdhi_0AuQxi0ikTHXtd2jLPogJ/view?usp=sharing">Event
                      Calendar of the Institute for SY. </a></li> -->
                      <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none"
                      href="../vender/files/activity_calendar/Event Calender S Y B Tech.pdf">Event
                      Calendar of the Institute for SY. </a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                <h6>Syllabus</h6>
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <ul class="fa-ul text-primary">
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/syllabus/SY_BTech_Mech.pdf">S.Y - B. Tech
                      (Mechanical Engineering)</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                <h6>Time Table</h6>
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <ul class="fa-ul text-primary">
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/time_table/SE Class TT  Sem 1 A.Y. 2021-22(for website).pdf">SY - B. Tech
                      (Mechanical
                      Engineering)</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- end accordion -->
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <h5 class="text-center p-3">TE</h5>
        <!-- start accordion -->
        <div class="accordion accordion-flush" id="accordionFlushExample2">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne2">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne2">
                <h6>Course Outline</h6>
              </button>
            </h2>
            <div id="flush-collapseOne2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne2"
              data-bs-parent="#accordionFlushExample2">
              <div class="accordion-body">
                <ul class="fa-ul text-primary">
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/course_outline/Course Outline TE Design of Machine Elements.pdf">Design of Machine Elements </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/course_outline/Course Outline TE Mechatronics.pdf">Mechatronics </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/course_outline/Course Outline_Heat and Mass Transfer-2021-22.pdf">Heat & Mass Transfer </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/course_outline/Courrse Outline for TE Numerical and Statistical Methods.pdf">Numerical & Statistical Methods </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/course_outline/Course outline TE Skill Development.pdf">Skill Development </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" hre f="../vender/files/course_outline/">Machining Science & Technology </a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading1ctd">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapse1ctd" aria-expanded="false" aria-controls="flush-collapse1ctd">
                <h6>Class Teacher Details</h6>
              </button>
            </h2>
            <div id="flush-collapse1ctd" class="accordion-collapse collapse" aria-labelledby="flush-heading1ctd"
              data-bs-parent="#accordionFlushExample2">
              <div class="accordion-body">
                <div class="container p-2 mt-1 class-teacher">
                  <div class="container-fluid content-panel">
                    <div class="row justify-content-around">
                      <div class="col-lg-3 col-sm-6">
                        <div class="item  text-center">
                          <div class="text-center"><img src="../faculty%20photo/Dr.%20Amrita%20Francis.jpg"></div>
                          <h6 class="h6 text-center">Dr. Amruta Francis</h6>
                          <p class="batch">~ TE Division-A</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="item    text-center">
                          <div class="text-center"><img src="../faculty%20photo/Gaffar_G._Momin.jpg"></div>
                          <h6 class="h6 text-center">Mr. G. G. Momin</h6>
                          <p class="batch">~ TE Division-B</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="item    text-center">
                          <div class="text-center"><img src="../faculty%20photo/Dr.%20Avinash%20Borgaonkar.JPG"></div>
                          <h6 class="h6 text-center">Dr. A. V. Borgaonkar</h6>
                          <p class="batch">~ TE Division-C</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingctdte">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapsectdte" aria-expanded="false" aria-controls="flush-collapsectdte">
                <h6>Class Assistants</h6>
              </button>
            </h2>
            <div id="flush-collapsectdte" class="accordion-collapse collapse" aria-labelledby="flush-headingctdte"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="container p-2 mt-1 class-teacher">
                  <div class="container-fluid content-panel">
                    <div class="row justify-content-around">
                      <div class="col-lg-3 col-sm-6">
                        <div class="item  text-center">
                          <div class="text-center"><img src="../people/Staff Photo/Ashish Kumkar.jpg"></div>
                          <h6 class="h6 text-center">Mr. A.R. Kumkar</h6>
                          <p class="batch">~ SY Division-A</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="item    text-center">
                          <div class="text-center"><img src="../people/Staff Photo/Santosh Shinde 3.jpg"></div>
                          <h6 class="h6 text-center">Mr. S.A. Shinde</h6>
                          <p class="batch">~ SY Division-B</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="item    text-center">
                          <div class="text-center"><img src="../people/Staff Photo/Kanifnath Mhaske.jpg"></div>
                          <h6 class="h6 text-center">Mr. K.T. Mhaske</h6>
                          <p class="batch">~ SY Division-C</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading1ac">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapse1ac" aria-expanded="false" aria-controls="flush-collapse1ac">
                <h6>Activity Calender</h6>
              </button>
            </h2>
            <div id="flush-collapse1ac" class="accordion-collapse collapse" aria-labelledby="flush-heading1ac"
              data-bs-parent="#accordionFlushExample2">
              <div class="accordion-body">
                <ul class="fa-ul text-primary">
                  <!-- <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none"
                      href="https://drive.google.com/file/d/1musjFgAnb8EYkRN_IipGu5vsgZqwy95-/view?usp=sharing">Activity Calendar of
                      the Institute for TE.</a></li> -->

                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none"
                      href="../vender/files/activity_calendar/Event calender UG TE &BE SEM ll.pdf">Activity Calendar of
                      the Institute for TE.</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo2">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo2" aria-expanded="false" aria-controls="flush-collapseTwo2">
                <h6>Syllabus</h6>
              </button>
            </h2>
            <div id="flush-collapseTwo2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo2"
              data-bs-parent="#accordionFlushExample2">
              <div class="accordion-body">
                <ul class="fa-ul text-primary">
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none"
                      href="../vender/files/syllabus/TE_Mechanical Engineering (2019 Course).pdf">T.E - Bachlor of
                      Engineering
                      (Mechanical Engineering)</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree2">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree2" aria-expanded="false" aria-controls="flush-collapseThree2">
                <h6>Time Table</h6>
              </button>
            </h2>
            <div id="flush-collapseThree2" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2"
              data-bs-parent="#accordionFlushExample2">
              <div class="accordion-body">
                <ul class="fa-ul text-primary">
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none"
                      href="../vender/files/time_table/TE Class TT  Sem 1 A.Y. 2021-22.pdf">T.E - Bachlor of Engineering
                      (Mechanical
                      Engineering)</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- end accordion -->
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <h5 class="text-center p-3">BE</h5>
        <!-- start accordion -->
        <div class="accordion accordion-flush" id="accordionFlushExample3">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne3">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne3" aria-expanded="false" aria-controls="flush-collapseOne">
                <h6>Course Outline</h6>
              </button>
            </h2>
            <div id="flush-collapseOne3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne3"
              data-bs-parent="#accordionFlushExample3">
              <div class="accordion-body">
                <ul class="fa-ul text-primary">
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/course_outline/course outline Hydraulics and Pneumatics 2021-22 Sem .pdf">Hydraulics and Pneumatics </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/course_outline/Course Outline _CAD_CAM and Automation.pdf">CAD/CAM Automation </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" hre f="../vender/files/course_outline/">Dynamics of Machinery </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/course_outline/Course Outline Finite Element Analysis (ELE I).pdf">Finite Element Analysis </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/course_outline/Course Outline.Automobile Engg.2021-22.GGM.14.10.21.pdf">Automobile Engineering</a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/course_outline/Course outline_Operation Research.pdf">Operations Research </a></li>
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/course_outline/Course Outline Refrigeration and Air Conditioning.pdf">Heating Ventilation and Air Conditioning</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading2ctd">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapse2ctd" aria-expanded="false" aria-controls="flush-collapse2ctd">
                <h6>Class Teacher Details</h6>
              </button>
            </h2>
            <div id="flush-collapse2ctd" class="accordion-collapse collapse" aria-labelledby="flush-heading2ctd"
              data-bs-parent="#accordionFlushExample3">
              <div class="accordion-body">
                <div class="container p-2 mt-1 class-teacher">
                  <div class="container-fluid content-panel">
                    <div class="row justify-content-around">
                      <div class="col-lg-3 col-sm-6">
                        <div class="item  text-center">
                          <div class="text-center"><img src="../faculty photo//mu" alt = "Mr. S. S. Mule Photo"></div>
                          <h6 class="h6 text-center">Mr. S. S. Mule</h6>
                          <p class="batch">~ BE Division-A</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="item    text-center">
                          <div class="text-center"><img src="../faculty%20photo/SRWankhede.jpg"></div>
                          <h6 class="h6 text-center">Mr. S. R. Wankhede</h6>
                          <p class="batch">~ BE Division-B</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="item    text-center">
                          <div class="text-center"><img src="../faculty%20photo/Gauri_Phadtare.jpeg"></div>
                          <h6 class="h6 text-center">Mrs. G. V. Phadtare</h6>
                          <p class="batch">~ BE Division-C</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingctdbe">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapsectdbe" aria-expanded="false" aria-controls="flush-collapsectdbe">
                <h6>Class Assistants</h6>
              </button>
            </h2>
            <div id="flush-collapsectdbe" class="accordion-collapse collapse" aria-labelledby="flush-headingctdbe"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="container p-2 mt-1 class-teacher">
                  <div class="container-fluid content-panel">
                    <div class="row justify-content-around">
                      <div class="col-lg-3 col-sm-6">
                        <div class="item  text-center">
                          <div class="text-center"><img src="../people/Staff Photo/Vinod Kalbhor.jpeg"></div>
                          <h6 class="h6 text-center">Mr. Vinod Kalbhor</h6>
                          <p class="batch">~ SY Division-A</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="item    text-center">
                          <div class="text-center"><img src="../people/Staff Photo/daundkar.jpg"></div>
                          <h6 class="h6 text-center">Mr. B.D. Daundkar</h6>
                          <p class="batch">~ SY Division-B</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <div class="item    text-center">
                          <div class="text-center"><img src="../people/Staff Photo/Mahesh More.jpg"></div>
                          <h6 class="h6 text-center">Mr. M.S. More</h6>
                          <p class="batch">~ SY Division-C</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading2ac">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapse2ac" aria-expanded="false" aria-controls="flush-collapse2ac">
                <h6>Activity Calender</h6>
              </button>
            </h2>
            <div id="flush-collapse2ac" class="accordion-collapse collapse" aria-labelledby="flush-heading2ac"
              data-bs-parent="#accordionFlushExample3">
              <div class="accordion-body">
                <ul class="fa-ul text-primary">
                  <!-- <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none"
                      href="https://drive.google.com/file/d/1musjFgAnb8EYkRN_IipGu5vsgZqwy95-/view?usp=sharing">Activity Calendar of
                      the Institute for BE.</a></li> -->
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none"
                      href="../vender/files/activity_calendar/Event calender UG TE &BE SEM ll.pdf">Activity Calendar of
                      the Institute for BE.</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo3">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo3" aria-expanded="false" aria-controls="flush-collapseTwo">
                <h6>Syllabus</h6>
              </button>
            </h2>
            <div id="flush-collapseTwo3" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo3"
              data-bs-parent="#accordionFlushExample3">
              <div class="accordion-body">
                <ul class="fa-ul text-primary">
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none" href="../vender/files/syllabus/Final year mech.pdf">B.E - Bachlor of
                      Engineering
                      (Mechanical Engineering)</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree3">
              <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree3" aria-expanded="false" aria-controls="flush-collapseThree">
                <h6>Time Table</h6>
              </button>
            </h2>
            <div id="flush-collapseThree3" class="accordion-collapse collapse" aria-labelledby="flush-headingThree3"
              data-bs-parent="#accordionFlushExample3">
              <div class="accordion-body">
                <ul class="fa-ul text-primary">
                  <li><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span> <a target="_blank"
                      class="text-decoration-none"
                      href="../vender/files/time_table/BE Class TT Sem 1 A.Y. 2021-22 (FOR WEBSITE).pdf">B.E - Bachlor
                      of Engineering
                      (Mechanical Engineering)</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- end accordion -->
      </div>
    </div>
  </div>


  <!-- End content -->


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
            <a targrt="_blank" href="https://www.linkedin.com/company/pccoe-pune/?trk=biz-companies-cym"
              class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-linkedin-in"></i>
              </span>
            </a>
            <a targrt="_blank" href="https://www.facebook.com/PCCOENigadi/" class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-facebook"></i>
              </span>
            </a>

            <a targrt="_blank"
              href="https://twitter.com/pccoe_pune?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
              class="text-decoration-none text-white">
              <span class="fs-4">
                <i class="fab fa-twitter"></i>
              </span>
            </a>
            <a targrt="_blank" href="https://www.youtube.com/channel/UCQiPDETOiteTLmAvvPk1WjA"
              class="text-decoration-none text-white">
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
            <a targrt="_blank" href="mailto:admin@pccoepune.org" class="text-decoration-none text-white">
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
              <a targrt="_blank" href="../index.php" class="text-decoration-none text-white">
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
  </footer>
  <?php include("../pccoe-footer.php"); ?>
  <!-- End footer -->
  <script src="../vender/js/bootstrap.bundle.js"></script>
  <!-- <script src="vender/js/navbar.js"></script> -->

</body>

</html>
