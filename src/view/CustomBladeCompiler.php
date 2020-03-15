<?php

namespace Vht\Src\View;
/**
 * 
 */
class CustomBladeCompiler extends Illuminate\View\Compilers\BladeCompiler
{
	
	protected $echoFormat = '%s';
}