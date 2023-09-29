<?php get_header(); ?>

<?php
$home = esc_url(home_url('/'));
$about = esc_url(home_url('/about/'));
$service = esc_url(home_url('/service/'));
$works = esc_url(home_url('/works/'));
$contact = esc_url(home_url('/contact/'));
?>

  <section class="l-mv p-mv js-mv-height">
    <div class="p-mv__inner">
      <div class="p-mv__header">
        <h2 class="p-mv__title">WEB <br class="u-mobile">CREATION <br class="u-mobile">SPECIALIST</h2>
        <p class="p-mv__subtitle">お客様の理想の未来を実現する<br class="u-mobile">Webサイトを制作します</p>
        <div class="p-mv__btn">
          <a href="<?php echo $contact ?>" class="c-button">CONTACT</a>
        </div>
      </div>
      <div class="p-mv__scroll"><span>SCROLL</span></div>
    </div>
  </section>


  <section class="l-service p-service">
    <div class="p-service__inner l-inner">
      <div class="p-service__title c-section-header">
        <h2 class="c-section-header__engtitle">SERVICE</h2>
        <p class="c-section-header__jatitle">事業内容</p>
      </div>
      <div class="p-service__items">
        <div class="p-service__item p-card">
          <div class="p-card__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/web-produce.jpg" alt="サービス画像1">
          </div>
          <div class="p-card__body">
            <h3 class="p-card__title">Webサイト制作</h3>
            <p class="p-card__text">新規サイトはもちろん、サイトリニューアルやランディングページ制作も行っております。</p>
          </div>
        </div>
        <div class="p-service__item p-card">
          <div class="p-card__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/coding.jpg" alt="サービス画像2">
          </div>
          <div class="p-card__body">
            <h3 class="p-card__title">コーディング</h3>
            <p class="p-card__text">CSS設計を土台に、細かい部分や見えにくい部分までこだわり実装していきます。</p>
          </div>
        </div>
        <div class="p-service__item p-card">
          <div class="p-card__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/design.jpg" alt="サービス画像3">
          </div>
          <div class="p-card__body">
            <h3 class="p-card__title">Webデザイン</h3>
            <p class="p-card__text">優しさがあって、意図を感じるWebサイト・バナーデザイン作りに注力します。</p>
          </div>
        </div>
      </div>
      <div class="p-service__btn">
        <a href="<?php echo $service ?>" class="c-button">more</a>
      </div>
    </div>
  </section>


  <section class="l-works p-works">
    <div class="p-works__inner l-inner">
      <div class="p-works__cotnent">
      <?php
        //　--------- 制作実績を4件表示　---------
        $args = array(
            'post_type'  => 'post',  //
            'posts_per_page' => 4        // 表示数　3件
        );
        $the_query = new WP_Query($args); // 新規WP query を作成　変数args で定義したパラメータを参照
        if ($the_query->have_posts()) :
            // ここから表示する内容を記入
        ?>
        <div class="p-works__images">

          <div class="swiper js-works-swiper">
            <div class="swiper-wrapper">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <div class="swiper-slide p-works__img">
                <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php } else { ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.png" alt="画像無し">
                <?php } ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>
          <div class="swiper-pagination js-works-pagination"></div>

        </div>
        <?php
        // -------- WP_query終了-----------
        wp_reset_postdata();
        endif;
        ?>

        <div class="p-works__text-body">
          <div class="p-works__title c-section-header">
            <h2 class="c-section-header__engtitle">WORKS</h2>
            <p class="c-section-header__jatitle">制作実績</p>
          </div>
          <div class="p-works__text-block">
            <p class="p-works__text">様々なジャンルのWebサイト制作が可能です。<br>品質の確かな制作物をご提供いたします。</p>
          </div>
          <div class="p-works__btn">
            <a href="<?php echo $works ?>" class="c-button">more</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="l-company p-company">
    <div class="p-company__inner l-inner">
      <div class="p-company__title c-section-header">
        <h2 class="c-section-header__engtitle">ABOUT</h2>
        <p class="c-section-header__jatitle">私について</p>
      </div>
      <div class="p-company__contents">
        <h3 class="p-company__subtitle"><span class="p-company__yellow">サイトのゴール =</span><br class="u-mobile"><span class="p-company__yellow">未来を実現すること</span></h3>
        <div class="p-company__content">
          <p class="p-company__text">
              お客様の理想の未来を実現すること。<br>
              それがWebサイトのゴールであり、<br class="u-mobile">
              私が目指すことです。<br>
              だからこそちゃんと成果を出すサイトを<br class="u-mobile">
              全力でお作りします。<br>
              お客様の笑顔を見たい。<br>
              未来を形づくる手助けをさせてください。
            </p>
        </div>
        <div class="p-company__btn">
          <a href="<?php echo $about ?>" class="c-button">more</a>
        </div>
      </div>
    </div>
  </section>

<?php get_template_part('_include/contact-parts'); ?>

<?php get_footer(); ?>