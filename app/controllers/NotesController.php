<?php

namespace app\controllers;
use app\models\Note;
use li3_flash_message\extensions\storage\FlashMessage;

class NotesController extends AppController {

	public function index() {
        $notes = Note::all();
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