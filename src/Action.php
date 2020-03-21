<?php
namespace Vht\Src;

abstract class Action {
    protected Application $app;
    public function __construct(Application $application){
        $this->app = $application;
        $this->app->add_filter($this);
    }
   public abstract function process(Application $application);
}