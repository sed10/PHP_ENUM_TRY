<?php

/**
 * User: LITVAN
 * Date: 02/06/2015
 * Time: 23:27
 */

/**
 * Suggestion to make typed enum via class with private
 * constructor. There is weird thing that you should use
 * methods to define record in enum. But this allows implement
 * typification.
 * 
 * Class TestEnum
 */
class TestEnum
{
    private $value;
    private static $currentValue;

    public static function testEnumValue1()
    {
        return self::makeValue(0);
    }

    public static function testEnumValue2()
    {
        return self::makeValue(1);
    }

    public static function testEnumValue3()
    {
        return self::makeValue(2);
    }

    public static function testEnumValue4()
    {
        return self::makeValue(3);
    }

    private static function makeValue($value)
    {
        self::$currentValue = $value;
        return new self;
    }

    function __toString()
    {
        return (string)$this->value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    private function __construct()
    {
        $this->value = self::$currentValue;
    }


}

function testFunc1(TestEnum $testEnum)
{
    echo $testEnum;
}

testFunc1(TestEnum::testEnumValue4());  