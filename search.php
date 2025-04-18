<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<section class="sub-page-header" style="background-image: url(/wp-content/uploads/2020/04/img-header-18.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.5s">
        <h1>Suche</h1>

      </div>
    </div>
  </div>
</section>

<section class="left-content suche">
  <div class="container">
    <div class="row">
      <div class="col-md-8 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
        <?php if ( have_posts() ) { ?>
          <?php while ( have_posts() ) { the_post(); ?>
           <a href="<?php echo get_permalink(); ?>"><?php the_title();  ?></a>

         <?php } ?>
         <?php echo paginate_links(); ?>
       <?php } ?>
     </div>
   </div> 
 </div>
</section>


<?php get_footer(); ?>

