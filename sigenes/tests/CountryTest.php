<?php


use Illuminate\Support\Facades\DB;

class CountryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountryCount()
    {
        $this->assertTrue(DB::table('countrys')->count() == 246);
    }
}
