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
                  <a href="{{URL::to('/reparation-avion/')}}">R??paration d'avion</a>
                </div>
            </div>
<!--             <div class="dropdown">
 -->            
                 <li class="nav-item"><a href="{{URL::to('/reparation-bateaux/')}}" class="nav-link" style="font-size: 10px;"><strong>PORT</strong></a></li>
                <!--  <div class="dropdown-content">
                  <a href="{{URL::to('/reparation-bateaux/')}}">R??paration de bateaux</a>
                  <a href="#">R??paration de machine</a>
                </div> -->
            <!-- </div> -->
<!--             <div class="dropdown">
 -->              
                 <li class="nav-item"><a href="#" class="nav-link" style="font-size: 11px; opacity: 0.9"><strong style="font-size: 10px;">FERROVIERE</strong></a></li>
               <!--   <div class="dropdown-content">
                  <a href="#">R??paration de machine</a>
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
    <section class="hero-wrap hero-wrap-2" style="background-image: url('template/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('/')}}">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Services</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	

      <div class="container">

            <div class="row">
          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                <!-- <span class="flaticon-car-service"></span> -->
                <span class="flaticon-tow-truck"></span>

              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Pi??ces d??tach??es disponibles</h3>
                <!-- <p>Nous mettons notre savoir faire ?? votre service. Faites nous confiance pour redonner toute sa puissance, ?? votre Engin.</p> -->
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
                <h3 class="heading">Un service de Qualit??</h3>
                <!-- <p>Nous mettons ?? votre disponibilit?? des v??hicules de qualit?? ?? des prix tr??s abordables. Vous y touverez toutes sortes de mod??le qui r??pondrons s??rement ?? vos besoins</p> -->
               <!--  <p><a href="#" class="btn-custom">Lire plus</a></p> -->
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
                <h3 class="heading">Entretien de v??hicules</h3>
              <!--   <p>Le service complet; ce qu'il faut pour remettre votre v??hicule sur pied est d??j?? chez nous. </p> -->
               <!--  <p><a href="#" class="btn-custom">Lire plus</a></p> -->
              </div>
            </div>
             
          </div>
        </div>
    	
<center>
<div class="row justify-content-center" style="width: 100%;">
              <div class="card col-12 col-lg-4 col-md-12">
                <img src="https://voituresci.s3.amazonaws.com/uploads/post/featured_image/15/mechanic-working-on-a-car.jpg" alt="Avatar">
                <div class="container">
                  <h4><b>REPARATION</b></h4>
                  <p>Nous mettons notre savoir faire ?? votre service. Faites nous confiance pour redonner toute sa puissance, ?? votre Engin.</p>
                </div>
              </div> 

<div class="card col-12 col-lg-4 col-md-12">
  <img src="https://static.latribune.fr/641761/afrique-du-sud.jpg" alt="Avatar">
  <div class="container">
    <h4><b>CAR WASH</b></h4>
    <p>Lavage ?? domicile ou au travail. Nous vous permettons tout en restant chez vous ou sur votre lieu travail, de faire nettoyer et entretenir votre v??hicule sur place par une ??quipe de professionnels </p>
  </div>
</div> 

<div class="card col-12 col-lg-4 col-md-12">
  <img src="https://www.vroomly.com/media/images/iStock-1180338177.width-500.jpg" alt="Avatar">
  <div class="container">
    <h4><b>ENTRETIEN AUTO</b></h4>
    <p>Prendre soi de son v??hicule, c'est lui donner la possibilit?? de durer dans le temps</p>
  </div>
</div> 
</div>
</center>

    		
        <div class="row mt-4 mt-md-5 justify-content-between">
        	<div class="col-md-7 ftco-animate">
        		<p>Bas?? ?? Lom?? au Togo, votre "Garage Nouvelle G??n??ration" multimarques, est ?? votre service pour tous travaux sur vos v??hicules. Equip?? de materiels de r??paration automobile et un personnel hautement qualif??, maintenir votre v??hicule en bonne ??tat de marche est notre priorit??.</p>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<h5 class="font-weight-bold">Les avantages</h5>
        		<ul class="services-2">
        			<li><span class="fa fa-check"></span>Pi??ces d??tach??es disponibles</li>
        			<li><span class="fa fa-check"></span>Un service de Qualit??</li>
        			<li><span class="fa fa-check"></span>Location de v??hicules si besoin il y a</li>
        			<li><span class="fa fa-check"></span>Entretien de v??hicules</li>
        		</ul>
        	</div>
        </div>
    	</div>
    </section>




<style type="text/css">
  .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}
</style>


       <!--  <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url('template/images/bg_3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row d-md-flex justify-content-end">
          <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
            <span class="subheading">Prenez rendez-vous</span>
            <h2 class="mb-4">Consultation gratuite</h2>
            <form method="POST" id="myform" name="myform" action="#" class="appointment">
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
                        <select required name="service" class="form-control @error('name') is-invalid @enderror">
                          <option>Selectionner un(des) service(s)</option>
                          <option value="R??paraton de v??hicules">R??paraton de v??hicules</option>
                          <option value="R??paration de v??hicules ?? Domicile">R??paration de v??hicules ?? Domicile</option>
                          <option value="Location de v??hicules">Location de v??hicules</option>
                          <option value="Vente de v??hicules">Vente de v??hicules</option>
                          <option value="Vente de pi??ces d??tach??es">Vente de pi??ces d??tach??es</option>
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
                    <input  required name="type_vehicule" type="text" class="form-control @error('nom_vehicule') is-invalid @enderror" placeholder="Type de v??hicule">
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
                    <input name="tel" type="number" required class="form-control @error('tel') is-invalid @enderror" placeholder="T??l??phone">
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
    </section> -->

    @include('layouts.footer')
    
  




	@include('layouts.site_script')
    
  </body>
</html>