<?php
// Template Name: Contato
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
                <h2 class="section-title">Fale Conosco</h2>
                <!-- contact-block -->
                <div class="contact-block">
                    <h5 class="contact-subtitle">Você pode ligar, mandar mensagem, email...</h5>
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img class="card-icon" src="<?php bloginfo( 'template_url' ) ?>/img/icon-phone-o.svg" alt="">
                                <p class="card-title">Telefone</p>
                                <p class="card-text">(51) 3639-1720</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img class="card-icon" src="<?php bloginfo( 'template_url' ) ?>/img/icon-whatsapp-o.svg" alt="">
                                <p class="card-title">WhatsApp</p>
                                <p class="card-text">(51) 99766-4789</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-4">
                            <div class="card">
                                <img class="card-icon" src="<?php bloginfo( 'template_url' ) ?>/img/icon-email-o.svg" alt="">
                                <p class="card-title">Email</p>
                                <p class="card-text"><a href="mailto:contato@bonfanti4x4.com">contato@bonfanti4x4.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end contact-block -->
                <div class="contact-block">
                    <h5 class="contact-subtitle">Ou ainda preencher o formulário.</h5>
                    <?php echo do_shortcode('[contact-form-7 id="220" title="Contato"]'); ?>
                </div>
                <!-- end contact-block -->
            </div>
        </section>
        <!-- end contact -->
    </main>
</div>
<!-- end content -->

<?php get_footer(); ?>
