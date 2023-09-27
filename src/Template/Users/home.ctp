<main>
	<section class="hero text-center py-5">

	<?= $this->Html->image('/img/EnglandFlag.png', [
    'url' => ['controller' => 'Users', 'action' => 'changeLanguage', 'en_US'],
    'style' => 'width: 100px; height: auto; outline: solid; outline-color: black; outline-width: thin;'
]); ?>
	<?= $this->Html->image('/img/GermanFlag.png', [
    'url' => ['controller' => 'Users', 'action' => 'changeLanguage', 'de_DE'],
    'style' => 'width: 100px; height: auto; outline: solid; outline-color: black; outline-width: thin;'
]); ?>
	</section>
<style>
	#bild1 {
		width: 400px;
		height: auto;
	}
	#bild2 {
		width: 400px;
		height: 225.2px;
	}
	#bild3 {
		width: 400px;
		height: 225.2px;
	}
</style>
	<section class="features">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="feature">
						<h2>Erste Herren Aufstiegsspiel</h2>
						<a href="https://www.fussball.de/spiel/tsg-harsewinkel-guetersloher-tv/-/spiel/02IQAK98M4000000VS5489B3VUDHAAN1#!/" target="_blank">
							<img id="bild1" src="/img/TSG-herren1.webp" alt="herren 1">
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature">
						<h2>Neuer Kunstrasenplatzt</h2>
						<img id="bild3" src="/img/sportplatzt.jpeg" alt="herren 1">
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature">
						<h2>Vorstand</h2>
						<a href="https://www.tsg-harsewinkel.de/group/9871/vorstand" target="_blank">
							<img id="bild2" src="/img/vorstand.jpeg" alt="herren 1">
						</a>
					</div>
				</div>
				<div class="col-md-4 mt-3">
					<div class="feature">
						<h2>Zu den Mannschaften</h2>
						<a href="/teams/index">
							<img id="bild2" src="/img/Jugend.jpeg" alt="herren 1">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>