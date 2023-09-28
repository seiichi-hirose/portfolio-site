<div class="c-breadcrumb">
    <?php if (function_exists('bcn_display')) { ?>
        <div id="breadcrumb" class="c-breadcrumb__inner l-inner" vocab="http://schema.org/" typeof="BreadcrumbList">
            <?php bcn_display(); ?>
        </div>
    <?php } ?>
</div>