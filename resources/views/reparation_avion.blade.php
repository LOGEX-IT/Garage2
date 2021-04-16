<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  .hero-wrap .overlay{
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    opacity: .4;
  }
</style>
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
    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://img.huffingtonpost.com/asset/5c938a7f1f00002c007e94e2.jpeg?ops=scalefit_720_noupscale');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('/')}}">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Réparation d'avion <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Réparation d'avion</h1>
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
                <h3 class="heading">Service de qualité</h3>
                <!-- <p>Nous mettons notre savoir faire à votre service. Faites nous confiance pour redonner toute sa puissance, à votre Engin.</p> -->
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
                <h3 class="heading">Location de matériels</h3>
                <!-- <p>Nous mettons à votre disponibilité des véhicules de qualité à des prix très abordables. Vous y touverez toutes sortes de modèle qui répondrons sûrement à vos besoins</p> -->
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
                <h3 class="heading">Rénovation et maintenance</h3>
              <!--   <p>Le service complet; ce qu'il faut pour remettre votre véhicule sur pied est déjà chez nous. </p> -->
               <!--  <p><a href="#" class="btn-custom">Lire plus</a></p> -->
              </div>
            </div>
             
          </div>
        </div>
    		
<center>
<div class="row justify-content-center" style="width: 100%;">
              <div class="card col-12 col-lg-4 col-md-12">
                <img style="" src="https://evolution.skf.com/wp-content/uploads/sites/5/2016/11/16-4-aerospace-fig-4c.jpg" alt="Avatar">
                <div class="container">
<!--                   <h4><b>Service de Qualité</b></h4>
 -->                  
                </div>
              </div> 

              <div class="card col-12 col-lg-4 col-md-12">
                <img src="https://www.usinenouvelle.com/mediatheque/8/4/9/000159948.jpg" alt="Avatar">
                <div class="container">
<!--                   <h4><b>L'INSTALLATION ET MAINTENANCE DE MATERIELS D'IMPRIMERIE</b></h4>
 -->                  
                </div>
              </div>  

               <div class="card col-12 col-lg-4 col-md-12">
                <img src="https://www.sia-partners.com/sites/default/files/article/cover_picture/2020-06/iStock-1127839292.jpg" alt="Avatar">
                <div class="container">
<!--                   <h4><b>L'INSTALLATION ET MAINTENANCE DE MATERIELS D'IMPRIMERIE</b></h4>
 -->                  
                </div>
              </div> 
</div>
</center>

    	</div>
    </section>

  

    @include('layouts.footer')
    
  




	@include('layouts.site_script')
    
  </body>
</html>