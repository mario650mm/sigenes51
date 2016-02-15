<?php

use Illuminate\Support\Facades\DB;

class StateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStateCount()
    {
        $this->assertTrue(DB::table('states')->count() == 4119);
    }
}
