<?php

function codigoCaptcha($t)
{ 
    $car = "1234567890abcdefghijklmnopqrstuvwxyz";
    for ($i = 0; $i < $t; $i++) {
        $chave .= $car{rand(0, strlen($car) - 1)};
    } 
    return $chave;
}

function criaimagem()
{
    global $chave; 

    $chave = codigoCaptcha(8);
    $img = ImageCreate(130,20);
    $fundo = ImageColorAllocate($img,0,0,0);
    $texto = ImageColorAllocate($img,255,255,255);
    ImageString($img,5,23,2,$chave,$texto); 
    ImageJpeg($img,"captcha.jpg");
}
criaimagem();
?>