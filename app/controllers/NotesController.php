<?php

namespace app\controllers;
use app\models\Note;

class NotesController extends \lithium\action\Controller {

	public function index() {
        $notes = Note::all();
        return compact('notes');
	}
}

?>