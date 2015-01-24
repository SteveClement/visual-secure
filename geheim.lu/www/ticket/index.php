<?php

// Path to our ttf font file
$font_file = './Helvetica.ttc';
$font_file_bold = './Helvetica_Bold.ttf';

$head_time = date("G:i");
$text_date_head = date("M j, Y G:i");

$hour_stamp = "06";

$ticket_count = "000829806";

$hash = $hour_stamp."A".$ticket_count;
$expiry = date("d-m H:i",time()+7200);
$sent = date("H:i");

// Six lines
$one = $hash;
$two = "Expire";
$three = $expiry;
$four = "1.50 euro (A)";
$five = "Billet courte dur&eacute;e";
$five = "Billet courte durée";
$six = "Emis $sent";


function LoadPNG($imgname)
{
    /* Attempt to open */
    $im = @imagecreatefrompng($imgname);

    /* See if it failed */
    if(!$im)
    {
        /* Create a blank image */
        $im  = imagecreatetruecolor(150, 30);
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc  = imagecolorallocate($im, 0, 0, 0);

        imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

        /* Output an error message */
        imagestring($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
    }

    return $im;
}

header('Content-Type: image/png');

$img = LoadPNG('photo.png');


$grey = imagecolorallocate($img, 128, 128, 128);
$black = imagecolorallocate($img, 0, 0, 0);

$main_pos_x = 305;
$main_pos_x_offset = 40;
$main_pos_y = 48;

//imagefttext($img, 21, 0, 225, 30, $black, $font_file_bold, $head_time);
imagefttext($img, 20, 0, 200, 250, $grey, $font_file_bold, $text_date_head);

imagefttext($img, 23, 0, $main_pos_y, $main_pos_x, $black, $font_file, $one);
imagefttext($img, 23, 0, $main_pos_y, $main_pos_x+$main_pos_x_offset, $black, $font_file, $two);
imagefttext($img, 23, 0, $main_pos_y, $main_pos_x+($main_pos_x_offset*2), $black, $font_file, $three);
imagefttext($img, 23, 0, $main_pos_y, $main_pos_x+($main_pos_x_offset*3), $black, $font_file, $four);
imagefttext($img, 23, 0, $main_pos_y, $main_pos_x+($main_pos_x_offset*4), $black, $font_file, $five);
imagefttext($img, 23, 0, $main_pos_y, $main_pos_x+($main_pos_x_offset*6), $black, $font_file, $six);

imagepng($img);
imagedestroy($img);
?>
