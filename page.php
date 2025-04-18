<?php
/*
Template Name: Page
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
              <div class="content_wrap">
                <h1><?php the_sub_field('naslov'); ?></h1>
              </div>
            </div>
          </div>
        </div>
</section>
<?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('sadrzaj') ): ?>
<?php while( have_rows('sadrzaj') ): the_row(); 

  ?>

<section class="standard-content">
  <div class="container">
      <div class="row">

        <div class="col-md-12 animsition-link">
           
           <div class="wrapper_text">
             <?php the_sub_field('text'); ?>
           </div>
          
        </div>
        
      </div>
    </div>
    
</section>
<?php endwhile; ?>
    <?php endif; ?>


<?php get_footer();?>