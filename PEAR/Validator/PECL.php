<?php
/**
 * Channel Validator for the pecl.php.net channel
 *
 * PHP 4 and PHP 5
 *
 * @category   pear
 * @package    PEAR
 * @author     Greg Beaver <cellog@php.net>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    CVS: $Id$
 * @link       http://pear.php.net/package/PEAR
 * @since      File available since Release 1.4.0a5
 */
/**
 * This is the parent class for all validators
 */
require_once 'PEAR/Validate.php';
/**
 * Channel Validator for the pecl.php.net channel
 * @category   pear
 * @package    PEAR
 * @author     Greg Beaver <cellog@php.net>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    Release: @package_version@
 * @link       http://pear.php.net/package/PEAR
 * @since      Class available since Release 1.4.0a5
 */
class PEAR_Validator_PECL extends PEAR_Validate
{
    function validateVersion()
    {
        return true;
    }
}
?>