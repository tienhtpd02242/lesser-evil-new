<?php 
$home_options = get_fields();

$heading_intro = $home_options['heading_intro'];
$des_inf = $home_options['des_inf'];

$image = $home_options['image_1_intro'];

if ( empty($home_options['show_or_hide_section_intro']) ) {
    return;
}
?>
<section class="intro-ss" <?php echo !empty($image) ? 'style="background-image: url('. $image["url"] .');"' : '';?>>
    <div class="wrap-circle">
        <?php 
        $count_icon = 10;
        for ($i=0; $i < $count_icon ; $i++) { 
            ?>
                <img class="cir cir-<?php echo $i + 1;?>" src="<?php echo get_stylesheet_directory_uri();?>/images/circle-gray.svg">
            <?php
        }
        ?>
    </div>
    
    <div class="container">
        <div class="wrap">
            <?php 
                if( !empty($image) ){ ?>
                    <img class="img-mb" src="<?php echo $image['url'];?>">
                <?php }
            ?>

            <div class="left-intro">
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