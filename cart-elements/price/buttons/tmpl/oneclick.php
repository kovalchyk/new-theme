<?php
/**
 * JBZoo Application
 *
 * This file is part of the JBZoo CCK package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    Application
 * @license    GPL-2.0
 * @copyright  Copyright (C) JBZoo.com, All rights reserved.
 * @link       https://github.com/JBZoo/JBZoo
 * @author     Denis Smetannikov <denis@jbzoo.com>
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<span class="jsAddToCart jsGoTo uk-button uk-button-secondary jbprice-buttons-oneclick">
<span uk-icon="icon: credit-card"></span>
    <?php echo JText::_($params->get('oneclick_label', 'JBZOO_ELEMENT_PRICE_BUTTONS_ONECLICK_LABEL_DEFAULT')); ?>
</span>
