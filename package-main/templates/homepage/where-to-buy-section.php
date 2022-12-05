<?php
$home_opts = get_fields();

$heading_gallery = $home_opts['heading_gallery'];
$des_gallery = $home_opts['description_gallery'];

if (empty($home_opts['show_or_hide_section_buy'])) {
    return;
}
?>

<section class="where-to-buy" id="where-to-buy">
    <div class="container">
        <?php if (!empty($heading_gallery)) : ?>
            <h2 class="heading"><?php echo $heading_gallery; ?></h2>
        <?php endif; ?>

        <?php if (!empty($des_gallery)) : ?>
            <div class="des"><?php echo $des_gallery; ?></div>
        <?php endif; ?>
    </div>
</section>