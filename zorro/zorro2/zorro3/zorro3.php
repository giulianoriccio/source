<?php
class ZorroClass3 extends ZorroClass2
{
    public function publicZorroMethod3()
    {
        $this->publicZorroMethod2();
    }

    protected function protectedZorroMethod3()
    {
        $this->protectedZorroMethod2();
    }

    private function privateZorroMethod3()
    {
        self::privateStaticZorroMethod3();
        static::privateStaticZorroMethod3();
    }

    public static function publicStaticZorroMethod3()
    {
        self::publicStaticZorroMethod2();
        static::publicStaticZorroMethod2();
    }

    protected static function protectedStaticZorroMethod3()
    {
        self::protectedStaticZorroMethod2();
        static::protectedStaticZorroMethod2();
    }

    private static function privateStaticZorroMethod3()
    {
    }
}