<?php



function debug($tableau)
{
    echo '<pre style="height:400px;overflow-y: scroll;font-size: .7rem;padding: .6rem;font-family: Consolas, Monospace;background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}


function asset() {
    return get_template_directory_uri() . '/asset/' ;
}

function path($slug) {
    return esc_url(home_url($slug));
}



function getImageFeatured($id, $size = 'thumbnail', $alt = '')
{
    $image_url = get_the_post_thumbnail_url($id, $size);
    if(!empty($image_url)) {
        return '<img src="'.$image_url.'" alt="'.$alt.'"/>';
    }
    return '<img src="'.asset().'img/camion_V33.png" width="300px" height="200px" />';
}


function getImageAttachment($id_attachment,$size = 'thumbnail', $alt = '')
{
    $image = wp_get_attachment_image_src($id_attachment,$size);
    if(!empty($image)) {
        return '<img src="'.$image[0].'" alt="'.$alt.'"/>';
    }
    return '';
}
