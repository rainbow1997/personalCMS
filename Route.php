<?php
class Route
{
public $address;
public $name;
public $controller;
public $method;
static $stack=[];
static function save($address,$controller_method,$name)
{
    list($controller,$method)=explode('@',$controller_method);
    $route=new Route();
    $route->address=$address;
    $route->controller=$controller;
    $route->method=$method;
    $route->name=$name;
    self::$stack[]=$route;
}
static function name($name)
{
    foreach(self::$stack as $route)
    {
        if($route->name==$name)
        {
            return $route->address;
        }
    }
    
}
static function address($address)
{
    foreach(self::$stack as $route)
        if($route->address==$address)
            return route;
}

}//class
Route::save('login','Customers@loginCustomer','login_route');
Route::save('adlogin','Admin@loginAdmin','adlogin_route');
Route::save('register','Customer@RegisterCustomer','register_route');
 Route::save('showallarticle','ShowArticle@seeAllArticle','showallarticle_route') ;  
 Route::save('sendComment','SendComment@sendComment','sendcomment_route');
 Route::save('showComment','ShowComment@showCommentById','showcommentbyid_route');
 Route::save('setorder','Order@addFullOrder','setorder');
 Route::save('showproductbyid','Product@showProductById','showproductbyid');
 Route::save('cart','Cart@addItem','cart');
 Route::save('showallproduct','Product@seeAllProduct','showallproduct');
 Route::save('adminPanel','Admin@adminPanel','adminpanel');
 Route::save('managecontent','Admin@managecontent','managecontent');