<?php
// Template Name: Sobre Nós
?>

<?php get_header(); ?>

<!-- breadcrumb -->
<?php get_template_part( 'inc/breadcrumb' ); ?>
<!-- end breadcrumb -->

<div class="content">
    <main class="main">
        <!-- about -->
        <section class="about">
            <div class="container">
                <h2 class="section-title">Nossa História</h2>
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-md-8">
                        <div class="about-text">
                            <?php the_field( 'about_history' ) ?>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a data-fancybox="gallery" href="<?php the_field( 'about_image_1' ) ?>"><img class="about-image" src="<?php the_field( 'about_image_1' ) ?>" alt=""></a>
                                <a data-fancybox="gallery" href="<?php the_field( 'about_image_2' ) ?>"><img class="about-image" src="<?php the_field( 'about_image_2' ) ?>" alt=""></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a data-fancybox="gallery" href="<?php the_field( 'about_image_3' ) ?>"><img class="about-image" src="<?php the_field( 'about_image_3' ) ?>" alt=""></a>
                            </div>
                            <div class="col-6">
                                <a data-fancybox="gallery" href="<?php the_field( 'about_image_4' ) ?>"><img class="about-image" src="<?php the_field( 'about_image_4' ) ?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about -->
    </main>
</div>
<!-- end content -->

<?php get_footer(); ?>
