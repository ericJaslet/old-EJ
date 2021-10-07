<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Eric Jaslet | Accueil</title>

		<!-- Mise à jour 2019-03-17 -->

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123333387-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-123333387-1');
		</script>

		<meta name="author" content="Eric jaslet">
		<meta name="description" content="Eric Jaslet Développeur full-stack, HTML5, CSS3, sass, JavaScript, jQuery, PHP7, Symphony, Ajax, SQL, Wordpress, Photoshop, Python, C.">
		
		<!-- pour les réseaux sociaux -->
	    <meta property="og:site_name" content="Eric Jaslet"/>
	    <meta property="og:title" content="Accueil Eric Jaslet"/>
	    <meta property="og:type" content="Accueil"/>
	    <meta property="og:url" content="https://www.ericjaslet.fr/"/>
	    <meta property="og:image" content="https://www.ericjaslet.fr/images/bureau_1600x625_80.jpg"/>
	    <meta property="og:description" content="Eric Jaslet Développeur intégrateur web, PHP, Mysql, HTML5, CSS3, JavaScript, jQuery, PHP7, Wordpress, Photoshop, Python, C."/>

	  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

	    <!-- pour protection contre le duplicate content dans le site -->
    	<link rel="canonical" href="https://www.ericjaslet.fr"/>

    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

		<link async href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="style_dark.css">
		
		
	</head>
	<body>
		<header>
			<span class="ancres_header" id="ancre_header"></span>
			<h1 class="top-page txt-center">
				 <strong class="top-titre">Eric jaslet</strong> 
				 <span class="h1-border"></span>
				<strong class="top-sous-titre">Développeur PHP 7 / Symfony 3 &amp; 4</strong>
			</h1>
		</header>

		<nav>
			<div class="arrow-top">
				<a href="#ancre_header" class="arrow-scroll"><img src="images/arrow-alt-circle-up.svg" alt="eric jaslet" class="img-fluid"></a>
			</div>
			<!-- menu burger -->
			<div class="icone-menu-burger" id="click-menu">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
			<h2 class="navBarTitle">Eric jaslet</h2>
			<div class="menu-responsive" id="nav-slide">
					<ul class="burger-links">
						<li><a href="#ancre_header" class="jq-click-menu scroll">Accueil</a></li>
						<li><a href="#ancre_presentation" class="jq-click-menu scroll">Présentation</a></li>
						<li><a href="#ancre_skills" class="jq-click-menu scroll">Compétences</a></li>
						<li><a href="#ancre_path" class="jq-click-menu scroll">Parcours</a></li>
						<li><a href="#ancre_realisations" class="jq-click-menu scroll">Réalisations</a></li>
						<li><a href="#ancre_link" class="jq-click-menu scroll">Contacts</a></li>
					</ul>
				</div>
			<div class="container nav1">
				<ul class="menu-niv-1">
					<li><a href="#ancre_header" class="scroll">Accueil</a></li>
					<li><a href="#ancre_presentation" class="scroll">Présentation</a></li>
					<li><a href="#ancre_skills" class="scroll">Compétences</a></li>
					<li><a href="#ancre_path" class="scroll">Parcours</a></li>
					<li><a href="#ancre_realisations" class="scroll">Réalisations</a></li>
					<li><a href="#ancre_link" class="scroll">Contact</a></li>
				</ul>
			</div>
		</nav>

			<!--====================================== Horizon ================================================== -->

			<div class="horizon">
				<picture>
					<source media="(min-width: 1200px)" srcset="./images/bureau_1600x625_80.jpg">
					<source media="(min-width: 992px)" srcset="./images/bureau_1200x469_80.jpg">
					<source media="(min-width: 768px)" srcset="./images/bureau_992x388_80.jpg">
					<source media="(min-width: 432px)" srcset="./images/bureau_750x293_80.jpg">
					<img src="./images/bureau_432x169_80.jpg" alt="Mon bureau" class="img-fluid">
				</picture>
			</div>
			<span class="ancres" id="ancre_presentation"></span>
			<div class="container">
				<!--====================================== Présentation ================================================== -->
				<section class="row presentation">
					<div class="col-4 container-img">
						<picture class="lazyload">
								<source media="(min-width: 992px)" srcset="./images/portrait_400x411_80.jpg">
								<source media="(min-width: 768px)" srcset="./images/portrait_330x339_80.jpg">
								<img src="./images/portrait_220x226_80.jpg" alt="Mon bureau" class="img-fluid">
						</picture>
					</div>


					<div class="col-8">
						<h2>Quelques mots sur moi</h2>
						<p class="mb-10">Passionné d'informatique toujours à la recherche de nouvelles expériences et de défis à relever.</p>
						<p class="mb-10">Je vous propose mes compétences pour la réalisation de vos sites web.</p>
						<p>Mes qualités sont :</p>
						<ul>
							<li>la bonne humeur</li>
							<li>l'esprit d'équipe</li>
							<li>l'investissement</li>
							<li>l'assiduité</li>
						</ul>
					</div>
				</section>


				<!--====================================== Skills ================================================== -->
				<span class="ancres" id="ancre_skills"></span>
				<section class="skills">

					<h2 class="txt-center">Mes compétences</h2>

					<div class="row">

						<div class="col-12 col-sm-6">
							<div class="progress-bar row">
								<div class="col-2">PHP7</div>
								<div class="col-9 col-sm-8 div-bar">
									<div class="bar-background">
										<div class="my-progress color-1"></div>
									</div>
								</div>
								<span class="col-1 txt-right strong-skill">75%</span>
							</div>
							<div class="progress-bar row">
								<div class="col-2">Symfony</div>
								<div class="col-9 col-sm-8 div-bar">
									<div class="bar-background">
										<div class="my-progress color-1"></div>
									</div>
								</div>
								<span class="col-1 txt-right strong-skill">70%</span>
							</div>
							<div class="progress-bar row">
								<div class="col-2">SQL</div>
								<div class="col-9 col-sm-8 div-bar">
									<div class="bar-background">
										<div class="my-progress color-1"></div>
									</div>
								</div>
								<span class="col-1 txt-right strong-skill">70%</span>
							</div>
							<div class="progress-bar row">
								<div class="col-2">HTML</div>
								<div class="col-9 col-sm-8 div-bar">
									<div class="bar-background">
										<div class="my-progress color-1"></div>
									</div>
								</div>
								<span class="col-1 txt-right strong-skill">83%</span>
							</div>
						</div>

						<div class="col-12 col-sm-6">
							<div class="progress-bar row">
								<div class="d-none d-sm-block col-sm-1"></div>
								<div class="col-2">CSS</div>
								<div class="col-9 col-sm-8 div-bar">
									<div class="bar-background">
										<div class="my-progress color-2"></div>
									</div>
								</div>
								<span class="col-1 txt-right strong-skill">80%</span>
							</div>
							<div class="progress-bar row">
								<div class="d-none d-sm-block col-sm-1"></div>
								<div class="col-2">Javascript</div>
								<div class="col-9 col-sm-8 div-bar">
									<div class="bar-background">
										<div class="my-progress color-2"></div>
									</div>
								</div>
								<span class="col-1 txt-right strong-skill">70%</span>
							</div>
							<div class="progress-bar row">
								<div class="d-none d-sm-block col-sm-1"></div>
								<div class="col-2">Wordpress</div>
								<div class="col-9 col-sm-8 div-bar">
									<div class="bar-background">
										<div class="my-progress color-2"></div>
									</div>
								</div>
								<span class="col-1 txt-right strong-skill">67%</span>
							</div>
							<div class="progress-bar row">
								<div class="d-none d-sm-block col-sm-1"></div>
								<div class="col-2">Bootstrap</div>
								<div class="col-9 col-sm-8 div-bar">
									<div class="bar-background">
										<div class="my-progress color-2"></div>
									</div>
								</div>
								<span class="col-1 txt-right strong-skill">70%</span>
							</div>
						</div>
					</div>

					<h3 class="txt-center" id="others-skills">Autres compétences</h3>
					<div class="row">
			
						<div class="d-none d-sm-block col-sm-2"></div>
						<div class="col-12 col-sm-4 row">
							<div class="col-1"></div>
							<div class="col-4">
						      <svg class="radial-progress color1" data-percentage="52" viewBox="0 0 80 80">
						      <circle class="incomplete" cx="40" cy="40" r="35"></circle>
						      <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 05.558;"></circle>
						      <text class="percentage" fill="white" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">70%</text>
						      </svg>
						      <p class="txt-center">Jquery</p>
						    </div>
						    <div class="col-2"></div>
						    <div class="col-4">
						      <svg class="radial-progress color2" data-percentage="68" viewBox="0 0 80 80">
						      <circle class="incomplete" cx="40" cy="40" r="35"></circle>
						      <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 70.3717;"></circle>
						      <text class="percentage" fill="white" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">60%</text>
						      </svg>
						      <p class="txt-center">Photoshop</p>
						    </div>
						    <div class="col-1"></div>
						</div>

						<div class="col-12 col-sm-4 row">
							<div class="col-1"></div>
							<div class="col-4">
						      <svg class="radial-progress color1" data-percentage="63" viewBox="0 0 80 80">
						      <circle class="incomplete" cx="40" cy="40" r="35"></circle>
						      <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 81.3673;"></circle>
						      <text class="percentage" fill="white" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">60%</text>
						      </svg>
						      <p class="txt-center">Python</p>
						    </div>
							<div class="col-2"></div>
						    <div class="col-4">
						      <svg class="radial-progress color2" data-percentage="60" viewBox="0 0 80 80">
						      <circle class="incomplete" cx="40" cy="40" r="35"></circle>
						      <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 87.9646;"></circle>
						      <text class="percentage" fill="white" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">52%</text>
						      </svg>
						      <p class="txt-center">React js</p>
						    </div>
						    
						</div>
				    </div>
				</secton>


				<!--====================================== My path ================================================== -->
				<span class="ancres" id="ancre_path"></span>
				<section class="path" id="id-path"> <!-- début du parcours -->
					<h2>Mon parcours</h2>

					<!--  étage 0 -->
					<div>
						<div class="time2 move-right">
							<p class="txt-right">novembre 2019 à aujourd'hui</p>
							<h3>Leaneous</h3>
							<h4><strong class="path-time-sous-titre">Développeur web Front-end / back-end</strong></h4>
							<br>
							<p>
								<em>Wordpress</em>, <em>Thimber</em>, <em>PHP 7</em>, <em>Git</em>, <em>HTML5</em>, <em>CSS3</em>, <em>Sass</em>, <em>JavaScript</em> ECMAScript6, <em>Jquery</em>, <em>Photoshop</em>, <em>MySQL</em>
							</p>
						</div>
						<div class="clear"></div>
					</div>
					<div>
						<div class="time1 move-left">
							<p class="txt-right">mai à fin août 2019</p>
							<h3>SCFI</h3>
							<h4><strong class="path-time-sous-titre">Intégrateur / Développeur PHP7 - Symfony4</strong></h4>
							<p>Dans le cadre de la formation</p>
							<br>
							<p>
								<em>Symfony4</em>, <em>PHP7</em>, <em>HTML5</em>, <em>CSS3</em>, <em>JavaScript</em>, <em>jQuery</em>, <em>SQL</em>, <em>Bootstrap</em>, <em>Photoshop</em>
							</p>
						</div>
						<div class="clear"></div>
					</div>

					<div>
						<div class="time2 move-right">
							<p class="txt-right">décembre 2018 à fin août 2019</p>
							<h3>Formation NIV II DEVOO IFOCOP :</h3>
							<h4><strong class="path-time-sous-titre">Développeur web orienté objet</strong></h4>
							<p>Major de promotion</p>
							<br>
							<p><em>Symfony3 et 4</em>, <em>PHP 7</em> Objet, <em>Git</em>, <em>Ajax</em>, <em>JavaScript</em>, <em>Jquery</em>, <em>Bootstrap 4</em>, <em>Sass</em>, <em>Photoshop</em>, <em>MySQL</em>, <em>Xml</em>, <em>MVC</em></p>
						</div>
						<div class="clear"></div>
					</div>

					<div>
						<div class="time1 move-left">
							<p class="txt-right">avril à juin 2018</p>
							<h3>Formation DIW IFOCOP</h3>
							<h4><strong class="path-time-sous-titre">Développeur intégrateur web</strong></h4>
							<p>Major de promotion</p>
							<br>
							<p><em>HTML5</em>, <em>CSS3</em>,
							<em>JavaScript</em>, <em>jQuery</em>, <em>PHP7</em>, <em>MySQL</em>, <em>Bootstrap</em>,
							<em>UI/UX Design</em>, <em>Photoshop</em>, CMS <em>Wordpress</em></p>
						</div>
						<div class="clear"></div>
					</div>

					<div>
						<div class="time2 move-right">
							<p class="txt-right">juin 2016 à juin 2017</p>
							<h3 class="path-time-titre">ATA</h3>
							<p class="path-time-sous-titre">Responsable d'exploitation</p>
							<p class="txt-right">mars 2011 à mai 2016</p>
							<h3 class="path-time-titre">Vinci</h3>
							<p class="path-time-sous-titre">Responsable d'exploitation</p>
							<p>Pilotage et management des équipes, gestion portefeuilles d'affaire.</p>
							<p class="txt-right">avril 2004 à février 2011</p>
							<p class="path-time-sous-titre">Technicien multi-technique</p>
						</div>
						<div class="clear"></div>
					</div>
					<div>
						<div class="time1 move-left">
							<p>
								<span class="path-time-titre">Crom maintenance</span>
								<span class="fl-right">2003 | 3 mois</span>
							</p>
							<p>
								<span class="path-time-titre">Johnson Controls</span>
								<span class="fl-right">2002 | 1an</span>
							</p>
							<p>
								<span class="path-time-titre">Intérim</span>
								<span class="fl-right">2000 | 1 an</span>
							</p>
						</div>
						<div class="clear"></div>
					</div>
					<div>
						<div class="time2 move-right">
							<p>
								<span>1999 à 2000</span>
								<span class="path-time-titre2 fl-right">Armée de terre</span>
							</p>
							<p class="path-time-sous-titre">Elève sous-officier</p>
						</div>
						<div class="clear"></div>
					</div>
					<div>
						<div class="time1 move-left">
							<p>
								<span class="path-time-titre">BAC STI Microtechnique</span>
								<span class="fl-right">1998</span>
							</p>
						</div>
						<div class="clear"></div>
					</div>
				</section>


				<!--===================================== mes réalisations ================================================== -->
				<span class="ancres" id="ancre_realisations"></span>
				<section class="realisation">
					<h2  class="txt-center">Réalisations ècole</h2>

					<div class="row">
						<!-- Site Front PPDI -->
						<div class="col-12 col-sm-4 px-5">
							<h3 class="txt-center">Symfony 4</h3>
							<div class="img-real">
								<a href="https://www.jasweb.fr/" target="_blank">
									<img src="images/Jean_James.jpg" alt="marchand https://www.jasweb.fr" class="img-fluid lazyload">
								</a>
							</div>
							<div class="pdd-10">
								<p><span class="min-title">Présentation</span> : Site marchand de vêtements pour homme, la partie graphique était totalement libre.</p>
								<p><span class="min-title">Technologies</span> : <strong>Symfony 4</strong> | <strong>PHP 7</strong> | <strong>Mysql</strong> | <strong>HTML5</strong> | <strong>CSS3</strong> | <strong>JavaScript</strong> | <strong>Ajax</strong> | <strong>jQuery</strong></p>
								<p><span class="min-title">Graphisme</span> : <strong>Photoshop</strong> | <strong>Inskape</strong></p>
							</div>
						</div>

						<!-- Site PHP DEVOO -->
						<div class="col-12 col-sm-4 px-5">
							<h3 class="txt-center">PHP procédural</h3>
							<div class="img-real">
								<a href="https://www.ericjaslet.fr/tpsallea01/" target="_blank">
									<img src="images/devoo19_sallea_550px_290px.jpg" alt="devoo19_sallea_550px_290px" class="img-fluid lazyload">
								</a>
							</div>
							<div class="pdd-10">
								<p><span class="min-title">Présentation</span> : Création d'un site fictif de location de salles en php procédural.
									<br>
									Utilisation de l'ajax pour plus de dynamisme.
									<br>
									Il contient une gestion administrateur pour la gestion des membres, produits, salles, commandes et des statistiques</p>
								</p>
								<p><span class="min-title">Technologies</span>  : <strong>PHP 7</strong> | <strong>Mysql</strong> | <strong>JavaScript</strong> | <strong>jQuery</strong> | <strong>Ajax</strong> | <strong>Bootstrap 4</strong> | <strong>Open Street Map</strong> | <strong>HTML5</strong> | <strong>CSS 3</strong></p>
							</div>
						</div>
						
						<!-- Site Front PPDI -->
						<div class="col-12 col-sm-4 px-5">
							<h3 class="txt-center">Frond-end :</h3>
							<div class="img-real">
								<a href="https://www.boutique-silver.fr/" target="_blank">
									<img src="images/ppdi_front_550px.jpg" alt="marchand https://www.boutique-silver.fr" class="img-fluid lazyload">
								</a>
							</div>
							<div class="pdd-10">
								<p><span class="min-title">Présentation</span> : Site marchand de vêtements en statique uniquement.
									<br>
								Les choix graphiques étaient totalement libres tant que les codes de l'e-commerce étaient respectés.</p>
								<p><span class="min-title">Graphisme</span> : <strong>Photoshop</strong> | <strong>Inskape</strong></p>
								<p><span class="min-title">Technologies</span> : <strong>HTML5</strong> | <strong>CSS3</strong> | <strong>JavaScript</strong> | <strong>jQuery</strong></p>
							</div>
						</div>
						<!-- Site wordpress PPDI -->
						<div class="col-12 col-sm-4 px-5">
							<h3 class="txt-center">Wordpress :</h3>
							<div class="img-real">
								<a href="https://www.veloloc.ericjaslet.fr/" target="_blank">
									<img src="images/ppdi_wordpress_550px.jpg" alt="site véloloc" class="img-fluid lazyload">
								</a>
							</div>
							<div class="pdd-10">
								<p><span class="min-title">Présentation</span> : Création d'un template pour un site vitrine de location de vélo à partire d'une maquette.</p>
								<p><span class="min-title">Technologies</span> : <strong>HTML5</strong> | <strong>CSS 3</strong> | <strong>CMS Wordpress</strong> | <strong>PHP 7</strong> | <strong>MySql</strong></p>
							</div>
						</div>
						<!-- Site wordpress PPDI -->
						<div class="col-12 col-sm-4 px-5">
							<h3 class="txt-center">PHP procédural</h3>
							<div class="img-real">
								<a href="https://www.ericjaslet.fr/eshop/" target="_blank"><img src="images/eshop_550px.jpg" alt="site véloloc" class="img-fluid lazyload"></a>
							</div>
							<div class="pdd-10">
								<p><span class="min-title">Présentation</span> : Création d'un site e-commerce de vêtements.
										<br>
								Le site comprend une gestion des clients, des produits, des commandes et du panier</p>
								<p><span class="min-title">Technologies</span> : <strong>PHP 7</strong> | <strong>MySql</strong> | <strong>Bootstrap 4</strong> | <strong>HTML 5</strong> | <strong>CSS 3</strong> </p>
							</div>
						</div>
					</div>


				</section>

			</div><!--  fin du container -->

			<span class="ancres" id="ancre_link"></span>
			<footer>
				<div class="container container-footer">
					<h2 class="txt-center">Liens &amp; contacts</h2>
					<div class="footer-floor1">
						<h3 class="txt-center">Contacts</h3>
						<div class="row space-around">
							<div class="block-link mt-20">
								<a href="mailto:eric.jaslet@ericjaslet.fr" target="_blank">
									<img src="images/ordinateur_portable_br_mail_250px.png" alt="lien mailto: eric.jaslet@ericjaslet.fr" class="img-fluid lazyload">
								</a>
							</div>
							<div class="block-link mt-20">
								<a href="https://www.linkedin.com/in/eric-jaslet-549634162" target="_blank">
									<img src="images/ordinateur_portable_br_linkedin_250px.png" alt="lien linkedin" class="img-fluid lazyload">
								</a>
							</div>
						</div>
					</div>
					<hr>
					<div class="footer-floor2">
						<h3 class="txt-center">Liens</h3>
						<div class="link-footer">
							<a href="#ancre_header" class="scroll">Accueil</a>
							<a href="#ancre_presentation" class="scroll">Présentation</a>
							<a href="#ancre_skills" class="scroll">Compétences</a>
							<a href="#ancre_path" class="scroll">Parcours</a>
							<a href="#ancre_link" class="scroll">Liens &amp; contacts</a>
						</div>
					</div>

					<p class="txt-center">Copyright &copy; 2019 | tous droits réservés</p>
				</div>
			</footer>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
			<script src="jvscrpt/js_index.js"></script>
			<script src="./jvscrpt/lazyload-img.js"></script>

	</body>
</html>