<?php
class VendorClass
{
    public function publicVendorMethod()
    {
    }

    protected function protectedVendorMethod()
    {
    }

    private function privateVendorMethod()
    {
        self::privateStaticVendorMethod();
        static::privateStaticVendorMethod();
    }

    public static function publicStaticVendorMethod()
    {
    }

    protected static function protectedStaticVendorMethod()
    {
    }

    private static function privateStaticVendorMethod()
    {
    }
}