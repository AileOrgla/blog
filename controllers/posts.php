<?php

class posts extends Controller{

    function view (){
        $post_id = $this->params[0];
        $this->post = get_first("SELECT * FROM post NATURAL JOIN user WHERE post_id='$post_id'");
}


function index(){
		$this->users = get_all("SELECT * FROM user");
        $this->posts = get_all("SELECT * FROM post");
	}

    function index_ajax(){
		echo "\$_POST:<br>";
        var_dump($_POST);
    }

	function index_post(){
		echo "\$_POST:<br>";
		var_dump($_POST);
	}
}