<?php get_header() ?>

<!-- breadcrumb -->
<?php get_template_part( 'inc/breadcrumb' ); ?>
<!-- end breadcrumb -->

<div class="content">
    <div class="container">
        <div class="row">
            <!-- sidebar -->
            <?php get_template_part( 'inc/sidebar' ); ?>
            <!-- end sidebar -->

            <main class="main products col-xs-12 col-lg-9">
                <!-- product -->
                <section class="products">
                    <?php $term = get_term_by('slug', get_query_var( 'term' ), 'category_product') ?>
                    <?php $loop = new WP_Query( [
                        'post_type' => 'product',
                        'posts_per_page' => 12,
                        'paged' => $paged,
                        'tax_query' => [[
                            'taxonomy' => 'category_product',
                            'field' => 'slug',
                            'terms' => $term->slug,
                        ]]
                    ] ); ?>
                    <div class="row">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="col-sm-6 col-md-4">
                            <a href="<?php the_permalink(); ?>">
                                <div class="card product-card">
                                    <div class="card-image">
                                        <?php $images = get_field('product_gallery'); ?>
                                        <img class="card-img-top" src="<?php echo $images[0]['sizes']['medium']; ?>" alt="<?php the_field( 'product_name' ); ?>">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-code"><?php the_field( 'product_code' ); ?></h5>
                                        <p class="card-text"><?php the_field( 'product_name' ); ?></p>
                                        <?php $terms = get_field( 'product_category' ); ?>
                                        <?php foreach( $terms as $term ): ?>
                                        <p class="card-category"><?php echo $term->name; ?></p>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <?php wp_pagination( $loop ); ?>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                </section>
                <!-- end products -->
            </main>
        </div>
    </div>
</div>
<!-- end content -->

<!-- catalog -->
<?php get_template_part( 'inc/catalog' ); ?>
<!-- end catalog -->

<?php get_footer() ?>
