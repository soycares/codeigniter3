<?php
// Cargar la estampa y la foto para aplicarle la marca de agua
$estampa = imagecreatefromgif('img/fichasjugadores/caretosoviedo/esteban.gif');
$im = imagecreatefromjpeg('img/campo_vacio.jpg');

$ancho = 849;
$alto = 565;

// Establecer los márgenes para la estampa y obtener el alto/ancho de la imagen de la estampa
$margen_dcho = 120;
$margen_inf = 10;
$sx = imagesx($estampa);
$sy = imagesy($estampa);

// Copiar la imagen de la estampa sobre nuestra foto usando los índices de márgen y el
// ancho de la foto para calcular la posición de la estampa.
//imagecopy($im, $estampa, imagesx($im) - $sx - $margen_dcho, imagesy($im) - $sy - $margen_inf, 0, 0, imagesx($estampa), imagesy($estampa));
imagecopy($im, $estampa, 100, (imagesy($im) / 2) - (imagesy($estampa) / 2), 0, 0, imagesx($estampa), imagesy($estampa));

// 4
imagecopy($im, $estampa, 190, (imagesy($im) / 4) - (imagesy($estampa) / 2), 0, 0, imagesx($estampa), imagesy($estampa));
imagecopy($im, $estampa, 190, ((imagesy($im) / 4) - (imagesy($estampa) / 2)) * 2, 0, 0, imagesx($estampa), imagesy($estampa));
imagecopy($im, $estampa, 190, ((imagesy($im) / 4) - (imagesy($estampa) / 2)) * 3, 0, 0, imagesx($estampa), imagesy($estampa));
imagecopy($im, $estampa, 190, ((imagesy($im) / 4) - (imagesy($estampa) / 2)) * 4, 0, 0, imagesx($estampa), imagesy($estampa));

// 4
imagecopy($im, $estampa, 290, (imagesy($im) / 4) - (imagesy($estampa) / 2), 0, 0, imagesx($estampa), imagesy($estampa));
imagecopy($im, $estampa, 290, ((imagesy($im) / 4) - (imagesy($estampa) / 2)) * 2, 0, 0, imagesx($estampa), imagesy($estampa));
imagecopy($im, $estampa, 290, ((imagesy($im) / 4) - (imagesy($estampa) / 2)) * 3, 0, 0, imagesx($estampa), imagesy($estampa));
imagecopy($im, $estampa, 290, ((imagesy($im) / 4) - (imagesy($estampa) / 2)) * 4, 0, 0, imagesx($estampa), imagesy($estampa));

// 2

imagecopy($im, $estampa, 390, ((imagesy($im) / 4) - (imagesy($estampa) / 2)) * 2, 0, 0, imagesx($estampa), imagesy($estampa));
imagecopy($im, $estampa, 390, ((imagesy($im) / 4) - (imagesy($estampa) / 2)) * 3, 0, 0, imagesx($estampa), imagesy($estampa));


// Imprimir y liberar memoria
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);

?>
