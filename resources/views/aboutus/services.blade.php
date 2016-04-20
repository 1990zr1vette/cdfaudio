@extends('layout/default')

@section('main')

			<div id="banner">
				<img src="images/cdf-banners-about_studioservices.jpg" />
				<div class="banner_overlay"></div>
				<h1 class="upper" id="bannertitle">{{ languages('Studio & Services', 'Studio et Services') }}</h1>
			</div>
			
			<script src="js/banner.js" type="text/javascript"></script>
			
			<div class="spacer20"></div>
			
			<div class="studioservice noresize">
				<div class="spacer20"></div>
				
				<div class="leftcolumn">						
					<div class="studioservicetitle">
						<img src="images/icon_services_consultation.png" />
						<span>{{ languages('CONSULTATION', 'CONSULTATION') }}</span>
					</div>
					<div class="spacer20"></div>
					<div class="studioserviceinfo">						
						<div>{{ languages('Vie email, telephone, on site, at your home or business', 'Par courriel, par téléphone, sur place, à votre domicile ou dans votre entreprise') }}</div>
						<div>{{ languages('Pre-construction', 'Pré-construction') }}</div>
						<div>{{ languages('Wiring', 'Câblage') }}</div>
						<div>{{ languages('Network', 'Réseau') }}</div>
						<div>{{ languages('Room design', 'Aménagement de salle') }}</div>
						<div>{{ languages('Power recommendations', 'Recommandations en matière d’énergie') }}</div>
						<div>{{ languages('System optimization', 'Optimisation de système') }}</div>
						<div>{{ languages('Component matching', 'Association de composants') }}</div>
						<div>{{ languages('We are Canada Wide!', 'Présents dans tout le Canada!') }}</div>
					</div>
				</div>
				<div class="rightcolumn">
					<div class="studioservicetitle">
						<img src="images/icon_services_installation.png" />	
						<span>{{ languages('INSTALLATION', 'INSTALLATION') }}</span>
					</div>				
					<div class="spacer20"></div>			
					<div class="studioserviceinfo">
						<div>{{ languages('Delivery', 'Livraison') }}</div>
						<div>{{ languages('Speaker placement', 'Positionnement de haut-parleurs') }}</div>
						<div>{{ languages('Acoustic adjustments', 'Réglage acoustique') }}</div>
						<div>{{ languages('Calibration for projectors', 'Calibration des projecteurs') }}</div>
						<div>{{ languages('Surround sound', 'Son multicanal') }}</div>
						<div>{{ languages('Theatre', 'Salle de spectacle') }}</div>
						<div>{{ languages('Turntable adjustments', 'Réglage de platine') }}</div>
					</div>
				</div>
			</div>
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>
			
			<div class="studioservice noresize">
				<div class="spacer20"></div>
				<div class="leftcolumn">	
					<div class="studioservicetitle">
						<img src="images/icon_services_demo.png" />
						<span>{{ languages('Product Demo', 'Démonstration de Produit') }}</span>
					</div>
					<div class="spacer20"></div>
					<div class="studioserviceinfo">
						<div>{{ languages('In home trial', 'Essai à domicile') }}</div>
						<div>{{ languages('You can pick up', 'Vous pouvez venir le chercher') }}</div>
						<div>{{ languages('We can set-up', 'Nous pouvons venir l’installer') }}</div>
						<div>{{ languages('We will ship for demonstration', 'Nous expédions les produits à essayer') }}</div>
						<div>{{ languages('Come and hear it or see it at our showroom', 'Venez l’écouter ou l’observer dans notre salle d’exposition') }}</div>
					</div>
				</div>
				<div class="rightcolumn">
					<div class="studioservicetitle">
						<img src="images/icon_services_service.png" />
						<span>{{ languages('Service', 'Service') }}</span>
					</div>
					<div class="spacer20"></div>				
					<div class="studioserviceinfo">
						<div>{{ languages('Warranty repairs', 'Réparations couvertes par la garantie') }}</div>
						<div>{{ languages('Adjustments', 'Réglages') }}</div>
						<div>{{ languages('Tubes & Calibrations', 'Tubes et calibrages') }}</div>
						<div>{{ languages('Cartridge replacement', 'Remplacement de cartouche') }}</div>
						<div>{{ languages('Driver replacement', 'Remplacement de haut-parleurs individuels') }}</div>
						<div>{{ languages('On site or at our showroom', 'Sur place dans notre salle d’exposition') }}</div>
						<div>{{ languages('Cable customization', 'Personnalisation de câbles') }}</div>
					</div>
				</div>
			</div>
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>
			
			<div class="studioservice noresize">
				<div class="spacer20"></div>
				<div class="leftcolumn">	
					<div class="studioservicetitle">
						<img src="images/icon_services_studio.png" />
						<span>{{ languages('Studio', 'Studio') }}</span>
					</div>
					<div class="spacer20"></div>
					<div class="studioserviceinfo">
						<div>{{ languages('We mix it – best vintage outboard gear', 'Nous mixons – meilleur équipement extérieur vintage') }}</div>
						<div>{{ languages('We have engineers', 'Nous disposons d’ingénieurs') }}</div>
						<div>{{ languages('We rent our room', 'Nos salles sont à louer') }}</div>
					</div>
				</div>
				<div class="rightcolumn">
					<div class="studioservicetitle">
						<img src="images/icon_services_venue.png" />
						<span>{{ languages('Venue', 'Salle') }}</span>
					</div>
					<div class="spacer20"></div>				
					<div class="studioserviceinfo">
						<div>{{ languages('We rent our space for events', 'Nos salles sont à louer pour vos évènements') }}</div>
						<div>{{ languages('Vernissage', 'Vernissage') }}</div>
						<div>{{ languages('Screening', 'Projection') }}</div>
						<div>{{ languages('Album launch', 'Sortie d’album') }}</div>
						<div>{{ languages('Private events', 'Évènements privés') }}</div>
						<div>{{ languages('Video projection', 'Projection de vidéo') }}</div>
						<div>{{ languages('Parties', 'Fêtes') }}</div>
						<div>{{ languages('TV and film', 'Télévision et films') }}</div>
						<div>{{ languages('Live Music', 'Musique en direct') }}</div>
						<div>{{ languages('Seminars', 'Séminaires') }}</div> 
					</div>
				</div>
			</div>
			
			<div class="spacer20"></div>
			<hr>
			<div class="spacer20"></div>
			
			<script src="js/studioservice.js" type="text/javascript"></script>
			<input type="hidden" name="item" value=".studioservice" />
			<script src="js/columns.js" type="text/javascript"></script>
			
@endsection


		
		