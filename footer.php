<?php if (have_rows('info', 'options')): ?>
    <?php while (have_rows('info', 'options')): the_row();
        $radno_vrijeme = get_sub_field('radno_vrijeme');
    ?>
        <footer class="footer">
            <div class="container">
                <div class="row">


                    <div class="col-lg-3 col-md-6">
                        <div class="wrapper">
                            <div class="logo wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.8s">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/jl2.png" alt="Name">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="wrapper">
                            <div class="title wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="0.8s">
                                <h3><?php the_sub_field('naslov_1'); ?></h3>
                            </div>

                            <div class="content">
                                <?php
                                $link = get_sub_field('telefon');
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>



                                    <a href="<?php echo esc_url($link_url); ?>" class="phone wow fadeInLeft" data-wow-delay="0.7s" data-wow-duration="0.8s">
                                        <i class="fas fa-phone"></i> <?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>

                                <?php
                                $link = get_sub_field('email');
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a href="<?php echo esc_url($link_url); ?>" class="email wow fadeInLeft" data-wow-delay="0.9s" data-wow-duration="0.8s"><i class="fas fa-envelope"></i><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>


                                <?php
                                $link = get_sub_field('lokacija');
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a href="<?php echo esc_url($link_url); ?>" class="location wow fadeInLeft" data-wow-delay="1.1s" data-wow-duration="0.8s"><i class="fas fa-map-marker-alt"></i><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="wrapper">
                            <div class="title wow fadeInDown" data-wow-delay="1.3s" data-wow-duration="0.8s">
                                <h3><?php the_sub_field('naslov_2'); ?></h3>
                            </div>

                            <div class="content wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="0.8s">
                                <?php
                                if ($radno_vrijeme): ?>
                                    <p><i class="fas fa-clock"></i><?php echo $radno_vrijeme; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="wrapper">
                            <div class="title wow fadeInDown" data-wow-delay="1.7s" data-wow-duration="0.8s">
                                <h3><?php the_sub_field('naslov_3'); ?></h3>
                            </div>

                            <div class="content wow fadeInRight" data-wow-delay="1.9s" data-wow-duration="0.8s">
                                <p><?php the_sub_field('adresa'); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="copyright_content">
                            <div class="text">
                                <p><?php the_sub_field('copyright_text'); ?></p>
                            </div>

                            <div class="social_wrap">

                                <?php
                                $link = get_sub_field('facebook_link');
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a href="<?php echo esc_url($link_url); ?>"><i class="fab fa-facebook-f"></i><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>


                                <?php
                                $link = get_sub_field('instagram_link');
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a href="<?php echo esc_url($link_url); ?>"><i class="fab fa-instagram"></i><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>



                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </footer>

    <?php endwhile; ?>
<?php endif; ?>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<?php wp_footer() ?>

<script>
    $(window).on('load', function() {
        wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 5,
            mobile: false,
            live: true
        })
        wow.init();
    });
</script>

<script type="text/javascript">
    $(window).on('load', function() {
        $('.owl-carousel.header-slider').owlCarousel({
            items: 1,
            loop: true,

            //nav:true,
            dots: false,
            autoplay: true,
            autoplaySpeed: 1000,
            smartSpeed: 1500,
            autoplayHoverPause: false

        });

        var owl = $('.owl-carousel.header-slider');
        owl.owlCarousel();
        $('.slider-first .arrow-right img').click(function() {
            owl.trigger('next.owl.carousel');
        })

        $('.slider-first .arrow-left img').click(function() {
            owl.trigger('prev.owl.carousel');
        })

    });
</script>
</body>

</html>