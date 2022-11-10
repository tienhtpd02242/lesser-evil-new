<?php 
$home_options = get_fields();

$cta_one = $home_options['cta_one'];

$image_1 = $home_options['image_1_hr'];
?>

<section class="hero-ss">
    <div class="wrap-circle">
        <?php 
        $count_icon = 15;
        for ($i=0; $i < $count_icon ; $i++) { 
            ?>
                <img class="cir cir-<?php echo $i + 1;?>" src="<?php echo get_stylesheet_directory_uri();?>/images/circle.svg">
            <?php
        }
        ?>
    </div>
    <div class="container">
        <div class="wrap">

            <div class="left-hero">
                <?php

                if ( !empty($home_options['heading_hr'])) { ?>
                    <h1><?php echo $home_options['heading_hr'];?></h1>
                <?php }

                if ( !empty($home_options['subheading_hr'])) { ?>
                    <p><?php echo $home_options['subheading_hr'];?></p>
                <?php }

                if ( !empty($cta_one['url']) && !empty($cta_one['text']) ) { ?>
                    <a class="btn-cm" href="<?php echo $cta_one['url'] ?>"><?php echo $cta_one['text'];?></a>
                <?php }

                if ( !empty($cta_two['url']) && !empty($cta_two['text']) ) { ?>
                    <a class="btn-cm second" href="<?php echo $cta_two['url'] ?>"><?php echo $cta_two['text'];?></a>
                <?php }

                ?>
            </div>

            <div class="right-hero">
                <?php 
                if (!empty($image_1)) { ?>
                    <div class="hero-img img-1">
                        <img src="<?php echo $image_1['url'];?>" alt="<?php echo $image_1['alt'];?>">
                    </div>
                <?php }
                ?>
                    
            </div>
        </div>
    </div>
</section>