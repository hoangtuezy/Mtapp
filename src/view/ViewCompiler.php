<?php
namespace Vht\Src\View;
class ViewCompiler extends CustomCompiler
{
	public function getCompiledPath($path)
    {
    	if(!is_dir($this->cachePath)) mkdir($this->cachePath);
        return $this->cachePath.'/'.basename($path);
    }
}