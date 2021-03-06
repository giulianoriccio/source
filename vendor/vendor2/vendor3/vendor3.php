<?php
class VendorClass3 extends VendorClass2
{
    public function publicVendorMethod3()
    {
        $this->publicVendorMethod2();
    }

    protected function protectedVendorMethod3()
    {
        $this->protectedVendorMethod2();
    }

    private function privateVendorMethod3()
    {
        self::privateStaticVendorMethod3();
        static::privateStaticVendorMethod3();
    }

    public static function publicStaticVendorMethod3()
    {
        self::publicStaticVendorMethod2();
        static::publicStaticVendorMethod2();
    }

    protected static function protectedStaticVendorMethod3()
    {
        self::protectedStaticVendorMethod2();
        static::protectedStaticVendorMethod2();
    }

    private static function privateStaticVendorMethod3()
    {
    }
}