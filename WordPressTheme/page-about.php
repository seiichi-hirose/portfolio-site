<?php get_header(); ?>

<section class="l-lower-mv p-lower-mv  js-mv-height">
    <div class="p-lower-mv__inner">
        <div class="p-lower-mv__header">
            <h1 class="p-lower-mv__title">ABOUT</h1>
            <p class="p-lower-mv__subtitle">私について</p>
        </div>
    </div>
</section>

<?php get_template_part('_include/breadcrumb'); ?>


<div class="p-lower-about l-lower-frame l-lower-frame--about">
    <div class="p-lower-about__inner l-inner">

    <section class="p-lower-about__message p-company">

      <div class="p-company__title c-section-header">
        <h2 class="c-section-header__lower">メッセージ</h2>
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
      </div>

      <div class="p-lower-about__message-wrapper l-inner">
        <div class="p-lower-about__message-img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/SH-194.jpg" alt="自己紹介画像">
        </div>
        <div class="p-lower-about__message-text">
            割烹のサービスマンとしてお客様をお迎えし、日本酒やワインをお勧めする日常。<br>
            定年になるまでずっとこの生活が続くのだろう、と思っていました。<br>
            <br>
            転機となったコロナでの数ヶ月にわたる長い休業。そこでWeb制作と出会いました。<br>
            時を忘れるほど制作に没頭し、ゼロから作り上げる楽しさに魅了されて独立。<br>
            <br>
            前職で培った心配りを大事に、お客様に寄り添った制作活動を続けていきます。<br>
            <br>
            GLOCAL CODE　廣瀬 誠一
        </div>
      </div>

    </section>

    <section class="p-lower-about__access">
        <div class="p-lower-about__access-title c-section-header">
            <h2 class="c-section-header__lower">アクセス</h2>
        </div>
        <div class="p-lower-about__access-table c-table">
            <dl class="c-table__body">
                <div class="c-table__line"><dt class="c-table__item">屋号</dt><dd class="c-table__content">GLOCAL CODE（グローカルコード）</dd></div>
                <div class="c-table__line"><dt class="c-table__item">開設</dt><dd class="c-table__content">2022年06月</dd></div>
                <div class="c-table__line"><dt class="c-table__item">代表者</dt><dd class="c-table__content">廣瀬 誠一</dd></div>
                <div class="c-table__line"><dt class="c-table__item">メールアドレス</dt><dd class="c-table__content">hirose@glocalcode.com</dd></div>
                <div class="c-table__line"><dt class="c-table__item">住所</dt><dd class="c-table__content">福井県鯖江市片山町6-2-1</dd></div>
            </dl>
        </div>
        <div class="p-lower-about__access-img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/paddy-field.jpg" alt="アクセスイメージ">
        </div>
    </section>

    </div>
</div>






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
          <a href="<?php echo $contact ?>" class="c-button">more</a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>