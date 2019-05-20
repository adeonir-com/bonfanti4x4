<?php

add_theme_support( 'title_tag' );
add_theme_support( 'widgets' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'slide-image', 1100, 500, true );

// Breadcrumb widget
function the_breadcrumb() {
    $show_on_home = 0;
}

// Register Custom Post Type: Produto
function create_post_type_product() {
    register_post_type( 'product', [
        'label' => 'Produtos',
        'description' => 'Produto',
        'menu_icon' => 'dashicons-format-aside',
        'public' => true,
        'menu_position' => 4,
        'query_var' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'supports' => ['title', 'thumbnail'],
        'taxonomies' => ['category_product'],
        'rewrite' => ['slug' => 'produto', 'with_front' => false],
        'labels' => [
            'name' => 'Produtos',
            'singular_name' => 'Produto',
            'menu_name' => 'Produtos',
            'all_items' => 'Todos Produtos',
            'add_new_item' => 'Adicionar Novo Produto',
            'add_new' => 'Adicionar Novo',
            'new_item' => 'Novo Produto',
            'edit_item' => 'Editar Produto',
            'update_item' => 'Atualizar Produto',
            'view_item' => 'Visualizar Produto',
            'view_items' => 'Visualizar Produto',
            'search_items' => 'Buscar Produto',
            'not_found' => 'Nenhum produto encontrado',
            'not_found_in_trash' => 'Nenhum produto encontrado na lixeira',
        ]
    ] );

    register_taxonomy( 'category_product', 'product', [
        'hierarchical' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'categorias'],
        'show_in_quick_edit' => false,
        'meta_box_cb' => false,
        'labels' => [
            'name' => 'Categorias',
            'singular_name' => 'Categoria',
            'search_items' =>  __( 'Buscar Categorias' ),
            'all_items' => __( 'Todas Categorias' ),
            'parent_item' => __( 'Categoria Pai' ),
            'parent_item_colon' => __( 'Categoria: Pai' ),
            'edit_item' => __( 'Editar Categoria' ),
            'update_item' => __( 'Atualizar Categoria' ),
            'add_new_item' => __( 'Adicionar Nova Categoria' ),
            'new_item_name' => __( 'Nome Nova Categoria' ),
            'menu_name' => 'Categorias',
        ]
    ] );

    register_taxonomy( 'tag_product', 'product', [
        'hierarchical' => false,
        'rewrite' => ['slug' => 'tags'],
        'show_in_quick_edit' => false,
        'meta_box_cb' => false,
        'labels' => [
            'name' => 'Tags',
            'singular_name' => 'Tag',
            'search_items' =>  __( 'Bsucar Tags' ),
            'all_items' => __( 'Todas Tags' ),
            'edit_item' => __( 'Editar Tag' ),
            'update_item' => __( 'Atualizar Tag' ),
            'add_new_item' => __( 'Adicionar Nova Tag' ),
            'new_item_name' => __( 'Nome Nova Tag' ),
            'menu_name' => 'Tags',
        ]
    ] );
}
add_action( 'init', 'create_post_type_product' );

// Register Custom Post Type: Brand
function create_post_type_brand() {
    register_post_type( 'brand', [
        'label' => 'Marcas',
        'description' => 'Marca',
        'menu_icon' => 'dashicons-hammer',
        'public' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 5,
        'query_var' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'supports' => ['title', 'thumbnail', 'post-formats'],
        'rewrite' => ['slug' => 'marca', 'with_front' => false],
        'labels' => [
            'name' => 'Marcas',
            'singular_name' => 'Marca',
            'menu_name' => 'Marcas',
            'all_items' => 'Todos Marcas',
            'add_new_item' => 'Adicionar Nova Marca',
            'add_new' => 'Adicionar Nova',
            'new_item' => 'Nova Marca',
            'edit_item' => 'Editar Marca',
            'update_item' => 'Atualizar Marca',
            'view_item' => 'Visualizar Marca',
            'view_items' => 'Visualizar Marca',
            'search_items' => 'Buscar Marca',
            'not_found' => 'Nenhum marca encontrado',
            'not_found_in_trash' => 'Nenhum marca encontrado na lixeira',
        ]
    ] );
}
add_action( 'init', 'create_post_type_brand' );

// Register Custom Post Type: Slider
function create_post_type_slider() {
    register_post_type( 'slider', [
        'label' => 'Slides',
        'description' => 'Slides images',
        'menu_icon' => 'dashicons-align-center',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'query_var' => false,
        'has_archive' => false,
        'hierarchical' => false,
        'exclude_from_search' => true,
        'capability_type' => 'page',
        'supports' => ['title', 'post-formats'],
        'labels' => [
            'name' => 'Slider',
            'singular_name' => 'Slide',
            'menu_name' => 'Slider',
            'all_items' => 'Todos Slides',
            'add_new_item' => 'Adicionar Novo Slide',
            'add_new' => 'Adicionar Novo',
            'new_item' => 'Novo Slide',
            'edit_item' => 'Editar Slide',
            'update_item' => 'Atualizar Slide',
            'view_item' => 'Visualizar Slide',
            'view_items' => 'Visualizar Slides',
            'search_items' => 'Buscar Slide',
            'not_found' => 'Nenhum slide encontrado',
            'not_found_in_trash' => 'Nenhum slide encontrado na lixeira',
        ]
    ] );
}
add_action( 'init', 'create_post_type_slider' );

// Register Custom Post Type: Catálogo
function create_post_type_catalog() {
    register_post_type( 'catalog', [
        'label' => 'Catálogo',
        'description' => 'Catálogo images',
        'menu_icon' => 'dashicons-book',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 7,
        'query_var' => false,
        'has_archive' => false,
        'hierarchical' => false,
        'exclude_from_search' => true,
        'capability_type' => 'page',
        'supports' => ['title', 'post-formats'],
        'labels' => [
            'name' => 'Catálogo',
            'singular_name' => 'Catálogo',
            'menu_name' => 'Catálogo',
            'all_items' => 'Todos Catálogos',
            'add_new_item' => 'Adicionar Novo Catálogo',
            'add_new' => 'Adicionar Novo',
            'new_item' => 'Novo Catálogo',
            'edit_item' => 'Editar Catálogo',
            'update_item' => 'Atualizar Catálogo',
            'view_item' => 'Visualizar Catálogo',
            'view_items' => 'Visualizar Catálogo',
            'search_items' => 'Buscar Catálogo',
            'not_found' => 'Nenhum catálogo encontrado',
            'not_found_in_trash' => 'Nenhum catálogo encontrado na lixeira',
        ]
    ] );
}
add_action( 'init', 'create_post_type_catalog' );

// Rewrite pagination slug
function re_rewrite_rules() {
    global $wp_rewrite;
    $wp_rewrite->author_base = 'autor';
    $wp_rewrite->search_base = 'buscar';
    $wp_rewrite->comments_base = 'comentarios';
    $wp_rewrite->pagination_base = 'pagina';
    $wp_rewrite->flush_rules();
}
add_action('init', 're_rewrite_rules');

// Register bootstrap pagination
function wp_pagination( $query=null, $wpcpn_posts=null ) {
    global $wp_query;
    $query = $query ? $query : $wp_query;
    $big = 999999999;
    $max_num_pages = $query->max_num_pages;

    $paginate = paginate_links(
        [
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'type' => 'array',
            'total' => $max_num_pages,
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'prev_text' => __('Anterior'),
            'next_text' => __('Próxima'),
        ]
    );
    if ( $max_num_pages > 1 && $paginate ) {
        echo '<ul class="pagination justify-content-end">';
        foreach ( $paginate as $page ) {
            echo '<li class="page-item">' . $page . '</li>';
        }
        echo '</ul>';
    }
}

// Register theme styles
function theme_styles() {
    wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', [], false, false );
    wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css', [], false, false );
    wp_register_style( 'fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700', [], false, false );
    wp_register_style( 'fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css', [], false, false );
    wp_register_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', [], false, false );
    wp_register_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', [], false, false );
    wp_register_style( 'style', get_template_directory_uri().'/css/build.css', [], filemtime(get_template_directory().'/css/build.css'), false );
    wp_enqueue_style( ['bootstrap', 'fontawesome', 'fonts', 'fancybox', 'slick', 'slick-theme', 'style'] );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Register theme scripts
function theme_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', [], false, true );
    wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', ['jquery'], false, true );
    wp_register_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', ['jquery'], false, true );
    wp_register_script( 'holder', 'https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js', ['jquery'], false, true );
    wp_register_script( 'fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js', ['jquery'], false, true );
    wp_register_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', ['jquery'], false, true );
    wp_register_script( 'inputmask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js', ['jquery'], false, true);
    wp_register_script( 'script', get_template_directory_uri().'/js/script.js', ['jquery'], filemtime(get_template_directory().'/js/script.js'), true );
    wp_enqueue_script( ['jquery', 'popper', 'bootstrap', 'holder', 'fancybox', 'slick', 'inputmask', 'script'] );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

