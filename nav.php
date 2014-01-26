<nav role="navigation">
	<a href="#main" class="reader" title="Aller directement au contenu">Passer directement au contenu</a>
	<h2 aria-level="2" role="heading" class="section">Barre de navigation principal du site</h2>
	<div class="menuToggle">
	<a href="javascript:void" title="Déployer le menu">
			<span>Menu</span>
		</a>
	</div>
	<?php wp_nav_menu( array('menu' => 'main-menu', 'walker' => new Custom_Walker_Nav_Menu(1)) ); ?>
</nav>
