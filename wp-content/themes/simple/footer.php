
    <!-- newsletter -->
    <?php get_template_part( 'inc/newsletter' ); ?>
    <!-- end newsletter -->
</div>
<!-- end wrapper -->

<footer>
    <!-- location -->
    <div class="locations">
        <div class="container">
            <div class="row">
                <div class="col-md locations-block">
                    <img class="locations-icon" src="<?php bloginfo( 'template_url' ) ?>/img/icon-map.svg" alt="">
                    <h5 class="locations-title">Bonfanti RS</h5>
                    <address class="locations-address">(51) 3639-1720<br>
                    Rua Cônego Caspary, 3155 - Centro<br>
                    95795-000 São Vendelino/RS</address>
                </div>

                <div class="col-md locations-block">
                    <img class="locations-icon" src="<?php bloginfo( 'template_url' ) ?>/img/icon-map.svg" alt="">
                    <h5 class="locations-title">Bonfanti SP</h5>
                    <address class="locations-address">(11) 2412-6411<br>
                    Rua Umbuzeiro, 110 - Cumbica<br>
                    07224-010 Guarulhos/RS</address>
                </div>

                <div class="col-md locations-block">
                    <img class="locations-icon" src="<?php bloginfo( 'template_url' ) ?>/img/icon-map.svg" alt="">
                    <h5 class="locations-title">Bonfanti MG</h5>
                    <address class="locations-address">(31) 3046-5558<br>
                    Rua Osório de Morais, 800 - Cidade Industrial<br>
                    32240-140 Contagem/MG</address>
                </div>
            </div>
        </div>
    </div>
    <!-- end locations -->

    <!-- infos -->
    <div class="infos">
        <div class="container">
            <div class="footer-nav">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="/produtos">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/sobre-nos">Sobre Nós</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contato">Contato</a></li>
                </ul>
            </div>
            <div class="social-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="https://www.instagram.com/bonfanti_4x4/" class="nav-link" target="_blank" rel="noreferrer">
                            <img src="<?php bloginfo( 'template_url' ) ?>/img/icon-instagram.svg" alt="">@bonfanti_4x4
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/bonfanti4x4/" class="nav-link" target="_blank" rel="noreferrer">
                            <img src="<?php bloginfo( 'template_url' ) ?>/img/icon-facebook.svg" alt="">@bonfanti4x4
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end infos -->
</footer>

<?php wp_footer(); ?>
</body>

</html>
