<?php
include "ImagesGaussianBlur.php";

$image_blur = new ImagesGaussianBlur();
$FILE_PATH = './images/gaussian';
$ArrImgData = [
    './images/1.jpg',
    './images/2.png',
    './images/3.jpg',
    './images/4.jpg',
];
for ($i=0;$i<count($ArrImgData);$i++){
    $FILE_NAME = time().$i.'.png';
    $ImgBlur[] = $image_blur->gaussian_blur($ArrImgData[$i],$FILE_PATH,$FILE_NAME,5);
}


echo "<pre>";
print_r($ImgBlur);
echo "</pre>";
EXIT;
