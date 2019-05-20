<?php
// Template Name: Distribuidor
?>

<?php get_header(); ?>

<!-- breadcrumb -->
<?php get_template_part( 'inc/breadcrumb' ); ?>
<!-- end breadcrumb -->

<div class="content">
    <main class="main">
        <!-- contact -->
        <section class="contact">
            <div class="container">
                <h2 class="section-title">Seja Um Distribuidor Autorizado</h2>
                <!-- contact-block -->
                <div class="contact-block">
                    <h5 class="contact-subtitle">Esperamos seu contato</h5>
                    <p>Faça parte de uma empresa consolidada há mais de duas décadas no mercado, com produtos de qualidade.</p>
                    <p>Estamos sempre buscando pessoas que amam aventuras e que tenham interesse em ser distribuidor dos nossos produtos em todo o território nacional.</p>
                    <?php echo do_shortcode('[contact-form-7 id="632" title="Distribuidor"]'); ?>
                </div>
                <!-- end contact-block -->
            </div>
        </section>
        <!-- end contact -->
    </main>
</div>
<!-- end content -->

<?php get_footer(); ?>
