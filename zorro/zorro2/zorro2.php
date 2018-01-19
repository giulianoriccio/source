<?php
class ZorroClass2 extends ZorroClass
{
    public function publicZorroMethod2()
    {
        $this->publicZorroMethod();
    }

    protected function protectedZorroMethod2()
    {
        $this->protectedZorroMethod();
    }

    private function privateZorroMethod2()
    {
        self::privateStaticZorroMethod2();
        static::privateStaticZorroMethod2();
    }

    public static function publicStaticZorroMethod2()
    {
        self::publicStaticZorroMethod();
        static::publicStaticZorroMethod();
    }

    protected static function protectedStaticZorroMethod2()
    {
        self::protectedStaticZorroMethod();
        static::protectedStaticZorroMethod();
    }

    private static function privateStaticZorroMethod2()
    {
    }
}