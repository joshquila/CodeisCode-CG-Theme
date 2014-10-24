<?php get_header(); ?>

<div id="page" class="block clear">
	<div class="container">

		
	<div id="error404" class="post">
		<h2>Ops!</h2>
		<div class="post-content">
			<p>C'è qualche problema, forse la pagina che cerchi è stata spostata</p>
			
			<p>Prova a dare un'occhiata ad una di queste pagine</p>
			
			<ul>
				<li><a href="http://www.c-lover.it/servizi/">Servizi</a></li>
				<li><a href="http://www.c-lover.it/c-shop/">Prodotti</a></li>
				<li><a href="http://www.c-lover.it/contatti/">Contatti</a></li>
			</ul>
			
			
			<p>Oppure prova a fare una ricerca qui sotto</p>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		
		
		</div><!--.post-content-->
	</div><!--#error404 .post-->


	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>