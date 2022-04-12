<?php

function cardInfo($url)
{
    $json = file_get_contents($url);
    $data = json_decode($json, true);

    foreach($data['card_images'] as $img)
    {                  
        echo '<div class="row"><div class="col-5"><center><img src="' . $img['image_url'] . '" class="carta"></center></div><div class="col-5" style="margin-bottom: 60px">';
        break;                 
    }

    if (isset($data['attribute']))
    {
        echo '<img src="assets/images/atributos/' . $data['attribute'] . '.png"' . 'id="atributo" />';
    }

    echo '<h2><span class="badge bg-dark">' . $data['name'] . '</span>' . '</h2>';

    if (isset($data['level']))
    {
        echo '<img src="assets/images/stars/stars_' . $data['level'] . '.png"' . 'id="star" />';
    }
    
    echo '<hr/><h5>[' . $data['race'] . '/' . $data['type'] . ']</h5>';
    echo '<p>' . $data['desc'] . '</p>';
    
    if (isset($data['atk']) && isset($data['def']))
    {
        echo '<h5><ol class="breadcrumb">ATK / ' . $data['atk'] . '&emsp;DEF / ' . $data['def'] . '</ol></h5></div></div>';
    }
    
}

function randomCard()
{
    $random = file_get_contents('http://localhost/yugioh-SearchCards/cardinfo.php');
    $item = json_decode($random);
    $image = $item->card_images;

    echo $item->name . '<br/>';
    echo $item->type . '<br/>';
    echo $item->desc . '<br/>';

    if (isset($item->atk))
    {
        echo 'ATK: ' . $item->atk . '<br/>';
    }
    if (isset($item->def))
    {
        echo 'DEF: ' . $item->def . '<br/>';
    }
    foreach ($image as $img)
    {
        echo '<img src="' . $img->image_url . '" width="250px">';
    }
}