<?php

namespace app\models;
use lithium\security\Password;

class User extends \lithium\data\Model {

    protected $_schema = array(
        '_id' => array('type' => 'id')
    );

    public $validates = array(
        'name' => array(
            array(
                'notEmpty', 'message' => 'You must specify your name'
            )
        ),
        'email' => array(
            array(
                'notEmpty', 'message' => 'You must an Email address'
            ),
            array(
                'email', 'message' => 'You must a valid Email address'
            )
        ),
        'password' => array(
            array(
                'lengthBetween',
                'min' => 5,
                'message' => 'You must enter a password at least 5 characters in length'
            )
        )
    );
}

User::applyFilter('save', function($self, $params, $chain) {
    if ($params['data']) {
        $params['entity']->set($params['data']);
        $params['data'] = array();
    }
    if (!$params['entity']->exists()) {
        $params['entity']->password = Password::hash($params['entity']->password);
    }
    return $chain->next($self, $params, $chain);
});
?>