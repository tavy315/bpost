<?php
namespace TijsVerkoyen\Bpost\Bpost\Order\Box\Option;

/**
 * bPost AutomaticSecondPresentation class
 *
 * @author    Tijs Verkoyen <php-bpost@verkoyen.eu>
 * @version   3.0.0
 * @copyright Copyright (c), Tijs Verkoyen. All rights reserved.
 * @license   BSD License
 */
class AutomaticSecondPresentation extends Option
{
    /**
     * Return the object as an array for usage in the XML
     *
     * @return array
     */
    public function toXMLArray()
    {
        return array('automaticSecondPresentation' => array());
    }
}
