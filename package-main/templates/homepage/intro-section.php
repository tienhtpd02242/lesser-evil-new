<?php 
$home_options = get_fields();

$heading_intro = $home_options['heading_intro'];
$des_inf = $home_options['des_inf'];

$image_1 = $home_options['image_1_intro'];
$image_2 = $home_options['image_2_intro'];
$image_3 = $home_options['image_3_intro'];
$image_4 = $home_options['image_4_intro'];

if ( empty($home_options['show_or_hide_section_intro']) ) {
    return;
}
?>
<section class="intro-ss">
    <div class="container">
        <div class="wrap">
            <div class="left-intro">
                <?php 

                if (!empty($image_1)) { ?>
                    <div class="intro-img img-1 slow-move-clockwise">
                        <img src="<?php echo $image_1['url'];?>" alt="<?php echo $image_1['alt'];?>">
                        <img class="shadow" src="<?php echo get_stylesheet_directory_uri();?>/images/shadow-red.png" >
                    </div>
                <?php }

                if (!empty($image_2)) { ?>
                    <div class="intro-img img-2 slow-move-clockwise">
                        <img src="<?php echo $image_2['url'];?>" alt="<?php echo $image_2['alt'];?>">
                    </div>
                <?php }

                if (!empty($image_3)) { ?>
                    <div class="intro-img img-3 slow-move-anticlockwise">
                        <img src="<?php echo $image_3['url'];?>" alt="<?php echo $image_3['alt'];?>">
                    </div>
                <?php }

                if (!empty($image_4)) { ?>
                    <div class="intro-img img-4 slow-move-anticlockwise">
                        <img src="<?php echo $image_4['url'];?>" alt="<?php echo $image_4['alt'];?>">
                    </div>
                <?php }

                ?>
            </div>
            <div class="right-intro">
                <?php 

                if( !empty($heading_intro) ){ ?>
                    <h2><?php echo $heading_intro;?></h2>
                <?php }

                if( !empty($des_inf) ){ ?>
                    <div class="des-intro"><?php echo $des_inf;?></div>
                <?php }

                ?>
            </div>
        </div>
    </div>
</section>