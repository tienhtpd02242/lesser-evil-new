<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Genesis Block Theme
 */

?>

	</div><!-- #content -->
</div><!-- #page .container -->

<?php 
$global_opts = get_fields('option');

$heading = $global_opts['heading_ft'];
$address = $global_opts['address'];

$phone = $global_opts['phone'];
$email = $global_opts['email'];

$logo_footer = $global_opts['logo_footer'];
$bottom_heading = $global_opts['bottom_heading'];
$menu_items = $global_opts['menu_items'];
$copyright = $global_opts['copyright'];

$list_social_glb = $global_opts['list_social_glb'];
?>

<footer class="main-footer">
    <div class="top-ft">
        <div class="container">
            <div class="wrap">
                <?php if (!empty($heading)) {
                    echo '<div class="heading">'. $heading .'</div>';
                } ?>

                <div class="right-top">
                    <?php if (!empty($address)) {
                        echo '<div class="address">'. $address .'</div>';
                    } ?>
                    <div class="_contact">
                        <?php if (!empty($phone)) {
                            echo '<a class="tel" href="tel:'. $phone .'">'. $phone .'</a>';
                        } ?>
                        <?php if (!empty($email)) {
                            echo '<a class="mail" href="mailto: '. $email .'">'. $email .'</a>';
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-ft">
        <div class="container">
            <div class="wrap">
                <div class="logo-ft">
                    <?php

                    if ( !empty($logo_footer) ) { ?>
                        <a href="<?php echo home_url();?>">
                            <img src="<?php echo $logo_footer['url'];?>" alt="<?php echo $logo_footer['alt'];?>">
                        </a>
                    <?php }

                    echo "<div class='content-bt'>";
                        if ( !empty($bottom_heading) ) { ?>
                            <div class="bottom-heading"><?php echo $bottom_heading;?></div>
                        <?php }

                        if ( !empty($copyright) ) { ?>
                            <div class="copyright"><?php echo $copyright;?></div>
                        <?php }
                    echo "</div>";



                    ?>
                </div>

                <div class="social">
                    <?php 
                        if( !empty($menu_items) ){
                         echo "<div class='_menu'>";
                            foreach ($menu_items as $value) { ?>
                                <a href="<?php echo $value['url'];?>"><?php echo $value['title'];?></a>
                            <?php }
                         echo "</div>";
                        }

                        if ( !empty($list_social_glb)) {
                            echo "<ul>";
                            foreach ($list_social_glb as $value) { ?>
                                <li>
                                    <a href="<?php echo $value['url'];?>" target="_blank" rel="nofollow"><?php echo $value['icon'];?></a>
                                </li>
                            <?php }
                            echo "</ul>";
                        }
                    ?>
                </div>

            </div>
        </div>
    </div>
	
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
