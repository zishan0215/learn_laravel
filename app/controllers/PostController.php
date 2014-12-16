<?php

class PostController extends BaseController {
	
	public function show() {
		$post = new stdClass();
		$post->title = "My post title";
		return View::make('post/show')->with('post', $post);    // Or use dot notation post.show
	}
	
	public function listing() {
		return View::make('post.listing');
	}
	
	public function single($id, $slug) {
		return View::make('post.single')->with(array('id' => $id, 'slug' => $slug));
	}
	
	public function update($id) {
		dd($_POST);
	}
}