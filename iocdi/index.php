<?php

include_once 'Computer.php';

$usb = new USBAHub();
if ($usb->isOld()) {
    $usb = new USBCHub();
}
$computer = new Computer('神机 i999 + GXX9080Tx', $usb);
$computer->useKeyboard('cherry 键盘');
$computer->useMouse('赛睿鼠标');
$computer->useUDisk('金士顿');