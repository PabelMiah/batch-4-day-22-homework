<?php
require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\News;

if(isset($_GET['pages']))
{
    if ($_GET['pages'] == 'all-collections')
    {
        $category = new Category();
        $categories = $category->index();
        $news = new News();
        $newsVar = $news->index();
        include 'pages/allCollection.php';

    }
    elseif ($_GET['pages'] == 'category-collections')
    {
        $category = new Category();
        $categories = $category->index();
        $news = new News();
        $newsVar = $news->shortCollections($_GET['category_id']);
        include 'pages/allCollection.php';

    }
    elseif ($_GET['pages'] == 'collection-details')//
    {
        $category = new Category();
        $categories = $category->index();
        $news = new News();
        $collectionDetails = $news->getCollectionsDetails($_GET['collection_id']);//
        include 'pages/collectionDetails.php';

    }
}