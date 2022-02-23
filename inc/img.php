<?php


add_image_size('imgcollaborateur',214, 115, true);






function remove_default_img_sizes($sizes)
{
    unset($sizes['medium']);
    unset($sizes['large']);
    return $sizes;
}

add_filter('intermediate_image_sizes_advanced' ,'remove_default_img_sizes', 10, 1);
