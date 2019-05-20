<div class="page-header">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php bloginfo( 'wpurl' )?>">Home</a></li>
                <?php if ( is_tax() ): ?>
                <li class="breadcrumb-item">Categorias</li>
                <?php endif;?>
                <?php if ( is_singular('brand') ): ?>
                <li class="breadcrumb-item">Marcas</li>
                <?php elseif ( is_singular('product') ): ?>
                <?php $tax = get_the_terms(0, 'category_product')?>
                <li class="breadcrumb-item"><?php echo $tax[0]->name; ?></li>
                <?php elseif ( is_search() ) : ?>
                <li class="breadcrumb-item">Busca</li>
                <?php endif;?>
            </ol>
        </nav>
        <?php if ( is_page() ): ?>
        <h3><?php the_title(); ?></h3>
        <?php endif;?>
        <?php if ( is_singular('brand') ): ?>
        <h3><?php the_title(); ?></h3>
        <?php endif;?>
        <?php if ( is_singular('product') ): ?>
        <h3><?php the_field('product_name'); ?></h3>
        <?php endif;?>
        <?php if ( is_tax() ): ?>
        <?php $term = get_term_by('name', get_query_var('term'), 'category_product')?>
        <h3><?php echo $term->name; ?></h3>
        <?php endif;?>
        <?php if ( is_search() ): ?>
        <h3><?php the_search_query(); ?></h3>
        <?php endif;?>
    </div>
</div>
