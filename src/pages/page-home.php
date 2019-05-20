<?php
// Template Name: Home
?>

<?php get_header(); ?>

<!-- carousel -->
<section class="main-carousel">
    <div class="container">
        <div id="mainCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $loop = new WP_Query( ['post_type' => 'slider', 'order' => 'ASC'] );
                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php the_field('slide_image'); ?>" alt="<?php the_field('slide_text'); ?>">
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>
</section>
<!-- end carousel -->

<div class="content">
    <main class="main">
        <section>
            <!-- container -->
            <div class="container">
                <h2 class="section-title">Produtos em destaque</h2>
                <!-- rated carousel -->
                <div class="rated-carousel">
                    <?php $loop = new WP_Query( [
                        'post_type' => 'product',
                        'meta_query' => [[
                            'key' => 'product_featured',
                            'compare' => '=',
                            'value' => '1'
                        ]]
                    ] ); ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col">
                        <a href="<?php the_permalink(); ?>" class="carousel-link">
                            <div class="card product-card">
                                <?php $images = get_field('product_gallery'); ?>
                                <img class="card-img-top" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_field( 'product_name' ); ?>">
                                <div class="card-body">
                                    <p class="card-text"><?php the_field( 'product_name' ); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
                <!-- end rated carousel -->
            </div>
            <!-- end container -->
        </section>
    </main>
</div>
<!-- end content -->

<!-- catalog -->
<?php get_template_part( 'inc/catalog' ); ?>
<!-- end catalog -->

<?php get_footer(); ?>
