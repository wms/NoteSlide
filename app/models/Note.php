<?php

namespace app\models;

class Note extends \lithium\data\Model {

    protected $_schema = array(
        '_id' => array('type' => 'id')
    );

    public $validates = array(
        'name' => array(
            array(
                'notEmpty',
                'message' => 'You must specify your name'
            )
        ),
        'title' => array(
            array(
                'notEmpty',
                'message' => 'You must specify a title'
            )
        ),
        'description' => array(
            array(
                'notEmpty',
                'message' => 'You must specify a description'
            )
        )
    );
}

?>