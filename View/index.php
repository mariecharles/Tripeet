<?php include 'header.php' ?>

		<main id="home">
			<ul class="profile-tabs">
				<li><a href=""><img src="img-layout/user-icon.svg" alt="utilisateur">Mon compte</a></li>
				<li><a href=""><img src="img-layout/events-icon.svg" alt="événements">Evénements</a></li>
				<li><a href=""><img src="img-layout/localisation-icon.svg" alt="événements">Autour de moi</a></li>
				<li><a href=""><img src="img-layout/inbox-icon.svg" alt="inbox">Inbox</a></li>
				<li><a href=""><img src="img-layout/follow-icon.svg" alt="follow">Nous suivre</a></li>
			</ul>
			<section class="intro">
				<img src="img-content/top-page.jpg" alt="rencontres">
				<div class="accroche">
					<p>À ta façon</p>
					<a href="" class="inscription-btn">S'inscrire</a>
				</div>
				<form class="search">
					<div>Recherche tes "Tripeeter" :</div>
					<div class="which-city">
						<label for="ville">Dans quelle ville ?</label>
						<input type="text" placeholder="ex: Paris">
					</div>
					<div class="which-date clearfix">
						<div>
							<label for="arrivee">Arrivée</label>
							<input type="date" placeholder="du">
						</div>
						<div>
							<label for="depart">Départ</label>
							<input type="date" placeholder="au">
						</div>
					</div>
					<div>
						<input type="hidden" value="">
						<input type="submit" value="Voir">
					</div>
				</form>	
			</section>
			<section class="next-events clearfix">
				<h2>Nos prochains événements</h2>
				<article>
					<figure>
						<img src="img-content/artDay.jpg" alt="art">
					</figure>
					<div class="event-info">
						<img src="img-layout/curieux.svg" alt="smart">
						<h3>Performance Art Day</h3>
						<h4>Viens prendre une bouffée d’art frais</h4>
						<p>Sculptures parlantes, interprétations musicales, visites guidées, le tout dans un cadre en plein air. C'est agréable et cela donne la possibilité de se faire dorer la pilule au soleil tout en se questionnant.</p>
						<span>Voir plus tard</span>
						<a href="">Participer</a>
					</div>		
				</article>
				<article>
					<figure>
						<img src="img-content/five.jpg" alt="sport">
					</figure>
					<div class="event-info">
						<img src="img-layout/sportif.svg" alt="sportif">
						<h3>Five à Bercy</h3>
						<h4>Ton endurance à l’épreuve</h4>
						<p>Que tu t’entraines toute l’année ou que tu joues de temps en temps, viens montrer ton passement de jambes en défiant les autres Travellers au Five Club de Bercy ce jeudi !</p>
						<span>Voir plus tard</span>
						<a href="">Participer</a>	
					</div>	
				</article>
				<article>
					<figure>
						<img src="img-content/foodEvent.jpg" alt="food">
					</figure>
					<div class="event-info">
						<img src="img-layout/chill.svg" alt="chill">
						<h3>Street food à l'hôtel</h3>
						<h4>Inauguration d’un food market</h4>
						<p>Au menu, des délices biscuités, des mets ensoleillés de chez Kalios et pour le reste, le mystère demeure. Le tout à Porte de Versailles, samedi à partir de 12h. Le dernier arrivé offre le café !</p>
						<span>Voir plus tard</span>
						<a href="">Participer</a>		
					</div>
				</article>
			</section>
			<section class="become-one">
				<h2>Deviens "Tripeeter"</h2>
				<div class="wrap-section">
					<img src="img-content/joinUs.jpg" alt="nous rejoindre">
					<div class="clearfix">
						<a href=""><p>Rejoins la communauté et prépare tes séjours en choisissant à l’avance les évenements proposés dans la ville où tu vas.<br/>Nous te proposerons des évenements adaptés à ton profil, mais tu pourras bien sûr accéder à tous les évenements proposés sur le site!<br/><br/>Partage l’amour que tu as pour ta ville avec les autres travellers venus de toute l’Europe.<br/><br/>En t’inscrivant, tu deviens le membre d’un réseau et partagera des expériences inoubliables.</p>
						<span class="inscription-btn">S'inscrire</span></a>
					</div>
				</div>
				<article class="europe clearfix">
					<img src="img-layout/city.png" alt="ville">
					<div>
						<p>Présents dans toute l'Europe</p>
						<p>Tripeet, c’est une communauté de voyageurs qui souhaite faire du tourisme différemment.<br/> Nous mettons en relation ces gens dans les grandes capitales d’Europe et organisons des évenements sur place. Fini les parcours touristiques classiques et les sorties décevantes du soir !<br/> Qu’importe la ville dans laquelle tu es, tu sauras exactement quoi faire.<br/>
						<a href="" class="inscription-btn">Choisis une ville</a></p>	
					</div>
				</article>
				<article class="links clearfix">
					<p>Des milliers de voyageurs</p>
					<div>
						<p>Fais parti d’une large communauté de "Tripeeter". Selon ton profil (Geek, Chill, Smart, Sportif...), d'autres profils similaires au tien te seront proposés. <br/>Tu pourras leur parler, faire connaissance, et prévoir de nouvelles activités (en plus des évenements que nous organisons).<br/> Tu peux évidemment prendre contact avec des profils différents du tiens, pas de sectarisme ici !<br/>
						<a href="" class="inscription-btn">Rencontrer les "tripeeter"</a></p>
					</div>
					<div>
						<img class="layout-links" src="img-layout/social.png" alt="ville">
						<div class="wrap-img clearfix">
							<img class="vignette" src="img-content/miranda.png" alt="miranda">
							<img class="vignette" src="img-content/baptiste.png" alt="baptiste">
							<img class="vignette" src="img-content/hayfa.png" alt="hayfa">
							<img class="vignette" src="img-content/fabien.png" alt="fabien">
							<img class="vignette" src="img-content/cindy.png" alt="cindy">
							<img class="vignette" src="img-content/ruben.png" alt="ruben">
							<p>Les derniers inscrits</p>
						</div>	
					</div>
				</article>
			</section>
		</main>

<?php include 'footer.php' ?>