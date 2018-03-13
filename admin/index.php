<?php
    require_once("../database.php");
    require_once("../models/articles.php");
    
    $link = db_connect();

    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "";

    if ($action == "add"){
        $id = 0;
        if(!empty($_POST)){
            articles_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
            header("Location: index.php");
        }
        else {
            $article['title']='';
            $article['date']='';
            $article['content']='';
        }
        $articles = articles_get($link, $id);
        include("../views/article_admin.php");
    }
    else if ($action == "edit"){
        if(!isset($_GET['id']))
            header("Location: index.php");

        $id = (int)$_GET['id'];

        if(!empty($_POST) && $id > 0){
            articles_edit($link, $id, $_GET['title'], $_GET['date'], $_GET['content']);
            header("Location: index.php");
        }
        /*elseif ($action == "delete"){
            $id = $_GET['id'];
            $articles = articles_delete($link, $id);
            header("Location: index.php");

        }*/

        $articles = articles_get($link, $id);
        include("../views/article_admin.php");
    }
    else {
        $articles = articles_all($link);
        include("../views/articles_admin.php");
    }
?>