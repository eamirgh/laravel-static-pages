<?php

namespace Eamirgh\LaravelStaticPages\Tests;

use Orchestra\Testbench\TestCase;
use Eamirgh\LaravelStaticPages\LaravelStaticPagesServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelStaticPagesServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
