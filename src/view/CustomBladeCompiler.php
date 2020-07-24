<?php

namespace Vht\View;
/**
 * 
 */
class CustomBladeCompiler extends Illuminate\View\Compilers\BladeCompiler
{
	
	protected $echoFormat = '%s';
}