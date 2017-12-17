<?php

require_once('./vendor/autoload.php');

use Endroid\QrCode\QrCode;

$qrCode = new QrCode('corn-hub.blogspot.com/');

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();