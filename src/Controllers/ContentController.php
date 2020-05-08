<?php
 
namespace Mandantchanger\Controllers;
 
 
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
 
class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        return $twig->render('Mandantchanger::content.hello');
    }
     /**
     * @param MandantchangerRepositoryContract $mandantRepo
     * @return array
     */
    public function getWebstores(MandantchangerRepositoryContract $mandantRepo): array
    {
        $webstores = $mandantRepo->getWebstores();
        return $webstores;
    }
}