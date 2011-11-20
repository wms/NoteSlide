<?php

namespace app\controllers;
use \lithium\security\Auth;
use li3_flash_message\extensions\storage\FlashMessage;
use app\models\User;

class UsersController extends AppController {

    public function login() {
        if($this->request->data && $this->user = Auth::check('user', $this->request)) {
            FlashMessage::write('You are now logged in!');
            return $this->redirect('/');
        }
        FlashMessage::write('There was an error logging in.');
    }

    public function logout() {
        Auth::clear('user');
        return $this->redirect('/');
    }

    public function signup() {
        if($this->user) {
            return $this->redirect('/');
        }

        $user = User::create();
        if($this->request->data) {
            if($user->save($this->request->data)) {
                $this->login();
                return $this->redirect('/');
            }
            FlashMessage::write("There was a problem with your application");
        }

        return compact('user');
    }
}
?>