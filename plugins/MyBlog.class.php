<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: plugins/MyBlog.class.php
Description: blog wrapper
*/
class MyBlog
{
	public function __construct()
	{
		//
	}
	
	public function createPost()
	{
		//
	}

	public function savePost()
	{
		//
	}

	public function deletePost()
	{
		//
	}

	public function updatePost($title, $post, $author)
	{
		$this->author = $author;
		$this->post = $post;
		$this->title = $title;
		$this->lastmod = date("F j, Y, g:i a");
	}

	public function getPost()
	{
		//
	}

	public function loadPost($id)
	{
		//
	}
}
?>