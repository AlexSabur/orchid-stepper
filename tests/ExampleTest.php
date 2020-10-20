<?php

namespace AlexSabur\OrchidStepper\Tests;

use Orchestra\Testbench\TestCase;
use AlexSabur\OrchidStepper\OrchidStepperServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [OrchidStepperServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
