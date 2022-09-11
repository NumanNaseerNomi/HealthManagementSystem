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
							@if (Sentinel::getUser())
								<a href="javascript:void();" style="padding: 5px 10px 5px 10px; margin-left: 60px;" class="btn btn-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
								<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">@csrf</form>
							@else
								<a href="{{ url('/login') }}"  style="padding: 5px 10px 5px 10px; margin-left: 60px;" class="btn btn-white" >Login</a>
							@endif
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="{{ url('/') }}">
			  	<img src="{{ URL::asset('hms/images/logo.png') }}" alt="" class="img-fluid" style="height: 100px; width: 100px">
				<a><h3>My Health Care</h3> <h6>Health Management System</h6></a>

			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="{{ url('/') }}">Home</a>
			  </li>
			  <li class="nav-item active">
				<a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
			  </li>

				<!-- <li class="nav-item dropdown">
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
				</li> -->

				<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="doctor.html">Doctors</a></li>
						<li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>
						<li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li>
					</ul>
				</li> -->

				<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="Doctor%20accounts.html">Doctor Accounts</a></li>

						<li><a class="dropdown-item" href="Lab%20reporter%20account.html">Lab Reporter Accounts</a></li>
					</ul>
				</li> -->

			   <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
				<a class="nav-link" href="{{ url('/services') }}">Services</a></li>
			   <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>


<!-- HEADER Ends HERE -->
