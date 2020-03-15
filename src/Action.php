<?php
namespace Vht\Src;

abstract class Action {
    protected Application $app;
    public function __construct(Application $application){
        $this->app = $application;
    }
   public abstract function process();
}