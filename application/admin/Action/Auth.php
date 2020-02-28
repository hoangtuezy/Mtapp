<?php
namespace Vht\Application\Admin\Action;
class Auth{
    public function process($app){
        $permit = $app->session()['admin_login'];
        if(empty($permit)){
            header("Location: 404.php");
        }
    }
}