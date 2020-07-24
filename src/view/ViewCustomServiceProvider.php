<?php

namespace Vht\View;
use Illuminate\View\ViewServiceProvider;

use Vht\View\CustomBladeCompiler as CustomBladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Engines\FileEngine;
use Illuminate\View\Engines\PhpEngine;
use Illuminate\View\FileViewFinder;
use Illuminate\View\Factory;
class ViewCustomServiceProvider extends ViewServiceProvider
{
  
 /**
     * Register the Blade compiler implementation.
     *
     * @return void
     */
    public function registerCustomViewCompiler()
    {
        $this->app->singleton('blade.compiler', function () {
            return new CustomBladeCompiler(
                $this->app['files'], $this->app['config']['view.compiled']
            );
        });
    }

    
}