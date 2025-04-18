<?php
/*
Template Name: Page onama
*/
get_header();?>
<?php if( have_rows('header') ): ?>
<?php while( have_rows('header') ): the_row(); 
$main_image = get_sub_field('slika');
	?>

<section class="header_onama"style="background-image: url(<?php echo $main_image['sizes']['large']; ?>);">
	<div class="container">
    			<div class="row">
    				<div class="col-lg-12">
    					<div class="content_wrap wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="0.8s">
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
<section class="sec2_onama">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content">
					<div class="title wow fadeInLeft" data-wow-delay="0.8s" data-wow-duration="0.8s">
						<h2><?php the_sub_field('naslov'); ?></h2>
					</div>

					<div class="text wow fadeInRight" data-wow-delay="0.9s" data-wow-duration="0.8s">
						<?php the_sub_field('text'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>
<?php endif; ?>


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



<?php if( have_rows('sekcija_galerija') ): ?>
	<?php while( have_rows('sekcija_galerija') ): the_row();
			                	
			                	$main_image = get_sub_field('glavna_slika');?>
<section class="gallery_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">



				<div class="gallery_wrap">
					<div class="title">
						<h2><?php the_sub_field('naslov'); ?></h2>
					</div>
					<div class="image" id="gal_img" style="background-image: url(<?php echo esc_url($main_image['sizes']['large']); ?>);">
						<div class="hov-image"></div>
					</div>
				</div>



				<?php 
						$images = get_sub_field('galerija');
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						if( $images ): ?>

						  <script type="text/javascript">
						    $('#gal_img').on('click', function() {
						   
						      $(this).lightGallery({
						      	  thumbnail:true,
						      	  animateThumb:true,
						      	  showThumbByDefault:false,
						          dynamic: true,


						          dynamicEl: [
						          <?php foreach( $images as $image ): ?>
						          {
						             'src': '<?php echo esc_url($image['sizes']['large']); ?>',
						              'thumb': '<?php echo esc_url($image['sizes']['thumbnail']); ?>',
						              'subHtml': '<h4><?php the_sub_field('title'); ?></h4>'
						          },

						          <?php endforeach; ?>

						        ]
						      })
						   
						  });
						  </script>  
						<?php endif; ?>




			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
 <?php endif; ?>



<?php get_footer();?>