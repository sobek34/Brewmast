<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('login');
       
    }

    public function projects()
    {
        $this->render('My_recipt');
      
    }
    public function new_recipt()
    {
        $this->render('new_recipt');

    }
}