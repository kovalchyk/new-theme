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

$view = $this->getView();
$this->app->jbassets->basket();
$actionUrl = $this->app->jbrouter->cartOrderCreate($view->application->id, null);

// echo JText::_('JBZOO_CART_ORDER_SUCCESS_CREATED');
echo '<hr class="uk-divider-icon">';

// if user Authorised

    $user = JFactory::getUser();
     
    if (!$user->guest) {
        echo '<div class="uk-text-lead">Ожидайте СМС с деталями заказа и письмо на указанный e-mail.<br /> В ближайшее время с Вами свяжется менеджер для согласования деталей заказа.</div>';
        echo '<div>Вы можете просмотреть историю своих заказов <a href="index.php?option=com_zoo&controller=clientarea&task=orders&Itemid=384">здесь</a></div>';
    } else if ($user->guest) {
        echo '<span class="uk-text-lead">Ожидайте СМС с деталями заказа и письмо на указанный e-mail.<br /> В ближайшее время с Вами свяжется менеджер для согласования деталей заказа.</span>';
        echo '';
    }
