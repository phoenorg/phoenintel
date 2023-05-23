<!DOCTYPE html>
<html lang="en">
<body bgcolor="#OOOOOO">
<head>
    <title>PhoenIntel - AI</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://phoenintel.st4lwolf.org/style.css">
    <link rel="stylesheet" type="text/css" href="http://phoenintel.st4lwolf.org/news.css">
    <meta name="google-site-verification" content="f7S9blLxu2nJn1EGjPR-bVMyKWewDYFmkrh8eaUEGjs" />
    <style>
      @font-face { font-family: Lcs; src: url('LucymarSans-Regular.ttf'); } 
      p {
         font-family: Lcs
      }
      
    </style>
</head>


<!--script désactivé-->
<noscript><p align="center"><font color="#FFOOOO"><strong><i>Javascript is disabled. Please re-enable it to enjoy an optimal web experience.<a href="https://support.google.com/admanager/answer/12654?hl=en">How to enable javascript?</a></i></strong></font></p></noscript>

<!--menu-->
<label for="ch" id="lab"></label>
<input type="checkbox" id="ch">
<nav>
    <a href="http://phoenintel.st4lwolf.org/"><p><font size="5">main</font></p></a>
    <a href="http://phoenintel.st4lwolf.org/articles.html"><p><font size="5">articles</font></p></a>
    <a href="http://phoenintel.st4lwolf.org/media.html"><p><font size="5">media</font></p></a>
    <a href="http://phoenintel.st4lwolf.org/aboutus.html"><p><font size="5">about us</font></p></a>
    <a href="http://phoenintel.st4lwolf.org/contacts.html"><p><font size="5">contacts</font></p></a>
</nav>

<!-- animation-->
<p align="center"><img src="http://phoenintel.st4lwolf.org/media/logo.png" width="300" height="300" alt=""/></p>

<!--text-->
<p align="center"><font color="#FFFFFFF" size="6">Page de téléchargement de ressources</font></p>
<p align="center"><font color="#FFFFFFF" size="6"><a href="ai_phoenintel.pdf">Télécharger le dossier complet (pdf)</a></font></p>
<p align="center"><font color="#FFFFFFF" size="6"><a href="simulation.zip">Télécharger la simulation cellulaire</a></font></p>
<p align="center"><font color="#FFFFFFF" size="6"><a href="https://www.dropbox.com/s/4k15r2rijhm5iup/sliders.zip?dl=1">Télécharger les sliders</a></font></p>
<br><br>
<p align="center"><font color="#FFFFFFF" size="6">
liens externes:<br>
background: https://www.pexels.com/photo/blue-and-purple-cosmic-sky-956999/<br>
ai history: https://sitn.hms.harvard.edu/flash/2017/history-artificial-intelligence/<br>
ibm 702: https://fr.wikipedia.org/wiki/IBM_702”<br>
ibm 702: https://www.ibm.com/ibm/history/exhibits/mainframe/mainframe_PP702.html<br>
théorie évolution schéma: http://www.svtbelrose.info/spip.php?article127<br>
réseaux de neurones: https://www.ibm.com/fr-fr/cloud/learn/neural-networks<br>
<br><br>
<strong> - Découvrir plus à propos de PhoenIntel - </strong><br><br><br><br><br>
</font></p>
	</header>
	<main>
		<?php
		// Connexion à la base de données
		$dsn = 'mysql:host=localhost;dbname=id20321007_links';
		$user = 'id20321007_5tghd4fhr7';
		$password = 'RVW|2qMalUDt5%SO';
		$options = array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);
		$dbh = new PDO($dsn, $user, $password, $options);

		// Récupération des données
		$stmt = $dbh->prepare("SELECT titre, url, description, date FROM liens ORDER BY date DESC");
		$stmt->execute();
		$liens = $stmt->fetchAll();

		// Affichage des données
		foreach ($liens as $lien) {
			echo '<article class="lien">';
			echo '<header>';
			echo '<h2>' . $lien['titre'] . '</h2>';
			echo '<time>' . date('d/m/Y H:i:s', strtotime($lien['date'])) . '</time>';
			echo '</header>';
			echo '<p>' . $lien['description'] . '</p>';
			echo '<a href="' . $lien['url'] . '" target="_blank">Voir le lien</a>';
			echo '</article>';
		}
		?>
	</main>
	<!--footer (bas de page)-->
<footer>
<p align="center"><font color="#FFFFFF"><strong><u>Contacts</u></strong></font></p>
<p align="center"><font color="#FFFFFF"><a href="mailto:contact@st4lwolf.org">contact@st4lwolf.org</a></font></p>
<p align="center"><font color="#FFFFFF"><a href="https://github.com/phoenintel">Github</a></font></p>
<p align="center"><font color="#FFFFFF"><a href="https://mstdn.social/@phoenintel">Mastodon</a></font></p>
<p align="center"><font color="#FFFFFF"><a href="https://www.facebook.com/profile.php?id=100090404687359">Facebook</a></font></p>
<p align="center"><font color="#FFFFFF"><a href="https://twitter.com/PhoenIntel">Twitter</a></font>
<p align="center"><font color="#FFFFFF"><a href="https://www.instagram.com/phoenintel/">Instagram</a></font>
</footer>

<p align="center"><font color="#FFFFFF"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br />This work is licensed under a <br> <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA 4.0 License</a>. <br> Please note that external images and links are NOT <br> necessarily subject to the license.</font></p>
</body>
</html>
