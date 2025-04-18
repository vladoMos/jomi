<?php
/*
Template Name: Page home
*/
get_header(); ?>


<?php if (have_rows('slider')): ?>
	<?php while (have_rows('slider')): the_row(); ?>

		<section class="home-sec1 slider-first">

			<div class="arrow-right">
				<img src="<?php echo get_template_directory_uri(); ?>/img/arrow2.svg" alt="Name">
			</div>
			<div class="arrow-left">
				<img src="<?php echo get_template_directory_uri(); ?>/img/arrow2.svg" alt="Name">
			</div>

			<div class="slider_wrap">





				<div class="owl-carousel header-slider owl-theme">

					<?php if (have_rows('slider_box')): ?>
						<?php while (have_rows('slider_box')): the_row();
							$main_image = get_sub_field('slika');
						?>

							<div class="item">
								<div class="image" style="background-image: url(<?php echo $main_image['sizes']['large']; ?>);">

									<div class="container">
										<div class="row">
											<div class="col-lg-12">
												<div class="content_wrap">
													<h1 class="wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.8s"><?php the_sub_field('naslov'); ?></h1>

													<div class="btn_kontakt wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="0.8s">

														<?php
														$link = get_sub_field('link_dugme');
														if ($link):
															$link_url = $link['url'];
															$link_title = $link['title'];
															$link_target = $link['target'] ? $link['target'] : '_self';
														?>
															<a href="<?php echo esc_url($link_url); ?>" class="email"><?php echo esc_html($link_title); ?></a>
														<?php endif; ?>

													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>









				</div>
			</div>

		</section>

	<?php endwhile; ?>
<?php endif; ?>


<?php if (have_rows('sekcija_2')): ?>
	<?php while (have_rows('sekcija_2')): the_row();
		$main_image = get_sub_field('slika');
	?>

		<section class="home_sec2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="content">
							<div class="title wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.8s">
								<h2><?php the_sub_field('naslov'); ?></h2>
							</div>

							<div class="text wow fadeInRight" data-wow-delay="0.7s" data-wow-duration="0.8s">
								<?php the_sub_field('text'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('video_sekcija')): ?>
	<?php while (have_rows('video_sekcija')): the_row();
		$video = get_sub_field('video');
	?>

		<section class="video_sec">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="video_wrap">
							<video disableRemotePlayback muted loop autoplay="">
								<source src="<?php the_sub_field('video'); ?>" type="video/mp4">
							</video>
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php endwhile; ?>
<?php endif; ?>

<div class="form_section1">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php echo do_shortcode('[contact-form-7 id="8e6fbb9" title="Contact form 1"]'); ?>

			</div>
		</div>
	</div>
</div>



<?php if (have_rows('paralex_slike')): ?>
	<?php while (have_rows('paralex_slike')): the_row();
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


<section id="portfolio" class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 mb-4">
				<div class="portfolio-item">
					<a href="https://tvoj-projekt.com" target="_blank">
						<div class="portfolio-img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg" class="img-fluid" alt="Projekt 1">
							<video class="portfolio-video" autoplay muted loop>
								<source src="<?php echo get_template_directory_uri(); ?>/img/video1.mp4" type="video/mp4">
							</video>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="portfolio-item">
					<a href="https://tvoj-projekt2.com" target="_blank">
						<div class="portfolio-img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg" class="img-fluid" alt="Projekt 1">
							<video class="portfolio-video" autoplay muted loop>
								<source src="<?php echo get_template_directory_uri(); ?>/img/video1.mp4" type="video/mp4">
							</video>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="portfolio-item">
					<a href="https://tvoj-projekt3.com" target="_blank">
						<div class="portfolio-img-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg" class="img-fluid" alt="Projekt 1">
							<video class="portfolio-video" autoplay muted loop>
								<source src="<?php echo get_template_directory_uri(); ?>/img/video1.mp4" type="video/mp4">
							</video>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	document.querySelectorAll('.portfolio-item').forEach(item => {
		item.addEventListener('mouseenter', function() {
			const img = this.querySelector('img');
			const video = this.querySelector('video');

			// Skloni sliku i prikaži video
			img.style.opacity = 0;
			video.style.opacity = 1;
			video.play();
		});

		item.addEventListener('mouseleave', function() {
			const img = this.querySelector('img');
			const video = this.querySelector('video');

			// Vratite sliku i zaustavite video
			img.style.opacity = 1;
			video.style.opacity = 0;
			video.pause();
		});
	});
</script>

<style>
	#portfolio {
		background-color: #f8f9fa;
	}

	.portfolio-img-wrapper {
		position: relative;
		overflow: hidden;
	}

	.portfolio-video {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		object-fit: cover;
		opacity: 0;
		transition: opacity 0.3s ease;
	}

	.portfolio-item img {
		width: 100%;
		height: auto;
		transition: opacity 0.3s ease;
	}
</style>


<div class="last-sec">
	<div class="wrap">
		ahsgdjhas
	</div>
	<div class="wrap2">
		Vlado je car i zdrav i super zgodan i lijep i bogat i najbolji i ultraprivlačan
	</div>
</div>






<?php get_footer(); ?>