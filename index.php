<?php

// __DIR__ contient le chemin absolu jusqu'au dossier du fichier courant
// __DIR__ est généré par PHP
// __DIR__ n'est pas une variable, c'est une constante
// echo __DIR__.'<br>';

// Point d'entrée unique pour tout le site !

// Inclusion des fichiers nécessaires
include __DIR__.'/inc/classes/Article.php';
include __DIR__.'/inc/classes/Category.php';
include __DIR__.'/inc/classes/Author.php';
include __DIR__.'/inc/data.php';


// Debug
// print_r($_GET);exit;

// On veut récupérer la page demandée : index.php?page=author par exemple
// façon #1 fonction filter_input
$page = filter_input(INPUT_GET, 'page');
// façon #2 (if else classique)
if (!empty($_GET['page'])) {
    $page = $_GET['page'];
}
else {
    $page = false;
}
// façon #3 (condition ternaire)
$page = !empty($_GET['page']) ? $_GET['page'] : false;
// Debug
// print_r($page);exit;
//==================================
//
// si la page demandée, c'est "Catégorie"
if ($page === 'category') {
    // Alors, la template centrale à afficher, c'est category.tpl.php
    $template = 'category';
    
    if(!empty($_GET['catName'])){
        $categoryName = $_GET['catName'];
    }else{
        $categoryName = false;
    }
    
     $allArticles = $dataArticlesList;

     foreach ($allArticles as $article){
         if($article->category === $categoryName){
             $filteredArticles[] = $article;
         }
     }
}
//==================================
//
// si la page demandée, c'est "Auteur"
else if ($page === 'author') {
    // Alors, la template centrale à afficher, c'est author.tpl.php
    $template = 'author';

    if(!empty($_GET['authorName'])){
        $authorName = $_GET['authorName'];
    }else{
        $authorName = false;
    }
    
     $allArticles = $dataArticlesList;

     foreach ($allArticles as $article){
         if($article->author === $authorName){
             $filteredAuthor[] = $article;
         }

     }
}
//==================================
//
// si la page demandée, c'est "Article"
else if ($page === 'article') {
    // Alors, la template centrale à afficher, c'est article.tpl.php
    $template = 'article';

    // On veut récupérer l'id de l'article demandé : index.php?page=article&id=2 par exemple
    // façon #1 fonction filter_input
    $id = filter_input(INPUT_GET, 'id');
    // façon #2 (if else classique)
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
    }
    else {
        $id = false;
    }
    // façon #3 (condition ternaire)
    $id = !empty($_GET['id']) ? $_GET['id'] : false;
    // façon #4 (condition ternaire)
    if (array_key_exists('id', $_GET)) {
        $id = $_GET['id'];
    }
    else {
        $id = false;
    }

    // DEbug : on vérifie qu'on a récupéré la bonne valeur
    // echo $id;exit;

    // Si la clé $id existe dans le tableau $dataArticlesList
    if (array_key_exists($id, $dataArticlesList)) {
        // On récupère l'objet de l'article à afficher
        $currentArticle = $dataArticlesList[$id];
        // Debug
        // print_r($currentArticle);exit;
    }
    // Sinon
    else {
        // Alors, on affiche la page 404
        $template = '404';
    }

    
}
// sinon, si page n'est pas fourni (false)
else if ($page === false) {
    // Alors on affiche la page d'accueil
    $template = 'home';

    // Je peux copier le tableau d'article dans une autre variable
    // Ainsi, je connais facilement le nom de cette variable
    $allArticles = $dataArticlesList;
}
else {
    // Alors, page 404 Not Found
    $template = '404';
}

// Récupération des données nécessaires la page (si besoin)


// Affichage
require __DIR__.'/inc/templates/header.tpl.php';
require __DIR__.'/inc/templates/' . $template . '.tpl.php';
require __DIR__.'/inc/templates/footer.tpl.php';