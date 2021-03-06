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
    <section class="hero-wrap hero-wrap-2" style="background-image: url('template/images/car/bannercarsale.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('accueil')}}">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Vente de voiture <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Vente de voiture</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Vente de voiture</span>
            <h2>Plusieurs voiture de grandes marques ?? votre port??e</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(template/images/car/carsale/car1.jpg);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Alfa Romeo Giulia GTA 2019</h3>
								<span class="position mb-2">50 000 000 FCFA TTC</span>
								<!-- <div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
						            </ul>
	              				</div> -->
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(template/images/car/carsale/car2.jpg);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Hyundai Palisade 2020</h3>
								<span class="position mb-2">16 000 000 FCFA TTC</span>
								<!-- <div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
						            </ul>
	              				</div> -->
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(template/images/car/carsale/car3.jpg);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Alfa Romeo Giulia GTA 2020</h3>
								<span class="position mb-2">30 000 000 FCFA TTC</span>
								<!-- <div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
						            </ul>
	              				</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    @include('layouts.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  @include('layouts.site_script')
    
    
  </body>
</html>