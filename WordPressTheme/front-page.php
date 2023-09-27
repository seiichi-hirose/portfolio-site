<?php get_header(); ?>

  <section class="l-mv p-mv js-mv-height">
    <div class="p-mv__inner">
      <div class="p-mv__header">
        <h2 class="p-mv__title">WEB <br class="u-mobile">CREATION <br class="u-mobile">SPECIALIST</h2>
        <p class="p-mv__subtitle">お客様の理想の未来を実現する<br class="u-mobile">Webサイトを制作します</p>
        <div class="p-mv__btn">
          <a href="#" class="c-mv-btn">CONTACT</a>
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
            <p class="p-card__text">保守性のあるCSS設計を土台に置いて、細かい部分まで正確さを意識します。</p>
          </div>
        </div>
        <div class="p-service__item p-card">
          <div class="p-card__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/design.jpg" alt="サービス画像3">
          </div>
          <div class="p-card__body">
            <h3 class="p-card__title">Webデザイン</h3>
            <p class="p-card__text">優しさを持った、意味のあるWebサイト・バナーデザイン作りに注力します。</p>
          </div>
        </div>
      </div>
      <div class="p-service__btn">
        <a href="#" class="c-button">more</a>
      </div>
    </div>
  </section>


  <section class="l-works p-works">
    <div class="p-works__inner l-inner">
      <div class="p-works__cotnent">
        <div class="p-works__images">
          <div class="swiper js-works-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide p-works__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/works_1.jpg" alt="">
              </div>
              <div class="swiper-slide p-works__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/service_1.jpg" alt="">
              </div>
              <div class="swiper-slide p-works__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/service_2.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-pagination js-works-pagination"></div>
        </div>
        <div class="p-works__text-body">
          <div class="p-works__title c-section-header">
            <h2 class="c-section-header__engtitle">WORKS</h2>
            <p class="c-section-header__jatitle">制作実績</p>
          </div>
          <div class="p-works__text-block">
            <p class="p-works__text">様々なジャンルのWebサイト制作が可能です。<br>ご購入やお申込み数の増加などを実現します！</p>
          </div>
          <div class="p-works__btn">
            <a href="#" class="c-button">more</a>
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
              未来を実現する手助けをさせてください。
            </p>
        </div>
        <div class="p-company__btn">
          <a href="#" class="c-button">more</a>
        </div>
      </div>
    </div>
  </section>

  <section class="l-contact p-contact">
    <div class="p-contact__inner l-inner">
      <div class="p-contact__title c-section-header">
        <h2 class="c-section-header__engtitle">CONTACT</h2>
        <p class="c-section-header__jatitle">お問い合わせ</p>
      </div>
      <div class="p-contact__contents">
        <div class="p-contact__text-block">
          <p class="p-contact__text">Webサイトの制作のご依頼やお見積りなど、<br>お気軽にご相談ください。</p>
        </div>
        <div class="p-contact__btn">
          <a href="#" class="c-button">more</a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>