<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->assign('title','hello world');
    }
    
    public function ballsAction()
    {
        $this->view->assign('title','hello balls');
    }

}

