<?php
class TestClass3 extends TestClass2
{
    public function publicTestMethod3()
    {
        $this->publicTestMethod2();
    }

    protected function protectedTestMethod3()
    {
        $this->protectedTestMethod2();
    }

    private function privateTestMethod3()
    {
        self::privateStaticTestMethod3();
        static::privateStaticTestMethod3();
    }

    public static function publicStaticTestMethod3()
    {
        self::publicStaticTestMethod2();
        static::publicStaticTestMethod2();
    }

    protected static function protectedStaticTestMethod3()
    {
        self::protectedStaticTestMethod2();
        static::protectedStaticTestMethod2();
    }

    private static function privateStaticTestMethod3()
    {
    }
}