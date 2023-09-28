<?php
$contact = esc_url(home_url('/contact/'));
?>

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