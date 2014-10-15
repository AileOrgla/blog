<?php
/**
 * Created by PhpStorm.
 * User: Aile
 * Date: 24.09.14
 * Time: 15:52
 */

class tags extends Controller{

    function index ()
    {
        $this->tags = get_all("SELECT tag_name, tag_id, COUNT(post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");

        }
    function view (){
        $tag_id = $this->params[0];
        $this->posts = get_all("SELECT * FROM post_tags NATURAL JOIN post WHERE tag_id='$tag_id'");
        $this->tag_name = get_one("SELECT tag_name FROM tag WHERE tag_id='$tag_id'");
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


