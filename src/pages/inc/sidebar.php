<aside class="sidebar col-xs-12 col-lg-3">
    <div class="categories">
        <a class="data-toggle data-brands" data-toggle="collapse" href="#collapseBrands">
            <h4 class="categories-title">Marcas</h4>
        </a>
        <div id="collapseBrands" class="panel-collapse collapse">
            <ul class="categories-nav">
            <?php
            $loop = new WP_Query(['post_type' => 'brand']);
            while ($loop->have_posts()): $loop->the_post();
            ?>
                <li class="categories-item"><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
            <?php endwhile; wp_reset_query();?>
            </ul>
        </div>
    </div>
    <div class="categories">
        <a class="data-toggle data-categories" data-toggle="collapse" href="#collapseCategories">
            <h4 class="categories-title">Categorias</h4>
        </a>
        <div id="collapseCategories" class="panel-collapse collapse">
            <ul class="categories-nav">
                <?php if (is_tax()): ?>
                <li class="categories-item">
                <a href="/produtos">Todos produtos</a>
                </li>
                <?php endif;?>
                <?php $terms = get_categories([
                    'taxonomy' => 'category_product',
                    'orderby' => 'name',
                    'hide_empty' => true,
                ]);?>
                <?php foreach ($terms as $term): ?>
                <li class="categories-item">
                    <a href="<?php echo get_category_link($term->term_id); ?>"><?php echo $term->name; ?></a>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</aside>
