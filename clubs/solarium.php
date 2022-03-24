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

    <title>Team Solarium | Clubs | Department Of Mechanical Engineering at PCCOE</title>
    
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
    <link href="css/button.css" rel="stylesheet" />

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
            <h2>Team Solarium</h2>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-4 d-flex justify-content-around align-self-center">
              <a href="https://www.teamsolariumindia.com/" target="_blank" class="text-decoration-none text-dark">
                <span style="font-size: 1.6rem;">
                  <!--<i class="fas fa-globe"></i>-->
                  <img src="img/logo/simple/icons8-chrome-48.png" style="max-width: 40px;" alt="icon">
                </span> 
              </a>
              <a href="https://www.instagram.com/teamsolarium_india/?hl=en" target="_blank" class="text-decoration-none text-dark">
                <span style="font-size: 1.6rem;">
                  <!--<i class="fab fa-instagram-square"></i>-->
                  <img src="img/logo/simple/icons8-instagram-48.png" style="max-width: 40px;" alt="icon">
                </span> 
              </a>
              <a href="https://www.linkedin.com/company/team-solarium/" target="_blank" class="text-decoration-none text-dark">
                <span style="font-size: 1.6rem;">
                  <!--<i class="fab fa-linkedin"></i>-->
                  <img src="img/logo/simple/icons8-linkedin-48.png" style="max-width: 40px;" alt="icon">
                </span> 
              </a>
              <a href="https://www.facebook.com/teamsolariumindia/" target="_blank" class="text-decoration-none text-dark">
                <span style="font-size: 1.6rem;">
                  <!--<i class="fab fa-facebook"></i>-->
                  <img src="img/logo/simple/icons8-facebook-48.png" style="max-width: 40px;" alt="icon">
                </span> 
              </a>
              <a href="https://twitter.com/solarium_team" target="_blank" class="text-decoration-none text-dark">
                <span style="font-size: 1.6rem;">
                  <!--<i class="fab fa-twitter"></i>-->
                  <img src="img/logo/simple/icons8-twitter-squared-48.png" style="max-width: 40px;" alt="icon">
                </span> 
              </a>
          </div>
        </div>
        </div>
        <div class="bg-light shadow rounded p-3">
          <div class="row justify-content-center my-3">
            <div class="col-lg-2 col-md-6 justify-content-center">
              <div class="card shadow">
                <img src="img/teamsolarium/ts_img0.jpg" class="card-img" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <div class="col-lg-9 col-md-12 text-start">
      
              <p class="my-4 text-dark">
                We are a team of dedicated engineering students <span class="fw-bold">working towards a greener tomorrow</span>. 
                We build automobiles that do not require burning of fossil fuels for their propulsion, 
                but rather a very abundantly available, renewable type of energy source, 
                <span class="fw-bold">THE SUN</span>.</p>
            </div>
          </div>
          <div class="row justify-content-center my-3">
            <div class="col-lg-9 col-md-12 text-start">
      
              <p class="my-4 text-dark">
                With the help of our Faculty Coordinator, <span class="fw-bold">Dr. Anindita Roy</span>, 
                along with <span class="fw-bold">Rishabh Mehta</span> and <span class="fw-bold">Calvin Raj</span>, 
                Team Solarium was founded in <span class="fw-bold">2016</span>. Since then, we have been we have 
                been working to improve our vehicle’s overall performance by incorporating bleeding-edge 
                technology into our design.</p>
              <p class="my-4 text-dark">
                We believe that renewable energy resources have the potential 
                to empower the world and at the heart of this belief, lies our team’s logo: The power of 
                the Sun combined with an engineering mindset to envision a greener future.</p>
            </div>
            <div class="col-lg-2 col-md-6 justify-content-center">
              <div class="card mt-2 shadow-sm">
                <img src="../faculty photo/ARoy.jpg" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
                <div class="card-body">
                  <p class="card-text text-center "><span class="fw-bold">Dr. Anindita Roy</span><br/>
                    <span class="text-secondary fw-light"><small>Faculty Coordinator</small></span></p>
                </div>
              </div>
            </div>
          </div>         
        </div>
      </div>
    </section>

    <section class="p-3">
      <div class="container-lg">
        <div class="bg-light shadow rounded p-3">
          <div class="row justify-content-center">
            <div class="col-lg-11 col-md-12 text-start">
              <div class="border-bottom border-1 border-primary mb-3">
                <p class="fs-3 text-primary">About us</p>
              </div>    
            </div>
          </div>
          <div class="row justify-content-center">
            
            <div class="col-lg-6 col-md-12 text-start">
      
              <p class="my-4 text-dark">
                Team Solarium, are a group of engineering students from the 
                Pimpri Chinchwad College of Engineering, (PCCOE) Pune, India. 
                We design and manufacture a Solar Electric Vehicles to compete 
                in Asia's largest <span class="fw-bold">Electric Solar Vehicle Championship (ESVC)</span>.</p>

              <p class="my-4 text-dark">
                At Team Solarium, we strongly believe that Solar Energy is 
                the next step in building a sustainable future. By taking on 
                the challenge of creating a light and efficient solar-electric 
                vehicle, we want to showcase its possibilities. It is a wonderful 
                opportunity for us students to attain hands-on experience. 
                We actively promote clean energy awareness and education, essential 
                pursuits in striving towards a cleaner future.</p>       
            </div>
            <div class="col-lg-5 col-md-6 justify-content-center align-self-center">
              <div class="card shadow">
                <img src="img/teamsolarium/ts_img7.jpg" class="card-img" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <div class="col-lg-11 col-md-6 justify-content-center">
              <p class="my-4 text-dark">
                Vehicles around the world are set for a paradigm shift with the 
                advent of electric vehicles and the search for clean energy. We 
                believe that the blend of upcoming technology with renewable energy 
                solutions is the way forward. We work to inculcate the latest designs, 
                innovations and invents new methods to improve efficiency of vehicles.</p>
            </div>
          </div>
             
        </div>
      </div>
    </section>

    <section class="p-3">
      <div class="container-lg">
        <div class="bg-light shadow rounded p-3">
          <div class="row justify-content-center">
            <div class="col-lg-11 col-md-12 text-start">
              <div class="border-bottom border-1 border-primary mb-3">
                <p class="fs-3 text-primary">INVICTUS 3.2 
                  <span class="badge fw-light fs-6 rounded-pill" style="background-color: #7F98D6;">
                    Season 2021-22
                  </span>
                </p>
              </div>     
            </div>
          </div>
          <div class="row justify-content-center">
            
            <div class="col-lg-7 col-md-12 text-start">
      
              <p class="my-4 text-dark">
                With the ongoing pandemic all the dynamic events were cancelled. 
                The team decided to counter this challenge by participating in 
                another virtual competition whilst still targeting the dynamic 
                event which was going to be held later that year.</p>

              <p class="my-4 text-dark">
                Invictus 3.2 was inspired by the previous year's design. It was 
                made for <span class="fw-bold">Saur Urja Vehicle Championship (SUVC)</span> virtual season 5 
                held from Oct 2021 to March 2022. SUVC is a national level solar 
                electric vehicle competition organized by <span class="fw-bold">REFRANGIBLE SOCIETY OF 
                TECHNOPHILE ENGINEERS (RSTE)</span>, that challenges engineering students 
                to work on electric vehicles with utilization of sustainable energy.</p>
              
                <p class="my-4 text-dark">
                Invictus 3.2 outperformed all the rival teams in the virtual 
                event by showcasing the innovative design and amazing display of 
                the features Invictus 3.2 holds.</p>
                
                <p class="my-4 text-dark">
                We grabbed various awards in the event:</p>
            </div>
            <div class="col-lg-4 col-md-6 justify-content-center align-self-center">
              <div class="card shadow-sm">
                <img src="img/teamsolarium/ts_img22.jpg" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <!-- <div class="col-lg-5 col-md-6 justify-content-center align-self-center">
              <div class="card shadow-sm">
                <img src="img/teamsolarium/ts_img8.png" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
              </div>
            </div> -->
            <div class="col-lg-11 col-md-11 justify-content-center">
              <!-- <p class="my-4 text-dark">
                Unfortunately, due to the Corona Virus outbreak and the lockdown 
                following soon in India, the ESVC 2020 was held virtually. Despite 
                this set-back, we grabbed the following awards and stood 2nd in 
                the entire country</p> -->
              <p class="fw-bold">Achievements: <button class="col rounded btn-purple-moon">Overall Rank: 1st</button></p>

              <div class="row">
                <div class="col-lg-4 col-md-4 justify-content-center">
                  <ul class="list-styled">
                    <li class="py-2">1st in Engineering Design First</li>
                    <li class="py-2">1st in Rulebook exam First</li>
                    <li class="py-2">1st in Marketing Report</li>
                  </ul>
                </div>

                <div class="col-lg-4 col-md-4 justify-content-center">
                  <ul class="list-styled">
                    <li class="py-2" >1st in Case Study Report</li>
                    <li class="py-2" >1st in DVP and DFMEA Report</li>
                    <li class="py-2" >1st in Winning Report</li>
                  </ul>
                </div>

                <div class="col-lg-4 col-md-4 justify-content-center">
                  <ul class="list-styled">
                    <li class="py-2" >2nd in Business Plan</li>
                    <li class="py-2" >3rd in Innovations Round</li>
                    <li class="py-2" >1st in CFD and ETKA Report</li>
                  </ul>
                </div>
              </div>
              
              <p class="my-4 text-dark">
                With an almost clean sweep, the team was able to achieve 
                the no. 1 position in the country and become national 
                champions for the very first time!</p>
            </div>
          </div>
             
        </div>
      </div>
    </section>

    <section class="p-3">
      <div class="container-lg">
        <div class="bg-light shadow rounded p-3">
          <div class="row justify-content-center">
            <div class="col-lg-11 col-md-12 text-start">
              <div class="border-bottom border-1 border-primary mb-3">
                <p class="fs-3 text-primary">INVICTUS 3.1 <span class="badge fw-light fs-6 rounded-pill" style="background-color: #7F98D6;">Season 2019-20</span></p>
              </div>     
            </div>
          </div>
          <div class="row justify-content-center">
            
            <div class="col-lg-7 col-md-12 text-start">
      
              <p class="my-4 text-dark">
                As upgradation is necessary to survive as the innovation always 
                continues and we decided not to be satisfied with our current 
                innovations. This is why we upgraded them as we know stagnate, 
                we fail and by flowing we win.</p>

              <p class="my-4 text-dark">
                Our latest creation, the Invictus 3.1 is the upgraded version of 
                Invictus 3.0 and the most efficient and best performing out of all 
                vehicles to date. We have incorporated all the previous features 
                and also, newly introduced innovations like self-designed and 
                manufactured carbon fibre battery box, IoT and Cloud Computing, 
                and automatic gear shifting. We also managed to make our vehicle 
                autonomous till stage 3 of vehicle autonomy.</p>       
            </div>
            <div class="col-lg-4 col-md-6 justify-content-center align-self-center">
              <div class="card shadow-sm">
                <img src="img/teamsolarium/ts_img9.jpg" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <div class="col-lg-5 col-md-6 justify-content-center align-self-center">
              <div class="card shadow-sm">
                <img src="img/teamsolarium/ts_img8.png" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 justify-content-center">
              <p class="my-4 text-dark">
                Unfortunately, due to the Corona Virus outbreak and the lockdown 
                following soon in India, the ESVC 2020 was held virtually. Despite 
                this set-back, we grabbed the following awards and stood 2nd in 
                the entire country</p>
              <p class="fw-bold">Achievements:</p>
            
              <ul class="list-styled">
                <li class="py-1" >1st in Pre-virtual</li>
                <li class="py-1" >1st in team video</li>
                <li class="py-1" >2nd in innovation presentation</li>
                <li class="py-1" >2nd in autonomous concept</li>
                <li class="py-1" >3rd in design presentation</li>
                <li class="py-1" ><button class="col rounded btn-purple-moon">Overall Rank: 2nd</button></li>
              </ul>
            </div>
          </div>
             
        </div>
      </div>
    </section>

    <section class="p-3">
      <div class="container-lg">
        <div class="bg-light shadow rounded p-3">
          <div class="row justify-content-center">
            <div class="col-lg-11 col-md-12 text-start">
              <div class="border-bottom border-1 border-primary mb-3">
                <p class="fs-3 text-primary">INVICTUS 3.0 <span class="badge fw-light fs-6 rounded-pill" style="background-color: #7F98D6;">Season 2018-19</span></p>
              </div>     
            </div>
          </div>
          <div class="row justify-content-center">
            
            <div class="col-lg-7 col-md-12 text-start">
      
              <p class="my-4 text-dark">
                After the success of our first ESVC competition we designed a 
                new vehicle with new innovations as everyone knows innovation 
                is the main thing for us engineers which would drive our 
                engineering endeavours.</p>

              <p class="my-4 text-dark">
                In Invictus 3.0 we added IOT for vehicle monitoring in real-time, 
                lightweight brake caliper that is 3 times lesser in weight than 
                industry standards. We also implemented automatic gear shifting 
                which has no manual transmission. Cloud computing was implemented 
                for data analysis of vehicle for making it more efficient and 
                validating our design.</p>       
            </div>
            <div class="col-lg-4 col-md-6 justify-content-center align-self-center">
              <div class="card shadow-sm">
                <img src="img/teamsolarium/ts_img10.jpg" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <div class="col-lg-5 col-md-6 justify-content-center align-self-center">
              <div class="card shadow-sm">
                <img src="img/teamsolarium/ts_img11.jpg" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 justify-content-center">
              <p class="my-4 text-dark">
                The Invictus 3.0 was built to compete in ESVC for the second time. 
                The vehicle held a plethora of innovative features and components 
                that helped win many awards in the competition</p>

              <p class="fw-bold">Achievements:</p>
            
              <ul class="list-styled">
                <li class="py-1" >1st in Pre-virtual</li>
                <li class="py-1" >1st to clear Technical inspection</li>
                <li class="py-1" >1st in Hill climb</li>
                <li class="py-1" >2nd in autocross</li>
                <li class="py-1" >Best design award</li>
                <li class="py-1" ><button class="col rounded btn-purple-moon">Overall Rank: 4th</button></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-3">
      <div class="container-lg">
        <div class="bg-light shadow rounded p-3">
          <div class="row justify-content-center">
            <div class="col-lg-11 col-md-12 text-start">
              <div class="border-bottom border-1 border-primary mb-3">
                <p class="fs-3 text-primary">The Passenger Vehicle</p>
              </div>     
            </div>
          </div>
          <div class="row justify-content-center">
            
            <div class="col-lg-7 col-md-12 text-start">
      
              <p class="my-4 text-dark">
                As we as a team in the solar electric vehicle domain will 
                not be limited to a car so we decided to make a passenger 
                vehicle. We as a team need to give some part of our innovation 
                and help to make technology environment friendly hence, we 
                took this initiative as a responsibility towards the environment.</p>

              <p class="my-4 text-dark">
                Along with the Invictus 3.0, we also designed and manufactured 
                an ergonomically sound passenger vehicle with real-time data 
                telemetry. <span class="fw-bold">Dassault Systemes</span> had sponsored the entire project 
                as they realized our potential and commitment towards spreading 
                awareness about clean energy and conservation of the environment</p>       
            </div>
            <div class="col-lg-4 col-md-6 justify-content-center align-self-center">
              <div class="card shadow-sm">
                <img src="img/teamsolarium/ts_img12.jpg" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <div class="col-lg-5 col-md-6 justify-content-center align-self-center">
              <div class="card shadow-sm">
                <img src="img/teamsolarium/ts_img13.png" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 justify-content-center">
              <p class="my-4 text-dark">
                The passenger vehicle could be used as an in-campus utility for our college. 
                It comprised of several features that Dassault Systemes appreciated:</p>
            
              <ul class="list-styled">
                <li class="py-1" >1+4 Configuration</li>
                <li class="py-1" >Ergonomic design</li>
                <li class="py-1" >Aesthetically pleasing</li>
                <li class="py-1" >Real time data telemetry</li>
              </ul>

              <p class="my-4 text-dark">
                This was also done to <span class="fw-bold">increase awareness and promote green energy</span> 
                so that we can inspire the future generation.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-3">
      <div class="container-lg">
        <div class="bg-light shadow rounded p-3">
          <div class="row justify-content-center">
            <div class="col-lg-11 col-md-12 text-start">
              <div class="border-bottom border-1 border-primary mb-3">
                <p class="fs-3 text-primary">Other Events</p>
              </div>     
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-11 col-md-12 text-start">
              <p class="my-4 text-dark">
                Apart from solar racing event, Team Solarium also takes part other 
                extracurricular activities in order to get technical and industrial 
                exposure. Some of these events are:</p>    
            </div>
            
            <div class="col-lg-7 col-md-12 text-start align-self-center">
              <p class="my-4 text-dark bg-white p-4">
                <span class="fw-bold">Engineering Expo</span> is a platform where we actively take part in. 
                It allows us to gain further contacts from the industry and learn 
                about technical innovations in the industry. It is the leading trade 
                fare for automotive engineers focusing on the car body processing chain</p>    
            </div>
            <div class="col-lg-4 col-md-6 justify-content-center align-self-center d-flex">
              <div class="card shadow-sm" style="max-width: 250px;">
                <img src="img/teamsolarium/ts_img14.jpg" class="card-img shadow-sm"  alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 justify-content-center align-self-center d-flex">
              <div class="card shadow-sm" style="max-width: 400px;">
                <img src="img/teamsolarium/ts_img15.jpg" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <div class="col-lg-7 col-md-6 justify-content-center align-self-center">
              <p class="my-4 text-dark bg-white p-4">
                We also have a social responsibility towards the nature. Hence, 
                we conduct a tree plantation drive to plant trees around Pune. 
                These extracurricular activities provide a setting to become 
                involved and to interact with team members, thus leading to 
                increased learning and enhanced development.</p>
            </div>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-lg-7 col-md-12 text-start align-self-center">
              <p class="my-4 text-dark bg-white p-4">
                  We have been invited to event like <span class="fw-bold">ICERP 
                  (International conference & exhibition on reinforced plastics)</span>  
                  in order to showcase our vehicle. It focuses on the up-gradation 
                  of composites technology in India to reach a global level in terms 
                  of product quality.</p>    
            </div>
            <div class="col-lg-4 col-md-6 justify-content-center align-self-center d-flex">
              <div class="card shadow-sm" style="max-width: 250px;">
                <img src="img/teamsolarium/ts_img16.jpg" class="card-img shadow-sm"  alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 justify-content-center align-self-center d-flex">
              <div class="card shadow-sm" style="max-width: 300px;">
                <img src="img/teamsolarium/ts_img17.jpg" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <div class="col-lg-7 col-md-6 justify-content-center align-self-center">
              <p class="my-4 text-dark bg-white p-4">
                <span class="fw-bold">KPIT Sparkle</span> has been a huge stage where our team members interact 
                with industrial experts and gain more knowledge through conversations 
                with them. They provide us valuable feedback and help us develop our 
                design and personal conversational skills.</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <section class="p-3">
      <div class="container-lg">
        <div class="bg-light shadow rounded p-3">
          <div class="row justify-content-center">
            <div class="col-lg-11 col-md-12 text-start">
              <div class="border-bottom border-1 border-primary mb-3">
                <p class="fs-3 text-primary">INVICTUS 2.0 <span class="badge fw-light fs-6 rounded-pill" style="background-color: #7F98D6;">Season 2017-18</span> </p>
              </div>     
            </div>
          </div>
          <div class="row justify-content-center">
            
            <div class="col-lg-7 col-md-12 text-start">
      
              <p class="my-4 text-dark">
                After the team’s success in NSVC we decided to participate and 
                make our mark in an ASIA Level Event, ESVC. It was a giant leap 
                for us as we were in a continent level championship. And the 
                success story continued.</p>

              <p class="my-4 text-dark">
                The second vehicle, Invictus v2.0, designed to do the same things, 
                but in a much more efficient and reliable way. It is being designed 
                to compete in the Electric Solar Vehicle Challenge 2017-18. It was 
                a completely new challenge with new obstacles and innovation was at 
                its peak during the season. </p>       
            </div>
            <div class="col-lg-4 col-md-6 justify-content-center align-self-center">
              <div class="card shadow-sm">
                <img src="img/teamsolarium/ts_img18.png" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <div class="col-lg-5 col-md-6 justify-content-center align-self-center">
              <div class="card shadow-sm">
                <img src="img/teamsolarium/ts_img19.jpg" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 justify-content-center">
              <p class="my-4 text-dark">
                The Invictus 2.0 was our first vehicle that was a part of ESVC 
                (Electric Solar Vehicle Championship). It was a unique carbon 
                fibre monocoque chassis, making Team Solarium the second team in 
                India to do so along with several other features. These features 
                helped us bag the following awards</p>

              <p class="fw-bold">Achievements:</p>
            
              <ul class="list-styled">
                <li class="py-1" >1st in Pre-virtual</li>
                <li class="py-1" >1st to clear Technical inspection</li>
                <li class="py-1" >Best design award</li>
                <li class="py-1" ><button class="col rounded btn-purple-moon">Overall Rank: 7th</button></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-3">
      <div class="container-lg">
        <div class="bg-light shadow rounded p-3">
          <div class="row justify-content-center">
            <div class="col-lg-11 col-md-12 text-start">
              <div class="border-bottom border-1 border-primary mb-3">
                <p class="fs-3 text-primary">INVICTUS 1.0 <span class="badge fw-light fs-6 rounded-pill" style="background-color: #7F98D6;">Season 2016-17</span></p>
              </div>     
            </div>
          </div>
          <div class="row justify-content-center">
            
            <div class="col-lg-7 col-md-12 text-start">
      
              <p class="my-4 text-dark">
                The Invictus 1.0 was the first vehicle made by Team Solarium. 
                As everyone knows entering the new domain of industry solar 
                electric cars is challenging as everyone faces challenges 
                Team solarium got success in its first attempt. We came 
                into existence, as a team in the month of September 2016, 
                and went on to design a solar-electric vehicle within 50 days, 
                built the working prototype in 90 days and had a successful 
                competition in March 2017</p>

              <p class="my-4 text-dark">
                Invictus 1.0 was designed and manufactured for a national level 
                event named National Solar Vehicle Challenge (NSVC). It outperformed 
                all the other vehicles. It was a competition, race-ready vehicle capable 
                of carrying the driver that runs on the power from the sun or the charge 
                stored in its batteries. It is capable of a top speed of 45 kmph by using 
                just a 1.25kW motor. It was designed and built to compete in the National 
                Solar Vehicle Challenge (NSVC) 2016-17.</p>       
            </div>
            <div class="col-lg-4 col-md-6 justify-content-center align-self-center">
              <div class="card shadow-sm">
                <img src="img/teamsolarium/ts_img20.jpg" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <div class="col-lg-5 col-md-6 justify-content-center align-self-center">
              <div class="card shadow-sm">
                <img src="img/teamsolarium/ts_img21.jpg" class="card-img shadow-sm" alt="Image of faculty advisor of Team ambush">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 justify-content-center">
              <p class="my-4 text-dark">
                In NSVC (National Solar Vehicle Championship) in the year 2017. 
                Our founding members built an optimum vehicle under 4 months and 
                within the last budget that helped us bag the following awards. 
                We stood 3rd in the entire country in the first season itself. 
                We won the following awards in first season itself</p>

              <p class="fw-bold">Achievements:</p>
            
              <ul class="list-styled">
                <li class="py-1" >1st in Pre-virtual</li>
                <li class="py-1" >1st to clear Technical inspection</li>
                <li class="py-1" >1st in autocross</li>
                <li class="py-1" >1st in acceleration</li>
                <li class="py-1" >Best design award</li>
                <li class="py-1" ><button class="col rounded btn-purple-moon">Overall Rank: 3rd</button></li>
              </ul>
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
