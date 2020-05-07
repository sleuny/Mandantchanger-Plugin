<?php
 
namespace Mandantchanger\Providers;
 
 
use Plenty\Plugin\ServiceProvider;
 
class MandantchangerServiceProvider extends ServiceProvider
{
 
    /**
     * Register the service provider.
     */
     
    public function register()
    {
        $this->getApplication()->register(MandantchangerRouteServiceProvider::class);
    }
}