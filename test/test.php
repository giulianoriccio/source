<?php
class TestClass
{
    public function publicTestMethod()
    {
    }

    protected function protectedTestMethod()
    {
    }

    private function privateTestMethod()
    {
        self::privateStaticVendorMethod();
        static::privateStaticTestMethod();
    }

    public static function publicStaticTestMethod()
    {
    }

    protected static function protectedStaticTestMethod()
    {
    }

    private static function privateStaticTestMethod()
    {
    }
}