<?php

namespace AlexSabur\OrchidStepper;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlexSabur\OrchidStepper\Skeleton\SkeletonClass
 */
class OrchidStepperFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'orchid-stepper';
    }
}
