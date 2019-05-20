<?php get_header() ?>

<!-- breadcrumb -->
<?php get_template_part( 'inc/breadcrumb' ); ?>
<!-- end breadcrumb -->

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <main class="main products">
                    <!-- product -->
                    <section class="products">
                        <?php
                        global $query_string;
                        wp_parse_str( $query_string, $search_query );
                        $search = new WP_Query( $search_query );
                        ?>
                        <?php if ( $search->have_posts() ) : ?>
                            <div class="row">
                                <?php while ( $search->have_posts() ) : $search->the_post(); ?>
                                <div class="col-6 col-md-3">
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

                            <?php if ( wp_pagination( $loop ) ) : ?>
                            <div class="row">
                                <div class="col-12">
                                    <?php wp_pagination( $loop ); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                        <div class="row">
                            <div class="col-12">
                                <h4>Desculpe, não encontramos o item buscado.</h4>
                            </div>
                        </div>
                        <?php endif; ?>
                    </section>
                    <!-- end products -->
                </main>
            </div>
        </div>
    </div>
</div>
<!-- end content -->

<?php get_footer() ?>
