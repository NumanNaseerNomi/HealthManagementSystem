<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Health Management System</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('hms/images/favicon.ico')}}" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ URL::asset('hms/plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{ URL::asset('hms/plugins/icofont/icofont.min.css')}}">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="{{ URL::asset('hms/plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('hms/plugins/slick-carousel/slick/slick-theme.css')}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ URL::asset('hms/css/style.css')}}">

</head>

<body id="top">

<!-- HEADER starts HERE -->

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@myhealthcare.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Ta-134/A, Punjab, Pakistan </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+92-355-67890" >
							<span>Call Now : </span>
							<span class="h4">823-4565-13488</span>
							<a href="logout.php"  style="padding: 5px 10px 5px 10px; margin-left: 60px;" class="btn btn-white" >Logout</a>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.html">
			  	<img src="{{ URL::asset('hms/images/logo.png') }}" alt="" class="img-fluid" style="height: 100px; width: 100px">
				<a><h3>My Health Care</h3> <h6>Health Management System</h6></a>

			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.html">Home</a>
			  </li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Diseases <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">
						<a class="dropdown-item">A</a>
						<a class="dropdown-item" href="department.html">Acne</a>
						<a class="dropdown-item" href="department.html">Aethritis</a>
						<a class="dropdown-item" href="department-single.html">Allergies</a>
						<a class="dropdown-item" href="department.html">Anxiety</a>
						<a class="dropdown-item" href="department-single.html">Appendix</a>
						<a class="dropdown-item" href="department.html">Asthma</a>
						<a class="dropdown-item">B</a>
						<a class="dropdown-item" href="department.html">Bladder Cancer</a>
						<li><a class="dropdown-item" href="department.html">Blood Pressure</a></li>
						<li><a class="dropdown-item" href="department.html">Bone Cancer</a></li>
						<li><a class="dropdown-item" href="department.html">Brain tumours</a></li>
						<li><a class="dropdown-item" href="department.html">Breast Cancer</a></li>
						<li><a class="dropdown-item" href="department.html">Bronchitis</a></li>
						<a class="dropdown-item">C</a>
						<li><a class="dropdown-item" href="department.html">Chest pain</a></li>
						<li><a class="dropdown-item" href="department.html">Chickenpox</a></li>
						<li><a class="dropdown-item" href="department.html">Cold sore</a></li>
						<li><a class="dropdown-item" href="department.html">Common cold</a></li>
						<li><a class="dropdown-item" href="department.html">Cough</a></li>
						<a class="dropdown-item">D</a>
						<li><a class="dropdown-item" href="department.html">Deafblindness</a></li>
						<li><a class="dropdown-item" href="department.html">Depression</a></li>
						<li><a class="dropdown-item" href="department.html">Diabities</a></li>
						<li><a class="dropdown-item" href="department.html">Diarrhoea</a></li>
						<li><a class="dropdown-item" href="department.html">Dizziness</a></li>
						<li><a class="dropdown-item" href="department.html">Dysphagia(swallowing problems)</a></li>
						<a class="dropdown-item">E</a>
						<li><a class="dropdown-item" href="department.html">Eye cancer</a></li>
						<li><a class="dropdown-item" href="department.html">Ear Ache</a></li>
						<li><a class="dropdown-item" href="department.html">Ectopic pregenancy</a></li>
						<li><a class="dropdown-item" href="department.html">Ewing sarcoma</a></li>
						<a class="dropdown-item">F</a>
						<li><a class="dropdown-item" href="department.html">Fever</a></li>
						<li><a class="dropdown-item" href="department.html">Flu</a></li>
						<li><a class="dropdown-item" href="department.html">Food poisoning</a></li>
						<li><a class="dropdown-item" href="department.html">Fungal infection</a></li>
						<li><a class="dropdown-item" href="department.html">Fibroids</a></li>
						<a class="dropdown-item">G</a>
						<li><a class="dropdown-item" href="department.html">Gout</a></li>
						<li><a class="dropdown-item" href="department.html">Gum disease</a></li>
						<li><a class="dropdown-item" href="department.html">Genital warts</a></li>
						<li><a class="dropdown-item" href="department.html">Gallstones</a></li>
						<a class="dropdown-item">H</a>
						<li><a class="dropdown-item" href="department.html">Heart Disease</a></li>
						<li><a class="dropdown-item" href="department.html">Heat Stress</a></li>
						<li><a class="dropdown-item" href="department.html">Healthy Weight</a></li>
						<li><a class="dropdown-item" href="department.html">Hearing impairment</a></li>
						<li><a class="dropdown-item" href="department.html">HIV</a></li>

						<a class="dropdown-item">I</a>
						<li><a class="dropdown-item" href="department.html">Influenza</a></li>
						<li><a class="dropdown-item" href="department.html">Injury</a></li>
						<li><a class="dropdown-item" href="department.html">Invasive Candidiasis</a></li>
						<li><a class="dropdown-item" href="department.html">IBD(Inflammatory Bowel Disease)</a></li>

						<a class="dropdown-item">J</a>
						<li><a class="dropdown-item" href="department.html">Jaundice</a></li>
						<li><a class="dropdown-item" href="department.html">Jamestown Canyon Virus infection</a></li>

						<a class="dropdown-item">K</a>
						<li><a class="dropdown-item" href="department.html">Kidney Disease</a></li>

						<a class="dropdown-item">L</a>
						<li><a class="dropdown-item" href="department.html">Lead Poisning</a></li>
						<li><a class="dropdown-item" href="department.html">Lice</a></li>
						<li><a class="dropdown-item" href="department.html">Lung Cancer</a></li>

						<a class="dropdown-item">M</a>
						<li><a class="dropdown-item" href="department.html">Malaria</a></li>
						<li><a class="dropdown-item" href="department.html">Measles</a></li>
						<li><a class="dropdown-item" href="department.html">Mental Health</a></li>
						<li><a class="dropdown-item" href="department.html">MonkeyPox</a></li>

						<a class="dropdown-item">N</a>
						<li><a class="dropdown-item" href="department.html">Norovirus Infection</a></li>
						<li><a class="dropdown-item" href="department.html">Newborn Jaundice</a></li>
						<li><a class="dropdown-item" href="department.html">Neck problem</a></li>

						<a class="dropdown-item">O</a>
						<li><a class="dropdown-item" href="department.html">Oral Cancer</a></li>
						<li><a class="dropdown-item" href="department.html">Overweight</a></li>
						<li><a class="dropdown-item" href="department.html">Ovarian Cancer</a></li>
						<li><a class="dropdown-item" href="department.html">Outbreaks</a></li>

						<a class="dropdown-item">P</a>
						<li><a class="dropdown-item" href="department.html">Pnademic Flu</a></li>
						<li><a class="dropdown-item" href="department.html">Parasitic Disease</a></li>
						<li><a class="dropdown-item" href="department.html">Pneumonia</a></li>
						<li><a class="dropdown-item" href="department.html">Pregnancy</a></li>

						<a class="dropdown-item">R</a>
						<li><a class="dropdown-item" href="department.html">Rabies</a></li>
						<li><a class="dropdown-item" href="department.html">Rat-Bite fever</a></li>

						<a class="dropdown-item">S</a>
						<li><a class="dropdown-item" href="department.html">Skin Cancer</a></li>
						<li><a class="dropdown-item" href="department.html">Sleep disorder</a></li>
						<li><a class="dropdown-item" href="department.html">Smallpox</a></li>
						<li><a class="dropdown-item" href="department.html">Sore Throat</a></li>

						<a class="dropdown-item">T</a>
						<li><a class="dropdown-item" href="department.html">TB</a></li>
						<li><a class="dropdown-item" href="department.html">Tetanus Infection</a></li>
						<li><a class="dropdown-item" href="department.html">Thalassemia</a></li>
						<li><a class="dropdown-item" href="department.html">Throat Infection</a></li>

						<a class="dropdown-item">U</a>
						<li><a class="dropdown-item" href="department.html">Uterine Cancer</a></li>

						<a class="dropdown-item">W</a>
						<li><a class="dropdown-item" href="department.html">Weight</a></li>
						<li><a class="dropdown-item" href="department.html">Whooping Caugh</a></li>
						<li><a class="dropdown-item" href="department.html">Winter Strims</a></li>
						<li><a class="dropdown-item" href="department.html">Women's Health</a></li>

						<a class="dropdown-item">Y</a>
						<li><a class="dropdown-item" href="department.html">Yeast Infection</a></li>
						<li><a class="dropdown-item" href="department.html">Yellow fever</a></li>
					</ul>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="doctor.html">Doctors</a></li>
						<li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>
						<li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li>
					</ul>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="Doctor%20accounts.html">Doctor Accounts</a></li>

						<li><a class="dropdown-item" href="Lab%20reporter%20account.html">Lab Reporter Accounts</a></li>
					</ul>
				</li>

			   <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
				<a class="nav-link" href="service.html">Services</a></li>
			   <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>


<!-- HEADER Ends HERE -->

<!-- Slider Starts Here -->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span>
					<h1 class="mb-3 mt-3">Your most trusted health partner</h1>
					
					<p class="mb-4 pr-5">This online health management system provides real-time healthcare advice and counseling via the Medical professionals who are licensed.</p>
					<div class="btn-container ">
						<a href="appoinment.html" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Make appoinment <i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--  1st Featured services starts HERE -->
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>24 Hours Service</span>
						<h4 class="mb-3">Online Appoinment</h4>
						<p class="mb-4">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
						<a href="appoinment.html" class="btn btn-main btn-round-full">Make a appoinment</a>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-chat"></i>
						</div>
						<span>Online Consultation</span>
						<h4 class="mb-3">Chat with Doctor</h4>
						<p class="mb-4">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
						<a href="appoinment.html" class="btn btn-main btn-round-full">Consult</a>
					</div>
				 
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Emergency Cases</span>
						<h4 class="mb-3">1-800-700-6200</h4>
						<p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- 2nd Featured services starts HERE -->

<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
				<div class="about-img">
					<img src="{{ URL::asset('hms/images/about/img-1.jpg') }}" alt="" class="img-fluid">
					<img src="{{ URL::asset('hms/images/about/img-2.jpg') }}" alt="" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="{{ URL::asset('hms/images/about/img-3.jpg') }}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color">Personal care <br>& healthy living</h2>
					<p class="mt-4 mb-5">We provide best leading medicle service Nulla perferendis veniam deleniti ipsum officia dolores repellat laudantium obcaecati neque.</p>

					<a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Services<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Calculated services starts HERE -->


<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3">58</span>k
						<p>Happy People</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3">1000</span>+
						<p>Patients Treated</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3">40</span>+
						<p>Expert Doctors</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-globe"></i>
						<span class="h3">200</span>+
						<p>Worldwide Patients</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- 3rd Featured services starts HERE -->

<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Award winning patient care</h2>
					<div class="divider mx-auto my-4"></div>
					<p>We are Providing different services.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-laboratory text-lg"></i>
						<h4 class="mt-3 mb-3">Laboratory</h4>
					</div>

					<div class="content">
						<p class="mb-4">Lab reporter check the reports and send them to the doctor.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-heart-beat-alt text-lg"></i>
						<h4 class="mt-3 mb-3">Cardiology</h4>
					</div>
					<div class="content">
						<p class="mb-4">Cardiology departement diagnos and treats heart disease patients.</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-dna-alt-2 text-lg"></i>
						<h4 class="mt-3 mb-3">Dermatology</h4>
					</div>
					<div class="content">
						<p class="mb-4">Dematology diagnos and treats of diseases of the skin, hair and nails.</p>
					</div>
				</div>
			</div>


			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-crutch text-lg"></i>
						<h4 class="mt-3 mb-3">Oncology</h4>
					</div>

					<div class="content">
						<p class="mb-4">This Department treats and diagnos cancers patients.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-pills text-lg"></i>
						<h4 class="mt-3 mb-3">Internal Medicine</h4>
					</div>
					<div class="content">
						<p class="mb-4">This department treats and diagnos kidney patients.</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="icofont-nurse text-lg"></i>
						<h4 class="mt-3 mb-3">Women's Health</h4>
					</div>
					<div class="content">
						<p class="mb-4">This department treats and diagnos all diseases related to women health.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--  Book Appointment starts HERE -->

<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="{{ URL::asset('hms/images/about/img-3.jpg') }}" alt="" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+23 345 67980</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Book appoinment</h2>
					<p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>
					     <form id="#" class="appoinment-form" method="post" action="#">
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Choose Department</option>
                                  <option>Software Design</option>
                                  <option>Development cycle</option>
                                  <option>Software Development</option>
                                  <option>Maintenance</option>
                                  <option>Process Query</option>
                                  <option>Cost and Duration</option>
                                  <option>Modal Delivery</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect2">
                                  <option>Select Doctors</option>
                                  <option>Software Design</option>
                                  <option>Development cycle</option>
                                  <option>Software Development</option>
                                  <option>Maintenance</option>
                                  <option>Process Query</option>
                                  <option>Cost and Duration</option>
                                  <option>Modal Delivery</option>
                                </select>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="time" id="time" type="text" class="form-control" placeholder="Time">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                    </div>

                    <a class="btn btn-main btn-round-full" href="appoinment.html" >Make Appoinment <i class="icofont-simple-right ml-2  "></i></a>
                </form>
            </div>
			</div>
		</div>
	</div>
</section>


<!--  Testimonials starts HERE -->

<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>We served over 5000+ Patients</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<img src="{{ URL::asset('hms/images/team/test-thumb1.jpg') }}" alt="" class="img-fluid">
					</div>

					<div class="client-info ">
						<h4>Amazing service!</h4>
						<span>John Partho</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="{{ URL::asset('hms/images/team/test-thumb2.jpg') }}" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Expert doctors!</h4>
						<span>Mullar Sarth</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="{{ URL::asset('hms/images/team/test-thumb3.jpg') }}" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Good Support!</h4>
						<span>Kolis Mullar</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="{{ URL::asset('hms/images/team/test-thumb4.jpg') }}" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Nice Environment!</h4>
						<span>Partho Sarothi</span>
						<p class="mt-4">
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="{{ URL::asset('hms/images/team/test-thumb1.jpg') }}" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Modern Service!</h4>
						<span>Kolis Mullar</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- FOOTER Starts HERE-->


<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<a><img src="{{ URL::asset('hms/images/logo.png') }}" alt="" class="img-fluid" style=" float: left; height: 130px; width: 130px ">
							<br><br>
							<h4>My Health Care</h4></a>
						<br>

					</div>
					<p>My Health Care app can change the way people manage their health while also linking them to the most appropriate doctors.</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="https://www.facebook.com/"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Department</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Internal Medicine </a></li>
						<li><a href="#">Women's Health</a></li>
						<li><a href="#">Oncology</a></li>
						<li><a href="#">Cardiology</a></li>
						<li><a href="#">Nephrology</a></li>
						<li><a href="#">Dermatology</a></li>

					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Support</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">FAQuestions</a></li>
						<li><a href="https://www.pmc.gov.pk/Doctors/Search">Doctors Licence</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Get in Touch</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Support Available for 24/7</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">support@myhealthcare.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Help line</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">+92-355-6699</a></h4>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">My Health Care</span> 2022
					</div>
				</div>
				<div class="col-lg-6">
					<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
						<form action="#" class="subscribe">
							<input type="text" class="form-control" placeholder="Your Email address">
							<a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
						</form>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>


<!-- FOOTER Ends HERE-->


    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="{{ URL::asset('hms/plugins/jquery/jquery.js') }}"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="{{ URL::asset('hms/plugins/bootstrap/js/popper.js') }}"></script>
    <script src="{{ URL::asset('hms/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('hms/plugins/counterup/jquery.easing.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ URL::asset('hms/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ URL::asset('hms/plugins/counterup/jquery.waypoints.min.js') }}"></script>
    
    <script src="{{ URL::asset('hms/plugins/shuffle/shuffle.min.js') }}"></script>
    <script src="{{ URL::asset('hms/plugins/counterup/jquery.counterup.min.js') }}"></script>
    <!-- Google Map -->
    <script src="{{ URL::asset('hms/plugins/google-map/map.js') }}"></script>
    <script src="{{ URL::asset('hms/https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap') }}"></script>    
    
    <script src="{{ URL::asset('hms/js/script.js') }}"></script>
    <script src="{{ URL::asset('hms/js/contact.js') }}"></script>

  </body>
  </html>
   