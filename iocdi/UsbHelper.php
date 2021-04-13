<?php

interface UsbHelper
{
    public function isOld();

    public function writeCode(string $string);

    public function paintWithMouse(string $string);

    public function storageWithUDisk(string $string);
}