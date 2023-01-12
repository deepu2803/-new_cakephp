<?php
namespace App\Controller\Admin;
use App\Controller\AppController;


class UsersController extends AppController{
    public function initialize():void
    {
        parent::initialize();
    }
    public function admin(){
        echo "hello";die;
    }
}



?>