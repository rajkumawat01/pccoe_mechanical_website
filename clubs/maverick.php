<!doctype html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y33X5YZFHF"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-Y33X5YZFHF');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Team Maverick | Clubs | Department Of Mechanical Engineering at PCCOE</title>
    <!--for title logo-->
    <link href="../vender/img/logo/PCCOE_LOGO_b.jpg"  rel="shortcut icon" type="image/x-icon">

    <!--for icons-->
    <link href="../vender/icon/css/brands.css" rel="stylesheet" />
    <link href="../vender/icon/css/fontawesome.css" rel="stylesheet" />
    <link href="../vender/icon/css/solid.css" rel="stylesheet" />
    <!-- PCCOE HEADER FOOTER CSS FILE -->	
    <link rel="stylesheet" href="../imp-pccoe-style.css" type="text/css" />
    <!--styling applied within clubs-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../vender/css/navbar.css" rel="stylesheet" />
    <link href="../vender/css/style1.css" rel="stylesheet" />

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
                    <li><a href="mesa.php">MESA</a></li>
                    <li><a href="ambush.php">Team Ambush</a></li>
                    <li><a href="redbaron.php">Team Red Baron</a></li>
                    <li><a href="kratos.php">Team Kratos Racing</a></li>
                    <li><a href="solarium.php">Team Solarium</a></li>
                    <li><a href="automaton.php">Team Automatons</a></li>
                    <li><a href="maverick.php">Team Maverick</a></li>
                    <li><a href="ishrae.php">ISHRAE</a></li>
                    <li><a href="iei.php">IEI</a></li>
                    <li><a href="sport.php">Sports</a></li>
                </ul>
            </li>
            <li class="b-left b-right"><a href="../contact_us/contact.php">Contact us</a></li>
        </ul>
    </nav>
  </div>
  <!-- End Navbar -->
      
    <section class="mt-5 p-3">
      
      <div class="container-lg">
        <div class="border-5 border-start border-primary shadow rounded
                      mb-4 ps-3 py-2 align-self-center text-dark">
          <div class="row">
          <div class="col-lg-9 col-md-8 col-sm-12">
            <h2>Team Maverick</h2>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-4 d-flex justify-content-around align-self-center">
              
              <a href="https://www.instagram.com/team_maverick_pccoe/" target="_blank" class="text-decoration-none text-dark">
                <span style="font-size: 1.6rem;">
                  <!--<i class="fab fa-instagram-square"></i>-->
                  <img src="img/logo/simple/icons8-instagram-48.png" style="max-width: 40px;" alt="icon">
                </span> 
              </a>
              <a href="https://www.linkedin.com/in/team-automatons/" target="_blank" class="text-decoration-none text-dark">
                <span style="font-size: 1.6rem;">
                  <!--<i class="fab fa-linkedin"></i>-->
                  <img src="img/logo/simple/icons8-linkedin-48.png" style="max-width: 40px;" alt="icon">
                </span> 
              </a>
              <a href="https://www.facebook.com/teamautomatons/" target="_blank" class="text-decoration-none text-dark">
                <span style="font-size: 1.6rem;">
                  <!--<i class="fab fa-facebook"></i>-->
                  <img src="img/logo/simple/icons8-facebook-48.png" style="max-width: 40px;" alt="icon">
                </span> 
              </a>
          </div>
        </div>
          </div>
        
        <div class="bg-light shadow rounded p-3">
          <div class="border-bottom border-1 border-primary mb-3">
            <p class="fs-3 text-primary">About us</p>
          </div>
        <div class="row justify-content-center align-self-center my-3">
          <div class="col-lg-9 text-start">
            <div class="row justify-content-center">
              <div class="col-lg-3 col-md-6 justify-content-center">
                <div class="card shadow p-2">
                  <img src="img/teammaverick/mv_img0.png" class="card-img" alt="Image of faculty advisor of Team ambush">
                </div>
              </div>
              <div class="col-lg-9 col-md-12 text-start">
                <p class="my-4 text-dark">
                  Team Maverick is a multifaceted motorsport team at Pimpri Chinchwad college of Engineering
                  Pune. We design, innovate, manufacture and test fixed Wing Radio controlled planes.
                  The main aim of the team is to Participate in <span class="fw-bold">SAE ADC (Aero Design Challenge)</span> organised by SAE
                  India and SAE International. We also develop the application based on aeroplanes
                  manufactured for competitions.</p>
              </div>
            </div>
            <p class="my-4 text-dark">
              The team was founded in 2021 and is about to manufacture its first aircraft. Putting all the
              brainstorming, design and sleepless nights together, the team aims to be part of the expanding
              field and we are committed to build better aircraft in the future and contribute to society.
              The team aspires to develop an application that will help society over a period of time.</p>
          </div>
          <div class="col-lg-3 justify-content-center">
            <div class="card" style="width: 80%;">
              <img src="img\teammaverick\mv_img1_1.jpg" class="card-img" alt="Image of faculty advisor of Team Maverick">
              <div class="card-body">
                <p class="card-text text-center "><span class="fw-bold">Prof. Chandan Ingole</span><br/>
                  <span class="text-secondary fw-light">Faculty Advisor</span></p>
              </div>
            </div>
          </div>
        </div>
        <div>
            <div class="row my-3">
              <div class="col-lg-7 col-md-6">
                <dl class="row">
                  <dt class="col-md-3">Team Goal:</dt>
                  <dd class="col-md-9">To engage in SAE ADC and make advancements in the aeronautical and aerospace field. We also
                    have the intention to build autonomous flight by the end of 2022. The team aims to develop an
                    application that will help in the various public sectors and humanity and for the same, the team
                    is anticipating work with the defence and aviation sector in near future. The team also aims to
                    participate in the NASA Student Launch competition.</dd>
                
                  <dt class="col-md-3">Team Objective:</dt>
                  <dd class="col-md-9">
                    <p>The main objective of the team is SAE ADC and the application. This competition provides a
                      platform for undergraduate engineering students with challenges of real-life engineering. This
                      competition prompts the participants to conceive, design and develop a fixed-wing UAV
                      (Unmanned Aerial Vehicle).</p> 
                  </dd>
                </dl>
              </div>
              <div class="col-lg-5 col-md-6">
                <div class="card" style="max-width: 400px;">
                  <img src="img\teammaverick\mv_img2.jpg" class="card-img img-thumbnail" alt="Team ambush">
                </div>
              </div> 
            </div>
            </div>
             <div class="teamvideo  border-bottom  p-2 rounded" height = "fit-content" width = "100%" style = "display : flex; justify-content : space-around; align-items:center; border-radius: 50px;
background: #eceffe;
box-shadow:  6px 6px 11px #bebebe,
             -6px -6px 11px #ffffff;">
             <p class="font-weight-light h3">Team Maverick PCCOE Motorsport video</p>
              <iframe src="https://drive.google.com/file/d/1FEYiEBwC6x5tf-2v4tqQkBaRntIxnuUK/preview" width="640" height="480" allow="autoplay"></iframe>
             <!-- <iframe width="40%" height="255" src="https://www.youtube.com/embed/AcUNwGo9pEA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
             </div>
        </div>
      </div>
    </section>

    <section class="p-5">
      <div class="container-lg ">
        <div class="bg-light shadow rounded p-3">
          <div class="border-bottom border-1 border-primary mb-3">
            <p class="fs-3 text-primary">Events</p>
          </div>
        <div class="row my-3">
          <p class="text-dark"><span class="fw-bold fs-5">SAE ADC 2021-22</span></p>
          <p class="text-dark fw-bold">Boeing IIT national Aeromodelling competition</p>
          <div class="col-lg-7 text-lg-start">

            <p class="text-dark fw-bold">Outcome:</p>
            <ol class="list-styled">
              <li>Students get hands-on experience and skills like designing, manufacturing marketing and
                expenditure management.</li>
              <li>Students will get experience working in a team.</li>
              <li>Students will discover and expand in the field of aerospace and aeronautics.</li>
              <li>Students will achieve the skill of problem-solving.</li>
              <li>Participation in the event will ensure the enhanced productivity and efficiency of an
                individual student.</li>
            </ol>
            
          </div>
          <div class="col-lg-5 justify-content-center align-self-center d-flex">
            <div class="card">
              <img src="img\teammaverick\mv_img4.jpg" class="card-img img-thumbnail" alt="Team maverick">
              <!--<div class="card-body">
                <p class="card-text"><span class="fw-bold">Prof. Ishan Sathane</span><br/>Faculty Advisor</p>
              </div>-->
            </div>
          </div>
        </div>

        <div class="row my-3 justify-content-center align-self-center">
          <div class="col-lg-4 col-md-6">
            <img src="img\teammaverick\mv_img3.jpg" class="img-thumbnail mb-3" alt="Team ambush">
          </div>
          <div class="col-lg-4 col-md-12">
            <img src="img\teammaverick\mv_img5.jpg" class="img-thumbnail mb-3" alt="Team ambush">
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
</footer>
<?php include("pccoe-footer.php"); ?>
<!-- End footer -->

    <script src="js/bootstrap.bundle.js"></script>

  </body>
</html>
