<?php
	$jsonString = file_get_contents('posts.json');
	//if(json_validate($jsonString)) {
		$postsObj=json_decode($jsonString, true);
		foreach ($postsObj['posts'] as $post) {
			block(
				ucfirst($post['type']).' — '.$post['date'],
				$post['type'].'-blog-post blog-post',
				$post['text']
			);
		}
	/*}
	else {
		echo 'Error getting notices: Invalid Format';
	}*/
?>