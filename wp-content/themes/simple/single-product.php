<?php get_header(); ?>

<!-- breadcrumb -->
<?php get_template_part( 'inc/breadcrumb' ); ?>
<!-- end breadcrumb -->

<div class="content">
    <main class="main">
        <section class="single-product">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-5">
                        <?php $images = get_field('product_gallery') ?>
                        <div class="easyzoom">
                            <a href="<?php echo $images[0]['sizes']['large']; ?>" data-fancybox="gallery">
                                <img src="<?php echo $images[0]['sizes']['medium']; ?>" alt="" />
                            </a>
                        </div>
                        <div class="row thumbnails">
                            <?php foreach( $images as $image ): ?>
                            <div class="col-4 col-lg-3">
                                <a href="<?php echo $image['sizes']['large']; ?>" data-standard="<?php echo $image['sizes']['medium']; ?>" data-fancybox="gallery">
                                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="" />
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-7">
                        <h3 class="product-name"><?php the_field( 'product_name' ); ?></h3>
                        <?php $terms = get_field( 'product_category' ); ?>
                        <?php foreach( $terms as $term ): ?>
                        <a class="product-category" href="/categorias/<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
                        <?php endforeach; ?>
                        <ul class="product-data">
                            <li>Cod: <span><?php the_field( 'product_code' ); ?></span></li>
                            <?php if ( get_field( 'product_ref' ) ) : ?>
                            <li>Ref. Original: <span><?php the_field( 'product_ref' ); ?></span></li>
                            <?php endif; ?>
                            <li>Tecnologia: <span><?php echo get_field( 'product_tech' )->name; ?></span></li>
                            <?php if ( get_field( 'product_brand' ) ) : ?>
                            <li>Marca: <span><?php echo get_field( 'product_brand' )->post_title; ?></span></li>
                            <?php endif; ?>
                        </ul>
                        <div class="product-description">
                            <?php the_field( 'product_description' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end single -->

        <section class="products">
            <div class="container">
                <h2 class="section-title text-center">Produtos relacionados</h2>
                <div class="row justify-content-center">
                    <?php $loop = new WP_Query([
                    'post_type' => 'product', 'posts_per_page' => 4, 'offset' => 1
                    ]); ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-6 col-lg-3">
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
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </section>
        <!-- end products -->
    </main>
</div>
<!-- end content -->

<!-- catalog -->
<?php get_template_part( 'inc/catalog' ); ?>
<!-- end catalog -->

<?php get_footer(); ?>
