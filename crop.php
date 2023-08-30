<?php
  $image = new Imagick();
  $image->readImage('./sample.jpg');
  $image->cropImage(100, 100, 0, 0);
  $image->writeImage('./output.jpg');
  $image->clear();
  $image->destroy();
