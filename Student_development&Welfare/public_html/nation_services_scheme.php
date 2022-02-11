<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>NSS|Student_Development_welfare|Department Of Mechanical Engineering at PCCOE</title>
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
	   <h2>National Service Scheme</h2>
       </div>
        <div class="bg-light shadow rounded p-3">
          <div class="border-bottom border-1 border-primary mb-3">
            <p class="fs-3 text-primary">About us</p>
          </div>
        <div class="row my-3">
          <div class="col-lg-9 col-md-12">
              
            <p class="my-4 text-dark">
                <h4>Objective:</h4>
                <p>To inculcate social values and social awareness among the students and provide service to society through programs.</p>
                
                <h4>Outcome:</h4>
                <p>Outcome of NSS activities is judged based on number students enrolled vs number of students benefited through the programs.</p>
       
          </div>
          <div class="col-lg-3 col-md-6 align-item-center justify-content-center d-flex">
            <div class="card" style="width: 80%;">
              <img src="hsc_images/NJSurwade.jpg" class="card-img" alt="Image of faculty advisor">
              <div class="card-body">
                <p class="card-text text-center "><span class="fw-bold">Mr. N. J. Surwade</span><br/>
                  <span class="text-secondary fw-light">Faculty Coordinator</span></p>
              </div>
            </div>
          </div>
            
      </div>
            <div class="col-lg-9 col-md-12">
              
            <p class="my-4 text-dark">
                
                <p>National Service Scheme comes under the Ministry of Youth Affairs and Sports, Government of India and NSS cell, Higher and technical education, Govt. of Maharashtra.
                    NSS was launched in Gandhiji's Centenary year, 1969-70.</p><br>
                
                <p>Understanding the need of social development of youth from technical field to serve the society in effective way, NSS was started in the academic year 2008-09 in Pimpri Chinchwad College of Enginering, Nigdi.
                   The scheme aims to inculcate social welfare in students, and to provide better service to society through voluntary work. NSS volunteers work to ensure that everyone who is needy gets help to enhance their standard of living. 
                   While working for the society volunteers learn how to perform in a team effectively, how to various social activities and how to lead a good life despite a scarcity of resources.
                   PCCoE NSS team perform social work by dividing the work in two verticals.</p><br>
                <ol>
                    <li>Regular Activities</li> 
                    <li>Special Winter Camp</li>
                </ol>
          </div>
        </div>
    </section>
        
    <section class="p-3">
      <div class="container-lg ">
        <div class="bg-light shadow rounded p-3">
          <div class="border-bottom border-1 border-primary mb-3">
            <p class="fs-3 text-primary">Activites Under the Cell</p>
          </div>
              <h4>National Service Scheme – Regular Activities- Year 2020-21 Sem. I </h4>
			  <div class="table-responsive-lg">
				<table class="table table-hover  table-bordered">
				<thead class="table-primary">
                <tr>
				<th scope="col">Sr no.</th>
                  <th scope="col">Name of Activity</th>
                  <th scope="col">Date of Activity</th>
                  <th scope="col">No of Student participated</th>
                  <th scope="col">No of People Benefited</th>
                </tr>
              </thead>
              <tbody>
                <tr>  
                  <th scope="row">1</th>				
                  <td>Participation in Swaccha-Wari, Swastha-Wari, Nirmal-Wari, Harit-Wari 2020</td>
                  <td>03rd to 07th July 2020</td>
                  <td>38</td>
                  <td>1000+</td>
                 </tr>
                
				<tr>  
                  <th scope="row">2</th>				
                  <td>Awareness Campaign Fit India Freedom Run and Fit India Movement</td>
                  <td>15th Aug. to 14th Sep. 2020</td>
                  <td>62</td>
                  <td>62+1000+ Viewers</td>
                 </tr>
				 
				 <tr>  
                  <th scope="row">3</th>				
                  <td>Maze Kutumb Mazi Jababdari initiative(Online Awareness)</td>
                  <td>15th to 25th September 20</td>
                  <td>500</td>
                  <td>3000+</td>
                 </tr>
                
				<tr>  
                  <th scope="row">4</th>				
                  <td>Yoga Session by PCCoE alumni Ms. Sneha Yadav</td>
                  <td>20/09/2020</td>
                  <td>78</td>
                  <td>78</td>
                </tr>
				
				<tr>  
                  <th scope="row">5</th>				
                  <td>Webinar on Cancer Awareness by Sanjeevani Foundation</td>
                  <td>10/10/2020</td>
                  <td>56</td>
                  <td>56</td>
                </tr>
				
				<tr>  
                  <th scope="row">6</th>				
                  <td>Heartfulness Essay Event 2020</td>
                  <td>10/10/2020</td>
                  <td>25</td>
                  <td>25</td>
                </tr>
				
				<tr>  
                  <th scope="row">7</th>				
                  <td>Webinar on Importance of Hand Wash</td>
                  <td>15/10/2020</td>
                  <td>50</td>
                  <td>2000+</td>
                </tr>
				
				<tr>  
                  <th scope="row">8</th>				
                  <td>National Unity Day Oath</td>
                  <td>31/10/2020</td>
                  <td>25</td>
                  <td>25</td>
                </tr>
              </tbody>
            </table>
			</div>
			
			<h4>National Service Scheme – Regular Activities- Year 2020-21 Sem. II </h4>
			<div class="table-responsive-lg">
				<table class="table table-hover  table-bordered">
				<thead class="table-primary">
                <tr>
				<th scope="col">Sr no.</th>
                  <th scope="col">Name of Activity</th>
                  <th scope="col">Date of Activity</th>
                  <th scope="col">No of Student participated</th>
                  <th scope="col">No of People Benefited</th>
                </tr>
              </thead>
              <tbody>
                <tr>  
                  <th scope="row">1</th>				
                  <td>Wasundhara Pledge</td>
                  <td>05/01/2021</td>
                  <td>242</td>
                  <td>242</td>
                 </tr>
                
				<tr>  
                  <th scope="row">2</th>				
                  <td>Group Discussion on Voting Awareness & Youth for Swaccha and Swastha Bharat Abhiyan NSS Volunteers </td>
                  <td>16/01/2021</td>
                  <td>38</td>
                  <td>38</td>
                 </tr>
				 
				 <tr>  
                  <th scope="row">3</th>				
                  <td>Financial Literacy & Career in Stock Market</td>
                  <td>18/10/2020</td>
                  <td>80</td>
                  <td>80</td>
                 </tr>
                
				<tr>  
                  <th scope="row">4</th>				
                  <td>Road Safety Awareness Competition (Drawing, Essay and Slogan)</td>
                  <td>02/02/2021</td>
                  <td>14</td>
                  <td>14</td>
                </tr>
				
				<tr>  
                  <th scope="row">5</th>				
                  <td>Swami Vivekananda’s thoughts and Today’s Youth Dr. Shirish Limaye</td>
                  <td>17/01/2021  </td>
                  <td>72</td>
                  <td>72</td>
                </tr>
				
				<tr>  
                  <th scope="row">6</th>				
                  <td>Workshop by UNICEF on Tackling COVID  post vaccination </td>
                  <td>08/02/2021</td>
                  <td>01</td>
                  <td>2000+</td>
                </tr>
				
              </tbody>
            </table>
			</div>
        </div>
      </div>
    </section>
	
	<section class="p-3">
      <div class="container-lg ">
        <div class="bg-light shadow rounded p-3">
          <div class="border-bottom border-1 border-primary mb-3">
            <p class="fs-3 text-primary">Events Under the Cell in Year 2020-21 Sem. I</p>
          </div>
		  
		  <ul>
		  <li style="list-style-type:square"><h5><b>Name of Programme:</b> Participation in Swaccha-Wari, Swastha-Wari, Nirmal-Wari, Harit-Wari</h5></li>
		  <li>Date Of Programme: 03rd to 07th July 2020</li>
		  <li>Venue: Respective Home/Surrounding and Online Platform</li>
		  <li>No of Volunteers: 38</li>
		<li>No.of beneficiaries: 38 NSS Volunteers + Thousands of People.</li>
		<li>Description: PCCoE NSS team participated in Swaccha-Wari, Swastha-Wari, Nirmal-Wari, Harit-Wari 2020 from 03rd to 07th July 2020 with 38 volunteers. Volunteers performed various tasks to achieve 04 objectives like Swaccha-Wari, Swastha-Wari, Nirmal-Wari, Harit-Wari and spreading awarenss regarding cleanliness of the area, awareness to have proper sanitation, planting all the Indian origin saplings at respective places. All NSS volunteers planted Indian saplings, motivated family members for the same and posted photographs with the saplings on social media handles to create awareness.</li>
		</ul><br>
		
		
		  <ul>
		  <li style="list-style-type:square"><h5><b>Name of Programme:</b>  Awareness Campaign on Fit India Freedom Run and Fit India Campaign 2020</h5></li>
		  <li>Date Of Programme: 15th Aug. to 14th Sep. 2020</li>
		  <li>Venue:Respective Home and Social Media Handles</li>
		  <li>No of Volunteers: 62</li>
		<li>No.of beneficiaries: 62 NSS Volunteers + Thousands of Viewers</li>
		<li>Description:  NSSPCCoE participated enthusiastically in Awareness Campaign on Fit India Freedom Run and Fit India Campaign 2020 as directed by Government of India. NSS volunteers did regular exercise, running, walking, jogging, Yoga and Cycling from 15th August to 14th Sepetember 2020. While doing all these activities, volunteers also motivated their family members and local friends to participate in this campaign. Many people got awareness about importance of Fitness in life. NSS volunteers of PCCoE also spread awareness on social media platforms also.
		</li>
		</ul><br>
		
		<ul>
		  <li style="list-style-type:square"><h5><b>Name of Programme:</b>  Maze Kutumb Mazi Jababdari initiative (Online Awareness)</h5></li>
		  <li>Date Of Programme: 15th to 25th September 20</li>
		  <li>Venue:Online Platform Instagram, Facebook, Whatsapp</li>
		  <li>No of Volunteers: 500</li>
		<li>No.of beneficiaries: 3000+</li>
		<li>Description:  NSS PCCoE volunteers participated in Maze Kutumb Mazi Jababdari. Initially SSPU has appealed volunteers from each affiliated college to enroll for the on field work. As per guidelines totoal 06 volunteers enrolled for the same. But considering spread to COVID19 it was decided by SPPU to have online awareness of Maze Kutumb Mazi Jababdari campaign. Hence NSS PCCoE has circulated posters creating awareness of Maze Kutumb Mazi Jababdari campaign throughout the whatsapp groups of PCCoE.
		</li>
		</ul><br>
		
		<ul>
		  <li style="list-style-type:square"><h5><b>Name of Programme:</b>  Yoga Session by PCCoE alumni Ms. Sneha Yadav</h5></li>
		  <li>Date Of Programme: 20/09/2020</li>
		  <li>Venue:Online Platform Zoom</li>
		  <li>No of Volunteers: 78</li>
		<li>No.of beneficiaries: 78</li>
		<li>Description:  PCCoE alumni Miss. Sneha Yadav (Mechanical Engineer) who is Yoga Practitioner and influencer has conducted online session named Yoga with Sneha. NSS PCCoE volunteers had given huge response for this online session. Sneha has taught volunteers about basic yoga steps, importance of Yoga and balance of diet and yoga in daily routine.
</li>
		</ul><br>
		
		<ul>
		  <li style="list-style-type:square"><h5><b>Name of Programme:</b> Webinar on Cancer Awareness by Sanjeevani Foundation</h5></li>
		  <li>Date Of Programme: 10/10/2020</li>
		  <li>Venue:Online Platform Zoom</li>
		  <li>No of Volunteers: 56</li>
		<li>No.of beneficiaries: 56</li>
		<li>Description:  NSS PCCoE conducted online Webinar on Cancer Awareness in association with Sanjeevani Foundation. Regional head of Sanjeevani Foundation Miss. Sumki Begum conducted online webinar on Zoom platform and explained about habits which leads towards cancer, various stages of cancer, eating habits and diet to be taken to avoid cancer, relaltion of  exercise and cancer. She has also explained various initiatives carried out by Sanjeevani Foundation. The resource person has also shared interviews of patients who had beaten Cancer and living healthy normal life. 
</li>
		</ul><br>
		
		<ul>
		  <li style="list-style-type:square"><h5><b>Name of Programme:</b> Heartfulness Essay Event 2020</h5></li>
		  <li>Date Of Programme: 10/10/2020</li>
		  <li>Venue:Online Website of Heartfulness NGO</li>
		  <li>No of Volunteers: 25</li>
		<li>No.of beneficiaries: 25</li>
		<li>Description:  Heartfulness Essay Event 2020 is organized by Shri. Ramchandra Mission, United Information Center for India and Bhutan and Heartfulness Education Trust. Essay event is organized by these NGOs from last many years. This year NSS PCCoE has also participated in this competition with total 25 students from the institute. Out of which 05 essays in each language (English, Marathi and Hindi) were selected for national level and remaining students were selected at institute level.
</li>
		</ul><br>
		
		<ul>
		  <li style="list-style-type:square"><h5><b>Name of Programme:</b>  Webinar on Importance of Hand Wash</h5></li>
		  <li>Date Of Programme: 15/10/2020</li>
		  <li>Venue:Online platform youtube</li>
		  <li>No of Volunteers: 25</li>
		<li>No.of beneficiaries: 50 NSS Volunteers + 2000+ participants</li>
		<li>Description: SPPU has organized a webinar on Importance of Hand Washing on the occasion of Global Handwashing Day (15/10/2020) in association with UNICEF. Many eminent resource people from UNICEF and SPPU have delivered a good session on importance of Hand Washing, how to face COVID19 virus by washing our hands frequently and all the insights and philosophy of hand washing. NSS PCCoE volunteers actively tool part in this event.
</li>
		</ul><br>
		
		<ul>
		  <li style="list-style-type:square"><h5><b>Name of Programme:</b>National Unity Day – Oath </h5></li>
		  <li>Date Of Programme: 15/10/2020</li>
		  <li>Venue:Online Platform- Google Meet</li>
		  <li>No of Volunteers: 25</li>
		<li>No.of beneficiaries: 25</li>
		<li>Description: as per the circular received from SPPU and State Government NSS PCCoE has conducted Oath ceremony on the occasion of birth anniversary of Sardar Vallabhbhai Patel. NSS volunteers have dictated the oath as given by state government online. Oath has been taken by all the Teaching and Non Teaching Staff of PCCoE.

</li>
		</ul><br>
		  
		  <div class="border-bottom border-1 border-primary mb-3">
            <p class="fs-3 text-primary">Events Under the Cell in Year 2020-21 Sem. II</p>
          </div>
		  <ul>
		  <li style="list-style-type:square"><h5><b>Name of Programme:</b>Wasundhara E-Pledge</h5></li>
		  <li>Date Of Programme: 05/01/2021</li>
		  <li>Venue: Online Platform</li>
		  <li>No of Volunteers: 242</li>
		<li>No.of beneficiaries:  242</li>
		<li>Description:  	PCCoE NSS team participated in Wasundhara Pledge on 05/01/2021 with 242 volunteers. Volunteers along with the faculty members took E-Pledge to save the nature and maintain the greenery in surrounding area under the initiative of Majhi Wasundhara by State Goevernment of Maharashtra.
		</li>
		</ul><br>
		
		 <ul>
		  <li style="list-style-type:square"><h5><b>Name of Programme:</b>Group Discussion on Voting Awareness & Youth for Swaccha and Swastha Bharat Abhiyan</h5></li>
		  <li>Date Of Programme: 16/01/2021</li>
		  <li>Venue: Respective Home and Online Platform</li>
		  <li>No of Volunteers: 38</li>
		<li>No.of beneficiaries: 38 NSS Volunteers</li>
		<li>Description:  	NSS PCCoE volunteers participated enthusiastically in Group Discussion on Voting Awareness and Youth for Swaccha and Swastha Bharat Abhiyan under the Yuva Saptah initiative as directed by Government of India. NSS volunteers joined on google meet and had group discussions on the topics mentioned above. Many of the volunteers were performing group discussion activity for the first time and hence it was a great learning experience for them. All the 38 volunteers were judged by senior NSS volunteers and were given suggestions on improvements in the group discussion.
		</li>
		</ul><br>
		
		<ul>
		  <li style="list-style-type:square"><h5><b>Name of Programme:</b>Swami Vivekananda’s thoughts and Today’s Youth by Dr. Shirish Limaye</h5></li>
		  <li>Date Of Programme: 17/01/2021</li>
		  <li>Venue: Online Platform</li>
		  <li>No of Volunteers: 72</li>
		<li>No.of beneficiaries: 72 NSS Volunteers</li>
		<li>Description:  	 NSS PCCoE volunteers celebrated Yuva Saptah by organizing various activities like Guest lecture on Swami Vivekanandas Thoughts and Todays Youth. As per guidelines total 72 NSS volunteers enrolled for the same. Dr. Shirish Limaye has thrown light upon thoughts of Swami Vivekananda and his contribution towards the youth building. He also related the thoughts of Swami Vivekananda with todays youth. Many volunteers attended the webinar with their parents also and were motivated by this guest lecture.
		</li>
		</ul><br>
		
		<ul>
		  <li style="list-style-type:square"><h5><b>Name of Programme:</b>Financial Literacy & Career in Stock Market</h5></li>
		  <li>Date Of Programme: 18/10/2021</li>
		  <li>Venue: Online Platform</li>
		  <li>No of Volunteers: 78</li>
		<li>No.of beneficiaries: 78 NSS Volunteers</li>
		<li>Description:  	 NSS PCCoE volunteers celebrated Yuva Saptah by organizing various activities like Guest lecture on Swami Vivekanandas Thoughts and Todays Youth. As per guidelines total 72 NSS volunteers enrolled for the same. Dr. Shirish Limaye has thrown light upon thoughts of Swami Vivekananda and his contribution towards the youth building. He also related the thoughts of Swami Vivekananda with todays youth. Many volunteers attended the webinar with their parents also and were motivated by this guest lecture.
		</li>
		</ul><br>
		
		<ul>
<li style="list-style-type:square"><h5><b>Name of Programme:</b>Road Safety Awareness Competition (Drawing, Essay and Slogan)Financial Literacy & Career in Stock Market</h5></li>
		  <li>Date Of Programme: 02/02/2021</li>
		  <li>Venue: Online Platform</li>
		  <li>No of Volunteers: 14</li>
		<li>No.of beneficiaries: 14 NSS Volunteers</li>
		<li>Description:  	 NSS PCCoE volunteers participated enthusiastically in Road Safety Awareness Competition organized by Traffic Department, Akurdi Branch. Total 14 volunteers took active participation in Drawing, Essay Writing and Slogan Writing Competition. Top 03 entries were sent to the respective authority for the competition.
</li>
		</ul><br>
		<ul>
		<li style="list-style-type:square"><h5><b>Name of Programme:</b> Workshop by UNICEF on Tackling COVID19  post vaccination
</h5></li>
		  <li>Date Of Programme: 08/02/2021

</li>
		  <li>Venue: Online Platform</li>
		  <li>No of Volunteers: 1</li>
		<li>No.of beneficiaries: 2000+</li>
		<li>Description:  	 SPPU NSS Department in association with UNICEF organized a workshop for all the Program officers and NSS Authorities on Tackling COVID19 Post Vaccination. In this workshop detailed information about the vaccination procedure, rules to follow after vaccination, post vaccination etiquettes etc. More than 2000 people attended this workshop all over the country.  
</li>
		</ul><br>
		  
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
