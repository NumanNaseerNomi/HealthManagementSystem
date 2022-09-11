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
				<img src="images/logo.png" alt="" class="img-fluid" style="height: 100px; width: 100px">
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

	


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">About Us</span>
          <h1 class="text-capitalize mb-5 text-lg">About Us</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">About Us</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="title-color">Personal care for your healthy living</h2>
			</div>
			<div class="col-lg-8">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quod laborum alias. Vitae dolorum, officia sit! Saepe ullam facere at, consequatur incidunt, quae esse, quis ut reprehenderit dignissimos, libero delectus.</p>
				<img src="images/about/sign.png" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</section>

<section class="fetaure-page ">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="images/about/about-1.jpg" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Healthcare for Kids</h4>
					<p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="images/about/about-2.jpg" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Medical Counseling</h4>
					<p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="images/about/about-3.jpg" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Modern Equipments</h4>
					<p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-block-item">
					<img src="images/about/about-4.jpg" alt="" class="img-fluid w-100">
					<h4 class="mt-3">Qualified Doctors</h4>
					<p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section awards">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4">
				<h2 class="title-color">Our Doctors achievements </h2>
				<div class="divider mt-4 mb-5 mb-lg-0"></div>
			</div>
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/3.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/4.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/1.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/2.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/5.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/6.png" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4">Meet Our Specialist</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Today’s users expect effortless experiences. Don’t let essential people and processes stay stuck in the past. Speed it up, skip the hassles</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="images/team/1.jpg" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html">John Marshal</a></h4>
						<p>Internist, Emergency Physician</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="images/team/2.jpg" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html">Marshal Root</a></h4>
						<p>Surgeon, Сardiologist</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="images/team/3.jpg" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html">Siamon john</a></h4>
						<p>Internist, General Practitioner</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block">
					<img src="images/team/4.jpg" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html">Rishat Ahmed</a></h4>
						<p>Orthopedic Surgeon</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6">
				<div class="section-title">
					<h2 class="mb-4">What they say about us</h2>
					<div class="divider  my-4"></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6 testimonial-wrap offset-lg-6">
				<div class="testimonial-block">
					<div class="client-info ">
						<h4>Amazing service!</h4>
						<span>John Partho</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
					
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Expert doctors!</h4>
						<span>Mullar Sarth</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Good Support!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Nice Environment!</h4>
						<span>Partho Sarothi</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Modern Service!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>
@include("footer")