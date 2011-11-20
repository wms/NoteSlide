<?php

namespace app\controllers;
use app\models\Post;

class PostsController extends \lithium\action\Controller {

	public function index() {
        $posts = Post::all();
        return compact('posts');
	}
}

?>