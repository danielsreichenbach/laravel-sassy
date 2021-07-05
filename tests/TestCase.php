<?php

namespace Kogito\Sassy\Tests;

use Kogito\Sassy\Sassy;
use Kogito\Sassy\SassyServiceProvider;
use Kogito\Sassy\Tests\Fixtures\User;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getEnvironmentSetUp($app)
    {
        Sassy::useCustomerModel(User::class);
    }

    protected function getPackageProviders($app)
    {
        return [SassyServiceProvider::class];
    }
}
