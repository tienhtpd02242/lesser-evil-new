<?php 
$home_options = get_fields();

$first_info = $home_options['first_info'];
$second_info = $home_options['second_info'];

$pros_list = $home_options['pros_list'];

if ( empty($home_options['show_or_hide_info_section']) ) {
    return;
}
?>

<section class="info-section">
    <div class="container">
        <div class="wrap">
            <div class="info">
                <?php 
                if( !empty($first_info['content']) ){
                    echo $first_info['content'];
                }
                ?>
            </div>
            <div class="info col-2">
                <?php 
                if( !empty($second_info['content']) ){
                    echo $second_info['content'];
                }
                ?>
            </div>
            <div class="pros">
                <?php 
                if( !empty($pros_list) ){
                    foreach ($pros_list as $value) { ?>
                        <div class="pro">
                            <?php 
                            if ( !empty( $value['image'])) {
                                echo "<img src='". $value['image'] ."' />";
                            }

                            if ( !empty( $value['content'])) {
                                echo "<span>". $value['content'] ."</span>";
                            }
                            ?>
                        </div>
                    <?php }
                }
                ?>
            </div>
        </div>
    </div>
</section>