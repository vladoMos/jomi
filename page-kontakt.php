<?php
/*
Template Name: Page kontakt
*/
get_header();?>


<?php if( have_rows('header') ): ?>
<?php while( have_rows('header') ): the_row(); 
$main_image = get_sub_field('slika');
	?>
<section class="header_onama header_kontakt"style="background-image: url(<?php echo $main_image['sizes']['large']; ?>);">
	<div class="container">
    			<div class="row">
    				<div class="col-lg-12">
    					<div class="content_wrap">
    						<h1><?php the_sub_field('naslov'); ?></h1>
    					</div>
    				</div>
    			</div>
    		</div>
</section>
<?php endwhile; ?>
		<?php endif; ?>

<?php if( have_rows('sekcija_2') ): ?>
<?php while( have_rows('sekcija_2') ): the_row(); 
$main_image = get_sub_field('slika');
	?>

<section class="kontakt_sec2 ">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="wrapper">
                   <div class="title">
                       <h3><?php the_sub_field('naslov_1'); ?></h3>
                   </div>

                   <div class="content">

                       <?php
						$link = get_sub_field('telefon');
						if( $link ):
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						
						
						
						<a href="<?php echo esc_url( $link_url ); ?>" class="phone">
                       	<i class="fas fa-phone"></i> <?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>

						<?php
						$link = get_sub_field('email');
						if( $link ):
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
						?>
                       <a href="<?php echo esc_url( $link_url ); ?>" class="email"><i class="fas fa-envelope"></i><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>


						<?php
						$link = get_sub_field('lokacija');
						if( $link ):
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
						?>
                       <a href="<?php echo esc_url( $link_url ); ?>" class="location"><i class="fas fa-map-marker-alt"></i><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
                   </div>
                </div>
			</div>


			<div class="col-lg-4">
				<div class="wrapper">
                    <div class="title">
                       <h3><?php the_sub_field('naslov_2'); ?></h3>
                   </div>

                   <div class="content">
                       <p><i class="fas fa-clock"></i><?php the_sub_field('radno_vrijeme'); ?></p>
                   </div>
                </div>
			</div>


			<div class="col-lg-4">
				<div class="wrapper">
                    <div class="title">
                       <h3><?php the_sub_field('naslov_3'); ?></h3>
                   </div>

                   <div class="content">
                       <p><?php the_sub_field('adresa'); ?></p>
                   </div>
                </div>
			</div>



		</div>
	</div>
</section>
<?php endwhile; ?>
<?php endif; ?>



<section class="map_sec">
	<div class="map_wrap">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11622.663704413211!2d17.6808486!3d43.2584229!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134b6ba9b2e56545%3A0x4c4bf2ca40697149!2sJomi!5e0!3m2!1sbs!2sba!4v1682702275934!5m2!1sbs!2sba" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</section>


<?php if( have_rows('paralex_slike') ): ?>
<?php while( have_rows('paralex_slike') ): the_row(); 
$slika_1 = get_sub_field('slika_1');
$slika_2 = get_sub_field('slika_2');
	?>
<section class="home_sec3">
	<div class="paralex_image" style="background-image: url(<?php echo $slika_1['sizes']['large']; ?>);">
		
	</div>

	<div class="paralex_image" style="background-image: url(<?php echo $slika_2['sizes']['large']; ?>);">
		
	</div>
</section>
<?php endwhile; ?>
<?php endif; ?>


<section class="booking">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php echo do_shortcode( '[bookingpress_form]' ); ?>
				
				
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>