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
?>

<footer class="main-footer">
    <div class="top-ft">
        <div class="container">
            <div class="wrap">
                <?php if ($heading) {
                    echo '<div class="heading">'. $heading .'</div>';
                } ?>

                <div class="right-top">
                    <?php if ($address) {
                        echo '<div class="address">'. $address .'</div>';
                    } ?>
                    <div class="_contact">
                        <?php if ($phone) {
                            echo '<a class="tel" href="tel:'. $phone .'">'. $phone .'</a>';
                        } ?>
                        <?php if ($email) {
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
                    ?>
                    
                </div>

                

            </div>
        </div>
    </div>
	
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
