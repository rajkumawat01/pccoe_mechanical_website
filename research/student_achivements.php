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
    Student Achivements | Research | Department of Mechanical Engineering at PCCOE 
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
  <div class="container-lg">
    <div class="border-5 border-start border-primary shadow mb-4 ps-3 py-2 align-self-center text-dark">
      <h2>
        Student Achivements
      </h2>
    </div>
    <div class="bg-light p-4">
      <div class="border-bottom border-1 border-primary mb-3">
        <p class="fs-3 text-primary">A ) 2021-22</p>
      </div>
    
    <div class="row my-3 p-3">
      <ul class="list-styled">
        <h4>Outstanding Achievement in GATE 2022</h4>
        <div class="row">
          <div class="col-sm-6 mt-4 text-center">
            <img src="img/Prathamesh.png" alt="">
            <h6 class="p-0 m-0">Name: Prathamesh Pawar</h6>
            <p class="p-0 m-0">Paper Code:- Mechanical Engineering (ME)</p>
            <p class="p-0 m-0 text-rigth">GATE Score:- 70.07</p>
            <h6 class="p-0 m-0">All India Rank (AIR):- 182</h6>
          </div>
          <div class="col-sm-6 mt-4 text-center">
            <img src="img/nikhil.png" alt="">
            <h6 class="p-0 m-0">Name: Nikhil Somwanshi</h6>
            <p class="p-0 m-0">Paper Code:- Mechanical Engineering (ME)</p>
            <p class="p-0 m-0 text-rigth">GATE Score:- 64.1</p>
            <h6 class="p-0 m-0">All India Rank (AIR):- 522</h6>
            
            <p class="p-0 m-0 mt-3">Paper Code:-Engineering Sciences (XE)</p>
            <p class="p-0 m-0 text-rigth">GATE Score:- 70.67</p>
            <h6 class="p-0 m-0">All India Rank (AIR):- 155</h6>
          </div>
        </div>
          <br>
          <h5>List of GATE 2022 Qualifying Candidates</h5>
          <table class="table table-hover">
            <thead class="table-primary">
              <tr>
                <th colspan="4" class="text-center">GATE 2022 Mechanical Engineering (ME)</th>
              </tr>
              <tr>
                <th scope="col">Sr. No</th>
                <th scope="col">Name of Student</th>
                <th scope="col">Year</th>
                <th scope="col">Score</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>Prathamesh Pralhad Pawar</td>
                <td>BE</td>
                <td>70.07</td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Nikhil Chhotu Somwanshi</td>
                <td>BE</td>
                <td>64.1</td>
              </tr>
              <tr>
                <td>3.</td>
                <td>Rohan Rajendra Sawant</td>
                <td>BE</td>
                <td>51.56</td>
              </tr>
              <tr>
                <td>4.</td>
                <td>Animesh Wani</td>
                <td>BE</td>
                <td>51.21</td>
              </tr>
              <tr>
                <td>5.</td>
                <td>Atharva Pawar</td>
                <td>BE</td>
                <td>70.07</td>
              </tr>
              <tr>
                <td>6.</td>
                <td>Manish Ashok Kolhe </td>
                <td>TE</td>
                <td>39.7</td>
              </tr>
              <tr>
                <td>7.</td>
                <td>Harshal Harischandra Meher</td>
                <td>BE</td>
                <td>30.15</td>
              </tr>
              <tr>
                <td>8.</td>
                <td>Shivam Hake </td>
                <td>TE</td>
                <td>28.86</td>
              </tr>
              <tr>
                <td>9.</td>
                <td>Saurabh Vijay Nimbolkar</td>
                <td>TE</td>
                <td>21.82</td>
              </tr>
            </tbody>
          </table> 
          

          <table class="table table-hover">
            <thead class="table-primary">
              <tr>
                <th colspan="4" class="text-center">GATE 2022 Engineering Sciences (XE)</th>
              </tr>
              <tr>
                <th scope="col">Sr. No</th>
                <th scope="col">Name of Student</th>
                <th scope="col">Year</th>
                <th scope="col">Score</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>Nikhil Chhotu Somwanshi</td>
                <td>BE</td>
                <td>70.67</td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Animesh Wani</td>
                <td>BE</td>
                <td>47</td>
              </tr>
              <tr>
                <td>3.</td>
                <td>Manish Ashok Kolhe</td>
                <td>TE</td>
                <td>43</td>
              </tr>
            </tbody>
          </table>
      </ul>
    </div>
    </div>


    <div class="bg-light p-4">
      <div class="border-bottom border-1 border-primary mb-3">
        <p class="fs-3 text-primary">B ) 2018-19</p>
      </div>
    
    <div class="row my-3 p-3">
      <ul class="list-styled">
        <li>Team Red Baron participated in BAJA SAE INDIA 2019 and Enduro Students India (ESI) 2019 and won following awards: a)   BAJA SAE INDIA 2019 at Pithampur, Indore b)   2nd in Cost Event c) Overall : 5th rank nationwide.
        </li>
        <li> Team Red Baron participated in Enduro Students India (ESI) 2019 & won the following awards: a) 1st in Design Competition b) 2nd in Cost Event c)  3rd  in Endurance race d)  Overall : 4th rank nationwide
        </li>
        <li>Team Kratos Racing electric (TKRe) participated in the 2nd Annual FSEV Concept Challenge, hosted by Ather Energy at their headquarters in Bengaluru on Sunday October 7, 2018, was a huge success. List of Awards won by Team Kratos Racing electric: a) Overall Winner: First Place b)  Engineering Design: First Place c) Procurement Report: First Place d)   Best Battery Design: First Place e) e) FMEA Report	: Third place </li>
        <li>Team Kratos Racing Electric participated in Formula Bharat 2019 Electric held during 23rd Jan to 28th Jan, 2019 at Kari Motor Sports Coimbatore. Successfully completing this project in short span of 1 year was not easy, but with hard work, perseverance and determination TKR once again emerged as champion and made historic win at Formula Bharat Elecric 2019.
          <p>List of Awards won by Team Kratos Racing Electric: a) Overall Winner:                                	First Place b) Endurance: First Place c) Auto-cross: First Place d) Skid Pad: First Place e) Acceleration: First Place f) Engineering Design: First Place g) Efficiency:                                      First Place h) Business Plan: Second Place  i)  Cost: Third Place.  First team in history of Formula Bharat to Score: 943/1000. Team was Successfully led by Shubbhang Digge and 44 student members from Mechanical, EnTC , Computer, Civil and FE.
          </p>
        </li>
        <li>Techno chill event held at COEP:
          Techno chill is one of flagship event for all ISHRAE students. Every year students were eagerly waiting for this event to present their technical knowledge to all industrial fraternity. This event gives immense opportunity to students to showcase their talent to others. Prof. Abhijeet Kore worked as Jury for Quiz competition. Prof. Nilesh Gaikwad worked as Jury for Paper presentation.
          </li>
          <br>
          <table class="table table-hover table-borderless">
            <thead class="table-primary">
              <tr>
                <th scope="col">Sr no.</th>
                <th scope="col">Event</th>
                <th scope="col">Winning Rank</th>
                <th scope="col">Name of student</th>
                <th scope="col">Topic Name</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Project Idea Presentation</td>
                <td>Second Prize</td>
                <td>Komal R. Lavate <br> Prafulla A. Patil <br> Ankit A. Saraf</td>
                <td>Performance analysis of refrigerator for restaurant by using LPG refrigerant</td>

              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Paper Presentation</td>
                <td>Third Prize</td>
                <td>Rohit B. Nichit <br> Nitin S. Shinde</td>
                <td>Design and development of Cascade refrigeration system for testing at low temperature application</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Paper Presentation</td>
                <td>Second Prize</td>
                <td>Sachine Bargaje <br> Pranjali Ghule</td>
                <td>Design of small scale, low cost, cold storage system located underground</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Quiz Competition</td>
                <td>Third Prize</td>
                <td>Komal R. Lavate</td>
                <td>Questions are related HVAC&Racute
              </tr>
            </tbody>
          </table> 
          
        <li>Students of Team Solarium participated in Electric Solar Vehicle Championship (ESVC) 2018-19 the Asia-level Solar Vehicle. The vehicle “INVICTUS 3.0” won the following award in the event: a) Design: First - Adventure class b) Hill Climb: First - Adventure class c) Pre-Virtual: First - Adventure class d) Cross Pad: First Runner up e) Overall Position: Fourth
        </li>
      </ul>
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