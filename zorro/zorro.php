<?php
class ZorroClass
{
    public function publicZorroMethod()
    {
    }

    protected function protectedZorroMethod()
    {
    }

    private function privateZorroMethod()
    {
        self::privateStaticZorroMethod();
        static::privateStaticZorroMethod();
    }

    public static function publicStaticZorroMethod()
    {
    }

    protected static function protectedStaticZorroMethod()
    {
    }

    private static function privateStaticZorroMethod()
    {
    }
}