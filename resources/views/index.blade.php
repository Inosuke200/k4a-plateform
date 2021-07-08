{{-- /* ------------------------------------------------------
Develop by : OUIYA Ismaël = web and web mobile developer

LinkEdin Profil : OUIYA Ismaël
------------------------------------------------------*/ --}}
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Knowledge For Africa</title>
<meta name="description" content="UX designer and web developer">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
<link rel="stylesheet" type="text/css" media="screen" href="fontawesome/css/all.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/skins/default.css" data-name="skins">
<link rel="shortcut icon" href="images/log.png" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600italic,600,700italic,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,400italic,500,300italic,300,100,500italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body onLoad="load()" onUnload="GUnload()">
<div class="wrapper" id="wrapper">
  <div id="preloader">
    <div id="status"></div>
  </div>
  <header>
    {{-- <div class="container">
      <div class="row relative">
        <ul class="language">
          <li> <a href="#" data-toggle="dropdown">Anglais</a><i class="fa fa-caret-down"></i>
            <ul class="dropdown-menu" role="menu">
              <li><a href="locale/en" class="french">Français</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div> --}}
    <div class="menu">
      <div class="navbar-wrapper">
        <div class="container">
          <div class="navwrapper">
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
                <div class="logo"><a href=""><img src="images/log.png" alt="" width="120" height="130"></a> </div>
                <nav class="navArea">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                  </div>
                  <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" id="navigation">
                      <li class="menuItem" id="home"><a href="#wrapper">Accueil</a></li>
                      <li class="menuItem"><a href="#features">Nos services</a></li>
                      <li class="menuItem"><a href="#courses">Nos objectifs</a></li>
                      <li class="menuItem"><a href="#contact">Contactez-nous</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header_v3">
      <div class="banner row" id="banner">
        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 noPadd slides-container" style="height:100%">
          <div class="slide">
            <div class="container hedaer-inner">
              <div class="bannerText">
                <h3>Accédez à des MOOCs sur la blockchain, la finance décentralisée (Defi) et leurs modes d'utilisation pour créer de la valeur.</h3>
                <p>Chez nous le savoir est une arme au service d’une Afrique prospère.</p>
              </div>
            </div>
            <img src="http://placehold.it/1920x800&text= IMG1" alt="image01"> </div>
          <div class="slide">
            <div class="container hedaer-inner">
              <div class="bannerText">
                <h3>K4A e-learning est une plateforme de e-learning sur la blockchain dédiée aux pays Francophone.</h3>
                <p>Nous somme une comunauté éducative africaine orientée vers l'insertion  professionnelle des jeunes.</p>
              </div>
            </div>
            <img src="images/header-image/image01.jpg" alt="image01"> </div>
        </div>
      </div>
    </div>

      <div class="container form-header">
        <div class="form-container">
          <h2 class="">Devenir membre</h2>
          <div class="row ">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-row">
            <form action="{{route('test')}}" method="POST">
                @csrf
                    @if(Session::has('post_register'))
                        <h6 class="text-danger  text-center">{{Session::get('post_register')}}</h6><br>
                    @endif
                <input type="text" name="forname" placeholder="Votre prénom" class="normal small">
                <input type="text" name="name" placeholder="Votre nom" class="normal small last">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-row">
                <input type="text" name="email" placeholder="Votre E-mail" class="normal">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-row">
                <select class="normal" name="programme">
                          <option value="Lieu"  selected="selected">Sélectionner votre programme</option>
                          <option value="dog">E-learning</option>
                          <option value="cat">Formation professionnelle</option>
                          <option value="hamster">Transformation digitale et développement web</option>
                          <option value="parrot">Consulting</option>
                </select>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-row">
                <textarea name="message" placeholder="Votre message" class="normal medium"></textarea>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <input type="submit" class="button" value="Soumettre">
              </div>
            </form>
          </div>
        </div>
      </div>

  </header>
  <section class="white_section section_gap" id="features">
    <div class="container">
      <div class="heading">
        <h1><span>Nos</span>Services</h1>
        <p>K4A est une start up orientée innovation, qui vise à apporter la prospérité et  le développement durable<br> en Afrique à travers l’éducation notamment l’éducation aux nouvelles technologies. </p>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="membership_listing"> <span><i class="fas fa-chalkboard-teacher"></i></span>
            <h3>E-learning </h3>
            <p>Grâce à notre plate-forme, nous diffusions des cours en ligne via des MOOCs sur la blockchain dédiés aux développeurs Web,au public cible des startups voulant promouvoir leurs services basés sur la blockchain et à toute personne intéressée.</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="membership_listing"> <span><i class="fas fa-user-tie"></i></span>
            <h3>Formation professionnelle </h3>
            <p>cet aspect concerne les formations en presentiel organisées dans nos locaux et portant que les blockchain ainsi que l à financer décentralisée.Nous voulons créer une communauté qui s'étend au delà du digital et avoir plus d'impact sur le terrain. </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="membership_listing"> <span><i class="fas fa-code"></i></span>
            <h3>Transformation digitale et développement web</h3>
            <p> L'Afrique Sub-saharienne est dans un processus de digitalisation accrue. C'est la raison pour laquelle nous accompagnons ce processus à travers des offres permettant de digitaliser des contenus éducatifs axés sur la vulgarisation de la technologie blockchain au profit de nos communautés.</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="membership_listing"> <span><i class="fa fa-file-text-o"></i></span>
            <h3> Consulting</h3>
            <p>Nous offrons des services de consulting pour les startup africaines souhaitant utiliser la blockchain pour develloper de nouveaux services et proposer des contenus éducatifs spécifiques pour faire la promotion de leurs services basés sur la finance décentralisée.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pricingtables section_gap" id="courses">
    <div class="container">
      <div class="heading">
        <h1><span>Nos </span>objectifs</h1>
        <p>L’objectif principal de Knowledge for Africa est la vulgarisation de l’éducation financière via des MOOCS sur la blockchain et la finance décentralisée en général portant sur les leurs implications et modes d’utilisation pour générer des sources de revenus et des business. Chez nous le savoir est une arme au service d’une Afrique prospère. <br><br>
          Nous souhaitons inciter les africains à s’approprier des technologies qui révolutionnent le monde numérique. <br><br>
          Les objectifs particuliers de K4A s’articulent entre autres autour :
          </p>
      </div>
      <div class="row">
        <ul class="pricing-boxes three">
          <li>
            <div class="plan-name">
              <span class="textos">Proposer des formations interactives et axées sur la pratique </span>
            </div>
          <li class="best-plan">
            <div class="plan-name color">
              <span class="textos">Optimiser l’expérience utilisateur de nos plateformes d’apprentissage</span>

            </div>
          <li>
            <div class="plan-name">
              <span class="textos">Former et constituer une expertise africaine de la technologie blockchain et Defi au service de l’excellence </span>
            </div>
        </ul>
      </div>
    </div>
  </section>
  <section class="grey_section section_gap" id="contact">
    <div class="container">
      <div class="heading">
        <h1><span>Avez-vous une </span>Question ?</h1>
        <p>Pour une meileure prise en charge de vos différentes préoccupations ou plus<br> plus d'informations vous pouvez nous laisser
         un message à travers ce formulaire.</p>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
          <div class="row mapArea">
            <div id="map" style="width: 100%; height: 100%"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31181.004453410453!2d-1.5616043785888671!3d12.340970753330549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbf!4v1624949403951!5m2!1sfr!2sbf" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
          <div id="message"></div>
        <form method="post" action="{{route('indent')}}" name="cform" id="cform">
            @csrf
            @if(session()->has('message'))
                <div class="alert alert-success">
                {{ session()->get('message') }}
                </div>
            @endif
              <div class="form-row clearfix">
                <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 normal" placeholder="Votre nom">
              </div>
              <div class="form-row clearfix">
                <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 normal" placeholder="Adresse e-mail">
              </div>
              <div class="form-row clearfix">
                <textarea name="message" id="comments" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 normal medium" placeholder="Votre message"></textarea>
              </div>
              <input type="submit" id="submit" name="send" class="button" value="Envoyer">
              <div id="simple-msg"></div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="blue_section section_gap">
    <div class="container">
      <div class="row bottomfourcol">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomAbout">
          <h5 class="heading">A propos</h5>
          <p>K4A est une start up orientée innovation, qui vise à apporter la prospérité et le développement durable en Afrique à travers l’éducation notamment l’éducation aux nouvelles technologies.</p>
          <h5 class="socio">Nous sommes sur les réseaux sociaux</h5>
          <div class="socialshare"><a href="https://www.facebook.com/Knowledge-for-Africa-104282887952493/"><i class="fa fa-facebook"></i></a> <a href="https://www.linkedin.com/company/knowledge-for-africa"><i class="fab fa-linkedin-in"></i></i></a> </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h5 class="heading">Comment ça fonctionne ?</h5>
          <p>K4A e-learning est une plateforme de e-learning sur la blockchain dédiée aux pays Francophone.</p>
          <ul class="list">
            <li>Mettre au point des formations orientées « emploi ».</li>
            <li>Proposer des formations interactives et axées sur la pratique.</li>
            <li>Optimiser l’expérience utilisateur de nos plateformes d’apprentissage.</li>
            <li>Former et constituer une expertise africaine de la technologie blockchain et Defi au service de l’excellence.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="pull-left">
          <p>&copy; 2021 Knowledge For Africa. Tous droits réservés</p>
        </div>
        <div class="pull-right"><a class="gototop smooth" href="#wrapper">Retour en haut de la page<i class="fa fa-chevron-up"></i></a></div>
      </div>
    </div>
  </footer>
</div>
<script type="text/javascript" src="js/modernizr.custom.26633.js"></script>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/stickUp.js"></script>
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
"use strict";
	$('.header_v3 #banner').superslides({
	  animation: 'fade',
	  play: 5000
	});
</script>
<script type="text/javascript" src="js/jquery.contact.js"></script>
<script src="js/jquery.classyloader.min.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script defer src="js/slideroption.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'features',
		  2: 'courses',
		  3: 'teachers',
		  4: 'pricing',
		  5: 'testimonial',
		  6: 'blog',
		  7: 'contact'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});
		$( ".lb" ).rlightbox();
		$( ".lb_title-overwritten" ).rlightbox({overwriteTitle: true});
		$('.flexslider').flexslider({
			animation: "fade",
			animationLoop: true,
			slideshow: true,
			pauseOnAction: false,
			slideshowSpeed: 7000,
			controlNav: true,
			start: function(slider){
			$('body').removeClass('loading');
			}
		});

	var activeImage;
	var getmaxHeight = 0;
	$(".testimonialText li").each(function(index, element) {
        if($(this).height()>getmaxHeight){
			getmaxHeight = $(this).height();
			$(".footerTopContent").height(getmaxHeight);
			}
    });

    $(".testimonialText li").fadeTo("fast",0);
	$(".testimonialText li:first").fadeTo("fast",1);
	$(".imageSlide .imageBox").removeClass("activeImage");
	$(".imageSlide .imageBox:first").addClass("activeImage");
	$(".imageSlide .imageBox").mouseenter(function(){
		if(!$(this).hasClass("activeImage")){
			var gi = $(this).index();
			$(".imageSlide .imageBox").removeClass("activeImage");
			$(this).addClass("activeImage");
			$(".testimonialText li").fadeTo("fast",0);
			$(".testimonialText li:eq("+gi+")").fadeTo("fast",1);
			}
	})
	$("a[data-rel^='prettyPhoto']").prettyPhoto();
	var windowBottom = $(window).height()+0;
	var index=0;
	$(document).scroll(function(){
		divposition = parseInt($('.factabout').offset().top),10;
		divsrollpos = parseInt($(window).scrollTop()),10;
		ctop = parseInt(divposition-divsrollpos),10;
		if(ctop<Math.round(windowBottom/2)){
			if(index==0){

				$('.timer').each(count);

			}
			index++;
		}
	});
function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
}
	});

});
</script>
<script src="js/custom.js"></script>
</body>
</html>
