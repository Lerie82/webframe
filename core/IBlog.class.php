<?php
/*
Author: Lerie Taylor
Date: 2021
Filename: core/IProduct.class.php
Description: Interface for blogs
*/
interface IBlog
{
	private $lastmod;
	
	public function __construct();
	public function createPost();
	public function savePost();
	public function deletePost();
	public function updatePost($title, $post, $author);
	public function getPost();
	public function loadPost($id);
}
?>