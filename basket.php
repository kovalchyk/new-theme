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

$this->app->jbdebug->mark('template::basket::start');
$this->app->jblayout->setView($this);
$this->app->document->setTitle(JText::_('JBZOO_CART_ITEMS'));
$this->app->jbwrapper->start();

?><h1 class="title"><?php echo JText::_('JBZOO_CART_ITEMS'); ?></h1><?php

echo '<div class="uk-placeholder uk-margin-small">
            <span class="uk-text-lead uk-text-primary">Уважаемые посетители, обратите внимание, 8 марта доставка осуществляться не будет.
            Доставка заказов возможна только до 05 марта и после 09 марта.<br />
            Приносим свои извинения за предоставленные неудобства.</span>
    </div>';

echo $this->app->jblayout->renderIndex('basket');

$this->app->jbwrapper->end();
$this->app->jbdebug->mark('template::basket::finish');
