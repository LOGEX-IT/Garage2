<!DOCTYPE html>
<html lang="en">
	@include('layouts.head')
  <body>

  	@include('layouts.top_header')

		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
				<!-- <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a href="{{url('/')}}" class="nav-link" style="font-size: 11px;">Accueil</a></li>
            
            <li class="nav-item"><a href="{{URL::to('/a-propos/')}}" class="nav-link" style="font-size: 11px;"><strong>A propos</strong></a></li>
             <!-- <li class="nav-item"><a href="{{url('equipe')}}" class="nav-link" style="font-size: 11px;">Equipe</a></li> -->
            
            <li class="nav-item"><a href="{{url('shop')}}" class="nav-link" style="font-size: 11px;"><strong>Boutique GNG</strong></a></li>
             <div class="dropdown">
                 <li class="nav-item dropbtn"><a style="color: black; margin-top: 3px; opacity: 0.9;" href="#" class="nav-link"><b style="font-size: 11px;" class="">INDUSTRIE</b> <i class="fa fa-caret-down"></i></a>
                 </li>
                 <div class="dropdown-content">
                  <a href="{{URL::to('/installationgrossemachine/')}}">Installation de grosse machines</a>
                  <a href="{{URL::to('/installation-usine-de-transformation/')}}">Installation d'usine de transformation</a>
                  <a href="{{URL::to('/installation-imprimerie/')}}">Installation d'imprimerie</a>
                </div>
            </div>
            <div class="dropdown">
                 <li class="nav-item dropbtn"><a style="color: black; margin-top: 2px; opacity: 0.9;" href="#" class="nav-link" ><b style="font-size: 11px;">AEROPORT</b> <i class="fa fa-caret-down"></i></a>
                 </li>
                 <div class="dropdown-content">
                  <a href="{{URL::to('/reparation-avion/')}}">Réparation d'avion</a>
                </div>
            </div>
<!--             <div class="dropdown">
 -->            
                 <li class="nav-item"><a href="{{URL::to('/reparation-bateaux/')}}" class="nav-link" style="font-size: 10px;"><strong>PORT</strong></a></li>
                <!--  <div class="dropdown-content">
                  <a href="{{URL::to('/reparation-bateaux/')}}">Réparation de bateaux</a>
                  <a href="#">Réparation de machine</a>
                </div> -->
            <!-- </div> -->
<!--             <div class="dropdown">
 -->              
                 <li class="nav-item"><a href="#" class="nav-link" style="font-size: 11px; opacity: 0.9"><strong style="font-size: 10px;">FERROVIERE</strong></a></li>
               <!--   <div class="dropdown-content">
                  <a href="#">Réparation de machine</a>
                </div> -->
<!--             </div>
 -->            <div class="dropdown">
                 <li class="nav-item dropbtn"><a style="color: black; margin-top: 2px;" href="{{url('shop')}}" class="nav-link"><b style="font-size: 11px;opacity: 0.9;">AUTO-MOTO</b> <i class="fa fa-caret-down"></i></a>
                 </li>
                 <div class="dropdown-content">
                  <a href="{{url::to('/services')}}" >Services</a>
                  <a href="{{url::to('/autres-services')}}">Autres</a>                </div>
                </div>
                <li class="nav-item"><a href="{{url::to('/reservation-ticket')}}" class="nav-link" style="font-size: 11px;"><b style="font-size: 11px;">TICKET</b></a></li>
            <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
           
            <li class="nav-item" style="font-size: 11px;"><a href="{{url::to('/nous-contactez')}}" class="nav-link"><strong style="font-size: 10px;">Contact</strong></a></li>
          </ul>
	      </div>
	    </div>
	  </nav>
    <style>
/* Style The Dropdown Button */
.dropbtn {
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #f79f24;
}
</style>
    <!-- END nav -->
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">

	      <div class="slider-item" style="background-image:url({{ asset('template/images/bg_1.jpg')}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-start">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
		          		<h2 style="color: orange">Nous sommes les meilleurs dans la réparation auto</h2>
			            <h1 class="mb-4">Faites durer votre voiture plus longtemps</h1>
			            <p><a href="{{url::to('/nous-contactez')}}" class="btn btn-primary">Contactez-nous</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url({{ asset('template/images/bg_2.jpg')}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-start">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
		          		<h2>Nous nous soucions de votre voiture</h2>
			            <h1 class="mb-4">Réparez votre voiture en toute sécurité chez nous ou chez vous</h1>
			            <p><a href="{{url('contact')}}" class="btn btn-primary">Contactez-nous</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

        <div class="slider-item" style="background-image:url({{ asset('template/images/bg_4.jpg')}});">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start">
              <div class="col-md-6 ftco-animate">
                <div class="text w-100">
                  <h2>Location / Vente de voiture</h2>
                  <h1 class="mb-4">Reservez / Achetez dès maintenant</h1>
                  <p><a href="{{url('contact')}}" class="btn btn-primary">Contactez-nous</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>

	    </div>
	  </div>
		
		<section class="intro">
			<div class="container intro-wrap">
				<div class="row no-gutters">
					<div class="col-md-12 col-lg-9 bg-intro d-sm-flex align-items-center align-items-stretch">
						<div class="intro-box d-flex align-items-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<!-- <i class="flaticon-repair"></i> -->
                <i class="flaticon-tow-truck"></i>
							</div>
							<h2 class="mb-0">Etes-vous prêt? <span>Réparons votre auto maintenant!</span></h2>
						</div>
						<a href="#" class="bg-primary btn-custom d-flex align-items-center"><span>Prenez rendez-vous</span></a>
					</div>
				</div>
			</div>	
		</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Nous offrons des services de qualité</span>
            <h2>Nos services</h2>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<!-- <span class="flaticon-car-service"></span> -->
                <span class="flaticon-tow-truck"></span>

              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Réparation de vehicules</h3>
                <p>Nous mettons notre savoir faire à votre service. Faites nous confiance pour redonner toute sa puissance, à votre Engin.</p>
                <!-- <p><a href="#" class="btn-custom">Lire plus</a></p> -->
              </div>
            </div>
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<!-- <span class="flaticon-tyre"></span> -->
                <span class="flaticon-battery"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Réparation de vehicules à Domicile</h3>
                <p> Vous n'avez pas la possibilité de venir chez nous? Pas d'inquiétude, nous sous déplaçons chez vous! Chez nous ou chez vous, la qualité de service reste la même</p>
                <!-- <p><a href="#" class="btn-custom">Lire plus</a></p> -->
              </div>
            </div> 
          </div>

          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<!-- <span class="flaticon-battery"></span> -->
                <span class="flaticon-car-service">
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Location de véhicules</h3>
                <p>Nous mettons à votre disponibilité des véhicules de qualité à des prix très abordables. Vous y touverez toutes sortes de modèle qui répondrons sûrement à vos besoins</p>
               <!--  <p><a href="#" class="btn-custom">Lire plus</a></p> -->
              </div>
            </div> 
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<!-- <span class="flaticon-car-engine"></span> -->
                <span class="flaticon-tyre">
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Vente de véhicules</h3>
                <p>Quoi de mieux que d'acheter sa voiture chez des professionnelles qui savent lui donner une bonne résistance aux kilomètres</p>
                <!-- <p><a href="#" class="btn-custom">Lire plus</a></p> -->
              </div>
            </div>    
          </div>

          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<!-- <span class="flaticon-tow-truck"></span> -->
                <span class="flaticon-car-engine">
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Vente de pièces détachées</h3>
                <p>Le service complet; ce qu'il faut pour remettre votre véhicule sur pied est déjà chez nous. </p>
               <!--  <p><a href="#" class="btn-custom">Lire plus</a></p> -->
              </div>
            </div>
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-repair"></span>
              
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Entretien Auto</h3>
                <p>Prendre soi de son véhicule, c'est lui donner la possibilité de durer dans le temps</p>
                <!-- <p><a href="#" class="btn-custom">Lire plus</a></p> -->
              </div>
            </div>       
          </div>
        </div>
    	</div>
    </section>
   	
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url('template/images/about.jpg');">
    					<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center"> 
    						<span class="fa fa-play"></span>
    					</a>-->
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Bienvenu au "Garage Nouvelle Génération" Qui Sommes-nous?</span>
		            <p>Basé à Lomé au Togo, votre "Garage Nouvelle Génération" multimarques, est à votre service pour tous travaux sur vos véhicules. Equipé de materiels de réparation automobile et un personnel hautement qualifé, maintenir votre véhicule en bonne état de marche est notre priorité. <br><br><br> </p>

		            <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-2" data-toggle="tab" href="#home1">Notre Mission</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">Notre Vision</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Nos Valeurs</a>
									  </li>
									</ul>
									<div class="tab-content rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>Rendre votre véhivule durable dans le temps</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p>Permettre à tous nos clients d'utiliser sereinement leurs véhicules</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p>Ecoute, Réactivité, Professionnalisme</p>
									  </div>
									</div>
								</div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-counter" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="7">0</strong>
              </div>
              <div class="text">
              	<span>Années d'expériences</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="4000">0</strong>
              </div>
              <div class="text">
              	<span>Projets réalisés</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="2342">0</strong>
              </div>
              <div class="text">
              	<span>Clients satisfaits</span>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="30">0</strong>
              </div>
              <div class="text">
              	<span>Récompense</span>
              </div>
            </div>
          </div> -->
        </div>
    	</div>
    </section>

		<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url('template/images/bg_3.jpg');">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
    				<span class="subheading">Prenez rendez-vous</span>
    				<h2 class="mb-4">Consultation gratuite</h2>
    				<form method="POST" id="myform" name="myform" action="" class="appointment">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  @if(Session::has('message'))
                      <div class="alert alert-warning" role ="alert"><h3>{{Session::get('message')}}</h3>
                      </div>
                  @endif

                                      
                  @if(Session::has('success'))
                      <div class="success alert-success" role ="alert"><h3>{{Session::get('success')}}</h3>
                      </div>
                  @endif
                  <div class="form-group">
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                        <select required name="service" class="form-control @error('service') is-invalid @enderror">
                          <option>Selectionner un(des) service(s)</option>
                          <option value="Réparaton de véhicules">Réparaton de véhicules</option>
                          <option value="Réparation de véhicules à Domicile">Réparation de véhicules à Domicile</option>
                          <option value="Location de véhicules">Location de véhicules</option>
                          <option value="Vente de véhicules">Vente de véhicules</option>
                          <option value="Vente de pièces détachées">Vente de pièces détachées</option>
                          <option value="Entretien Auto">Entretien Auto</option>
                        </select>
                          @error('service')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input required name="nom" type="text" class="form-control @error('Nom') is-invalid @enderror" placeholder="Nom">
                  </div>
                    @error('nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input  required name="type_vehicule" type="text" class="form-control @error('nom_vehicule') is-invalid @enderror" placeholder="Type de véhicule">
                  </div>
                    @error('nom_vehicule')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-wrap">
                      <div class="icon"><span class="fa fa-calendar"></span></div>
                      <input required name="date_rendezvous" type="text" class="form-control appointment_date @error('date_rendezvous') is-invalid @enderror" placeholder="Date du rendez-vous">
                    </div>
                  </div>
                    @error('date_rendezvous')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-wrap">
                      <div class="icon"><span class="fa fa-clock-o"></span></div>
                      <input required name="heure_rendezvous" type="text" class="form-control appointment_time @error('heure_rendezvous') is-invalid @enderror" placeholder="heure du rendez-vous">
                    </div>
                  </div>
                    @error('heure_rendezvous')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="message" required cols="30" rows="7" class="form-control @error('message') is-invalid @enderror" placeholder="Message"></textarea>
                  </div>
                    @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input name="tel" type="number" required class="form-control @error('tel') is-invalid @enderror" placeholder="Téléphone">
                  </div>
                    @error('tel')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="submit" value="Envoyer" class="btn btn-dark py-3 px-4 g-recaptcha" data-sitekey="6Ld_l9YZAAAAAM-flMVWtzGWOJ8xhIhSuJQSllcX" data-callback='onSubmit' data-action='submit'>
                  </div>
                </div>
              </div>
            </form>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading">Témoignages</span>
            <h2>Clients satisfaits &amp; Commentaires</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Une voiture de bonne qualité. Je n'ai eu aucun soucis durant toute la durée de la location</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url('template/images/person_1.jpg')"></div>
                    	<div class="pl-3">
		                    <p class="name">Sylvain ADOHA</p>
		                    <span class="position">Location de voiture</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Depuis que je fais entretenir ma voiture chez "Garage Nouvelle Génération, je n'ai jamais eu de mauvaise surprise sur route.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url('template/images/person_1.jpg')"></div>
                    	<div class="pl-3">
		                    <p class="name">Jean KOMLAN</p>
		                    <span class="position">Entretien de voiture</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Avant, ma voiture tombait souvent en panne, mais depuis "Garage Nouvelle Génération, il n'y a presque plus de pannes" </p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(template/images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Rodrigue APEVI</p>
		                    <span class="position">Réparation de voiture</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Des pièces de très bonnes qualités. Je fais entierement confiance aux pièces de "Garage Nouvelle Génération"</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url({{ asset('template/images/person_1.jpg')}})"></div>
                    	<div class="pl-3">
		                    <p class="name">Pierre KAKLO</p>
		                    <span class="position">Vente de pièces détachées</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Le fait que le service de "Garage Nouvelle Génération" se déplace chez moi est une bouffée d'air, vu toutes mes occupations.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url({{ asset('template/images/person_1.jpg')}})"></div>
                    	<div class="pl-3">
		                    <p class="name">Reine GAGLO</p>
		                    <span class="position">Réparation de véhicules à Domicile</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div> 
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Service impécable, je suis content de mon investissement dans l'achat de ma voiture chez "Garage Nouvelle Génération".</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url({{ asset('template/images/person_1.jpg')}})"></div>
                      <div class="pl-3">
                        <p class="name">Abidé TCHAKPA</p>
                        <span class="position">Vente de véhicule</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
<!-- 		<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">News &amp; Blog</span>
            <h2>Latest news from our blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('template/images/image_1.jpg')}});">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url({{ asset('template/images/person_2.jpg')}});"></div>
              		<div class="desc pl-3">
              			<span>Posted by John doe</span>
              			<span>24 February 2020</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Best wheel alignment &amp; air conditioning</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('template/images/image_2.jpg')}});">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url({{ asset('template/images/person_3.jpg')}});"></div>
              		<div class="desc pl-3">
              			<span>Posted by John doe</span>
              			<span>24 February 2020</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Best wheel alignment &amp; air conditioning</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{ asset('template/images/image_3.jpg')}});">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url({{ asset('template/images/person_1.jpg')}});"></div>
              		<div class="desc pl-3">
              			<span>Posted by John doe</span>
              			<span>24 February 2020</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Best wheel alignment &amp; air conditioning</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Prix &amp; Forfaits</span>
            <h2>Tarification</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<span class="excerpt d-block">First PMS</span>
	            <span class="price"><sup>$</sup> <span class="number">78.98</span></span>
	            
	            <div class="pricing-text">
	              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	            </div>

	            <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<span class="excerpt d-block">Engine Diagnostics</span>
	            <span class="price"><sup>$</sup> <span class="number">83.75</span></span>
	            
	            <div class="pricing-text">
	              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	            </div>

	            <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<span class="excerpt d-block">Tow Truck</span>
	            <span class="price"><sup>$</sup> <span class="number">85.00</span></span>
	            
	            <div class="pricing-text">
	              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	            </div>

	            <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<span class="excerpt d-block">Car Wash</span>
	            <span class="price"><sup>$</sup> <span class="number">30.50</span></span>
	            
	            <div class="pricing-text">
	              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	            </div>

	            <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section> -->

    <!-- <section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Projets</span>
            <h2>Projets réalisés</h2>
          </div>
        </div>
			</div>
			<div class="container-fluid px-md-0">
				<div class="row no-gutters">
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url({{ asset('template/images/work-1.jpg')}});">
            	<a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Engine</span>
	              	<h2><a href="work-single.html">Engine Testing Complated</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url({{ asset('template/images/work-2.jpg')}});">
            	<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Oil Change</span>
	              	<h2><a href="work-single.html">Change Oil Completed</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url({{ asset('template/images/work-3.jpg')}});">
            	<a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Engine</span>
	              	<h2><a href="work-single.html">Engine Diagnostics</a></h2>
	              </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url({{ asset('template/images/work-4.jpg')}});">
            	<a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Tire</span>
	              	<h2><a href="work-single.html">Tire Change</a></h2>
	              </div>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>	
 -->

    
  @include('layouts.footer')

  <!-- loader -->
<!--   <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->

  @include('layouts.site_script')
    
  </body>
</html>