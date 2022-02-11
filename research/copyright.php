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
    Intellectual Property Rights | Research | Department of Mechanical Engineering at PCCOE 
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
      Intellectual Property Rights
    </h2>
  </div>
<div class="container program-outcome hod-desk bg-light">
  <br>
  <div class="container-fluid title">A ) Patents filed:
  </div>
  <br>
  <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
             <h6>2020-21</h6> 
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
              <table class="table table-hover table-borderless">
                  <thead class="table-primary">
                      <tr>
                          <th>Sr. No.</th>
                          <th>Author</th>
                          <th>Title</th>
                          <th>Patent Application no.</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>V.Y. Gaikhe and IIT Bombay</td>
                          <td>An apparatus for positioning and loading a test specimen</td>
                          <td>202021037234</td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>Mrs. G. V. Phadtare</td>
                          <td>Hybridization of line and point solar collector for performance enhancement.</td>
                          <td>202121018263</td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>Dr Sanjay Lakade</td>
                          <td>Apparatus for pulling and shredding plant stalks</td>
                          <td>202121012331</td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>Rahul Autade,Nachiket Joshi</td>
                          <td>Pultrusion setup for the manufacturing of continuous fibre 3D printing filament</td>
                          <td>202121005849</td>
                      </tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              <h6>2019-20</h6>
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
              <table class="table table-hover table-borderless">
                  <thead class="table-primary">
                      
                        <tr>
                          <th>Sr. No.</th>
                          <th>Author</th>
                          <th>Title</th>
                          <th>Patent Application no.</th>
                      </tr>
                      
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>S.K. Bhoite</td>
                      <td>Dust Collector for hand and Bench Grinder</td>
                      <td>201921021671</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Dr.S.S. Lakade</td>
                      <td>Acoustic Energy Wall</td>
                      <td>315426-001</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Munot Divya</td>
                      <td>BS-VI Diesel Particulate Filters(DPF)Cleaning with the Help of Acoustic Sonic Soot Blower Equipment</td>
                      <td>201921029470</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Prof. Nilesh Gaikwad & students</td>
                      <td>Evaporative cooling attachment for conventional ceiling fan to get efficient cooling</td>
                      <td>202021000018</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Onkar Narharshettiwar</td>
                      <td>Effective and efficient solution for solar energy generation</td>
                      <td>202021003184</td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              <h6>2018-19</h6>
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
              <table class="table table-hover table-borderless">
                  <thead class="table-primary"> 
                    <tr>
                      <th>Sr. No.</th>
                      <th>Author</th>
                      <th>Title</th>
                      <th>Patent Application no.</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>1</td>
                        <td>Abhishek Vilas Chaudhari</td>
                        <td>Virtual Online Shopping</td>
                        <td>201821039167 </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Sudarshan Netajee Jawale</td>
                        <td>An alternative material for A-pillar of car</td>
                        <td>201821039173</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Shinde Sangharsh Ravindra</td>
                        <td>The modifications in conventional three way catalytic converters with design of combined unit</td>
                        <td>201621004962</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Mr.R.R.Mane, Ms.S.S.Padwal,<br>Mr.P.U.Mulay,Ms.S.SPadalkar,  Mrs.V.Y.Gaikhe</td>
                        <td>Economic,Efficient and Effective System For Production of Bio-degradable Products from Agriculture</td>
                        <td>201921004709</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Aditya Choudhari</td>
                        <td>Adjustable neck and chin support for patients suffering from cervical problems</td>
                        <td>201921006256</td>
                      </tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
  </div>
</div>

<div class="container mt-5 program-outcome hod-desk bg-light">
  <br>
  <div class="container-fluid title">B ) Copyrights granted:
  </div>
  <div>
      <h4 style="color: rgba(0, 0, 0, 0.829);">
      
      </h4>
  </div>
  <br>
  <div class="accordion accordion-flush " id="accordionFlushExampletwo">
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingOnee">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOnee" aria-expanded="false" aria-controls="flush-collapseOnee">
             <h6>2020-21</h6> 
          </button>
        </h2>
        <div id="flush-collapseOnee" class="accordion-collapse collapse" aria-labelledby="flush-headingOnee" data-bs-parent="#accordionFlushExampletwo">
          <div class="accordion-body">
              <table class="table table-hover table-borderless">
                  <thead class="table-primary">
                      <tr>
                          <th>Sr. No.</th>
                          <th>Author</th>
                          <th>Title</th>
                          <th>Copyright no.</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>Mrs.Rita Pimpalkar</td>
                          <td>FEA Introduction</td>
                          <td>L-94293/2020</td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>Mrs.Rita Pimpalkar,Mr.Sachin Mate</td>
                          <td>Replacement of propellers with fish like propulsion system</td>
                          <td>L-94000/2020</td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>Mr. H. H. Kadam</td>
                          <td>Easy Steps to Draw an Involute</td>
                          <td>L-96760/2020</td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>Mr.  H.  H.  Kadam</td>
                          <td>Easy steps to Draw an Archimedean Spiral</td>
                          <td>L-99454/2021</td>
                      </tr>
                      <tr>
                          <td>5</td>
                          <td>U.I.Shaikh</td>
                          <td>Multiple choice question bank for engineering thermodynamics</td>
                          <td>L-100146/2021</td>
                      </tr>
                      <tr>
                          <td>6</td>
                          <td>Dr.A.Roy</td>
                          <td>Introduction to wind machines</td>
                          <td>L-94744/2020</td>
                      </tr>
                      <tr>
                          <td>7</td>
                          <td>Vaishnavi Kasar and Others</td>
                          <td>Kitchen waste crusher um composting machine for green waste</td>
                          <td>L-104970/2021</td>
                      </tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingTwoo">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwoo" aria-expanded="false" aria-controls="flush-collapseTwoo">
              <h6>2019-20</h6>
          </button>
        </h2>
        <div id="flush-collapseTwoo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwoo" data-bs-parent="#accordionFlushExampletwo">
          <div class="accordion-body">
              <table class="table table-hover table-borderless">
                  <thead class="table-primary">
                    <tr>
                        <th>Sr. No.</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Copyright no.</th>
                    </tr>
                      
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Rita Pimpalkar</td>
                      <td>Geometric Transformation</td>
                      <td>11261/2019-CO/L</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Sayali Dagade</td>
                      <td>Unstuck vehicles, Quick Drive! </td>
                      <td>12978/2019-CO/L</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>R.A.Guja</td>
                      <td>Theory of fluid mechanics through visuals</td>
                      <td>21073/2019-CO/L</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Rohit Sayaji</td>
                      <td>Design and development of coconut tree climbing and harvesting machine</td>
                      <td>151/2020-CO/L</td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingThreee">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThreee" aria-expanded="false" aria-controls="flush-collapseThreee">
              <h6>2018-19</h6>
          </button>
        </h2>
        <div id="flush-collapseThreee" class="accordion-collapse collapse" aria-labelledby="flush-headingThreee" data-bs-parent="#accordionFlushExampletwo">
          <div class="accordion-body">
              <table class="table table-hover table-borderless">
                  <thead class="table-primary"> 
                    <tr>
                      <th>Sr. No.</th>
                      <th>Author</th>
                      <th>Title</th>
                      <th>Copyright no.</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>1</td>
                        <td>Amit Divekar & PCCOE</td>
                        <td>Compact Paper Pulp Making Machine</td>
                        <td>8681/2018-CO/L</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Sampada Hiwarkhede & PCCOE</td>
                        <td>Auxillary to ceiling fan to get cold air</td>
                        <td>2877/2019-CO/A </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Rahul Gujar,Tejas Oak, Monika Thombre, Priyanka Shinde,Suyash Badiger & PCCOE</td>
                        <td>Design and development of EMG based Bionic Powered Exoskeleton arm for rehabilitation after monoplegia</td>
                        <td>2940/2019-CO/A</td>
                      </tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
  </div>
</div>
</div>
</section>    
        

    
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
</body>
</html>