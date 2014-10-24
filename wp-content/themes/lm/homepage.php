<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>


<h1>
	<!--
	<strong>Fisioterapia e benessere</strong><br />per privati, professionisti e aziende<br />
	<small>Trattamenti a domicilio, in studio ed in azienda.</small>
	
	-->
	<strong>Fisioterapia e benessere<br />per privati, professionisti e aziende</strong><br />
	<small style="font-size:25px;">Trattamenti a domicilio, in studio ed in azienda.</small>
</h1>


<div id="fascia-top">

	<div class="center">
		<a href="http://luciamarin.it/appuntamento/" class="button-appuntamento">
			<img src="<?php bloginfo('template_url'); ?>/images/button-prenota.png" />
		</a>
	</div>
</div>

<div class="content w100 clear home-news">
	
	<div class="col colpic equal">

		<img src="<?php bloginfo('template_url'); ?>/images/home-lucia2.jpg" id="home-lucia" class="equal" />
	
	</div>

	<div class="col coltext equal">

		<div id="home-main-content">
			
			<h2 class="chisono">
			<!--<strong>Lucia Marin</strong><br />-->
			<strong>Dottoressa Lucia Marin, laureata in Fisioterapia presso l'Università di Padova.</strong><br />
			Specializzata in terapia manuale.<br />
			Attualmente pratica a Vicenza e limitrofi, Soave (VR).

				<div class="content w100 clear home-news newsbig">
					<div id="formnewsl">
					<?php
					$widgetNL = new WYSIJA_NL_Widget(true);
					echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php'));
					?>
				</div></div>
			</h2>

				
		</div>

	
	</div>	
</div>



<!--
<div class="content w80 clear home-chisono">

	<h2>Chi Sono</h2>

	<?php $recent = new WP_Query("page_id=7"); while($recent->have_posts()) : $recent->the_post();?>
		
		<div class="col w50 tright">
		<?php if (has_post_thumbnail()) { 
				echo '<div class="home-thumb">'; the_post_thumbnail(); echo '</div>'; 
		} ?>
       </div>

    	<div class="col w30 tleft">
    		<?php the_content(); ?>
		</div>

	<?php endwhile; ?>	


</div>
-->
<div class="content w100 clear home-servizi">

	<div class="content w80">

		<h2>Servizi di fisioterapia</h2>

		<?php $recent = new WP_Query("page_id=5"); while($recent->have_posts()) : $recent->the_post();?>
		
			<div class="col w90">

    			<?php the_content(); ?>
		
			</div>

		<?php endwhile; ?>	

	</div>
</div>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="intro">
			<?php the_post_thumbnail('full'); ?>

			<div id="content"><?php the_content();?></div>
		</div>

<?php endwhile; endif; ?>


<div id="fascia-top">

	<div class="center">
		<a href="http://luciamarin.it/appuntamento/" class="button-appuntamento">
			<img src="<?php bloginfo('template_url'); ?>/images/button-prenota.png" />
		</a>
	</div>
</div>




<a href="http://luciamarin.it/metodo-naet/">
<div class="content w100 clear home-naet">


	<img src="<?php bloginfo('template_url'); ?>/images/stones.jpg" id="home-stones" />
	<div class="content w80">
		<h2>Trattamenti metodo NAET&reg;</h2>
		<div id="naetbox">
		<h3>HAI INTOLLERANZE ALIMENTARI O AMBIENTALI?</h3>
		<p>Ristabilisci risposte indesiderate e sintomi di intolleranze, senza l'utilizzo di farmaci. 
			NAET è un riequilibrio energetico che cambia la tua risposta nei confronti di una sostanza.</p>
		</div>
	</div>

</div>
</a>



<?php get_footer(); ?>