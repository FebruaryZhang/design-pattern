<?php

include_once 'UsbHelper.php';

class USBCHub implements UsbHelper
{
    public function isOld() {
        return false;
    }

    public function writeCode($string) {
        echo "This is USB-C keyboard, $string<br>";
    }

    public function paintWithMouse($string) {
        echo "This is USB-C mouse, $string<br>";
    }

    public function storageWithUDisk($string) {
        echo "This is USB-C u-disk, $string<br>";
    }
}