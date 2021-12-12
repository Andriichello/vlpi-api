<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use RefreshDatabase;

    /**
     * Set up before tests.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }
}
