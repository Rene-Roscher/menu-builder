<?php

namespace ReneRoscher\MenuBuilder\Tests;

use Orchestra\Testbench\TestCase;
use ReneRoscher\MenuBuilder\MenuBuilderServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MenuBuilderServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
