<?php
require "scripts/pi-hole/php/header.php";
?>

<ul class="nav nav-tabs nav-justified">
	<li class="active"><a data-toggle="tab" href="#kpn">KPN</a></li>
	<li><a data-toggle="tab" href="#ziggo">Ziggo</a></li>
</ul>

<div class="tab-content h4">
	<div id="kpn" class="tab-pane fade in active">
		<hr>
		<p>
			<p><b>Stap 1: </b></p>
			Open op een computer je internetbrowser.
			Type in de adresbalk het volgende: <b>192.168.2.254</b>
			Je ziet nu een pagina waar je moet inloggen.
			<hr>
		</p>
		<p>
			<p><b>Stap 2: </b></p>
			<ul>
				<li>
					Als je hier nog nooit bent geweest, klik gewoon op <b>Login</b>.
					Je moet vervolgens een wachtwoord verzinnen voor wanneer je de volgende keer inlogt.
					Type deze in en ga verder.
				</li>
				<li>
					Als je al eerder een wachtwoord hebt gemaakt,
					type deze in en ga verder.
				</li>
			</ul>
		</p>
		<small>
			Het kan zijn dat de monteur bij het installeren van je router een wachtwoord heeft aangemaakt.
			Probeer in dit geval de wachtwoorden <b>kpn</b>, <b>admin</b>, of <b>1234</b>.
			Als je er echt niet uitkomt, 
			zet je router terug naar fabrieksinstellingen om het wachtwoord te herstellen.
			Volg hiervoor de handleiding van je router.
		</small>
		<hr>
		<div align="center" class="embed-responsive embed-responsive-16by9">
			<video autoplay loop class="embed-responsive-item">
				<source src="tutorial/kpn-1-login.mp4" type="video/mp4">
			</video>
		</div>
		<hr>
		<p>
			<p><b>Stap 4: </b></p>
			Klik vervolgens bovenaan op <b>Instellingen</b>.
			<hr>
			<div align="center" class="embed-responsive embed-responsive-16by9">
				<video autoplay loop class="embed-responsive-item">
					<source src="tutorial/kpn-2-instellingen.mp4" type="video/mp4">
				</video>
			</div>
			<hr>
		</p>
		<p>
			<p><b>Stap 5: </b></p>
			Je ziet nu een aantal instellingen.
			Onder <b>DHCP server</b> zie je de instelling <b>ISP DNS</b> met een <b>Aan</b> en <b>Uit</b> vinkje.
			Vink <b>Uit</b> aan.
			<hr>
			<div align="center" class="embed-responsive embed-responsive-16by9">
				<video autoplay loop class="embed-responsive-item">
					<source src="tutorial/kpn-3-ispdns.mp4" type="video/mp4">
				</video>
			</div>
			<hr>
		</p>
		<p>
			<p><b>Stap 6: </b></p>
			Je ziet nu een nieuwe instelling genaamd <b>Primaire DNS</b>.
			Vul hiernaast (per vakje) de volgende getallen in
			(deze getallen kunnen anders zijn dan degene in de video!):
			<b><?php echo $_SERVER['SERVER_ADDR']; ?></b>
			<hr>
			<div align="center" class="embed-responsive embed-responsive-16by9">
				<video autoplay loop class="embed-responsive-item">
					<source src="tutorial/kpn-4-intypen.mp4" type="video/mp4">
				</video>
			</div>
			<hr>
		</p>
		<p>
			<p><b>Stap 7: </b></p>
			Klik nu op <b>Toepassen</b>.
			<hr>
			<div align="center" class="embed-responsive embed-responsive-16by9">
				<video autoplay loop class="embed-responsive-item">
					<source src="tutorial/kpn-5-toepassen.mp4" type="video/mp4">
				</video>
			</div>
			<hr>
		</p>
		<p>
			<p><b>Stap 8: </b></p>
			Je bent klaar! Je kan het venster sluiten.
			Het kan even duren voordat AdSweep op al je apparaten begint te werken.
			Waarschijnlijk moet je even opnieuw met je internet verbinden.
			<hr>
		</p>
	</div>
	<div id="ziggo" class="tab-pane fade">
		yo
	</div>
</div>

<?php
require "scripts/pi-hole/php/footer.php";
?>