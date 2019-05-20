<?php get_header(); ?>

<?php
if (have_posts()) : while(have_posts()) : the_post();
    the_title();
    the_content();
    endwhile; else:
?>

<div class="content">
    <div class="container">
        <div class="row">
            <p>Ainda não há postagens!</p>
        </div>
    </div>
</div>

<?php endif; ?>

<?php
get_footer();
