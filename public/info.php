<?php
// putenv('MAGICK_GS_PATH=C:/Program Files/gs\10.04.0/bin/gswin64c.exe');
// phpinfo();
$imagick = new Imagick('I:/cv.pdf');
$imagick->setResolution(300, 300);  // Set desired resolution
$imagick->readImage('example.pdf[0]');  // Read the first page of the PDF
$imagick->writeImage('output.png');
