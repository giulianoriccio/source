<?php
class VendorClass2 extends VendorClass
{
    public function publicVendorMethod2()
    {
        $this->publicVendorMethod();
    }

    protected function protectedVendorMethod2()
    {
        $this->protectedVendorMethod();
    }

    private function privateVendorMethod2()
    {
        self::privateStaticVendorMethod2();
        static::privateStaticVendorMethod2();
    }

    public static function publicStaticVendorMethod2()
    {
        self::publicStaticVendorMethod();
        static::publicStaticVendorMethod();
    }

    protected static function protectedStaticVendorMethod2()
    {
        self::protectedStaticVendorMethod();
        static::protectedStaticVendorMethod();
    }

    private static function privateStaticVendorMethod2()
    {
    }
}