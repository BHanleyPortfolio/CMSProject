<?php
require ("config.php");
$action = isset($_GET['action']) ? $_GET['action']:"";

switch ( $action ) {
    case 'posts':
        archive();
        break;
    case 'recipes':
        recipes();
        break;
    case 'viewPost':
        viewPost();
        break;
    case 'viewRecipe':
        viewRecipe();
        break;
    default:
        homepage();
}


function archive() {
    $results = array();
    $data = Post::getList();
    $results['posts'] = $data['results'];
    $results['totalRows'] = $data['totalRows'];
    $results['pageTitle'] = "Blog Posts";
    $results['articleAction'] = 'viewPost';
    require( TEMPLATE_PATH . "/archive.php" );
}

function recipes() {
    $results = array();
    $data = Recipe::getList();
    $results['posts'] = $data['results'];
    $results['totalRows'] = $data['totalRows'];
    $results['pageTitle'] = "Recipes";
    $results['articleAction'] = 'viewRecipe';
    require( TEMPLATE_PATH . "/archive.php" );
}

function viewPost() {
    if ( !isset($_GET["postId"]) || !$_GET["postId"] ) {
        homepage();
        return;
    }

    $results = array();
    $results['post'] = Post::getById( (int)$_GET["postId"] );
    $results['pageTitle'] = $results['post']->title . " | Widget News";
    require( TEMPLATE_PATH . "/viewPost.php" );
}

function viewRecipe() {
    if ( !isset($_GET["postId"]) || !$_GET["postId"] ) {
        homepage();
        return;
    }

    $results = array();
    $results['post'] = Recipe::getById( (int)$_GET["postId"] );
    $results['pageTitle'] = $results['post']->title . " | Widget News";
    require( TEMPLATE_PATH . "/viewPost.php" );
}

function homepage() {
    $results = array();
    $postResults = array();
    $data = Recipe::getList( HOMEPAGE_NUM_ARTICLES );
    $postData = Post::getList(HOMEPAGE_NUM_ARTICLES);
    $postResults['posts'] = $postData['results'];
    $results['recipes'] = $data['results'];
    $results['totalRows'] = $data['totalRows'];
    $results['pageTitle'] = "Widget News";
    require( TEMPLATE_PATH . "/homepage.php" );
}

?>
