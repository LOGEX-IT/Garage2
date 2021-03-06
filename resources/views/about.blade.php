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
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('accueil')}}">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>A propos <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">A propos</h1>
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
                <span class="subheading">Bienvenu au "Garage Nouvelle G??n??ration" Qui Sommes-nous?</span>
                <p>Bas?? ?? Lom?? au Togo, votre "Garage Nouvelle G??n??ration" multimarques, est ?? votre service pour tous travaux sur vos v??hicules. Equip?? de materiels de r??paration automobile et un personnel hautement qualif??, maintenir votre v??hicule en bonne ??tat de marche est notre priorit??. <br><br><br> </p>

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
                      <p>Rendre votre v??hivule durable dans le temps</p>
                    </div>
                    <div class="tab-pane container p-0 fade" id="home2">
                      <p>Permettre ?? tous nos clients d'utiliser sereinement leurs v??hicules</p>
                    </div>
                    <div class="tab-pane container p-0 fade" id="home3">
                      <p>Ecoute, R??activit??, Professionnalisme</p>
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
                <span>Ann??es d'exp??riences</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="4000">0</strong>
              </div>
              <div class="text">
                <span>Projets r??alis??s</span>
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
                <span>R??compense</span>
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
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
            <span class="subheading">T??moignages</span>
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
                    <p class="mb-4">Une voiture de bonne qualit??. Je n'ai eu aucun soucis durant toute la dur??e de la location</p>
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
                    <p class="mb-4">Depuis que je fais entretenir ma voiture chez "Garage Nouvelle G??n??ration, je n'ai jamais eu de mauvaise surprise sur route.</p>
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
                    <p class="mb-4">Avant, ma voiture tombait souvent en panne, mais depuis "Garage Nouvelle G??n??ration, il n'y a presque plus de pannes" </p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(template/images/person_1.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Rodrigue APEVI</p>
                        <span class="position">R??paration de voiture</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Des pi??ces de tr??s bonnes qualit??s. Je fais entierement confiance aux pi??ces de "Garage Nouvelle G??n??ration"</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url({{ asset('template/images/person_1.jpg')}})"></div>
                      <div class="pl-3">
                        <p class="name">Pierre KAKLO</p>
                        <span class="position">Vente de pi??ces d??tach??es</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Le fait que le service de "Garage Nouvelle G??n??ration" se d??place chez moi est une bouff??e d'air, vu toutes mes occupations.</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url({{ asset('template/images/person_1.jpg')}})"></div>
                      <div class="pl-3">
                        <p class="name">Reine GAGLO</p>
                        <span class="position">R??paration de v??hicules ?? Domicile</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Service imp??cable, je suis content de mon investissement dans l'achat de ma voiture chez "Garage Nouvelle G??n??ration".</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url({{ asset('template/images/person_1.jpg')}})"></div>
                      <div class="pl-3">
                        <p class="name">Abid?? TCHAKPA</p>
                        <span class="position">Vente de v??hicule</span>
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


  @include('layouts.footer')
    


  @include('layouts.site_script')
    
  </body>
</html>