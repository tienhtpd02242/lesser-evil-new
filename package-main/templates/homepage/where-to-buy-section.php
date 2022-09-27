<?php 
$home_opts = get_fields();

$heading_gallery = $home_opts['heading_gallery'];

if ( empty($home_opts['show_or_hide_section_buy'] ) && empty( $home_opts['gallery']) ) {
    return;
} 
?>

<section class="where-to-buy">
    <div class="container">
        <?php if( !empty($heading_gallery)) : ?>
            <h2 class="heading"><?php echo $heading_gallery;?></h2>
        <?php endif; ?>
        
        <div class="gallery">
            <?php
            foreach ($home_opts['gallery'] as $value) { ?>
                <div class="item-gallery">
                    <img src="<?php echo $value;?>">
                </div>
            <?php }
            ?>
        </div>
    </div>
</section>