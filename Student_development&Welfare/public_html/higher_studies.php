<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>HSC|Student_Development_welfare|Department Of Mechanical Engineering at PCCOE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--for title logo-->
    <link href="../../vender/img/logo/PCCOE_LOGO_b.jpg"  rel="shortcut icon" type="image/x-icon">
	 <link rel="stylesheet" href="imp-pccoe-style.css" type="text/css"/>

    <!--for icons-->
    <link href="../../vender/icon/css/brands.css" rel="stylesheet" />
    <link href="../../vender/icon/css/fontawesome.css" rel="stylesheet" />
    <link href="../../vender/icon/css/solid.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css"/>
    <link href="../../vender/css/navbar.css" rel="stylesheet" />
    <link href="../../vender/css/style1.css" rel="stylesheet" />
	
	<style>
	.card {
			 box-shadow: 0 3px 5px rgba(0, 0, 0, 0.5);
		}
		
	
		.card-text{
			font-family: "Verdana", Sans-serif;
			font-size: 14px;
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
                    <!--<li>
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
                    <li><a href="../../research/research_team.php">Research Team</a></li>
					<li><a href="../../research/sig.php">Special Interest Groups (SIG)</a></li>
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
                    <li><a href="../../facilities/public_html/laboratories.php">Laboratories</a></li>
                    <li><a href="../../facilities/public_html/library.php">Library</a></li>
					 <li><a href="../../facilities/public_html/seminar_hall.php">Seminar Hall</a></li>
                </ul>
            </li>
            <li class="b-left"><a href="#">Student Development & Welfare
                    <span class="drop-icon">▾</span>
                    <label title="Toggle Drop-down" class="drop-icon" for="smsdw">▾</label>
                </a>
                <input type="checkbox" id="smsdw">
                </a>
                <ul class="sub-menu">
                    <li><a href="higher_studies.php">Higher study cell</a></li>
                    <li><a href="Communication_Personality_Development.php">Communication and Personality Development Cell</a></li>
                    <li><a href="professional_development.php">Professional Development Cell</a></li>
                    <li><a href="ISR.php">Institutional Social Responsibility</a></li>
                    <li><a href="nation_services_scheme.php">National Service Scheme</a></li>
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
  <!-- End Navbar -->
  
	<br>
       <section class="p-3">
	   <div class="container-lg">
	   <br>
	   <div class="border-5 border-start border-primary shadow mb-4 ps-3 py-2 align-self-center text-dark">
	   <h2>Higher Study Cell</h2>
       </div>
       
        <div class="bg-light shadow rounded  p-3">
          <div class="border-bottom border-1 border-primary mb-3">
            <p class="fs-3 text-primary">About us</p>
          </div>
        <div class="row my-3">
          <div class="col-lg-9 col-md-12">
              
            <p class="my-4 text-dark">
                <h4>Objective</h4>
                To promote higher studies awareness among the students, motivate them for pursuing higher studies & ensure maximum 
                enrollment and to prepare the students for higher studies entrance exams.</p>
            <p class="my-4 text-dark">
                <h4>Functions</h4>
                <ul>
                    <li>To Maintain and update the database regarding opportunities for higher studies within the country and abroad along 
                        with qualifying examinations, admission prerequisites, norms, deadlines, websites etc.</li>
                    <li>To create and regularly up-date liaison with our alumni who are undergoing higher studies in reputed institutes.</li>
                    <li>To build a student community to assist, support, guide and help outgoing students for admissions and other related matters.</li>
                    <li>To seek willingness/career options from each student after admission to Engineering Course through necessary guidance and counseling in this regard.</li>
                    <li>To create an environment conducive for higher studies.</li>
                    <li>To develop liaison with reputed institutes, universities within the country and abroad regarding admissions, fees, financial assistance schemes etc. conclusion of the program.</li>
                </ul>
            </p>
          </div>
          <div class="col-lg-3 col-md-6 align-self-center justify-content-center">
            <div class="card" style="width: 100%;">
              <img src="../../faculty photo/CRIngole.jpg"  class="card-img" alt="Image of faculty advisor" height="250px">
              <div class="card-body">
                <p class="card-text text-center "><span class="fw-bold">Mr. Chandan R. Ingole</span><br/>
                  <span class="text-secondary fw-light">Faculty Coordinator</span></p>
              </div>
            </div>
          </div>
        </div>
        <div>
		
		<p class="my-4 text-dark">
          <h4>Outstanding Achievement in GATE 2021</h4>
		  <div class="table-responsive-lg">
        <table class="table table-hover table-bordered">
              <thead class="table-primary">
                <tr>
                  <th scope="col">Name</th>
                 <th scope="col">Gate Score</th>
                 </tr>
              </thead>
              <tbody>
                 

 <tr>                 
                  <td>Piyush Nehete</td>
                  <td>638</td>
                 </tr>	
<tr>   				 
                  <td>Rajat Girish Gandhi</td>
                  <td>385</td>
                 </tr>
				 
				  <tr>                 
                  <td>Satyajeet Suhas Ithape</td>
                  <td>468</td>
                 </tr>
				 
				  
                
				 <tr>                 
                  <td>Prasad Vilas Badade</td>
                  <td>409</td>
                 </tr>
				 
				 
				 <tr>                 
                  <td>Ritesh Ravindra Ohol

</td>
                  <td>239</td>
                 </tr>
				  <tr>                 
                  <td>Amar Prakash Singh

</td>
                  <td>447</td>
                 </tr>
				 
				 
				 
				  <tr>                 
                  <td>Shubham Sharad Joshi

</td>
                  <td>638</td>
                 </tr>
				 
				  <tr>                 
                  <td>Sudarshan NetajeeJawale

</td>
                  <td>430</td>
                 </tr>
				 
				 
				  <tr>                 
                  <td>Pradyumna Shrikrishna Joshi

</td>
                  <td>529/1000

</td>
                 </tr>
				 
				  <tr>                 
                  <td>Kalpesh Sanjay More</td>
                  <td>508</td>
                 </tr>
				 
				 <tr>                 
                  <td>Shubham Janardan Yadav

</td>
                  <td>392</td>
                 </tr>
				 
				 <tr>                 
                  <td>ShaimanZakirhusen Shaikh

</td>
                  <td>34.07</td>
                 </tr>
				 
				 <tr>                 
                  <td>Manish Santosh Deore

</td>
                  <td>35.71</td>
                 </tr>
				 
				  <tr>                 
                  <td>Barkat FirojMukadam

</td>
                  <td>44.59

</td>
                 </tr>
				 
				 <tr>                 
                  <td>Siddharth Pravin Patil</td>
                  <td>49.79</td>
                 </tr>
              </tbody>
            </table>
			</div>

        </p>
		
		 <p class="my-4 text-dark">
          <h4>List of students admitted for Higher Education 2021</h4>
		  <div class="table-responsive-lg">
        <table class="table table-hover table-bordered">
              <thead class="table-primary">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Course</th>
                  <th scope="col">Institute</th>
        
                </tr>
              </thead>
              <tbody>
                <tr>                 
                  <td>PIYUSH CHANDRAKANT NEHETE</td>
                  <td>M.tech</td>
                  <td>IIT Chennai</td>
                </tr>
				
				<tr>                 
                  <td>ADITYA SURESH PACHARNE</td>
                  <td>M.tech</td>
                  <td>VIT Vellore</td>
                </tr>
				
				<tr>                 
                  <td>BHRAMAR SANJAY PUSTODE

</td>
                  <td>M.tech</td>
                  <td>IIT Hyderabad

</td>
                </tr>
				
				<tr>                 
                  <td>HIMANSHU HEMANT WADHAVANKAR

</td>
                  <td>MBA

</td>
                  <td>International Institute Of Sports Management

</td>
                </tr>
				
				<tr>                 
                  <td>ADITYA SATISHKUMAR KHADAKE

</td>
                  <td>MBA</td>
                  <td>Imperial School Of Banking and management studies

</td>
                </tr>
				
                <tr>                 
                  <td>KALPESH SANJAY MORE

</td>
                  <td>M.tech</td>
                  <td>IIT Delhi</td>
                </tr>
              </tbody>
            </table>
			</div>

        </p> 
          <p class="my-4 text-dark">
          <h4>Outstanding Achievement in GATE 2020</h4>
		  <div class="table-responsive-lg">
        <table class="table table-hover table-bordered">
              <thead class="table-primary">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Marks(out of 100)</th>
                  <th scope="col">Gate Score</th>
                  <th scope="col">All India Rank</th>
                  <th scope="col">Examination Paper</th>
                </tr>
              </thead>
              <tbody>
                <tr>                 
                  <td>Nikhil Ravindra Gaikwad</td>
                  <td>71.33</td>
                  <td>921</td>
                  <td>04</td>
                  <td>Engineering Science (XE)<br>
                      Fluid Mechanics<br>
                      Solid Mechanics</td>
                </tr>
                
              </tbody>
            </table>
			</div>

        </p> 
        <p class="my-4 text-dark">
        <h4>Number of students qualifies entrance examinations</h4>
		<div class="table-responsive-lg">
         <table class="table table-hover table-bordered">
              <thead class="table-primary">
                <tr>
                  <th scope="col">Examination</th>
                  <th scope="col">2019-20</th>
                  <th scope="col">2018-19</th>
                  <th scope="col">2017-18</th>
                  <th scope="col">2016-17</th>
                  <th scope="col">2015-16</th>
                </tr>
              </thead>
              <tbody>
                <tr>                 
                  <td>GATE</td>
                  <td>8</td>
                  <td>11</td>
                  <td>16</td>
                  <td>12</td>
                  <td>8</td>
                </tr>
                
                <tr>                 
                  <td>CAT</td>
                  <td>4</td>
                  <td>0</td>
                  <td>2</td>
                  <td>4</td>
                  <td>2</td>
                </tr>
                
                 <tr>                 
                  <td>GRE</td>
                  <td>6</td>
                  <td>6</td>
                  <td>12</td>
                  <td>10</td>
                  <td>12</td>
                </tr>
                
                 <tr>                 
                  <td>AFCAT</td>
                  <td>1</td>
                  <td>0</td>
                  <td>1</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                
                 <tr>                 
                  <td>TOEFL</td>
                  <td>1</td>
                  <td>1</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
              </tbody>
            </table>
			</div>
        </p> 
        </div>
             
        </div>
      </div>
    </section>

    <section class="p-3">
      <div class="container-lg ">
        <div class="bg-light shadow rounded  p-3">
          <div class="border-bottom border-1 border-primary mb-3">
            <p class="fs-3 text-primary">Activities Under Higher Study Cell</p>
          </div>
		  
		  <div class="row">
		 
		 <div class="col-lg-4">
		
		 <div class="card" style="width:100%"> 
		 <img class="card-img-top" src="hsc_images/HSC (4).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded">
		
		 <div class="card-body">
		 <p class="card-text"><b>GATE Awareness Program</b> by Made Easy, Delhi
		 
              </p>
		 </div>
		 </div>
		 </div>
		
		
		<div class="col-lg-4">
		
		<div class="card" style="width:100%"> 
		<img class="card-img-top" src="hsc_images/HSC (2).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded">
		
		<div class="card-body">
		<p class="card-text">Mock CAT Examination by <b>IMS Academy</b></p>
		</div>
		</div>
		</div>
		
		<div class="col-lg-4">
		
		<div class="card" style="width:100%"> 
		<img class="card-img-top" src="hsc_images/HSC (3).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" >
	
		<div class="card-body">
		<p class="card-text"><b>UPSC-ESE</b>Awareness Program by Made Easy, Delhi</p>
		</div>
		</div>
		</div>
		</div>
<br>

		<div class="row">
		 
		 <div class="col-lg-4">
		
		 <div class="card" style="width:100%"> 
		 <img class="card-img-top" src="hsc_images/HSC (1).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded">
		
		 <div class="card-body">
		 <p class="card-text">Expert session on current US admission & related issues by <b>Pooja Chitwadagi</b></p>
		 </div>
		 </div>
		 </div>
		
		
		<div class="col-lg-4">
		
		<div class="card" style="width:100%"> 
		<img class="card-img-top" src="hsc_images/HSC (5).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded">
		
		<div class="card-body">
		<p class="card-text"><b>UPSC Awareness Program</b> by Kazi Sir, Unique Academy, Pune.</p>
		</div>
		</div>
		</div>
		
		<div class="col-lg-4">
		
		<div class="card" style="width:100%"> 
		<img class="card-img-top" src="hsc_images/HSC (6).jpg" alt="Card image cap"  class="shadow p-3 mb-5 bg-white rounded" >
	
		<div class="card-body">
		<p class="card-text">Guest Lecture on Civil Services by<b>Mr.Shravan Hardikar (PCMC Commissioner, IAS Officer)</b></p>
		</div>
		</div>
		</div>
		</div>
        <!--<div class="row my-3">
        
          <div class="col-lg-4 col-md-6">
               <div class="card" style="width: 350px; height: 350px;">
            <img src="hsc_images/HSC (1).jpg" class="img-thumbnail mb-3" >
            <p> Expert session on current US admission & related issues by<b>Pooja Chitwadagi</b>
              (Assistant Dean for research & graduate studies)</p>
          </div>
          </div>
          <div class="col-lg-4 col-md-12">
              <div class="card" style="width: 350px; height: 350px;">
            <img src="hsc_images/HSC (2).jpg" class="img-thumbnail mb-3">
            <p><center> Mock CAT Examination by <b>IMS Academy</b> </center></p>
          </div>
          </div>
            
            <div class="col-lg-4 col-md-12">
              <div class="card" style="width: 350px; height: 350px;">
            <img src="hsc_images/HSC (3).jpg" class="img-thumbnail mb-3">
            <p><center><b>UPSC-ESE</b>Awareness Program by Made Easy, Delhi</center></p>
          </div>
          </div>
        </div>
            
            
            <div class="row my-3">
        
          <div class="col-lg-4 col-md-6">
               <div class="card" style="width: 350px; height: 350px;">
            <img src="hsc_images/HSC (4).jpg" class="img-thumbnail mb-3" >
            <p><center><b>GATE Awareness Program</b> by Made Easy, Delhi</center></p>
          </div>
          </div>
          <div class="col-lg-4 col-md-12">
              <div class="card" style="width: 350px; height: 350px;">
            <img src="hsc_images/HSC (5).jpg" class="img-thumbnail mb-3">
            <p><center><b>UPSC Awareness Program</b> by Kazi Sir, Unique Academy, Pune.</center></p>
          </div>
          </div>
            
            <div class="col-lg-4 col-md-12">
              <div class="card" style="width: 350px; height: 350px;">
            <img src="hsc_images/HSC (6).jpg" class="img-thumbnail mb-3">
            <p>Guest Lecture on Civil Services by<b>Mr.Shravan Hardikar (PCMC Commissioner, IAS Officer)</b></p>
          </div>
          </div>
        </div>-->
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
<script src="js/bootstrap.bundle.js"></script>
		
    </body>
</html>