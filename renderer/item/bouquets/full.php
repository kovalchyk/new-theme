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
                <div class="-uk-tile-default -uk-tile -uk-tile-small">
                    <!-- Элемент заголовка -->
                    <?php if ($this->checkPosition('title')) : ?>
                        <h1 class="uk-text-center uk-heading-primary uk-heading-line" uk-scrollspy-class>
                            <span><?php echo $this->renderPosition('title'); ?></span>
                        </h1>
                    <?php endif; ?>
                    <!-- Блок Хлебных крошек и еще чего-то -->
                    <div class="">
                        <div class="uk-clearfix uk-text-small">
                            <div class="uk-float-left uk-margin-remove">
                                <!-- модуль хлебных крошек -->
                                <!-- В модуле необходимо убрать нижний маджин -->
                                <?php if ($this->checkPosition('breadcrumbs')) : ?>
                                    <?php echo $this->renderPosition('breadcrumbs'); ?>
                                <?php endif; ?>

                            </div>
                            <div class="uk-visible@s uk-float-right">
                                <!-- Элемент до инфы -->
                                <div class="">Просмотров товара: <span class="uk-badge"><?php echo $this->renderPosition('hits'); ?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Блок картинки цены -->
    <div class="uk-container uk-margin-small">
        <!-- Сетка для картинки и блока цены -->
        <div class="uk-grid-medium" uk-grid>
            <!-- Ячейка картинки и краткой информации -->
            <div class="uk-width-expand@m uk-grid-item-match">
                <div class="-uk-tile-default -uk-tile -uk-tile-xsmall">

                    <div class="uk-margin-small uk-inline-clip uk-transition-toggle" tabindex="0">
                        <!-- Блок элемента картинки -->
                        <?php if ($this->checkPosition('image')) : ?>
                        <div class="uk-margin-remove" uk-scrollspy-class><!-- uk-transition-scale-up uk-transition-opaque -->
                            <?php echo $this->renderPosition('image'); ?>
                        </div>
                        <?php endif; ?>                                            

                        <div class="uk-position-center uk-light">
                            <span class="uk-transition-fade" uk-icon="icon: plus-circle; ratio: 2"></span>
                        </div>
                         
                        <?php if ($this->checkPosition('top_left')) : ?>
                            <div class="uk-position-top-left uk-overlay">
                                <?php echo $this->renderPosition('top_left', array('style' => 'block')); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($this->checkPosition('top_right')) : ?>
                            <div class="uk-position-top-right uk-overlay">
                                <?php echo $this->renderPosition('top_right', array('style' => 'block')); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($this->checkPosition('bottom_left')) : ?>
                            <div class="uk-position-bottom-left uk-overlay">
                                <?php echo $this->renderPosition('bottom_left', array('style' => 'block')); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($this->checkPosition('bottom_right')) : ?>
                            <div class="uk-position-bottom-right uk-overlay">
                                <?php echo $this->renderPosition('bottom_right', array('style' => 'block')); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($this->checkPosition('bottom_overlay')) : ?>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                                <ul class="uk-list uk-text-small">
                                    <?php echo $this->renderPosition('bottom_overlay', array('style' => 'list')); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <!--
                        <div class="uk-position-top-center uk-overlay uk-overlay-default">Top Center</div>
                        <div class="uk-position-center-left uk-overlay uk-overlay-default">Center Left</div>
                        <div class="uk-position-center-right uk-overlay uk-overlay-default">Center Right</div>
                        <div class="uk-position-bottom-center uk-overlay uk-overlay-default">Bottom Center</div>
                        -->
                    </div>

                    <!-- Блок под картинкой для рейтинга и поделиться -->
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <div class="uk-margin-small uk-child-width-1-1 uk-grid-match uk-child-width-1-2@s uk-grid-small uk-grid-divider" uk-grid>

                            <!-- Элемент рейтинга -->
                            <?php if ($this->checkPosition('rating')) : ?>
                            <div uk-scrollspy-class class="el-item uk-panel">
                                <div class="el-content">
                                    <div class="uk-text-muted">
                                        <?php echo $this->renderPosition('rating', array('style' => 'block')); ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <!-- Элемент поделиться -->
                            <div uk-scrollspy-class class="el-item uk-panel uk-visible@l">
                                <div class="el-content">
                                    <div class="uk-text-muted uk-text-center">
                                        <div class="uk-margin-small">Намекните на подарок</div>
                                        <!-- uSocial -->
                                        <script async src="https://usocial.pro/usocial/usocial.js?v=6.1.4" data-script="usocial" charset="utf-8"></script>
                                        <div class="uSocial-Share" data-pid="a040becb9c4861d5a623368180f84f56" data-type="share" data-options="round-rect,style3,default,absolute,horizontal,size24,eachCounter0,counter1,counter-after,nomobile" data-social="vk,fb,twi,ok,pinterest,telegram"></div>
                                        <!-- /uSocial -->
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Блок элемента краткого описания -->
                        <?php //if ($this->checkPosition('shorttext')) : ?>
                            <div class="short-description">
                                <?php //echo $this->renderPosition('shorttext'); ?>
                            </div>
                        <?php //endif; ?>
                    </div>

                </div>
            </div>
            <!-- Ячейка цены и дополнительной информации -->
            <div class="uk-width-expand@m uk-grid-item-match">
                <div class="-uk-tile-default -uk-tile -uk-tile-xsmall">
                    <div class="uk-margin uk-child-width-1-1 uk-grid-match" uk-grid>
                        <div>
                            <!-- Блок цены -->
                            <div uk-scrollspy-class class="el-item uk-panel">
                                <div class="el-content uk-margin">
                                    <div class="uk-card uk-card-primary uk-card-body">
                                        <!-- Возможно, рендеринг позиции названия из элемента цены -->

                                        <?php if ($this->checkPosition('subtitle')) : ?>
                                            <h2 class="uk-h4 uk-text-truncate uk-margin-small">
                                                <?php echo $this->renderPosition('subtitle'); ?>
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
                                                        <div class="el-item">
                                                            Для удобства совершения покупок в нашем магазине мы обеспечиваем возможность оплаты несколькими
                                                            способами: наличными курьеру или в офисе, банковской картой
                                                            или с помощью электронной валюты Webmoney.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="el-item">
                                                    <!-- <h3 class="el-title uk-margin uk-h5 uk-heading-line">
																<span>Доставка</span>
																</h3> -->
                                                    <div class="el-content uk-margin">
                                                        <div class="el-item">
                                                            <p>При заказе до 5000 руб. стоимость доставки составляет 500р.<br />
                                                                При заказе свыше 5000р. доставка цветов по Москве бесплатная.<br />
                                                                Доставка цветов по Москве работает ежедневно с 10:00 - 22:00
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
                                                        <div class="uk-h6 uk-margin-remove">Телефоны для связи:</div>
                                                        <div class="">
                                                            <p class="uk-text-small uk-margin-remove-bottom">
                                                                <a href="tel:+79999676370">☎ 999 967-63-70</a>
                                                                <br />
                                                                <a href="tel:+79647213136">☎ 964 721-31-36</a>
                                                                <br />
                                                                <a href="tel:+79647213136">☎ 964 721-31-36</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="el-item uk-panel">
                                                    <div class="el-content uk-margin">
                                                        <div class="uk-h6 uk-margin-remove">Оплата заказов</div>
                                                        <div class="">
                                                            <div class="uk-margin-remove-bottom">
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

                    <!-- <h3 class="uk-text-center uk-heading-line" uk-scrollspy-class>
                        <span>Детально о букете</span>
                    </h3> -->

                    <div class="uk-margin" uk-scrollspy-class>
                        <!-- Табы свитчера -->
                        <ul uk-switcher="connect: #js-952;animation: uk-animation-fade" class="uk-margin uk-subnav el-nav uk-flex-center">
                            <?php if ($this->checkPosition('properties')) : ?>
                                <li>
                                    <a href="#properties">
                                        <span uk-icon="icon: list"></span>
                                        <?php echo JText::_('JBZOO_ITEM_TAB_PROPS'); ?>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if ($this->checkPosition('fulltext')) : ?>
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

                        <!-- Вкладки свитчера -->
                        <ul id="js-952" class="uk-switcher">
                            <?php if ($this->checkPosition('properties')) : ?>
                                <li class="el-item">
                                    <!-- Элемент списка характеристик товара -->
                                    <div class="el-content uk-margin">
                                        <div class="uk-grid-margin uk-grid-divider" uk-grid>
                                            
                                            <!-- Блок элемента краткого описания -->
                                            <div class="uk-width-expand@m short-description">
                                                <span class="uk-text-large">Краткое описание товара</span>
                                                <?php echo $this->renderPosition('shorttext'); ?>
                                            </div>
                                            
                                             <!-- Блок элемента значков -->
                                             <!-- <div class="uk-width-expand@m">
                                                <div class="uk-margin uk-display-inline">
                                                    <img src="/images/site/icons/free-delivery-badge.png" alt="" width="110" height="">
                                                </div>
                                                <div class="uk-margin uk-display-inline">
                                                    <img src="/images/site/icons/badge-delivery.png" alt="" width="128" height="">
                                                </div>
                                                <div class="uk-margin uk-display-inline">
                                                    <img src="/images/site/icons/badge-discount.png" alt="" width="128" height="">
                                                </div>
                                            </div> -->
                                           
                                            <!-- Блок списка параметров -->
                                            <div class="uk-width-expand@m">
                                                <div class="uk-margin uk-text-small">
                                                    <ul class="uk-list uk-list-divider">
                                                        <?php echo $this->renderPosition('properties', array('style' => 'list')); ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>
                            <?php endif; ?>
                            
                            <?php if ($this->checkPosition('fulltext')) : ?>
                                <li class="el-item">
                                    <!-- Элемент полного описания товара -->
                                    <div class="el-content uk-margin">
                                        <?php echo $this->renderPosition('fulltext'); ?>
                                    </div>
                                </li>
                            <?php endif; ?>

                            <?php if ($this->checkPosition('gallery')) : ?>
                                <li id="tab-gallery" class="el-item">
                                    <!-- Элемент дополнительных фото товара -->
                                    <div class="el-content uk-margin uk-flex">
                                        <?php echo $this->renderPosition('gallery'); ?>
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

    <!-- Контейнер похожих букетов -->
    <div class="uk-container uk-margin-remove-vertical">
        <div uk-grid>
            <div class="uk-width-1-1@m uk-grid-item-match">

                <!-- Элемент похожих товаров -->
                <div class="uk-tile uk-tile-muted uk-tile-small">
                    <h3 class="uk-heading-line uk-text-center" uk-scrollspy-class><span>Другие похожие букеты</span></h3>
                    <div class="uk-margin uk-text-left" uk-scrollspy-class uk-slider>
                        <div class="uk-position-relative">
                            <ul class="uk-slider-items uk-grid uk-grid-small">
                                <!-- Итем рилэйтед -->
                                <?php if ($this->checkPosition('related')) : ?>
                                    <?php echo $this->renderPosition('related'); ?>
                                <?php endif; ?>
                            </ul>
                            <div>
                                <a class="el-slidenav uk-position-medium uk-slidenav-large uk-position-center-left" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="el-slidenav uk-position-medium uk-slidenav-large uk-position-center-right" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            </div>
                        </div>
                        <ul class="el-nav uk-slider-nav uk-dotnav uk-flex-center uk-margin-top uk-visible@s" uk-margin></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Контейнер для модуля/модулей -->

        <!-- Модуль -->
        <?php if ($this->checkPosition('jmodule')) : ?>
            <div class="uk-margin">
                <?php echo $this->renderPosition('jmodule'); ?>
            </div>
        <?php endif; ?>
    <!-- Next Section for impressive functionality )) -->
</div>
