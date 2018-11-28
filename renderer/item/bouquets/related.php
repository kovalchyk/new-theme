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

$align = $this->app->jbitem->getMediaAlign($item, $layout);
?>

<li class="el-item uk-width-1-1 uk-width-1-2@s uk-width-1-3@m">
    <div class="uk-cover-container uk-transition-toggle" tabindex="0">
        <!-- Элемент картинки -->
        <?php if ($this->checkPosition('image')) : ?>
            <!-- <div class="item-image uk-align-<?php //echo $align; ?>"> -->
                <?php echo $this->renderPosition('image'); ?>
            <!-- </div> -->
        <?php endif; ?>
        <!-- <img src="images/products/demo/demo-buket-4.jpg" srcset="images/products/demo/demo-buket-4.jpg 450w, images/products/demo/demo-buket-4.jpg 768w, images/products/demo/demo-buket-4.jpg 900w"
            sizes="(min-width: 450px) 450px" data-width="1200" data-height="1440" class="el-image uk-transition-scale-up uk-transition-opaque"
            alt> -->

        <div class="uk-overlay uk-position-bottom uk-overlay-default">
            <div class="el-content uk-margin">
                <!-- Название итема -->
                <?php if ($this->checkPosition('title')) : ?>
                    <div class="teaser-name">
                        <h3 class="uk-h5 uk-heading-line uk-text-truncate uk-margin-remove"><?php echo $this->renderPosition('title'); ?></h5>
                    </div>
                <?php endif; ?>

                <div class="teaser-price-rating uk-child-width-1-2 uk-grid-small" uk-grid>
                    <!-- Цена итема -->
                    <div class="price">
                        <h3 class="uk-h4">17 000 <span class="">₽</span></h3>
                    </div>
                    <!-- Элемент рейтинга -->
                    <div class="teaser-rating">
                        <div class="uk-text-right">
                            <?php if ($this->checkPosition('rating')) : ?>
                                <?php echo $this->renderPosition('rating', array('style' => 'block')); ?>
                            <?php endif; ?>                        
                        </div>
                    </div>
                </div>
                <div class="uk-margin-remove-bottom uk-grid-small uk-grid-margin-small" uk-grid>
                    <div class="uk-width-2-3 uk-first-column">
                        <div class="cart-button">

                            <?php if ($this->checkPosition('buttonbuy')) : ?>
                                <div class="item-buttonbuy">
                                    <?php echo $this->renderPosition('buttonbuy', array('style' => 'block')); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="favorite-button uk-text-right">

                            <?php if ($this->checkPosition('favourite')) : ?>
                                <div class="item-favourite">
                                    <?php echo $this->renderPosition('favourite', array('style' => 'block')); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>