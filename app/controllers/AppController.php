<?php

namespace app\controllers;
use \lithium\security\Auth;

class AppController extends \lithium\action\Controller {
    public function _init() {
        parent::_init();

        if($this->user = Auth::check('user')) {
            $this->set(array('currentUser' => $this->user));
        }
        else {
            $this->set(array('currentUser' => null));
        }
    }
}

?>