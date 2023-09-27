<?php get_header(); ?>

<section class="l-lower-mv p-lower-mv  js-mv-height">
    <div class="p-lower-mv__inner">
        <div class="p-lower-mv__header">
            <h1 class="p-lower-mv__title">CONTACT</h1>
            <p class="p-lower-mv__subtitle">お問い合わせ</p>
        </div>
    </div>
</section>

<div class="c-breadcrumb">
    <div class="c-breadcrumb__inner l-inner">
        <a href="#" class="c-breadcrumb__link-top">TOP</a>
        <span class="c-breadcrumb__arrow">></span>
        <a href="" class="c-breadcrumb__link">CONTACT</a>
    </div>
</div>

<div class="p-lower-contact l-lower-contact">
    <div class="p-lower-contact__inner l-inner">
    <p class="p-lower-contact__header">Webサイトの制作のご依頼やお見積りなど、<br class="u-mobile">お気軽にご相談ください。</p>

    <form class="p-lower-contact__form c-contact-form">
        <ul>

            <!-- アイテム お問い合わせ種別 -->
            <li class="c-contact-form__item">
                <dl class="c-contact-form__flex">
                    <dt class="c-contact-form__title c-contact-form__title--radio">お問い合わせ種別<span class="c-contact-form__danger-label">*必須</span></dt>
                    <dd class="c-contact-form__radios">
                        <label for="consult"><input class="c-contact-form__radio" type="radio" name="kinds" id="consult" value="お仕事のご依頼・ご相談">お仕事のご依頼・ご相談</label>
                        <label for="estimate"><input class="c-contact-form__radio" type="radio" name="kinds" id="estimate" value="お見積りのご依頼">お見積りのご依頼</label>
                        <label for="others"><input class="c-contact-form__radio" type="radio" name="kinds" id="others" value="その他">その他</label>
                    </dd>
                </dl>
            </li>

            <!-- アイテム 氏名 -->
            <li class="c-contact-form__item">
                <dl class="c-contact-form__flex">
                    <dt class="c-contact-form__title"><label for="namae">お名前</label><span class="c-contact-form__danger-label">*必須</span></dt>
                    <dd>
                        <input class="c-contact-form__input" type="text" id="namae">
                    </dd>
                </dl>
            </li>
            <!-- アイテム 会社名 -->
            <li class="c-contact-form__item">
                <dl class="c-contact-form__flex">
                    <dt class="c-contact-form__title"><label for="firm">会社名</label></dt>
                    <dd>
                        <input class="c-contact-form__input" type="text" id="firm">
                    </dd>
                </dl>
            </li>
            <!-- アイテム メールアドレス -->
            <li class="c-contact-form__item">
                <dl class="c-contact-form__flex">
                    <dt class="c-contact-form__title"><label for="mail">メールアドレス</label><span class="c-contact-form__danger-label">*必須</span></dt>
                    <dd>
                        <input class="c-contact-form__input" type="text" id="mail">
                    </dd>
                </dl>
            </li>
            <!-- アイテム 電話番号 -->
            <li class="c-contact-form__item">
                <dl class="c-contact-form__flex">
                    <dt class="c-contact-form__title"><label for="tel">お電話番号</label><span class="c-contact-form__limit-text">（半角数字ハイフンなし）</span></dt>
                    <dd>
                        <input class="c-contact-form__input" type="text" id="tel">
                    </dd>
                </dl>
            </li>

            <!-- アイテム お問い合わせ内容 -->
            <li class="c-contact-form__item">
                <dl class="c-contact-form__flex">
                    <dt class="c-contact-form__title"><label for="textarea">お問い合わせ内容</label><span class="c-contact-form__danger-label">*必須</span></dt>
                    <dd><textarea class="c-contact-form__textarea" id="textarea"></textarea></dd>
                </dl>
            </li>

        </ul>

        <!-- ボタン -->
        <div class="c-contact-form__btn p-works__btn">
            <a href="#" class="c-button">送信する</a>
        </div>
    </form>

    </div>
</div>



<?php get_footer(); ?>
