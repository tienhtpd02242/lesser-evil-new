<?php 
$home_options = get_fields();

$heading_benefit = $home_options['heading_benefit'];
$description_benefit = $home_options['description_benefit'];

$cta_text_benefit = $home_options['cta_text_benefit'];
$cta_url_benefit = $home_options['cta_url_benefit'];

$image_1 = $home_options['image_1_bnf'];
$image_2 = $home_options['image_2_bnf'];
$image_3 = $home_options['image_3_bnf'];
$image_4 = $home_options['image_4_bnf'];

if ( empty($home_options['show_or_hide_section_benefit']) ) {
    return;
}
?>

<section class="benefit-ss">
    <div class="container">
        <div class="wrap">

            <img class="halo-big" src="<?php echo get_stylesheet_directory_uri();?>/images/halo-big.png">

            <div class="wrap-can">
                <?php 
                if (!empty($image_1)) { ?>
                    <div class="benefit-img img-1 slow-move-anticlockwise">
                        <img src="<?php echo $image_1['url'];?>" alt="<?php echo $image_1['alt'];?>">
                    </div>
                <?php }

                if (!empty($image_2)) { ?>
                    <div class="benefit-img img-2 slow-move-clockwise">
                        <img src="<?php echo $image_2['url'];?>" alt="<?php echo $image_2['alt'];?>">
                    </div>
                <?php }

                if (!empty($image_3)) { ?>
                    <div class="benefit-img img-3 slow-move-anticlockwise">
                        <img src="<?php echo $image_3['url'];?>" alt="<?php echo $image_3['alt'];?>">
                    </div>
                <?php }

                if (!empty($image_4)) { ?>
                    <div class="benefit-img img-4 slow-move-clockwise">
                        <img src="<?php echo $image_4['url'];?>" alt="<?php echo $image_4['alt'];?>">
                    </div>
                <?php }
                ?>
            </div>
            
            <div class="content">
                <?php 
                if ( !empty($description_benefit)) { ?>
                    <div class="rotate-div">
                        <div class="_des" id="rotateDes"><?php echo $description_benefit;?></div>
                    </div>
                <?php }

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

            <img class="halo-mini" src="<?php echo get_stylesheet_directory_uri();?>/images/halo-mini.png">
        </div>
    </div>
</section>
