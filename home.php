<?php
/**
 * Template Name: Inicio Landing
 * @package pluriversidad_landing
 */

get_header();
$defoID = get_option('page_on_front');
$defo = get_post($defoID);
$institutos = get_children(
					array(
						'post_parent' 	=> 8,
						'orderby'		=> 'menu_order',
						'order'			=> 'ASC'
						)
					);
$kinst = 1;

$agenda = get_post(26);

?>

<main id="primary" class="site-main">
	<div class="section intro-text">
		<div class="row">
			<div class="large-text presentation">
				<?php echo apply_filters('the_content', $defo->post_content);?>
			</div>
		</div>
	</div>

	<section class="section agenda">
		<h2>Agenda</h2>
		<div class="agenda-content">
			<?php echo apply_filters('the_content', $agenda->post_content);?>
		</div>
	</section>

	<h1 class="institutos-header">Institutos</h1>

	<?php foreach($institutos as $instituto):?>

		<section class="section instituto">
			<span class="number"><?php echo $kinst++;?></span>
			<h2><?php echo $instituto->post_title;?></h2>

			<div class="instituto-content">
				<?php echo apply_filters('the_content', $instituto->post_content);?>
			</div>
		</section>

	<?php endforeach;?>

</main><!-- #main -->

<?php

get_footer();
