<?php

class welcome extends Controller{

	function index($this->posts = get_all("SELECT * FROM post")){
		$this->users = get_all("SELECT * FROM user");
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