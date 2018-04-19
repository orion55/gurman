<div class="phone phone--one">
    <?php $phone1 = carbon_get_theme_option('crb_phone1');
    $phone_href = '+78123138272';
    $phone_text = '+7 (812) 313-82-72';
    if (!empty($phone1)): $phone_href = preg_replace("/[^0-9+]+/i", "", $phone1);
        $phone_text = $phone1;
    endif; ?>
    <a href="tel:<?php echo $phone_href ?>" class="phone-number"><?php echo $phone_text ?></a>
</div>
<div class="phone">
    <?php $phone2 = carbon_get_theme_option('crb_phone2');
    $phone_href = '+78121811716';
    $phone_text = '+7 (812) 181-17-16';
    if (!empty($phone2)): $phone_href = preg_replace("/[^0-9+]+/i", "", $phone2);
        $phone_text = $phone2;
    endif; ?>    
    <a href="tel:<?php echo $phone_href ?>" class="phone-number"><?php echo $phone_text ?></a>
</div>