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
	<div class="section intro-text" id="intro">
		<div class="row">
			<div class="large-text presentation">
				<?php echo apply_filters('the_content', $defo->post_content);?>
			</div>
		</div>
	</div>

	<h1 class="section-header">Agenda</h1>
	<section class="section agenda">
		
		<div class="agenda-content">
			<?php echo apply_filters('the_content', $agenda->post_content);?>
		</div>
	</section>

	<h1 class="section-header">Institutos</h1>

	<?php foreach($institutos as $instituto):
		$curinst = $kinst++;
		?>

		<section class="section instituto" id="instituto-<?php echo $curinst;?>">
			<span class="number"><?php echo $curinst;?></span>
			<h2><?php echo $instituto->post_title;?></h2>

			<div class="instituto-content">
				<?php echo apply_filters('the_content', $instituto->post_content);?>
			</div>
		</section>

	<?php endforeach;?>

</main><!-- #main -->
<nav id="fixed-nav">
	<ul>
		<li>
			<a href="#intro">intro</a>
		</li>
		<span>institutos</span>
	<?php 
		$navk = 1;
		foreach($institutos as $instituto): 
			$navinst = $navk++;
			?>
			<li>
				<a title="<?php echo $instituto->post_title;?>" href="#instituto-<?php echo $navinst;?>"><?php echo $navinst;?></a>
			</li>
		<?php endforeach;?>
	</ul>
</nav>
<?php

get_footer();
