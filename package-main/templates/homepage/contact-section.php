<?php 
$home_opts = get_fields();

$heading_contact = $home_opts['heading_contact'];
$description_contact = $home_opts['description_contact'];
$image = $home_opts['image_contact'];

if ( empty($home_opts['show_or_hide_section_contact'] ) ) {
    return;
} 
?>

<section class="contact-ss">
    <div class="wrap-circle">
        <?php 
        $count_icon = 20;
        for ($i=0; $i < $count_icon ; $i++) { 
            ?>
                <img class="cir cir-<?php echo $i + 1;?>" src="<?php echo get_stylesheet_directory_uri();?>/images/circle.svg">
            <?php
        }
        ?>
    </div>
    <div class="container">
        <div class="wrap-contact">
            <div class="left-contact">
                <?php

                if ( !empty($heading_contact) ) { ?>
                    <h2 class="heading"><?php echo $heading_contact;?></h2>
                <?php }

                if ( !empty($description_contact) ) { ?>
                    <div class="des"><?php echo $description_contact;?></div>
                <?php }

                if ( !empty($image) ) { ?>
                    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                <?php }

                ?>
            </div>
            <div class="right-contact">
                <?php gravity_form( 1, false, false, false, '', true, 12 ); ?>
            </div>
        </div>
    </div>
</section>