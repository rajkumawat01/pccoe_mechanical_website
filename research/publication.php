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
    Publication | Research | Department of Mechanical Engineering at PCCOE 
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
<br>
<br>
<section class="p-md-3 p-md-3">
<div class="container-lg">
  <div class="border-5 border-start border-primary shadow mb-4 ps-3 py-2 align-self-center text-dark">
    <h2>
      Publication
    </h2>
  </div>
<div class="container mt-5 program-outcome hod-desk bg-light">
  <br>
  <div class="container-fluid title">Publication Summary
  </div>
  <br>
  <table class="table table-hover table-borderless">
    <thead class="table-primary">
      <tr>
          <th>Sr. No.</th>
          <th >Academic Year</th>
          <th >Number of Papers</th>
          <th>SCI/ SCIE and Scopus</th>
          <th>ESCI and Scopus</th>
          <th>ESCI</th>
          <th>Scopus</th>
          <th>Google Scholar</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>2021-2022</td>
      <td align="center">1</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">1</td>
      <td align="center">0</td>
    </tr>
    <tr>
      <td>2</td>
      <td>2020-2021</td>
      <td align="center">17</td>
      <td align="center">2</td>
      <td align="center">1</td>
      <td align="center">0</td>
      <td align="center">7</td>
      <td align="center">7</td>
    </tr>
    <tr>
      <td>3</td>
      <td>2019-2020</td>
      <td align="center">23</td>
      <td align="center">2</td>
      <td align="center">2</td>
      <td align="center">0</td>
      <td align="center">6</td>
      <td align="center">13</td>
    </tr>
    <tr>
      <td>4</td>
      <td>2018-2019</td>
      <td align="center">7</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">4</td>
      <td align="center">3</td>
    </tr>
    <tr align="center">
      <th colspan="2" align="center">Total</th>
      <th align="center">48</td>
      <th align="center">4</th>
      <th align="center">3</th>
      <th align="center">0</th>
      <th align="center">18</th>
      <th align="center">23</th>
    </tr>
  </tbody>
  </table>
</div>
<div class="container mt-5 program-outcome hod-desk bg-light">
  <br>
  <div class="container-fluid title">Journal Papers : 
  </div>
  <br>
  <div class="accordion accordion-flush" id="accordionFlushExample1">
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingOne1">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne1">
             <h6>A ) 2020-21</h6> 
          </button>
        </h2>
        <div id="flush-collapseOne1" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne1" data-bs-parent="#accordionFlushExample1">
          <div class="accordion-body">
            <ol class="my-list">
              <li>Chaudhari, V. D., Kulkarni, G. N., and Sewatkar, C. M., 2021, Computational fluid dynamics analysis of cabinet-type solar dryer, Journal of Food Process Engineering, Wiley, Vol. 44, No. 8, pp. 1-10, https://doi.org/10.1111/jfpe.13756 (SCIE & Scopus).</li>
              <li>Chaudhari, V. D., Kulkarni, G. N., and Sewatar, C. M., 2020, Mathematical modeling and computational fluid dynamics simulation of cabinet type solar dryer: Optimal temperature, Journal of Food Process Engineering, Wiley, Vol. 44, No. 4, pp. 1-12, https://doi.org/10.1111/jfpe.13643 (SCIE & Scopus).</li>
              <li>Gujar, R. A., Warhatkar, H. N., 2020, Estimation of mass apparent density and Young’s modulus of femoral neck-head region, Journal of Medical Engineering and Technology, Vol. 44, No. 7, pp. 378-388, https://doi.org/10.1080/03091902.2020.1799093 (ESCI & Scopus).</li>
              <li>Kore, A. N., and Lakade, S. S., 2021, Review on the overall development of jaggery plant to enhance thermal efficiency, Psychology and Education, Vol. 58, No. 3, pp. 2172 – 2180 (Scopus).</li>
              <li>Palkondwar, P., and Panchwadkar, A. A., 2020, Effect of parametric changes on the natural frequency of metallic bellow for constant bellow diameter (d) to cavity diameter (D) ratio, International Journal for Research in Applied Science & Technology, Vol. 8, pp. 77-82.</li>
              <li>Momin, G. G., Barve, R., Shah, M., Sutar, N., and James, D. J., 2021, Design and simulation of regenerative suspension system combined with electromagnetic braking system, International Journal of Creative Research Thoughts, Vol. 9, Issue 6, pp. 616-623.</li>
              <li>Momin, G. G., 2021, Experiment investigation of enhancement in efficiency of centrifugal pump by reduction in cavitation of pump, International Journal of Engineering Applied Sciences and Technology, Vol. 5, No. 10, pp. 270-276.</li>
              <li>Momin, G. G., Purkar, A. P., Lokhande, N. S., Sayyad, A. A., and Chavhan, R. R., 2020, A review on vehicle health monitoring system, International Journal for Modern Trends in Science and Technology, Vol. 6, No. 9, pp. 31-34, https://doi.org/10.46501/IJMTST060906.</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingTwo1">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo1" aria-expanded="false" aria-controls="flush-collapseTwo1">
              <h6>B ) 2019-20</h6>
          </button>
        </h2>
        <div id="flush-collapseTwo1" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo1" data-bs-parent="#accordionFlushExample1">
          <div class="accordion-body">
            <ol class="my-list">
              <li>Mandhare, N. A., and Karunamurthy, K., and Ismail, S., 2020, Computational investigation of flow over nose cap of closed impeller of mixed flow centrifugal pump, Journal of Pressure Vessel Technology, Vol. 142, No. 3, pp. 031701, https://doi.org/10.1115/1.4045727 (SCIE & Scopus).</li>
              <li>Mandhare, N. A., and Karunamurthy, K., and Ismail, S., 2020, Compendious review on “Internal flow physics and minimization of flow instabilities through design modifications in a centrifugal pump”, Journal of Pressure Vessel Technology, Vol. 141, No. 5, pp. 031701, https://doi.org/10.1115/1.4043383 (SCIE & Scopus).</li>
              <li>Deshmukh, P. A., Deshmukh, K. D., and Mandhare, N. A., 2020, Performance enhancement of centrifugal pump by minimizing casing losses, SN Applied Sciences, Vol 2, pp. https://doi.org/10.1007/s42452-020-2042-7 (ESCI & Scopus).</li>
              <li>Matekar, S. B., and Fulambarkar, A. M., 2020, Displacement analysis of slider in slider-crank mechanism with joint clearance, Australian Journal of Mechanical Engineering, pp. 1-10, https://doi.org/10.1080/14484846.2020.1763547 (ESCI & Scopus).</li>
              <li>Matekar, S. B., Fulambarkar, A. M., 2019, Tolerance design of path generating four bar mechanism, International Review of Mechanical Engineering, Vol. 13, No. 12, pp. 700-709 (Scopus).</li>
              <li>Vivekanandan, N., Fulambarkar, A. M., 2020, Experimental evaluation of anti-lock braking system performance of rough road, International Journal of Mechanical and Production Engineering Research and Development, Vol. 10, No. 2, pp. 589-604 (Scopus).</li>
              <li>Vivekanandan, N., Fulambarkar, A. M., and Waghmare, S., 2020, Experimental validation of fuzzy logic based anti-lock braking system used in quarter car model, International Journal of Control and Automation, Vol. 13, No. 2, pp. 332 – 348 (Scopus).</li>
              <li>Ladekar, C. L., Choudhary, S. K., 2019, Heat transfer analysis and performance measurements of hollow pin fin in natural convection cleaning robot, International Journal of Engineering and Advanced Technology, Vol. 8, No. 6, pp. 727-731 (Scopus).</li>
              <li>Shinde, N. N., and Panchwadkar, A. A., 2020, Thermo-structural analysis of runner of exhaust manifold, International Research journal of Engineering and Technology, Vol. 7, No. 3, pp. 3048-3052.</li>
              <li>Shinde, A. B., and Panchawadkar, A. A., 2020, Parametric study of micro electro mechanical system capacitive type accelerometer, International Research Journal of Engineering and Technology, Vol. 7, No. 3, pp. 155-159.</li>
              <li>Momin, G. G., Barve, R., Shah, M., Sutar, N., and James, D. J., 2020, A review of combined regenerative suspension and electromagnetic braking system, International Journal for Modern Trends in Science and Technology, Vol. 6, No. 9, pp. 19-23.</li>
              <li>Momin, G. G., Sopal, G., Kudal, A., Zodge, A., and Khandare, A., 2020, Design and manufacturing of customized water chiller for industrial process cooling, EPRA International Journal of Multidisciplinary Research, Vol. 6, No. 6, pp. 342-345.</li>
              <li>Senthil, R., Phadtare, G., and Vijayan, G., 2020, A parametric study on effect of drying performance of solar dryer integrated with a dehumidification unit, International Journal of Emerging Trends in Engineering Research, Vol. 8, No. 6, pp. 2321-2326.</li>
              <li>Gaykar, A., Jujaray, A., Mutalik, S., Waghmode, P., Matekar, S. B., 2020, Design and analysis of 3D scanning system for scanning an object, International Journal of Emerging Research and Technology, Vol. 9, No. 6, pp. 768-773.</li>
              <li>Solepatil, S., and Deore, N., 2019, Displacement analysis of compliant mechanism, International Journal of Engineering and Advanced Technology, Vol. 9, No. 1, pp. 4028-4032, DOI: 10.35940/ijeat.A1175.109119.</li>
              <li>Somwanshi, A. A., and Matekar, S. B., 2019, Design and manufacturing of automatic classroom vaccum cleaning robot, international journal of Engineering Research and Technology, Vol. 8, No. 10, pp. 266-269.</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingThree1">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree1" aria-expanded="false" aria-controls="flush-collapseThree1">
              <h6>C ) 2018-19</h6>
          </button>
        </h2>
        <div id="flush-collapseThree1" class="accordion-collapse collapse" aria-labelledby="flush-headingThree1" data-bs-parent="#accordionFlushExample1">
          <div class="accordion-body">
            <ol class="my-list">
              <li>Matekar, S. B., and Fulambarkar, A. M., 2018, Simulation and experimental validation of slider displacement in slider crank mechanism with connecting rod tolerance and joint clearance, International Review of Mechanical Engineering, Vol. 12, No. 12, pp. 965-974 (Scopus).</li>
              <li>Sabale, A., Gawade, S. S., and Gujar, R. A., 2018, Numerical analysis of femur bone by using finite element analysis, Series on Biomechanics, Vol. 32, No. 3, pp. 52-62 (Scopus).</li>
              <li>Mane, N. M., and Vivekanandan, N. V., 2019, Design and analysis of antilock braking system with fuzzy controller for motorcycle, International Research Journal of Engineering and Technology, Vol. 6, No. 6, pp. 2211-2217.</li>
              <li>Budale, S., Dhanrale, A., Joshi, A., and Matekar, S., 2018, Design and manufacturing of shuttle cock throwing robot, International Journal of Current Engineering Technology, Vol. 8, No. 4, pp. 963-967.</li>
            </ol>
          </div>
        </div>
      </div>
  </div>
</div>
<br>
<div class="container mt-5 program-outcome hod-desk bg-light">
  <br>
  <div class="container-fluid title">Conference Papers :
  </div>
  <br>
  <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingOnee">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOnee" aria-expanded="false" aria-controls="flush-collapseOnee">
             <h6>A ) 2021-22</h6> 
          </button>
        </h2>
        <div id="flush-collapseOnee" class="accordion-collapse collapse" aria-labelledby="flush-headingOnee" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <ol class="my-list">
              <li>More N., and Lakade S. S., 2021, Improvement in wear and friction properties of heat-treated steel using micro-grooved patterns, In: Rao, Y. V. D., Amarnath, C., Regalla, S. P., Javed, A., and Singh K.K. (eds), Advances in Industrial Machines and Mechanisms. Lecture Notes in Mechanical Engineering. Springer, Singapore. https://doi.org/10.1007/978-981-16-1769-0_41 (Scopus).
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingTwoo">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwoo" aria-expanded="false" aria-controls="flush-collapseTwoo">
              <h6>B ) 2020-21</h6>
          </button>
        </h2>
        <div id="flush-collapseTwoo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwoo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <ol class="my-list">
              <li>Golait, A. K., Mandhare, N. A., and Deshmukh, P. A., 2021, Experimental investigation of discharge coefficient of smooth-crested pattern notches entitled of various profiles, Materials Today: Proceedings, Vol. 47, No. 11, pp. 2765-2770, https://doi.org/10.1016/j.matpr.2021.03.183 (Scopus).</li>
              <li>Salve, S. P., and Fulambarkar, A. M., 2021, A solar dryer for drying green chili in a forced convection with more moisture removing rate, Sustainable Development in Mechanical Engineering (SDME 2020), Materials Today: Proceedings, Vol. 45, No. 2, pp. 3170-3176, https://doi.org/10.1016/j.matpr.2020.12.360 (Scopus).</li>
              <li>Gujar, R. A., and Warhatkar, H. N., 2021, In vitro estimation of fracture load and strain in sheep femur bone: Experimental approach, 3rd International Conference on Frontiers in Automobile and Mechanical Engineering, Materials Today: Proceedings, Vol. 44, pp. 3792-3797, https://doi.org/10.1016/j.matpr.2020.11.925 (Scopus).</li>
              <li>Matekar, S., and Fulambarkar, A., 2021, Robust design of deterministically synthesized four-bar mechanism, In: Narasimham, G. S. V. L., Babu, A. V., Reddy, S. S., and Dhanasekaran, R., (eds) Recent Trends in Mechanical Engineering, Lecture Notes in Mechanical Engineering. Springer, Singapore, pp. 397-365, https://doi.org/10.1007/978-981-15-7557-0_35 (Scopus).</li>
              <li>Matekar, S., and Fulambarkar, A., 2021, Robust synthesis of path generating four-bar mechanism, In: Narasimham, G. S. V. L., Babu, A. V., Reddy, S. S., and Dhanasekaran, R., (eds) Recent Trends in Mechanical Engineering, Lecture Notes in Mechanical Engineering. Springer, Singapore, pp. 397-365, https://doi.org/10.1007/978-981-15-7711-6_24 (Scopus).</li>
              <li>Mandhare, N. A., and Karunamurthy, K., 2021, Investigation on centrifugal pump performance for various nose-cap geometries, Lecture Notes in Mechanical Engineering, pp. 401-411, https://link.springer.com/chapter/10.1007/978-981-33-4165-4_37 (Scopus).</li>
              <li>Roy, A., Sen, R., and Shete, R., 2020, Investigation on different types of electric storage batteries used in off-grid solar power plants and procedures for their performance improvement, Springer Proceedings in Energy, https://link.springer.com/chapter/10.1007/978-981-15-5955-6_30 .</li>
              <li>Kore, A. N., Lakade, S. S., 2021, Analysis of three-stage open pan heat exchanger working on dual fuel for jaggery making. In: Pawar, P. M., Balasubramaniam, R., Ronge, B. P., Salunkhe, S. B., Vibhute, A. S., and Melinamath, B., (eds) Techno-Societal 2020. Springer, Cham. https://doi.org/10.1007/978-3-030-69921-5_84 .</li>
              <li>Joshi S., Gharat M., Lagad S., Khanvilkar S., and Kore A. N, 2021, Design of a household wet and dry waste segregation facilitator dustbin, In: Pawar P. M., Balasubramaniam R., Ronge B. P., Salunkhe S. B., Vibhute A. S., and Melinamath B. (eds) Techno-Societal 2020. Springer, Cham. https://doi.org/10.1007/978-3-030-69925-3_23.</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingThreee">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThreee" aria-expanded="false" aria-controls="flush-collapseThreee">
              <h6>C ) 2019-20</h6>
          </button>
        </h2>
        <div id="flush-collapseThreee" class="accordion-collapse collapse" aria-labelledby="flush-headingThreee" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <ol class="my-list">
              <li>Sen, R., Roy, A., Subramaniyan, S., and Thacker, H., 2019, Performance degradation and revival of old solar power plants and their batteries, IEEE International Conference on Clean Energy and Energy Efficient Electronics Circuit for Sustainable Development (INCCES), DOI: 10.1109/INCCES47820.2019.9167726 (Scopus).</li>
              <li>Samantaraya, D., Lakade, S., 2020, Hard turning cutting tool materials used in automotive and bearing manufacturing applications – A review, IOP Conf. Series: Materials Science and Engineering 814, (2020) 012005, IOP Publishing doi:10.1088/1757-899X/814/1/012005 (Scopus).</li>
              <li>More, A., and Roy, A., 2020, Design and weight minimization of small wind turbine blade for operation in low-wind areas, In Singh, S., and Ramadesigan, V., (eds.), Advances in Energy Research, Springer Proceedings in Energy, Vol. 2, pp. 311-322, https://doi.org/10.1007/978-981-15-2662-6_29.</li>
              <li>Parida, S., Roy, A., and Anjankar, P., 2019, Design and experimental study of prototype cold storage for various vegetables stored, In Pawar, P. M., et al. (eds.), Techno-Societal 2018, pp. 447-455, https://doi.org/10.1007/978-3-030-16848-3_41.</li>
              <li>Samantaraya, D., Lakade, S., 2020, Environmentally friendly machining for hardened steels, In Pawar, P. M., et al. (eds.), Techno-Societal 2018, pp. 491-499, https://doi.org/10.1007/978-3-030-16962-6_50.</li>
              <li>Roy, A., and Kulkarni, G. N., 2019, Optimization of cleaning periodicity of solar photovoltaic power plants, Proceedings of 11th International Conference on Applied Energy, Vol. 3, 2019.</li>
              <li>Bawane, A., Lakade, S., and Bhojwani, V., 2019, A study on performance enhancement of parabolic trough collector, Proceedings of E3S Web of Conference,https://doi.org/10.1051/e3sconf/202017001030.</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="accordion-item bg-light">
        <h2 class="accordion-header" id="flush-headingfourr">
          <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefourr" aria-expanded="false" aria-controls="flush-collapsefourr">
              <h6>C ) 2018-19</h6>
          </button>
        </h2>
        <div id="flush-collapsefourr" class="accordion-collapse collapse" aria-labelledby="flush-headingfourr" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <ol class="my-list">
              <li>Gaikhe, V., Sahu, J., and Pawade, R., 2018, Optimization of cutting parameters for cutting force minimization in helical ball end milling of Inconel 718 by using genetic algorithm, 8th CIRP Conference on High Performance Cutting, Procedia CIRP, pp. 477-480, https://doi.org/10.1016/j.procir.2018.08.261 (Scopus).</li>
              <li>Gaikhe, V., Gaikhe, Y. S., and Patil, J. P., 2018, Prediction of thrust force and torque in drilling of glass fiber reinforced plastic using mechanistic force model approach, 8th CIRP Conference on High Performance Cutting, Procedia CIRP, pp. 187-190, https://doi.org/10.1016/j.procir.2018.08.282 (Scopus).</li>
            </ol>
          </div>
        </div>
      </div>
  </div>
</div>
<br>
<div class="container mt-5 program-outcome hod-desk bg-light">
<br>
<div class="container-fluid title">Book Publication :
</div>
<br>
<div class="accordion accordion-flush" id="accordionFlushExample2">
  <div class="accordion-item bg-light">
    <h2 class="accordion-header" id="flush-headingOneee">
      <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOneee" aria-expanded="false" aria-controls="flush-collapseOneee">
          <h6>A ) 2019-20</h6> 
      </button>
    </h2>
    <div id="flush-collapseOneee" class="accordion-collapse collapse" aria-labelledby="flush-headingOneee" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <ol class="my-list">
          <li>More N., and Lakade S. S., 2021, Improvement in wear and friction properties of heat-treated steel using micro-grooved patterns, In: Rao, Y. V. D., Amarnath, C., Regalla, S. P., Javed, A., and Singh K.K. (eds), Advances in Industrial Machines and Mechanisms. Lecture Notes in Mechanical Engineering. Springer, Singapore. https://doi.org/10.1007/978-981-16-1769-0_41 (Scopus).
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
<br>
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