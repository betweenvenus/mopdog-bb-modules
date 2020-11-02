.fl-node-<?php echo $id; ?> .mdbb-bucket {
<?php 
// Background image
switch ($settings->background_type):
    case "image":
        echo "background-image: url('{$settings->bucket_background_image_src}');";
        break;
    case "solid-color":
        echo "background-color: #{$settings->bucket_background_solid_color};";
        break;
    case "gradient":
        $gradient = FLBuilderColor::gradient($settings->bucket_background_gradient);
        echo "background-image: {$gradient};";
        break;
endswitch; ?>

padding: <?php echo "{$settings->bucket_padding_top}{$settings->bucket_padding_unit}
 {$settings->bucket_padding_right}{$settings->bucket_padding_unit}
 {$settings->bucket_padding_bottom}{$settings->bucket_padding_unit}
 {$settings->bucket_padding_left}{$settings->bucket_padding_unit}"; ?>;
}

.fl-node-<?php echo $id; ?> .mdbb-bucket .mdbb-bucket-heading {
    text-align: <?php echo $settings->heading_alignment; ?>;
}
