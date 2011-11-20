<?php

namespace app\controllers;
use app\models\Note;
use app\models\Group;
use li3_flash_message\extensions\storage\FlashMessage;

class NotesController extends AppController {

	public function index() {

        if(isset($this->request->params['group'])) {
            $group = Group::first(array(
                'conditions' => array(
                    'name' => $this->request->params['group']
                )
            ));
            $this->set(compact('group'));

            $notes = Note::all(array(
                'conditions' => array(
                    'group' => $this->request->params['group']
                )
            ));
        }
        else {
            $notes = Note::all();
        }

        return compact('notes');
	}

    public function add() {
        $note = Note::create();

        if($this->request->data) {
            if($note->save($this->request->data)) {
                FlashMessage::write("New Note Created!");
                return $this->redirect(array('action' => 'index'));
            }
            FlashMessage::write("There was an error saving the new Note.");
        }

        return compact('result', 'note');
    }
}

?>