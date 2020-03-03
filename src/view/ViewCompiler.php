<?php
namespace Vht\Src\View;
use Illuminate\View\Compilers\BladeCompiler;
/**
 * 
 */
class ViewCompiler extends BladeCompiler
{
	public function getCompiledPath($path)
    {
    	if(!is_dir($this->cachePath)) mkdir($this->cachePath);
        return $this->cachePath.'/'.basename($path);
    }
}