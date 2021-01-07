<?php

namespace Controlla\Cms\Tests;

use Controlla\Cms\ControllaCmsServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [ControllaCmsServiceProvider::class];
    }
}