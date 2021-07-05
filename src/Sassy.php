<?php

namespace Kogito\Sassy;

class Sassy
{
    /**
     * The Sassy library version
     *
     * @var string
     */
    const VERSION = '0.1.0';

    /**
     * The Recurly API version.
     *
     * @var string
     */
    const RECURLY_VERSION = 'v2021-02-25';

    /**
     * The custom currency formatter.
     *
     * @var callable
     */
    protected static $formatCurrencyUsing;

    /**
     * Indicates if Sassy migrations will be run.
     *
     * @var bool
     */
    public static $runsMigrations = true;

    /**
     * Indicates if Sassy commands will be registered.
     *
     * @var bool
     */
    public static $registersCommands = true;

    /**
     * Indicates if Sassy routes will be registered.
     *
     * @var bool
     */
    public static $registersRoutes = true;

    /**
     * Indicates if Sassy will mark past due subscriptions as inactive.
     *
     * @var bool
     */
    public static $deactivatePastDue = true;

    /**
     * The default customer model class name.
     *
     * @var string
     */
    public static $customerModel = 'App\\Models\\User';

    /**
     * Set the customer model class name.
     *
     * @param  string  $customerModel
     * @return void
     */
    public static function useCustomerModel($customerModel)
    {
        static::$customerModel = $customerModel;
    }
}
