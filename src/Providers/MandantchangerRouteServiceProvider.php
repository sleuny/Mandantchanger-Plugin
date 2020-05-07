<?php
 
namespace Mandantchanger\Providers;
 
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
 
class MandantchangerRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('hello','Mandantchanger\Controllers\ContentController@sayHello');
    }
}