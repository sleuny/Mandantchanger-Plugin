<?php
 
namespace Mandantchanger\Providers;
 
 
use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\EventProcedures\Services\EventProceduresService;
use Plenty\Modules\EventProcedures\Services\Entries\ProcedureEntry;
use ProcedurePlugin\EventProcedures\Procedures;
 
class MandantchangerServiceProvider extends ServiceProvider
{
 
    /**
     * Register the service provider.
     */
     
    public function register()
    {
        $this->getApplication()->register(MandantchangerRouteServiceProvider::class);
    }
    /**
     * @param EventProceduresService $eventProceduresService
     * @return void
     */
    public function boot(EventProceduresService $eventProceduresService)
    {
        $eventProceduresService->registerProcedure(
            'changeMandantMain',
            ProcedureEntry::EVENT_TYPE_ORDER,
            ['de' => 'Ändere auf Standard-Mandant', 'en' => 'Change to Standard-Mandant'],
            Procedures::class . '@changeMandantMain'
        );
        $eventProceduresService->registerProcedure(
            'changeMandantSecond',
            ProcedureEntry::EVENT_TYPE_ORDER,
            ['de' => 'Ändere auf Zweit-Mandant', 'en' => 'Change to Second-Mandant'],
            Procedures::class . '@changeMandantSecond'
        );
    }
}