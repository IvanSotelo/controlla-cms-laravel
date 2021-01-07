<?php

namespace Controlla\Cms\Tests\Commands;

use Illuminate\Support\Facades\Artisan;
use Controlla\Cms\Tests\TestCase;

class CommandTest extends TestCase
{
    /**
     * Test a console command.
     *
     * @return void
     */
    public function testConsoleCommand()
    {
        $this->artisan('cms:secret')
            ->assertExitCode(0);
    }

}