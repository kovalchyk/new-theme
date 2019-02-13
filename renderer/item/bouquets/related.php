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
            <div class="uk-transition-scale-up uk-transition-opaque">
                <?php echo $this->renderPosition('image'); ?>
            </div>
        <?php endif; ?>
        <div class="uk-overlay uk-position-bottom uk-overlay-default">
            <div class="el-content uk-margin">
                <!-- Название итема -->
                <div class="teaser-price-rating uk-grid-small" uk-grid>

                    <?php if ($this->checkPosition('title')) : ?>
                        <div class="teaser-name uk-width-expand">
                            <h3 class="uk-h5 uk-heading-line uk-text-truncate uk-margin-remove"><?php echo $this->renderPosition('title'); ?></h5>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->checkPosition('sku')) : ?>
                        <div class="sku uk-width-auto">
                            <?php echo $this->renderPosition('sku'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="teaser-price-rating uk-child-width-1-2 uk-grid-small" uk-grid>
                    <!-- Цена итема -->
                    <?php if ($this->checkPosition('price')) : ?>
                        <div class="price">
                            <h3 class="uk-h4"><?php echo $this->renderPosition('price'); ?></h3>
                        </div>
                    <?php endif; ?>
                    <!-- Элемент рейтинга -->
                    <div class="teaser-rating">
                        <div class="uk-text-right">
                            <?php if ($this->checkPosition('rating')) : ?>
                                <?php echo $this->renderPosition('rating'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-remove-bottom uk-grid-small uk-grid-margin-small" uk-grid>
                    <div class="uk-width-2-3 uk-first-column">
                        <div class="cart-button">
                            <?php if ($this->checkPosition('buttonbuy')) : ?>
                                <div class="item-buttonbuy">
                                    <?php echo $this->renderPosition('buttonbuy'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="favorite-button uk-text-right">
                            <?php if ($this->checkPosition('favourite')) : ?>
                                <div class="item-favourite">
                                    <?php echo $this->renderPosition('favourite'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>