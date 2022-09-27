<?php 
$home_options = get_fields();

$heading_intro = $home_options['heading_fla'];
$des_inf = $home_options['subheading_fla'];

$cta_text_fla = $home_options['cta_text_fla'];
$cta_url_fla = $home_options['cta_url_fla'];

$flavours_list = $home_options['flavours_list'];

if ( empty($home_options['show_or_hide_section_fla']) ) {
    return;
}
?>
<section class="flavour-ss">
    <div class="container">
        <div class="wrap">
            <?php 

            if( !empty($heading_intro) ){ ?>
                <h2 class="heading"><?php echo $heading_intro;?></h2>
            <?php }

            if( !empty($des_inf) ){ ?>
                <div class="des"><?php echo $des_inf;?></div>
            <?php }

            if( !empty($cta_text_fla) && !empty($cta_url_fla) ){ ?>
                <a class="btn-cm" href="<?php echo $cta_url_fla;?>"><?php echo $cta_text_fla;?></a>
            <?php }

            if ( !empty($flavours_list)) { ?>
                <div class="wrap-fla">
                    <?php 
                    foreach ($flavours_list as $value) { ?>
                        <div class="item-fla">
                            <div class="halo">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/halo-white.png">
                            </div>
                            <?php 
                                if (!empty($value['image_two'])) { ?>
                                    <div class="can">
                                        <img class="img-two slow-move-clockwise" src= "<?php echo $value['image_two'];?>">
                                    </div>
                                <?php }
                            ?>
                            <div class="content">
                                <?php
                                    if ( !empty( $value['description'])) { ?>
                                        <div class="des"><?php echo $value['description'];?></div>
                                    <?php }
                                ?>
                            </div>

                            <div class="wrap">
                                <?php
                                    if (!empty($value['image'])) { ?>
                                        <img src="<?php echo $value['image']['url'];?>" alt="<?php echo $value['image']['alt'];?>">
                                    <?php }

                                    if (!empty($value['headline'])) { ?>
                                        <h3><?php echo $value['headline'];?></h3>
                                    <?php }
                                ?>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            <?php }

            ?>
        </div>
    </div>
</section>