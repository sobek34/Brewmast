<?php

require_once 'AppController.php';


class N_reciptController extends AppController
{

    public function N_recipt()
    {

        $this->render("new_recipt");
    }
}