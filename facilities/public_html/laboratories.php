<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Laboratories | Facilities | Department Of Mechanical Engineering at PCCOE</title>
		<!-- Icon -->
		<link href="../../vender/img/logo/PCCOE_LOGO_b.jpg"  rel="shortcut icon" type="image/x-icon">
		 <!-- PCCOE HEADER FOOTER CSS FILE -->	
    <link rel="stylesheet" href="imp-pccoe-style.css" type="text/css"/>

		<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
		<link href="../../vender/css/navbar.css" rel="stylesheet" />
		<link href="../../vender/css/style1.css" rel="stylesheet" />
		
		<!-- Icon Link -->
		<link href="../../vender/icon/css/brands.css" rel="stylesheet" />
		<link href="../../vender/icon/css/fontawesome.css" rel="stylesheet" />
		<link href="../../vender/icon/css/solid.css" rel="stylesheet" />
		
		<style></style>
    
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
            <!--<link rel="stylesheet" href="lab.css" type="text/css"/>-->
			<title>Laboratories tab</title>
			
			<style>
		
			 html {
				scroll-behavior: smooth;
			}
            .col{
                padding: 10px;
            }
            .row{
                padding: 10px;
            }
            
            
           
            
            .container {
                text-align: center;
                padding: 5px 5px;
                font-family: sans-serif;
                width: 100%;
               
                font-weight: bold;
  
            }
            .xyz {
               padding-bottom: 1px;
               padding-top: 10px;
               font-size: 15px;
               font-weight: bold;
            }
            
            .image {
                opacity: 1;
                display: block;
                width: 100%;
                height: auto;
                transition: .5s ease;
                backface-visibility: hidden;
            }
            .image2 {
                opacity: 1;
                display: block;
                width: 70%;
                height: auto;
                transition: .5s ease;
                backface-visibility: hidden;
            }
            
            .middle {
                transition: .5s ease;
                opacity: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                text-align: center;
            }
            
            .text {
                background-color: #13B9E8;
                color: white;
                font-size: 16px;
                padding: 16px 32px;
            }
			
			
			.text2 {
                background-color: #1AA3E9;
                color:  white;
                font-size: 20px;
                padding: 2px 0px 1px 0px ;
				opacity: 0.8;
            }
			
            
            .effect {
                position: relative;
  
            }
            .effect:hover .image {
            opacity: 0.3;
            }

            .effect:hover .middle {
                opacity: 1;
            }
            
            .border2 {
                 border: 1px solid #555;
                 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .border3 {
                 border: 1px solid white;
                 box-shadow: 0 4px 4px 0 lightskyblue, 0 4px 4px 0 lightblue;
            }
			hr{
				 border: 1px solid black;
			
			}
			
			input[type=button]{
			background-color: #1AA3E9;
			border: none;
			color: white;
			padding: 16px 32px;
			text-decoration: none;
			margin: 4px 2px;
			cursor: pointer;
			font-size: 20px;
			font-weight: bold;
			border-radius: 12px;
			 box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
			}
			
		
		.card {
			transition: all 0.2s ease;
			cursor: pointer;
		}
		.container .card {
			 box-shadow: 0 3px 5px rgba(0, 0, 0, 0.5);
		}
		
		.card:hover {
			box-shadow: 0px 0px 0px 3px #87CEFA;
			transform: scale(1.09)
		}
		
		.card-text{
			font-family: "Verdana", Sans-serif;
			font-size: 14px;
		}
	
	
	
            


        </style>
    </head>
    <body>
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
            <li class="b-left"><a href="../../index.php">Home</a></li>
            <li class="b-left"><a href="#">About us
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm0">▾</label>
                </a>
                <input type="checkbox" id="sm0">
                <ul class="sub-menu">
                    <li><a href="../../aboutus/hod_desk.php">HOD Desk</a></li>
                    <li><a href="../../aboutus/vision-mission.php">Vision and Mission</a></li>
                    <li><a href="../../aboutus/program_outcome.php">Program Outcomes</a></li>
                    <li><a href="../../aboutus/BOS.php">Board Of Studies</a></li>
                    <li><a href="../../aboutus/student_alumni.php">Student and Alumni's</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">People
              <span class="drop-icon">▾</span>
              <label title="Toggle Drop-down" class="drop-icon" for="sm88">▾</label>
              </a>
              <input type="checkbox" id="sm88">
              <ul class="sub-menu">
                  <li><a href="../../people/faculty.php">Faculty</a></li>
                  <li><a href="../../people/staff.php">Staff</a></li>
              </ul>
          </li>
            <li class="b-left"><a href="#">Academics
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm8">▾</label>
                </a>
                <input type="checkbox" id="sm8">
                </a>
                <ul class="sub-menu">
                   <!-- <li>
                      <a href="">UG
                        <span class="drop-icon">▸</span>
                        <label title="Toggle Drop-down" class="drop-icon" for="smug">▾</label>
                      </a>
                      <input type="checkbox" id="smug">
                      </a>
                      <ul class="sub-menu">
                          <li><a href="../../ug/workshop_organised.php">Workshop Organised</a></li>
                          <li><a href="../../ug/workshop_attended.php">Workshop Attended</a></li>
                          <li><a href="../../ug/course_outline.php">Course Outline</a></li>
                          <li><a href="../../ug/activity_calender.php">Activity Calendar</a></li>
                      </ul>
                    </li>-->
                    
					<li><a href="../../ug/co_cordinator_desk.php">UG</a></li>
					<li>
                      <a href="">PG
                        <span class="drop-icon">▸</span>
                        <label title="Toggle Drop-down" class="drop-icon" for="sm5">▾</label>
                      </a>
                      <input type="checkbox" id="sm5">
                      </a>
                      <ul class="sub-menu">
                          <li><a href="../../pg/me-design.php">M.Tech Design Engineering</a></li>
                          <li><a href="../../pg/me-heatpower.php">M.Tech Heat Power Engineering</a></li>
                      </ul>
                    </li>
                    <li><a href="../../phd/phd_home.php">Ph. D</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Research
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smr">▾</label>
                </a>
                <input type="checkbox" id="smr">
                </a>
                <ul class="sub-menu">
                    <li><a href="../../research/sig.php">Research Team</a></li>
					          <li><a href="research/sig.php">Special Interest Groups (SIG)</a></li>
                    <li><a href="../../research/publication.php">Publication</a></li>
                    <li><a href="../../research/copyright.php">Intellectual Property Rights</a></li>
                    <li><a href="../../research/research funding.php">Research Funding </a></li>
                    <li><a href="../../research/cs_projects.php">Consultancy/Sponsored Projects</a></li>
                    <li><a href="../../research/student_achivements.php">Student Achievements</a></li>
                    <li><a href="../../research/entrepreneurship.php">Entrepreneurship</a></li>
                </ul>
            </li>

            <li class="b-left"><a href="#">Training & Placement
              <span class="drop-icon">▾</span>
              <label title="Toggle Drop-down" class="drop-icon" for="sm50">▾</label>
              </a>
              <input type="checkbox" id="sm50">
              </a>
              <ul class="sub-menu">
                  <li><a href="../../placement/recruiter.php">Major Recruiters</a></li>
                  <li><a href="../../placement/placement.php">Placement</a></li>
                  <li><a href="../../placement/internship.php">Internship</a></li>
                  <li><a href="../../placement/training.php">Industrial Visit & Training Program</a></li>
                  <li><a href="../../placement/mou.php">MOU's</a></li>
              </ul>
            </li>
            <li class="b-left"><a href="#">Facilities
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smsfc">▾</label>
                </a>
                <input type="checkbox" id="smsfc">
                </a>
                <ul class="sub-menu">
                    <li><a href="laboratories.php">Laboratories</a></li>
                    <li><a href="library.php">Library</a></li>
					<li><a href="seminar_hall.php">Seminar Hall</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Student Development & Welfare
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smsdw">▾</label>
                </a>
                <input type="checkbox" id="smsdw">
                </a>
                <ul class="sub-menu">
                    <li><a href="../../Student_development&Welfare/public_html/higher_studies.php">Higher study cell</a></li>
                    <li><a href="../../Student_development&Welfare/public_html/Communication_Personality_Development.php">Communication and Personality Development Cell</a></li>
                    <li><a href="../../Student_development&Welfare/public_html/professional_development.php">Professional Development Cell</a></li>
                    <li><a href="../../Student_development&Welfare/public_html/ISR.php">Institutional Social Responsibility</a></li>
                    <li><a href="../../Student_development&Welfare/public_html/nation_services_scheme.php">National Service Scheme</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Clubs
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="sm9">▾</label>
                </a>
                <input type="checkbox" id="sm9">
                </a>
                <ul class="sub-menu">
                    <li><a href="../../clubs/mesa.php">MESA</a></li>
                    <li><a href="../../clubs/ambush.php">Team Ambush</a></li>
                    <li><a href="../../clubs/redbaron.php">Team Red Baron</a></li>
                    <li><a href="../../clubs/kratos.php">Team Kratos Racing</a></li>
                    <li><a href="../../clubs/solarium.php">Team Solarium</a></li>
                    <li><a href="../../clubs/automaton.php">Team Automatons</a></li>
                    <li><a href="../../clubs/maverick.php">Team Maverick</a></li>
                    <li><a href="../../clubs/ishrae.php">ISHRAE</a></li>
                    <li><a href="../../clubs/iei.php">IEI</a></li>
                    <li><a href="../../clubs/sport.php">Sports</a></li>
                </ul>
            </li>
            <li class="b-left b-right"><a href="../contact_us/index.php">Contact us</a></li>
        </ul>
    </nav>
  </div>
    
	
    
    
      <!-- Main content--> 
	<br>
	<section class="p-3">
      <div class="container-lg ">
	  <br>
	   <div class="border-5 border-start border-primary shadow mb-4 ps-3 py-2 align-self-center text-dark">
	   <h2>Laboratories</h2>
       </div>
	  <div class="bg-light shadow rounded p-3">
	  
	  <div class="container">
	  
        
		<!--<div class="text2">
        <h3>FY B.Tech</h3>
		</div>-->
		<div class="rounded-lg">
		<input type="button" value="FY B.Tech">
		</div>
		<div class="row">
		<div class="col-lg-4">
		<a href="#">
		<div class="card" style="width:100%">
		<img class="card-img-top" src="imageslab/FYComplab.jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="223px">
		</a>
		<div class="card-body">
		<p class="card-text">Computer Application Lab</p>
		</div>
		</div>
		</div>
       <!-- <div class="polaroid">
        <img src="imageslab/FYComplab.jpg" alt="Lab2" class="image2" style="width:100%" >
        <div class="xyz">
        <p>Computer Application Lab</p></a>
        </div>
        </div>-->
     
		
		<div class="col-lg-4">
		<a href="EME.php">
		<div class="card" style="width:100%"> 
		<img class="card-img-top" src="imageslab/EME (4).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="223px">
		</a>
		<div class="card-body">
		<p class="card-text">Elements of Mechanical Engineering Lab</p>
		</div>
		</div>
		</div>
		
		<div class="col-lg-4">
		<a href="#">
		<div class="card" style="width:100%"> 
		<img class="card-img-top" src="imageslab/drawinghall2.jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="223px">
		</a>
		<div class="card-body">
		<p class="card-text">Engineering Graphics Drawing Hall</p>
		</div>
		</div>
		</div>
		
		<!--<div class="col">
        <div class="polaroid">
		<img src="imageslab/drawinghall2.jpg" alt="Lab3" style="width:100%">
        <div class="xyz">
        <p>Engineering Graphics Drawing Hall</p>
		</div>
        </div>
		</div>-->
  </div>
  </div>
  
</div>
</section>
        
		<br>
		<section class="p-3">
		<div class="container-lg ">
        <div class="bg-light shadow rounded p-3">
		<div class="container">
        <input type="button" value="SY B.Tech">
		 
		 <div class="row">
		 
		 <div class="col-lg-4">
		 <a href="materialSML.php">
		 <div class="card" style="width:100%"> 
		 <img class="card-img-top" src="imageslab/SYMaterial1 (3).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="223px">
		 </a>
		 <div class="card-body">
		 <p class="card-text">Material Science & Metallurgy Lab</p>
		 </div>
		 </div>
		 </div>
		
		
		<div class="col-lg-4">
		<a href="TOM.php">
		<div class="card" style="width:100%"> 
		<img class="card-img-top" src="imageslab/TOM (7).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="223px">
		</a>
		<div class="card-body">
		<p class="card-text">Theory of Machine Lab</p>
		</div>
		</div>
		</div>
		
		<div class="col-lg-4">
		<a href="APT.php">
		<div class="card" style="width:100%"> 
		<img class="card-img-top" src="imageslab/APT.jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="223px">
		</a>
		<div class="card-body">
		<p class="card-text">Applied Thermodynamics Lab</p>
		</div>
		</div>
		</div>
		</div>
		
		
		
         <!--<div class="row">
            <div class="col">
            <div class="border3">
            <img src="imageslab/SYMaterial1 (3).jpg" alt="Lab4" style="width:100%">
            <div class="xyz">
            <p>Material Science & Metallurgy Lab</p></a>
            </div>
            </div>
            </div>
			
            <div class="col">
            <div class="border3"> 
            <img src="imageslab/TOM (7).jpg" alt="Lab5" style="width:100%">
            <div class="xyz">
            <p>Theory of Machine Lab</p></a>
            </div>
            </div>
            </div>
			
            <div class="col">
            <div class="border3">
            <img src="imageslab/blank.jpg" alt="Lab6" style="width:100%">
            <div class="xyz">
            <p>Applied Thermodynamics Lab</p>
			</div>
            </div>
            </div>
        </div>-->
         
        <div class="row">
            
			<div class="col-lg-4">
			<a href="FM.php">
			<div class="card" style="width:100%"> 
			<img class="card-img-top" src="imageslab/fluidmechanics (1).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="223px">
			</a>
			<div class="card-body">
			<p class="card-text">Fluid Mechanics Lab</p>
			</div>
			</div>
			</div>
		</div>
  
 </div>
  </div>
  </div>
  </section>
	<br>
	
	<section class="p-3">
		<div class="container-lg ">
        <div class="bg-light shadow rounded p-3">
		<div class="container">
        <input type="button" value="TE B.Tech">
	
	 
		<div class="row">
		<div class="col-lg-4">
		<a href="RAC.php">
		<div class="card" style="width:100%"> 
		<img class="card-img-top" src="imageslab/RAC42.jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="224px">
		</a>
		<div class="card-body">
		<p class="card-text">Refrigeration & Air Conditioning Lab</p>
		</div>
		</div>
		</div>
		
		<div class="col-lg-4">
		<a href="heattransfer.php">
		<div class="card" style="width:100%"> 
		<img class="card-img-top" src="imageslab/HT1 (4).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="224px" >
		</a>
		<div class="card-body">
		<p class="card-text">Heat Transfer Lab</p>
		</div>
		</div>
		</div>
		
		<div class="col-lg-4">
		<a href="MQC.php">
		<div class="card" style="width:100%"> 
		<img class="card-img-top" src="imageslab/mqc (4).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="224px">
		</a>
		<div class="card-body">
		<p class="card-text">Metrology & Quality Control Lab</p>
		</div>
		</div>
		</div>
		</div>
		
		
		<div class="row">
		<div class="col-lg-4">
		<a href="#">
		<div class="card" style="width:100%"> 
		<img class="card-img-top" src="imageslab/computerlab.jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="224px">
		</a>
		<div class="card-body">
		<p class="card-text">Computer Application Lab (104)</p>
		</div>
		</div>
		</div>
		
		<div class="col-lg-4">
		<a href="mechatronics.php">
		<div class="card" style="width:100%"> 
		<img class="card-img-top" src="imageslab/mechatronics (1).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="224px" >
		</a>
		<div class="card-body">
		<p class="card-text">Mechatronics Lab</p>
		</div>
		</div>
		</div>
		
		<div class="col-lg-4">
		<a href="turbolab.php">
		<div class="card" style="width:100%"> 
		<img class="card-img-top" src="imageslab/turbolab (3).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="224px">
		</a>
		<div class="card-body">
		<p class="card-text">Turbo Lab</p>
		</div>
		</div>
		</div>
			<!--<div class="col">
			<div class="border2">
			<div class="effect">
			<img src="imageslab/RAC1 (1).jpg" alt="Lab15" style="width:100%" class="image">
			<div class="middle">
            <div class="text">View More</div>
			</div>
			</div>
			<div class="xyz">
			<p>Refrigeration & Air Conditioning Lab</p>
			</div>
			</div>
			</div>
         
			<div class="col">
			<div class="border2">
            <div class="effect">
			<img src="imageslab/HT1 (4).jpg" alt="Lab10" style="width:100%" class="image">
            <div class="middle">
            <div class="text">View More</div>
            </div>
            </div>
			<div class="xyz">
			<p>Heat Transfer Lab</p>
			</div>
			</div>
			</div>
         
			<div class="col">
			<div class="border2">
			<div class="effect">
			<img src="imageslab/MQC (1).jpg" alt="Lab6" style="width:100%"  class="image">
			<div class="middle">
			<div class="text">View More</div>
			</div>
			</div>
			<div class="xyz">
            <p>Metrology & Quality Control Lab</p>
			</div>
			</div>
			</div>-->
			
			
		</div>
		
		
    
    
    <!--<div class="row justify-content-evenly">
			<div class="col-5">
			<a href="#">
			<div class="card" style="width:100%"> 
			<img class="card-img-top" src="imageslab/computerlab.jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="224px" >
			</a>
			<div class="card-body">
			<p class="card-text">Computer Application Lab (104)</p>
			</div>
			</div>
			<!--<div class="effect">
			<img src="imageslab/blank.jpg" alt="Lab11" style="width:100%" class="image">
			<div class="middle">
			<div class="text">View More</div>
			</div>
			</div>
			<div class="xyz">
			<p>Computer Application Lab (104)</p>
			</div>
			</div>
        
			<div class="col-5">
			<a href="#">
			<div class="card" style="width:100%"> 
			<img class="card-img-top" src="imageslab/mechatronics (1).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="224px">
			</a>
			<div class="card-body">
			<p class="card-text">Mechatronics Lab</p>
			</div>
			</div>
			<!--<div class="effect">
			<img src="imageslab/blank.jpg" alt="Lab13" style="width: 100%" class="image">
			<div class="middle">
			<div class="text">View More</div>
			</div>
			</div>
			<div class="xyz">
			<p>Mechatronics Lab</p>
			</div>
			</div>
      
    </div> --> 
 </div>
 </div>
 </div>
 </section>
 <br> 

<section class="p-3">
		<div class="container-lg ">
        <div class="bg-light shadow rounded p-3">
		<div class="container">
        <input type="button" value="BE B.Tech">
	
	<div class="row justify-content-evenly">
			<div class="col-lg-5">
			<a href="DME.php">
			<div class="card" style="width:100%"> 
			<img class="card-img-top" src="imageslab/DOM (2).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="223px">
			</a>
			<div class="card-body">
			<p class="card-text">Design of Machine Elements</p>
			</div>
			</div>
			<!--<div class="border3">
			<img src="imageslab/blank.jpg" alt="Lab15" style="width:100%">
			<div class="xyz">
			<p>Design of Machine Elements</p>
			</div>
			</div>-->
    </div>
			<div class="col-lg-5">
			<a href="hydraulic.php">
			<div class="card" style="width:100%"> 
			<img class="card-img-top" src="imageslab/HAP.jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="223px">
			</a>
			<div class="card-body">
			<p class="card-text">Hydraulic & Pneumatics Lab</p>
			</div>
			</div>
			<!--<div class="border3">
			<img src="imageslab/blank.jpg" alt="Lab15" style="width:100%" >
			<div class="xyz">
			<p>Hydraulic & Pneumatics Lab</p>
			</div>
			</div>-->
			</div> 
	</div>
</div>
</div>
</div>
</section>
<br>

	<section class="p-3">
		<div class="container-lg ">
        <div class="bg-light shadow rounded p-3">
		<div class="container">
        <input type="button" value="Special Labs">
		
	<div class="row">
		<div class="col-lg-4">
			<a href="3DPLM.php">
			<div class="card" style="width:100%"> 
			<img class="card-img-top" src="imageslab/3D (7).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="223px">
			</a>
			<div class="card-body">
			<p class="card-text">Product Innovation Lab (3DPLM)</p>
			</div>
			</div>
		</div>
        <!--<div class="polaroid">
        <img src="imageslab/3D1 (3).jpg" alt="Lab15" style="width:100%">
        <div class="xyz">
        <p>Product Innovation Lab (3DPLM)</p>
        </div>
        </div>-->
		
		
		<div class="col-lg-4">
			<a href="nayan.php">
			<div class="card" style="width:100%"> 
			<img class="card-img-top" src="imageslab/nayanelectronics (2).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="223px">
			</a>
			<div class="card-body">
			<p class="card-text">Nayan Electronics Lab</p>
			</div>
			</div>
		</div>
		<!--<div class="polaroid">  
		<img src="imageslab/blank.jpg" alt="Lab15" style="width:100%" >
		<div class="xyz">
		<p>Nayan Electronics Lab</p>
		</div>
		</div>-->
		
		
		<div class="col-lg-4">
			<a href="batterylab.php">
			<div class="card" style="width:100%"> 
			<img class="card-img-top" src="imageslab/BATTERYlab (2).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="224px">
			</a>
			<div class="card-body">
			<p class="card-text">Battery Lab</p>
			</div>
			</div>
	    </div>
        <!--<div class="polaroid">
		<img src="imageslab/blank.jpg" alt="Lab15" style="width:100%">
        <div class="xyz">
        <p>Battery Lab</p>
		</div>
        </div>-->
		
	</div>
  
    <div class="row justify-content-evenly">
		<div class="col-lg-4">
			<a href="workshop.php">
			<div class="card" style="width:100%"> 
			<img class="card-img-top" src="imageslab/Workshop.jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="224px">
			</a>
			<div class="card-body">
			<p class="card-text">Workshop</p>
			</div>
			</div>
		</div>
		<!--<img src="imageslab/blank.jpg" alt="Lab15" style="width:100%">
        <div class="xyz">
        <p>Workshop</p>
        </div>-->
        
		
		<div class="col-lg-4">
		<a href="#">
			<div class="card" style="width:100%"> 
			<img class="card-img-top" src="imageslab/IC.jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" height="224px">
			</a>
			<div class="card-body">
			<p class="card-text">Innovation center</p>
			</div>
			</div>
		</div>
		<!--<img src="imageslab/blank.jpg" alt="Lab15" style="width:100%">
		<div class="xyz">
		<p>Innovation center</p>
		</div>-->
	</div>
</div>
</div>
</div> 
</section>
<br>

<section class="p-3">
		<div class="container-lg ">
        <div class="bg-light shadow rounded p-3">
		<div class="container">
        <input type="button" value="M Tech">

	<!--<div class="row justify-content-evenly">
			<div class="col-5">
			<a href="#">
			<div class="card" style="width:100%"> 
			<img class="card-img-top" src="imageslab/blank.jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded">
			</a>
			<div class="card-body">
			<p class="card-text">Design Engineering Lab</p>
			</div>
			</div>
			</div>
			<!--<div class="border3">
			<img src="imageslab/blank.jpg" alt="Lab15" style="width:100%">
			<div class="xyz">
			<p>Design Engineering Lab</p>
			</div>
			</div>
    
			<div class="col-5">
			<a href="#">
			<div class="card" style="width:100%"> 
			<img class="card-img-top" src="imageslab/blank.jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded">
			</a>
			<div class="card-body">
			<p class="card-text">Heat Power Engineering Lab</p>
			</div>
			</div>
			</div> 
			<!--<div class="border3">
			<img src="imageslab/blank.jpg" alt="Lab15" style="width:100%" >
			<div class="xyz">
			<p>Heat Power Engineering Lab</p>
			</div>
			</div>
			
	</div>-->
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
<script src="js/bootstrap.bundle.js"></script>
    </body>
</html>

