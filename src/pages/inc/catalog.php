<?php
$loop = new WP_Query( ['post_type' => 'catalog'] );
while ( $loop->have_posts() ) : $loop->the_post();
?>

<div class="catalog">
    <div class="container">
    <div class="jumbotron">
        <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-xl-5">
                <img class="catalog-image" src="<?php the_field('catalog_image'); ?>" alt="<?php the_field('catalog_text'); ?>">
            </div>
            <div class="col-sm-12 col-md-6 col-xl-7">
                <h2 class="catalog-title">Download do catálogo</h2>
                <p>Faça o download do nosso catálogo online, ele está sempre atualizado com os últimos lançamentos.</p>
                <a href="<?php the_field('catalog_file'); ?>" class="btn btn-outline-dark" role="button" target="_blank">Download</a>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<?php endwhile; wp_reset_query(); ?>
