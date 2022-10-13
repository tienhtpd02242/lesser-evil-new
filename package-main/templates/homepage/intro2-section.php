<?php 
$home_options = get_fields();

$heading = $home_options['heading_intro2'];
$description = $home_options['description_intro2'];

$image = $home_options['image_intro2'];

if ( empty($home_options['show_or_hide_intro_2_section']) ) {
    return;
}
?>
<section class="intro2-ss">
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
        <div class="wrap">
            <div class="left-intro">
                <?php 
                if (!empty($heading)) {
                    echo '<h2 class="heading-intro">'. $heading .'</h2>';
                }

                if (!empty($description)) {
                    echo '<div class="des-intro">'. $description .'</div>';
                }
                ?>
            </div>
            <div class="right-intro">
                <?php 
                if (!empty($image)) {
                    echo '<img src="'. $image .'" />';
                }
                ?>
            </div>
        </div>
    </div>
</section>