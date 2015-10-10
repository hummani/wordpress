<?php
global $porto_settings;

$breadcrumbs = $porto_settings['show-breadcrumbs'] ? porto_get_meta_value('breadcrumbs', true) : false;
$page_title = $porto_settings['show-pagetitle'] ? porto_get_meta_value('page_title', true) : false;

if (( is_front_page() && is_home()) || is_front_page() ) {
    $breadcrumbs = false;
    $page_title = false;
}

?>
<?php if ($breadcrumbs || $page_title) : ?>
    <?php if (porto_get_wrapper_type() != 'boxed' && $porto_settings['breadcrumbs-wrapper'] == 'boxed') : ?>
        <div id="breadcrumbs-boxed">
    <?php endif; ?>
    <section class="page-top<?php if ($porto_settings['breadcrumbs-wrapper'] == 'wide') echo ' wide' ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if ($breadcrumbs) : ?>
                        <div class="breadcrumbs-wrap">
                            <?php echo porto_breadcrumbs(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="<?php if (!($title = porto_page_title()) || !$page_title) : ?> hide<?php endif; ?>">
                        <h1 class="page-title"><?php echo $title; ?></h1>
                    </div>
                    <?php
                    if (function_exists('porto_woocommerce_product_nav')) {
                        porto_woocommerce_product_nav();
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php if (porto_get_wrapper_type() != 'boxed' && $porto_settings['breadcrumbs-wrapper'] == 'boxed') : ?>
        </div>
    <?php endif; ?>
<?php endif; ?>