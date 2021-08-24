<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ) ?>/img/favicon.png" type="image/x-icon">

    <?php wp_head(); ?>
    <?php get_template_part( 'inc/google-tag' ); ?>
    <?php get_template_part( 'inc/facebook-pixel-code' ); ?>
</head>

<body>
<!-- search modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="/" method="get" accept-charset="utf-8" id="searchform" role="search" class="search-input">
                    <div class="input-group">
                        <input class="form-control" type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Busca"/>
                        <div class="input-group-append">
                            <button class="btn" type="submit" id="searchsubmit"><i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end search modal -->

<div class="wrapper home">
    <header>
        <!-- top-header -->
        <div class="top-header">
            <div class="container">
                <div class="contact">
                    <div class="distro">
                        <a class="nav-link" href="<?php bloginfo( 'wpurl' ) ?>/distribuidor"><i class="fas fa-hands-helping"></i>Seja um distribuidor</a>
                    </div>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link mobile-link" href="tel:555136391720"><i class="fas fa-phone"></i>(51) 3639-1720</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mobile-link" href="https://wa.me/5551997664789"><i class="fab fa-whatsapp"></i>(51)
                            99766-4789</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:contato@bonfanti4x4.com"><i class="fas fa-envelope"></i>contato@bonfanti4x4.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end top-header -->

        <!-- main-header -->
        <div class="main-header">
            <div class="container">
                <h1><?php bloginfo('name') ?></h1>
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="<?php bloginfo( 'wpurl' ) ?>"><img src="<?php bloginfo( 'template_url' ) ?>/img/bonfanti4x4-logo.svg" alt="Bonfanti 4x4"></a>
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php bloginfo( 'wpurl' ) ?>/produtos" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produtos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php bloginfo( 'wpurl' ) ?>/produtos">Todos produtos</a>
                            <div class="dropdown-divider"></div>
                            <?php $terms = get_categories([
                                'taxonomy' => 'category_product',
                                'orderby' => 'name',
                                'hide_empty' => true,
                            ]); ?>
                            <?php foreach( $terms as $term ) : ?>
                            <a class="dropdown-item" href="<?php echo get_category_link( $term->term_id ); ?>"><?php echo $term->name; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </li>
                    <a class="nav-link" href="<?php bloginfo( 'wpurl' ) ?>/sobre-nos">Sobre Nós</a>
                    <a class="nav-link" href="<?php bloginfo( 'wpurl' ) ?>/contato">Contato</a>
                    </ul>
                    <button type="button" class="navbar-search" data-toggle="modal" data-target="#searchModal"><i class="fas fa-search"></i></button>
                </nav>
            </div>
        </div>
        <!-- end main-header -->
    </header>
