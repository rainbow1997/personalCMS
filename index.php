<?php 
require_once('config.php');
require_once('Route.php');
require_once(ROOT.'\classes\Controller\ShowArticle.php');
require_once(ROOT.'\classes\Controller\ShowComment.php');
require_once(ROOT.'\classes\Controller\Product.php');
require_once(ROOT.'\classes\Controller\Customers.php');
require_once(ROOT.'\classes\Controller\SendComment.php');
require_once(ROOT.'\classes\Controller\ShowComment.php');
require_once(ROOT.'\classes\Controller\Order.php');
require_once(ROOT.'\classes\Controller\Cart.php');
require_once(ROOT.'\classes\Controller\Admin.php');
$customersObj=new Controller\Customers();
$articleObj=new \Controller\ShowArticle();
$sendcommentObj=new \Controller\SendComment();
$showcommentObj=new \Controller\ShowComment();
$orderObj=new \Controller\Order();
$productObj=new \Controller\Product();
$cartObj=new \Controller\Cart();
$adminObj=new \Controller\Admin();
$address=@$_GET['address'];
if($address== Route::name('login_route'))
$customersObj->loginCustomer();
if($address== Route::name('adlogin_route'))
    $adminObj->login();
else if($address==Route::name('register_route'))
$customersObj->RegisterCustomers();
else if($address==Route::name('showallarticle_route'))
$articleObj->seeAllArticle();
else if($address==Route::name('sendcomment_route'))
$sendcommentObj->sendComment(@$_GET['id']);
else if($address==Route::name('showcommentbyid'))
$showcommentObj->showCommentByArticleId(@$_GET['id']);
else if($address==Route::name('setorder'))
$orderObj->addFullOrder();
else if($address==Route::name('showproductbyid'))
$productObj->showProductById(@$_GET['id']);
else if($address==Route::name('cart'))
$cartObj->addItem();
else if($address==Route::name('showallproduct'))
$productObj->showAllProduct();
else if($address==Route::name('adminpanel'))
$adminObj->adminPanel();
else if($address==Route::name('managecontent'))
    $adminObj->manageContent();
     // require_once('InsertArticle.php');
     else {
         echo'ho';
     }