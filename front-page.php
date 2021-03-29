<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

get_header();
?>

	<main id="primary" class="site-main">
	<section class="carrousel_slider">
	<article class="slide__conteneur">
	<div class="slide">
	<img width="150" height="150" src="http://localhost/4w4/wp-content/uploads/2020/10/meilleures-pratiques-web-design-1024x512-1-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy">
			<div class="slide__info"></div>
				   <p>582-3W3 - Web</p>
				   <a href="http://localhost/4w4/2020/10/07/582-3w3-creation-de-sites-web-dynamiques-90h/">Création de sites Web dynamiques</a>
				   <p>Session 3</p>
			</div>
	</div>
	</article>
	<article class='slide__conteneur'>
	<div class="slide">
		<img src="" alt="">
			<div class="slide__info"></div>
				   <p>582-3W3 - Web</p>
				   <a href="http://localhost/4w4/2020/10/07/582-3w3-creation-de-sites-web-dynamiques-90h/">Création de sites Web dynamiques</a>
				   <p>Session 3</p>
			</div>
	</div>
	</article>
	<article class='slide__conteneur'>
	<div class="slide">
		<img src="" alt="">
			<div class="slide__info"></div>
				   <p>582-3W3 - Web</p>
				   <a href="http://localhost/4w4/2020/10/07/582-3w3-creation-de-sites-web-dynamiques-90h/">Création de sites Web dynamiques</a>
				   <p>Session 3</p>
			</div>
	</div>
	</article>
	</section>
	
	<article class="boutonsMenu">
	<button id="un"></button>
	<button id="deux"></button>
	<button id="trois"></button>
	</article>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="cours">
			<?php
			/* Start the Loop */
			$precedent="XXXXXX";
			global $tPropriete;
			while ( have_posts() ) :
				the_post();
				//choix des affichages dans les articles
				convertirTableau($tPropriete);
				 if($tPropriete['typeCours'] != $precedent  ): ?>
                <?php   if($precedent != "XXXXXX") :?>
                    </section>
                    <?php endif ?>
                    <h2><?php echo $tPropriete['typeCours']?></h2>
					<section>
					 <?php endif ?>
			   <?php get_template_part( 'template-parts/content', 'cours-article' ); 		 
			   $precedent =$tPropriete['typeCours'];
				endwhile;?>
			   
			</section>
			<?php rewind_posts(); ?>
			   <?php while ( have_posts()) : the_post();?>
			   <h3>-<?php echo get_the_title();?></h3>
			   <?php endwhile;?>
		
			<?php endif;?>
	</main><!-- #main -->


<?php
get_sidebar();
get_footer();

function convertirTableau(&$tPropriete)
{
	/*$titre = get_the_title();
	$sigle = substr($titre,0,7);
	$nbHeure = substr($titre,-4,3);
	$titrePartiel = substr($titre,8,-6);
	$session = substr($titre,4,1);
	//$contenu = get_the_content();
	//$resume = substr($contenu,0,200);
	$typeCours = get_field('type_de_cours');*/
	
		$tPropriete['titre']= get_the_title();
		$tPropriete['sigle'] = substr($tPropriete['titre'],0,7);
		$tPropriete['nbHeure'] = substr($tPropriete['titre'],-4,3);
		$tPropriete['titrePartiel'] = substr($tPropriete['titre'],8,-6);
		$tPropriete['session'] = substr($tPropriete['titre'],4,1);
		$tPropriete['typeCours'] = get_field('type_de_cours');
}