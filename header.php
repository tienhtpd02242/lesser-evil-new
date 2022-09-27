<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Genesis Block Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 
$global_opts = get_fields('option');
$list_social_glb = $global_opts['list_social_glb'];
?>

<header id="masthead" class="site-header">
	<div class="top-navigation">

		<div class="container">
            <div class="wrap">
                <div class="__logo">
                    <?php the_custom_logo();?>
                </div>
                <div class="__right">

                    <?php if ( !empty($global_opts['cta_text_header']) && !empty($global_opts['cta_url_header']) ) { ?>
                        <a class="btn-cm _cta" href="<?php echo $global_opts['cta_url_header'];?>"><?php echo $global_opts['cta_text_header'];?></a>
                    <?php } ?>

                    <?php 
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
		</div><!-- .container -->
	</div><!-- .top-navigation -->

</header>

<div id="page" class="hfeed site">
	<div id="content" class="site-content">
