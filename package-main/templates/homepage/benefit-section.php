<?php 
$home_options = get_fields();

$heading_benefit = $home_options['heading_benefit'];
$description_benefit = $home_options['description_benefit'];

$cta_text_benefit = $home_options['cta_text_benefit'];
$cta_url_benefit = $home_options['cta_url_benefit'];

$image_1 = $home_options['image_1_bnf'];

if ( empty($home_options['show_or_hide_section_benefit']) ) {
    return;
}
?>

<section class="benefit-ss" <?php echo ($image_1) ? 'style="background-image: url('. $image_1['url'] .')";' : '';?>>
    <div class="container">
        <div class="wrap">
            
            <div class="content">
                <?php

                if ( !empty($heading_benefit)) { ?>
                    <h2 class="heading"><?php echo $heading_benefit;?></h2>
                <?php }

                if ( !empty($description_benefit)) { ?>
                    <div class="_des-mb"><?php echo $description_benefit;?></div>
                <?php }

                if ( !empty($cta_text_benefit) && !empty($cta_url_benefit) ) { ?>
                    <a class="btn-cm" href="<?php echo $cta_url_benefit;?>"><?php echo $cta_text_benefit;?></a>
                <?php }  
                ?>
            </div>
        </div>
    </div>
</section>
