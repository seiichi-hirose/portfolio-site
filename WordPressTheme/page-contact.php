<?php get_header(); ?>

<section class="l-lower-mv p-lower-mv  js-mv-height">
    <div class="p-lower-mv__inner">
        <div class="p-lower-mv__header">
            <h1 class="p-lower-mv__title">CONTACT</h1>
            <p class="p-lower-mv__subtitle">お問い合わせ</p>
        </div>
    </div>
</section>

<?php get_template_part('_include/breadcrumb'); ?>

<div class="p-lower-contact l-lower-contact">
    <div class="p-lower-contact__inner l-inner">
    <p class="p-lower-contact__header">Webサイトの制作のご依頼やお見積りなど、<br class="u-mobile">お気軽にご相談ください。</p>

    <?php echo do_shortcode('[contact-form-7 id="c8e5bdf" title="お問い合わせ"]'); ?>

    </div>
</div>



<?php get_footer(); ?>
