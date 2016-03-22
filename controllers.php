<?php

function list_action(){
    $posts = get_all_posts();
    require "templates/list.php";
}

function show_action($id) {
    $post = get_post_by_id($id);
    require "templates/show.php";
}

function add_action()
{    
    require "templates/add.php";
}

function create_post_action()
{
    $text = $_POST['text'];
    $title = $_POST['title'];
    add_new_post($text, $title);
    require "templates/list.php";
}