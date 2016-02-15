<?php

use Illuminate\Support\Facades\DB;

class CityTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCityCount()
    {
        $this->assertTrue(DB::table('citys')->count() == 47576);
    }
}
