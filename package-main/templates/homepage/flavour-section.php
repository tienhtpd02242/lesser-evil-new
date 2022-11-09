<?php
$home_options = get_fields();

$heading_intro = $home_options['heading_fla'];
$des_inf = $home_options['subheading_fla'];

$cta_text_fla = $home_options['cta_text_fla'];
$cta_url_fla = $home_options['cta_url_fla'];

$flavours_list = $home_options['flavours_list'];

if (empty($home_options['show_or_hide_section_fla'])) {
    return;
}
?>
<section class="flavour-ss">
    <div class="container">
        <div class="wrap">
            <?php

            if (!empty($heading_intro)) { ?>
                <h2 class="heading"><?php echo $heading_intro; ?></h2>
            <?php }

            if (!empty($des_inf)) { ?>
                <div class="des"><?php echo $des_inf; ?></div>
            <?php }

            if (!empty($cta_text_fla) && !empty($cta_url_fla)) { ?>
                <a class="btn-cm" href="<?php echo $cta_url_fla; ?>"><?php echo $cta_text_fla; ?></a>
            <?php }

            if (!empty($flavours_list)) { ?>
                <div class="wrap-fla">
                    <?php foreach ($flavours_list as $value) { ?>
                        <div class="item-fla">
                            <?php
                            if (!empty($value['image'])) {
                                echo "<div class='img'>";
                                echo "<img src='" . $value['image'] . "' class='can' />";
                                if (!empty($value['fruit'])) {
                                    echo "<img src='" . $value['fruit'] . "' class='fruit tada' />";
                                }
                                echo '</div>';
                            }

                            if (!empty($value['description'])) { ?>
                                <div class='des' style='color: <?php echo $value['color']; ?>;'><?php echo $value['description']; ?></div>
                            <?php }

                            ?>
                        </div>
                    <?php } ?>
                </div>
            <?php }

            ?>
        </div>
    </div>
</section>