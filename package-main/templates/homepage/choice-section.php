<?php 
$home_options = get_fields();

$list_choice = $home_options['list_choice'];
$marquee_text = $home_options['marquee_text'];

if ( empty($home_options['show_or_hide_section_choice']) && empty($list_choice) ) {
    return;
}
?>
<section class="choice-ss">
    <div class="container">
        <div class="wrap-choice">
            <?php
            foreach ($list_choice as $key => $value) { 
                $image = $value['image'];
                $content = $value['content'];
                ?>
                <div class="item-choice">
                    <div class="_gr-img">
                        <img src="<?php echo $image['image_1']['url'];?>" alt="<?php echo $image['image_1']['alt'];?>" class="main-img">
                        <div class="can">
                            <img src="<?php echo $image['image_2']['url'];?>" alt="<?php echo $image['image_2']['alt'];?>" class="main-img">
                            <?php 
                            if( $key == 0 ){
                                ?><img src="<?php echo get_stylesheet_directory_uri();?>/images/shadow-choice.png" class="shadow-img"><?php
                            }else{
                                ?><img src="<?php echo get_stylesheet_directory_uri();?>/images/top-choice.png" class="top-choice"><?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="content">
                        <img src="<?php echo $content['image']['url'];?>" alt="<?php echo $content['image']['alt'];?>">
                        <div class="des">
                            <?php echo $content['description'];?>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</section>

<?php if( !empty( $marquee_text)) : ?>
    <div class="marquee-text">
        <marquee scrollamount="10"><?php echo $marquee_text;?></marquee>
    </div>
<?php endif; ?>
