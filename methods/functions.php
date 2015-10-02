<?php
function resizeImage($newWidth, $targetFile, $originalFile) {

    $info = getimagesize($originalFile);
    $mime = $info['mime'];

    switch ($mime) {
        case 'image/jpeg':
            $image_create_func = 'imagecreatefromjpeg';
            $image_save_func = 'imagejpeg';
            $new_image_ext = 'jpg';
            break;

        case 'image/png':
            $image_create_func = 'imagecreatefrompng';
            $image_save_func = 'imagepng';
            $new_image_ext = 'png';
            break;

        case 'image/gif':
            $image_create_func = 'imagecreatefromgif';
            $image_save_func = 'imagegif';
            $new_image_ext = 'gif';
            break;

        default:
            throw Exception('Unknown image type.');
    }

    $img = $image_create_func($originalFile);
    list($width, $height) = getimagesize($originalFile);

    $newHeight = ($height / $width) * $newWidth;
    if($newWidth == 1000) {
        if ($newHeight < 750) {
            $newHeight = 750;
            $newWidth = ($width / $height) * $newHeight;
        }
        $tmp = imagecreatetruecolor(1000, 750);
    }elseif($newWidth == 150)
    {
        if ($newHeight < 113) {
            $newHeight = 113;
            $newWidth = ($width / $height) * $newHeight;
        }
        $tmp = imagecreatetruecolor(150, 113);
    }
$tmp = imagecreatetruecolor($newWidth, $newHeight);
    imagecopyresampled($tmp, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

    if (file_exists($targetFile)) {
        unlink($targetFile);
    }
    $image_save_func($tmp, "$targetFile.$new_image_ext");
}

function howManyFilesInFolder($directory, $sufix)
{
    if (glob($directory . "*" . $sufix) != false)
        $filecount = count(glob($directory . "*" . $sufix));
    else
        $filecount = 0;
    return $filecount;
}