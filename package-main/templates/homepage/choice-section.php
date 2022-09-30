<?php 
$home_options = get_fields();

$image_choice = $home_options['image_choice'];
$heading_choice = $home_options['heading_choice'];
$faqs_list = $home_options['faqs_list'];

if ( empty($home_options['show_or_hide_section_choice']) ) {
    return;
}
?>
<section class="choice-ss">
    
    <div class="container">
        <?php 
        if (!empty($image_choice)) { ?>
            <img class="img-big" src="<?php echo $image_choice;?>">
        <?php }
        ?>
        <div class="wrap-choice">
            <?php 
            if ( !empty($heading_choice) ) {
                echo "<h2 class='heading'>". $heading_choice ."</h2>";
            }

            if ( !empty($faqs_list) ) {
                echo '<div class="faq_list">';
                    foreach ($faqs_list as $key => $value) {
                        if ( !empty($value['question']) && !empty($value['answer']) ) {
                            ?>
                                <div class="item-faq <?php echo $key == 0 ? 'active' :'';?>">
                                    <div class="question">
                                        <?php echo $value['question'];?>
                                        <div class="toggle">
                                            <div class="minus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.129" height="3" viewBox="0 0 21.129 3">
                                                <path id="Path_832" data-name="Path 832" d="M7.5,18H25.629" transform="translate(-6 -16.5)" fill="none" stroke="#fff11e" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                                </svg>
                                            </div>
                                            <div class="plus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.129" height="21.129" viewBox="0 0 21.129 21.129">
                                                <g id="Icon_feather-plus" data-name="Icon feather-plus" transform="translate(-6 -6)">
                                                    <path id="Path_831" data-name="Path 831" d="M18,7.5V25.629" transform="translate(-1.436)" fill="none" stroke="#fff11e" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                                    <path id="Path_832" data-name="Path 832" d="M7.5,18H25.629" transform="translate(0 -1.436)" fill="none" stroke="#fff11e" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                                </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="answer" <?php echo $key == 0 ? 'style="display: block;"' :'';?>><?php echo $value['answer'];?></div>
                                </div>
                            <?php   
                        }
                    }
                echo "</div>";
            }
            ?>
        </div>
    </div>
</section>