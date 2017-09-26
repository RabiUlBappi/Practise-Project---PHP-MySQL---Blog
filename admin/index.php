<?php 

	require "../blog.php";
	$data=array();
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$title=$_POST['title'];
		$body=$_POST['body'];
		if(empty($title)||empty($body)){
			$data['status']='Please fill up all the fields.';
		}else{
			Blog\DB\myQuery(
				"INSERT INTO posts(title,body) VALUES (:title,:body)",
				array('title' => $title,'body'=>$body ),
				$conn);
			$data['status']='Your post is successfully created.';
		}
	}

	view('admin/create',$data);

 ?>