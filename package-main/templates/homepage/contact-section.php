<?php 
$home_opts = get_fields();

$heading_contact = $home_opts['heading_contact'];
$description_contact = $home_opts['description_contact'];
$label_contact = $home_opts['label_contact'];
$phone_number_contact = $home_opts['phone_number_contact'];
$email_contact = $home_opts['email_contact'];
$address_contact = $home_opts['address_contact'];

if ( empty($home_opts['show_or_hide_section_contact'] ) ) {
    return;
} 
?>

<section class="contact-ss">
    <div class="container">
        <div class="wrap-contact">
            <div class="left-contact">
                <?php

                if ( !empty($heading_contact) ) { ?>
                    <h2 class="heading"><?php echo $heading_contact;?></h2>
                <?php }

                if ( !empty($description_contact) ) { ?>
                    <div class="des"><?php echo $description_contact;?></div>
                <?php }

                if ( !empty($label_contact) ) { ?>
                    <div class="label-contact"><?php echo $label_contact;?></div>
                <?php }

                if ( !empty($phone_number_contact) ) { ?>
                    <a href="tel:<?php echo $phone_number_contact;?>" class="phone"><?php echo $phone_number_contact;?></a>
                <?php }

                if ( !empty($email_contact) ) { ?>
                    <a href="mailto:<?php echo $email_contact;?>" class="mail"><?php echo $email_contact;?></a>
                <?php }

                if ( !empty($address_contact) ) { ?>
                    <div class="address"><?php echo $address_contact;?></div>
                <?php }

                ?>
            </div>
            <div class="right-contact">
                <?php gravity_form( 1, false, false, false, '', true, 12 ); ?>
            </div>
        </div>
    </div>
</section>