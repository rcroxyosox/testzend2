<?php

class TestController extends Zend_Controller_Action
{

    public function init()
    {

    }

    public function indexAction()
    {
        // action body
        $this->view->pageTitle="Test Page";
    }


}

