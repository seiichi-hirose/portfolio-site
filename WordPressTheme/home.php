<?php get_header(); ?>

<section class="l-lower-mv p-lower-mv  js-mv-height">
    <div class="p-lower-mv__inner">
        <div class="p-lower-mv__header">
            <h1 class="p-lower-mv__title">WORKS</h1>
            <p class="p-lower-mv__subtitle">制作実績</p>
        </div>
    </div>
</section>

<?php get_template_part('_include/breadcrumb'); ?>


<div class="p-lower-works l-lower-frame">
    <div class="p-lower-works__inner l-inner">
        <p class="p-lower-works__header"><span>*BASIC認証</span>がかかっているサイトがございます。</p>

        <div class="p-lower-works__wrapper">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); 
                $product_url = get_field('product-url');
                $product_page = get_field('product-page');
                $product_time = get_field('product-time');
                $basic_id = get_field('basic-id');
                $basic_pass = get_field('basic-pass');
            ?>
            <a href="<?= $product_url ?>" class="p-lower-works__card p-works-card" target="_blank" rel="noopener noreferrer">
                <div class="p-works-card__img">
                    <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('medium'); ?>
                    <?php } else { ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.png" alt="画像無し">
                    <?php } ?>
                </div>
                <div class="p-works-card__body-top">
                    <h2 class="p-works-card__title"><?php the_title(); ?></h2>
                </div>
                <div class="p-works-card__body-bottom">
                    <div class="p-words-card__number">
                        <p class="p-works-card__page">ページ数: <span><?= $product_page ?>p</span></p>
                        <p class="p-works-card__time">制作時間: <span><?= $product_time ?>h</span></p>
                    </div>
                    <p class="p-works-card__text">
                        <?php the_content(); ?>
                    </p>
                    <?php if($basic_id && $basic_pass): ?>
                    <div class="p-works-card__limit">*BASIC認証<p>ID: <span class="p-works-card__limit-number"><?= $basic_id ?></span></p><p>Pass: <span class="p-works-card__limit-number"><?= $basic_pass ?></span></p></div>
                    <?php endif; ?>
                </div>
            </a>
            <?php endwhile; ?>
            <?php else: ?>
                <p>記事が見つかりませんでした</p>
            <?php endif; ?>
        </div>


    </div>
</div>

    <?php get_template_part('_include/contact-parts'); ?>

<?php get_footer(); ?>