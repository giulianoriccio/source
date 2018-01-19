<?php
class TestClass2 extends TestClass
{
    public function publicTestMethod2()
    {
        $this->publicTestMethod();
    }

    protected function protectedTestMethod2()
    {
        $this->protectedTestMethod();
    }

    private function privateTestMethod2()
    {
        self::privateStaticTestMethod2();
        static::privateStaticTestMethod2();
    }

    public static function publicStaticTestMethod2()
    {
        self::publicStaticTestMethod();
        static::publicStaticTestMethod();
    }

    protected static function protectedStaticTestMethod2()
    {
        self::protectedStaticTestMethod();
        static::protectedStaticTestMethod();
    }

    private static function privateStaticTestMethod2()
    {
    }
}