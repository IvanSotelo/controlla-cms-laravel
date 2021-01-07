<?php

namespace Controlla\Cms;

use Controlla\Cms\Console\GenerateSecretCommand;
use Illuminate\Support\ServiceProvider;

class ControllaCmsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerCommands();
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->configure();
    }

    /**
     * Setup the configuration for Controlla Cms.
     *
     * @return void
     */
    protected function configure()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/controlla-cms.php', 'controlla-cms'
        );
    }

    /**
     * Register the package commands.
     *
     * @return void
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateSecretCommand::class,
            ]);
        }
    }
}