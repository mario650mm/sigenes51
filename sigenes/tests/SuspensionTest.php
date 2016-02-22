<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Contracts\Auth\Authenticatable;

class SuspensionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateSuspension()
    {
    	Auth::loginUsingId(1);
        $this->assertTrue(true);

    }
}
