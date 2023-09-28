<?php get_header(); ?>

<section class="l-lower-mv p-lower-mv  js-mv-height">
    <div class="p-lower-mv__inner">
        <div class="p-lower-mv__header">
            <h1 class="p-lower-mv__title">SERVICE</h1>
            <p class="p-lower-mv__subtitle">事業内容</p>
        </div>
    </div>
</section>

<?php get_template_part('_include/breadcrumb'); ?>

<div class="p-lower-service l-lower-frame">
    <div class="p-lower-service__inner l-inner">

        <div class="p-lower-service__wrapper">
            <div class="p-lower-service__card">
                <div class="p-lower-service__card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/web-produce.jpg" alt="サービス画像1">
                </div>
                <div class="p-lower-service__card-body">
                    <h3 class="p-lower-service__card-title">Webサイト制作</h3>
                    <p class="p-lower-service__card-text">
                    新規サイトはもちろん、サイトリニューアルやランディングページ制作も承っております。<br>
                    サイトのゴールはお客様の夢や目的を実現することです。そのためにまずはしっかりとお話をうかがい、サイトに必要な要素を洗い出します。その後、ワイヤーフレーム（サイトのレイアウト）の作成、デザインの制作、コーディングと進みます。制作の過程でお客様とのお打ち合わせを数回実施させていただき、ご要望とご意見を反映しながらサイトを制作していきます。
                    </p>
                </div>
            </div>
            <div class="p-lower-service__card">
                <div class="p-lower-service__card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/coding.jpg" alt="サービス画像2">
                </div>
                <div class="p-lower-service__card-body">
                    <h3 class="p-lower-service__card-title">コーディング</h3>
                    <p class="p-lower-service__card-text">
                        CSS設計（予測・再利用・保守・拡張できる）に基づき制作いたします。<br>
                        <br>
                        以下、具体的な対応スキルです。<br>
                        ・HTML/CSS: デザインの意図を汲み取りつつ、正確な作業を心がけています。<br>
                        ・JavaScript: 単に動きを与える以上に、命を宿す気持ちで取り組んでいます。<br>
                        ・WordPress: オリジナルテーマにより、扱いやすさを重視し構築しています。<br>
                        ・Git: 保守管理のため、チーム開発はもとより個人開発でも利用しています。
                    </p>
                </div>
            </div>
            <div class="p-lower-service__card">
                <div class="p-lower-service__card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/design.jpg" alt="サービス画像3">
                </div>
                <div class="p-lower-service__card-body">
                    <h3 class="p-lower-service__card-title">Webデザイン</h3>
                    <p class="p-lower-service__card-text">
                    デザイン制作で重視するポイントは以下の通りです。<br>
                    １、常にトレンドを追いかけ、敏感でいること<br>
                    ２、実装一つ一つに明確な意図を持たせること<br>
                    ３、直感的な使いやすさを追求すること<br>
                    ４、アクセシビリティの向上に努めていくこと<br>
                    <br>
                    以上を、PhotoShop・Figma・Canvaなどのツールで表現していきます。
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>


<?php get_template_part('_include/contact-parts'); ?>

<?php get_footer(); ?>