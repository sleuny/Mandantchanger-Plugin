<?php
namespace Mandantchanger\EventProcedures;
 
use Plenty\Modules\EventProcedures\Events\EventProceduresTriggered;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
 
class Procedures
{
    /**
     * @param EventProceduresTriggered $event
     * @return void
     */
    public function changeMandantMain(EventProceduresTriggered $event)
    {
        $order = $event->getOrder();
        $orderRepository = pluginApp(OrderRepositoryContract::class);
        $orderRepository->updateOrder(['plentyId' => 36162], $order->id);
    }
    public function changeMandantSecond(EventProceduresTriggered $event)
    {
        $order = $event->getOrder();
        $orderRepository = pluginApp(OrderRepositoryContract::class);
        $orderRepository->updateOrder(['plentyId' => 42285], $order->id);
    }
}