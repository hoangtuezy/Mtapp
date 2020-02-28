<?php

$this->set_database(
    [
    'servername'=>'localhost',
    'username'=>'root',
    'password'=>'',
    'database'=>'source'
        
    ]
    );
// $this->set_auto_model(true);

$this->run(
    ['check_login'=> Vht\Application\Admin\Action\Auth::class],
    []
    );

