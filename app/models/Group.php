<?php

namespace app\models;
use lithium\util\Inflector;

class Group extends \lithium\data\Model {
    protected $_schema = array(
        '_id' => array('type' => 'id'),
    );
}

Group::applyFilter('save', function($self, $params, $chain) {
    $params['data']['name'] = strtolower(Inflector::slug($params['data']['title']));
    return $chain->next($self, $params, $chain);
});

?>