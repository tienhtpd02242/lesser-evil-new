<?php 
$home_options = get_fields();

$cta_one = $home_options['cta_one'];
$cta_two = $home_options['cta_two'];

$image_1 = $home_options['image_1_hr'];
$image_2 = $home_options['image_2_hr'];
$image_3 = $home_options['image_3_hr'];
$image_4 = $home_options['image_4_hr'];
?>

<section class="hero-ss">
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
                    <div class="hero-img img-1 slow-move-clockwise">
                        <img src="<?php echo $image_1['url'];?>" alt="<?php echo $image_1['alt'];?>">
                    </div>
                <?php }

                if (!empty($image_2)) { ?>
                    <div class="hero-img img-2 slow-move-anticlockwise">
                        <img src="<?php echo $image_2['url'];?>" alt="<?php echo $image_2['alt'];?>">
                    </div>
                <?php }

                if (!empty($image_3)) { ?>
                    <div class="hero-img img-3 slow-move-clockwise">
                        <img src="<?php echo $image_3['url'];?>" alt="<?php echo $image_3['alt'];?>">
                    </div>
                <?php }

                if (!empty($image_4)) { ?>
                    <div class="hero-img img-4 slow-move-anticlockwise">
                        <img src="<?php echo $image_4['url'];?>" alt="<?php echo $image_4['alt'];?>">
                    </div>
                <?php }
                ?>

                <div class="wrap-circle">
                    <?php 
                    $count_icon = 9;
                    for ($i=0; $i < $count_icon ; $i++) { 
                        ?>
                            <img class="cir cir-<?php echo $i + 1;?>" src="<?php echo get_stylesheet_directory_uri();?>/images/circle.svg">
                        <?php
                    }
                    ?>
                    <!-- <img class="cir cir-1" src="<?php echo get_stylesheet_directory_uri();?>/images/circle.svg">
                    <img class="cir cir-2" src="<?php echo get_stylesheet_directory_uri();?>/images/circle.svg">
                    <img class="cir cir-3" src="<?php echo get_stylesheet_directory_uri();?>/images/circle.svg">
                    <img class="cir cir-4" src="<?php echo get_stylesheet_directory_uri();?>/images/circle.svg">
                    <img class="cir cir-5" src="<?php echo get_stylesheet_directory_uri();?>/images/circle.svg">
                    <img class="cir cir-6" src="<?php echo get_stylesheet_directory_uri();?>/images/circle.svg">
                    <img class="cir cir-7" src="<?php echo get_stylesheet_directory_uri();?>/images/circle.svg">
                    <img class="cir cir-8" src="<?php echo get_stylesheet_directory_uri();?>/images/circle.svg">
                    <img class="cir cir-9" src="<?php echo get_stylesheet_directory_uri();?>/images/circle.svg"> -->
                </div>
                    
            </div>
        </div>
    </div>
</section>