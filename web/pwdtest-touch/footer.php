<footer role="contentinfo">
	<div id="steps">
		<span class="current">1</span>
		<span>2</span>
		<span>3</span>

		<a href="#" id="next"><?=$trans['Suivant']?></a>
		<a href="#" id="back" style="display:none"><?=$trans["Retour"]?></a>
	</div>
	
	<address id="credits">
		<img src="images/snj.gif" width="129" height="40" alt="Service National de la Jeunesse">
		<img src="images/cases.gif" width="93" height="40" alt="CASES Luxembourg">
	</address>
	<nav id="langs">
		<ul>
			<?php if ($currentLang == 'fr'): ?><li><a><img src="images/fr.png" alt="français"></a>
			<?php else: ?><li><a href="?lang=fr" hreflang="fr" rel="alternate"><img src="images/fr.png" alt="français"></a><?php endif; ?>
			
			<?php if ($currentLang == 'de'): ?><li><a><img src="images/de.png" alt="deutsch"></a>
			<?php else: ?><li><a href="?lang=de" hreflang="en" rel="alternate"><img src="images/de.png" alt="deutsch"></a><?php endif; ?>

			<?php if ($currentLang == 'en'): ?><li><a><img src="images/en.png" alt="English"></a>
			<?php else: ?><li><a href="?lang=en" hreflang="en" rel="alternate"><img src="images/en.png" alt="English"></a><?php endif; ?>
		</ul>
	</nav>
</footer>
<script src="js/jquery-1.4.2.min.js"></script>
<script src="js/jquery-ui-1.8.5.custom.min.js"></script>
<script src="js/index.js"></script>
<!--[if lt IE 9]>
<script src="js/ie.js"></script>
<![endif]-->
