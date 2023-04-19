<?php

namespace BilalMalik1996\TapPaymentGateway;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BilalMalik1996\TapPaymentGateway\Skeleton\SkeletonClass
 */
class TapPaymentGatewayFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tap-payment-gateway';
    }
}
