<?php 
$home_options = get_fields();

$image = $home_options['background_image_choice_2'];
$image_mb = $home_options['background_image_choice_2_mobile'];
$heading = $home_options['heading_choice_2'];

if ( empty($home_options['show_or_hide_section_choice2']) ) {
    return;
}
?>

<style type="text/css">
    @media only screen and (max-width: 767.98px){
        .page-template-homepage .choice-2-ss{
            background-image: url(<?php echo $image_mb ?>) !important;
        }
    }
</style>

<section class="choice-2-ss" <?php echo (!empty($image)) ? 'style="background-image: url('. $image .');"' : '';?> >
    <!-- <div class="wrap-circle">
        <?php 
            // $count_icon = 8;
            // for ($i=0; $i < $count_icon ; $i++) { 
            //     ?>
            //         <img class="cir cir-<?php echo $i + 1;?>" src="<?php echo get_stylesheet_directory_uri();?>/images/circle-white.svg">
            //     <?php
            // }
        ?>
    </div> -->
    
    <div class="container">
        <?php 
            if( !empty( $heading )){
                echo "<h2 class='heading'>". $heading ."</h2>";
            }
        ?>
    </div>
</section>