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

$align  = $this->app->jbitem->getMediaAlign($item, $layout);
$tabsId = $this->app->jbstring->getId('tabs');

?>





<div class="uk-position-relative uk-panel">
    <!-- Шапка якуновича -->
    <div class="uk-container uk-margin-remove-vertical">
        <div class="uk-grid-collapse" uk-grid>
            <div class="uk-width-1-1@m uk-grid-item-match">
                <div class="uk-tile-default uk-tile uk-tile-small">
                    
                    <!-- Элемент заголовка -->
                    <?php if ($this->checkPosition('title')) : ?>
                        <h1 class="uk-text-center uk-heading-primary uk-heading-line" uk-scrollspy-class>
                            <span><?php echo $this->renderPosition('title'); ?></span>
                        </h1>
                    <?php endif; ?>

                    <!-- Блок Хлебных крошек и еще чего-то -->
                    <div class="">
                        <div class="uk-clearfix uk-text-small">
                            <div class="uk-float-left">
                                <!-- модуль хлебных крошек -->
                                <ul class="uk-breadcrumb uk-margin-remove">
                                    <li><a href="#">Главная</a></li>
                                    <li><a href="#">Букеты </a></li>
                                    <li class="uk-disabled"><a>Букеты из 101 розы</a></li>
                                    <li class="uk-visible@s"><span>Дурацкое название</span></li>
                                </ul>
                            </div>
                            <div class="uk-visible@s uk-float-right">
                                <!-- Элемент до инфы -->
                                <div class="">Отзывов и комментариев: <span class="uk-badge">3</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Блок картинки цены -->
    <div class="uk-container uk-margin-remove-vertical">
        <!-- Сетка для картинки и блока цены -->
        <div class="uk-grid-collapse" uk-grid>
            <!-- Ячейка картинки и краткой информации -->
            <div class="uk-width-expand@m uk-grid-item-match">
                <div class="uk-tile-default uk-tile uk-tile-xsmall">

                    <!-- Блок элемента картинки -->
                    <?php if ($this->checkPosition('image')) : ?>
                        <div class="uk-margin" uk-scrollspy-class>
                            <?php echo $this->renderPosition('image'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Блок под картинкой для рейтинга и поделиться -->
                    <div class="uk-margin uk-child-width-1-1 uk-grid-match uk-child-width-1-2@s uk-grid-small uk-grid-divider" uk-grid>

                        <!-- Элемент рейтинга -->
                        <?php if ($this->checkPosition('meta')) : ?>
                        <div uk-scrollspy-class class="el-item uk-panel">
                            <div class="el-content uk-margin">
                                <div class="uk-text-center">
                                    <?php echo $this->renderPosition('meta', array('style' => 'block')); ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Элемент поделиться -->
                        <div uk-scrollspy-class class="el-item uk-panel">
                            <div class="el-content uk-margin">
                                <div class="uk-text-center">
                                    <div class="uk-margin-small">Намекните на подарок</div>
                                    <!-- uSocial -->
                                    <script async src="https://usocial.pro/usocial/usocial.js?v=6.1.4" data-script="usocial"
                                        charset="utf-8"></script>
                                    <div class="uSocial-Share" data-pid="a06801f02271015b83e83b72ddc1ce5f" data-type="share"
                                        data-options="round-rect,style3,default,absolute,horizontal,size24,eachCounter0,counter1,counter-after"
                                        data-social="vk,fb,ok,twi,pinterest,telegram" data-mobile="vi,wa,sms"></div>
                                    <!-- /uSocial -->
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Блок под картинкой для элементов бейджа и кнопки Избранное -->
                    <div class="">
                        <!-- Элемент бейджа -->
                        <div class="badge-free-delivery uk-position-absolute">
                            <img src="/images/site/icons/badge-delivery.png" class="el-image" alt="Бесплатная доставка по Москве">
                        </div>

                        <!-- Элемент кнопки Избранное -->

                        <?php if ($this->checkPosition('buttons')) : ?>
                            <div class="button-favourite uk-position-absolute">
                                <?php echo $this->renderPosition('buttons', array('style' => 'block')); ?>
                            </div>
                        <?php endif; ?>
                        <!-- конец -->
                    </div>

                    <!-- Блок элемента краткого описания -->
                    <?php if ($this->checkPosition('text')) : ?>
                        <div class="short-description">
                            <?php echo $this->renderPosition('text'); ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <!-- Ячейка цены и дополнительной информации -->
            <div class="uk-width-expand@m uk-grid-item-match">
                <div class="uk-tile-default uk-tile uk-tile-xsmall">
                    <div class="uk-margin uk-child-width-1-1 uk-grid-match uk-grid-collapse" uk-grid>
                        <div>
                            <!-- Блок цены -->
                            <div uk-scrollspy-class class="el-item uk-panel">
                                <div class="el-content uk-margin">
                                    <div class="uk-card uk-card-primary uk-card-body">
                                        <!-- Возможно, рендеринг позиции названия из элемента цены -->

                                        <?php if ($this->checkPosition('social')) : ?>
                                            <h2 class="uk-h4 uk-text-truncate uk-margin-small">
                                                <?php echo $this->renderPosition('social'); ?>
                                            </h2>
                                        <?php endif; ?>


                                        <?php if ($this->checkPosition('price')) : ?>
                                            <div class="item-price">
                                                <?php echo $this->renderPosition('price'); ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <!-- Блок дополнительной информации под ценой -->
                            <div uk-scrollspy-class class="el-item uk-panel">
                                <div class="el-content uk-margin">
                                    <div class="uk-card uk-card-default uk-card-body">
                                        <div class="uk-margin-small">
                                            <ul uk-switcher="connect: #js-484;animation: uk-animation-fade" class="uk-margin-small uk-subnav uk-subnav-divider el-nav">
                                                <li>
                                                    <a href="#">Оплата</a>
                                                </li>
                                                <li>
                                                    <a href="#">Доставка</a>
                                                </li>
                                            </ul>
                                            <ul id="js-484" class="uk-switcher">
                                                <li class="el-item">
                                                    <!-- <h3 class="el-title uk-margin uk-h5 uk-heading-line">
																<span>Оплата</span>
																</h3> -->
                                                    <div class="el-content uk-margin">
                                                        <div class="uk-text-small">
                                                            Для удобства совершения покупок в нашем магазине мы
                                                            обеспечиваем возможность оплаты несколькими
                                                            способами: наличными курьеру или в офисе, банковской картой
                                                            или с помощью электронной валюты
                                                            Webmoney.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="el-item">
                                                    <!-- <h3 class="el-title uk-margin uk-h5 uk-heading-line">
																<span>Доставка</span>
																</h3> -->
                                                    <div class="el-content uk-margin">
                                                        <div class="uk-text-small">
                                                            <p>При заказе до 5000 руб. стоимость доставки составляет
                                                                500р.<br />
                                                                При заказе свыше 5000р. доставка цветов по Москве
                                                                бесплатная.<br />
                                                                Доставка цветов по Москве работает ежедневно с 10:00 -
                                                                22:00
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr class="uk-divider-icon uk-margin-small">
                                        <div class="uk-child-width-1-1 uk-grid-match uk-child-width-1-2@s" uk-grid>
                                            <div class="uk-first-column">
                                                <div class="el-item uk-panel">
                                                    <div class="el-content uk-margin">
                                                        <div class="uk-h6 uk-margin-remove uk-text-truncate">Телефоны
                                                            для связи:</div>
                                                        <div class="">
                                                            <p class="uk-text-small uk-margin-remove-bottom">
                                                                <a href="tel:+79999676370">☎ 999 967-63-70</a>
                                                                <br>
                                                                <a href="tel:+79647213136">☎ 964 721-31-36</a>
                                                                <br>
                                                                <a href="tel:+79647213136">☎ 964 721-31-36</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="el-item uk-panel">
                                                    <div class="el-content uk-margin">
                                                        <div class="uk-h6 uk-margin-remove uk-text-truncate">Оплата
                                                            заказов</div>
                                                        <div class="">
                                                            <div class="uk-text-small uk-margin-remove-bottom">
                                                                <p>Бесплатная доставка заказов от 5000 рублей,
                                                                    остальные 500 рублей.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Контейнер детальной информации о товаре -->
    <div class="uk-container uk-margin-remove-vertical">
        <div uk-grid>
            <div class="uk-width-1-1@m uk-grid-item-match">
                <div class="uk-tile-muted uk-tile uk-tile-small">
                    <h3 class="uk-text-center uk-heading-line" uk-scrollspy-class>
                        <span>Детально о букете</span>
                    </h3>

                    <div class="uk-margin" uk-scrollspy-class>
                        <ul uk-switcher="connect: #js-952;animation: uk-animation-fade" class="uk-margin uk-subnav el-nav">
                            <?php if ($this->checkPosition('properties')) : ?>
                                <li>
                                    <a href="#properties">
                                        <span uk-icon="icon: list"></span>
                                        <?php echo JText::_('JBZOO_ITEM_TAB_PROPS'); ?>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if ($this->checkPosition('text')) : ?>
                                <li>
                                    <a href="#description">
                                        <span uk-icon="icon: info"></span>
                                        <?php echo JText::_('JBZOO_ITEM_TAB_DESCRIPTION'); ?>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if ($this->checkPosition('gallery')) : ?>
                                <li>
                                    <a href="#gallery">
                                        <span uk-icon="icon: image"></span>
                                        <?php echo JText::_('JBZOO_ITEM_TAB_GALLERY'); ?>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if ($this->checkPosition('comments')) : ?>
                                <li id="tab-comments">
                                    <a href="#comments">
                                        <span uk-icon="icon: comments"></span>
                                        <?php echo JText::_('JBZOO_ITEM_TAB_COMMENTS'); ?>
                                        <span class="uk-badge"><?php echo $item->getCommentsCount(); ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>

                        </ul>

                        <!--  -->

                        <ul id="js-952" class="uk-switcher">
                            <li class="el-item">
                                <!-- Элемент списка характеристик товара -->
                                <div class="el-content uk-margin">
                                    <div class="uk-grid-margin uk-grid-divider" uk-grid>
                                        <div class="uk-width-expand@m uk-first-column">
                                            <div class="uk-margin">
                                                <?php if ($this->checkPosition('properties')) : ?>
                                                    <table class="uk-table uk-table-hover uk-table-striped">
                                                        <?php echo $this->renderPosition('properties', array(
                                                            'tooltip' => true,
                                                            'style'   => 'jbtable',
                                                        )); ?>
                                                    </table>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <!-- Блок элемента значков -->
                                        <div class="uk-width-expand@m">
                                            <div class="uk-margin uk-display-inline">
                                                <img src="/images/site/icons/free-delivery-badge.png" alt="" width="110" height="">
                                            </div>
                                            <div class="uk-margin uk-display-inline">
                                                <img src="/images/site/icons/badge-delivery.png" alt="" width="128" height="">
                                            </div>
                                            <div class="uk-margin uk-display-inline">
                                                <img src="/images/site/icons/badge-discount.png" alt="" width="128" height="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="el-item">
                                <!-- Элемент полного описания товара -->
                                <div class="el-content uk-margin">
                                    <p>Интернет-магазин Цветочный клуб предлагает заказать букет цветов, подходящий к
                                        любому торжеству,
                                        купленный по любому поводу и без него. Всё, чем живёт сердце, так легко
                                        выразить цветами.
                                    </p>
                                    <p>Наш сервис работает в Москве с 8-00 до 22-00. Создаём красивые букеты цветов,
                                        флористические композиции.
                                        Посмотрите товар прямо сейчас. Дополнительно можете ознакомиться в галерее
                                        букетов с примерами
                                        ежедневных работ наших флористов.
                                    </p>
                                    <p>Магазин предлагает</p>
                                    <p>Успейте <a href="/bukety/den-rozhdeniya">купить</a>, пока букеты не разобрали.</p>
                                </div>
                            </li>


                            <?php if ($this->checkPosition('gallery')) : ?>
                                <li id="tab-gallery" class="el-item">
                                    <!-- Элемент полного описания товара -->
                                    <div class="el-content uk-margin">
                                    <?php echo $this->renderPosition('gallery', array(
                                            'labelTag' => 'h4',
                                            'style'    => 'jbblock',
                                        )); ?>
                                    </div>
                                </li>
                            <?php endif; ?>
                            
                            <?php if ($this->checkPosition('comments')) : ?>
                                <li id="tab-comments" class="el-item">
                                    <!-- Элемент комментариев -->
                                    <div class="el-content uk-margin">
                                        <?php echo $this->renderPosition('comments'); ?>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php if ($this->checkPosition('related')) : ?>
    <div class="uk-grid item-related">
        <div class="uk-width-medium-1-1">
            <?php echo $this->renderPosition('related', array(
                'labelTag' => 'h4',
                'style'    => 'jbblock',
            )); ?>
        </div>
    </div>
<?php endif; ?>