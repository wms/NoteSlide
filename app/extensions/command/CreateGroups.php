<?php

namespace app\extensions\command;
use app\models\Group;

class CreateGroups extends \lithium\console\Command {

    private $groups = array(
        'Computer Science',
        'Chemistry',
        'Engineering',
        'Mathematics',
        'Physics',
        'Business Studies'
    );

    public function run() {
        Group::remove();
        foreach($this->groups as $name) {
            $group = Group::create();
            $this->out("Creating group $name");
            $group->save(array('title' => $name));
        }

        return true;
    }
}

?>