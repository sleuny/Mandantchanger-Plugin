<?php
 
namespace Mandantchanger\Models;
 
/**
 * Class Webstores
 *
 * @property int     $plentyIId
 * @property string  $webstoreName
 */
class Webstores extends Model
{
    /**
     * @var int
     */
    public $plentyId        = 0;
    public $webstoreName    = '';

    /**
     * @return string
     */
    public function getWebstores(): string
    {
        return 'Mandantchanger::Webstores';
    }
}