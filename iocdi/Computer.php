<?php

include_once './USBAHub.php';
include_once './USBCHub.php';

class Computer
{
    private $model;
    private $usb;
    private $powerOn = true;

    public function __construct($model, UsbHelper $usb) {
        $this->model = $model;
        $this->usb = $usb;
    }

    public function useKeyBoard($string = '默认内容') {
        // 使用键盘写代码
        $this->usb->writeCode($string);
    }

    public function useMouse($string = '默认鼠标') {
        // 使用鼠标画图
        $this->usb->paintWithMouse($string);
    }

    public function useUDisk($string = '默认U盘') {
        // 使用 U 盘存储
        $this->usb->storageWithUDisk($string);
    }
}
