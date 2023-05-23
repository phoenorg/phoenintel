<!DOCTYPE html>
<html lang="en">
<body bgcolor="#OOOOOO">
<head>
    <title>PhoenIntel - main</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="news.css">
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
    <a href="index.html"><p><font size="5">main</font></p></a>
    <a href="articles.html"><p><font size="5">articles</font></p></a>
    <a href="media.html"><p><font size="5">media</font></p></a>
    <a href="aboutus.html"><p><font size="5">about us</font></p></a>
    <a href="contacts.html"><p><font size="5">contacts</font></p></a>
</nav>

<!-- animation-->
<p align="center"><img src="media/logo.gif" width="770" height="770" alt=""/></p>

<!--text-->
<p align="center"><font color="#FFFFFFF" size="6">Non-profit organization whose priority is privacy. We want a safer internet that does not rely on the collection of personal data and respects environmental issues. To do this, we denounce what we consider problematic on the internet, and we expose the different solutions, by writing articles. Do not hesitate to contact us by mail or private message for any membership request or for any question.</font></p>
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

<p align="center"><font color="#FFFFFF"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br />This work is licensed under a <br> <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA 4.0 License</a>. <br> Please note that external images and links are NOT <br> necessarily subject to the license. You can see the list of them <a href="http://www.phoenintel.org/aboutus.html">here</a>.</font></p>
</body>
</html>
