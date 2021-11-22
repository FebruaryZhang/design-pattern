<?php

abstract class Motorcycle
{
    //发动方法
    public abstract function engine();

    //车身方法
    public abstract function body();

    //车轮方法
    public abstract function wheel();
}

/**
 * 踏板摩托
 */
class MotorcycleScooter extends Motorcycle
{
    public function engine() {
        return "MotorcycleScooter-engine";
        // return "this is Product".$this->product_name;
    }

    public function body() {
        return "MotorcycleScooter-body";

    }

    public function wheel() {
        return "MotorcycleScooter-wheel";

    }
}

/**
 * 跨骑摩托
 */
class MotorcycleStraddle extends Motorcycle
{
    public function engine() {
        return "MotorcycleStraddle-engine";
    }

    public function body() {
        return "MotorcycleStraddle-body";
    }

    public function wheel() {
        return "MotorcycleStraddle-wheel";
    }
}

//摩托工厂类
class MotorcycleFactory
{
    //创建保存示例的静态成员变量
    private static $obj;

    //创建产品
    public static function createMotorcycle(string $type) {
        switch ($type) {
            case 'Scooter':
                self::$obj = new MotorcycleScooter();
                break;
            case 'Straddle':
                self::$obj = new MotorcycleStraddle();
                break;
            default:
                throw new Exception("不能生产的摩托车类型");
                break;
        }
        //最后返回这个实例
        return self::$obj;
    }
}

//最后我们使用工厂模式
//跨骑车
$obj = MotorcycleFactory::createMotorcycle('Straddle');
$motoCycleStraddle = [];
$motoCycleStraddle["engine"] = $obj->engine();
$motoCycleStraddle["body"] = $obj->body();
$motoCycleStraddle["wheel"] = $obj->wheel();
//踏板车
$obj = MotorcycleFactory::createMotorcycle('Scooter');
$motoCycleScooter = [];
$motoCycleScooter["engine"] = $obj->engine();
$motoCycleScooter["body"] = $obj->body();
$motoCycleScooter["wheel"] = $obj->wheel();

echo "踏板摩托车<br>";
var_dump($motoCycleScooter);
echo "<br>";
echo "跨骑摩托车<br>";
var_dump($motoCycleStraddle);