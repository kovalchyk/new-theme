<?php
/**
* JBZoo App is universal Joomla CCK, application for YooTheme Zoo component
*
* @package jbzoo
* @version 2.x Pro
* @author JBZoo App http://jbzoo.com 
* @copyright Copyright (C) JBZoo.com, All rights reserved.
* @license http://jbzoo.com/license-pro.phpJBZoo Licence
* @coder Alexander Oganov <t_tapak@yahoo.com>;
* @coder Sergey Kalistratov <kalistratov.s.m@gmail.com>;
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

$sku = $this->getValue(true);

if ($sku) : ?>
    <div class="sku">SKU: <span class="sku uk-label"><?php echo $sku; ?></span></div>
<?php endif;