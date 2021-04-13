<?php

include_once 'UsbHelper.php';

class USBAHub implements UsbHelper
{
    public function isOld() {
        return true;
    }
    
    public function writeCode(string $string) {
        echo "This is USB-A keyboard, $string<br>";
    }

    public function paintWithMouse(string $string) {
        echo "This is USB-A mouse, $string<br>";
    }

    public function storageWithUDisk(string $string) {
        echo "This is USB-A u-disk, $string<br>";
    }
}