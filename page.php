<?php

if(isset($_GET['page'])){
    $page = $_GET['page'];

    if($page == "articles"){
        include('slider.php');
        include('articles.php');
    }
    
    if($page == "post_new_article"){
        include('post_new_article.php');
    }
}else{
    echo "<h1>Page Error!</h1>";
}


?>