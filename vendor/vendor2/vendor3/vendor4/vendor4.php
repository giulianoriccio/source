<?php
class VendorClass4 extends VendorClass3
{
    public function publicVendorMethod4()
    {
        $this->publicVendorMethod3();
    }

    protected function protectedVendorMethod4()
    {
        $this->protectedVendorMethod3();
    }

    private function privateVendorMethod4()
    {
        $this->privateVendorMethod3();
    }

    public static function publicStaticVendorMethod4()
    {
        self::publicStaticVendorMethod3();
        static::publicStaticVendorMethod3();
    }

    protected static function protectedStaticVendorMethod4()
    {
        self::protectedStaticVendorMethod3();
        static::protectedStaticVendorMethod3();
    }

    private static function privateStaticVendorMethod4()
    {
        self::privateStaticVendorMethod3();
        static::privateStaticVendorMethod3();
    }
}