<?php
 
namespace Mandantchanger\Contracts;
 
use Mandantchanger\Models\Webstores;
 
/**
 * Class MandantchangerRepositoryContract
 * @package Mandantchanger\Contracts
 */
interface MandantchangerRepositoryContract
{
    /**
     * List all webstores (plentyID)
     *
     * @return Webstores[]
     */
    public function getWebstores(): array;
 
}