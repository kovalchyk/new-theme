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

<div <?php if ($this->checkPosition('tags')) : ?> data-tag="<?php echo $this->renderPosition('tags'); ?>"<?php endif; ?> class="kuk-first-column">
    <div class="el-item uk-card uk-card-primary uk-card-small">
        <div class="uk-card-media-top">

            <?php if ($this->checkPosition('image')) : ?>
                <div class="item-image kuku-align-<?php echo $align; ?>">
                    <?php echo $this->renderPosition('image'); ?>
                </div>
            <?php endif; ?>

        </div>
        <div class="uk-card-body">
            <!-- <div class="el-content uk-margin"> -->
                <!-- <div class="teaser-name"> -->

                    <?php if ($this->checkPosition('title')) : ?>
                        <h4 class="uk-h5 uk-margin-remove-adjacent uk-margin-small-bottom"><?php echo $this->renderPosition('title'); ?></h4>
                    <?php endif; ?>

                <!-- </div> -->
                <div class="teaser-price-rating uk-child-width-1-2 uk-grid-small" uk-grid>

                    <?php if ($this->checkPosition('price')) : ?>
                        <div class="price uk-first-column">
                        <h3 class="uk-h4"><?php echo $this->renderPosition('price', array('style' => 'block')); ?></h3>
                        </div>
                    <?php endif; ?>                    

                    <div class="teaser-rating">
                        <?php if ($this->checkPosition('rating')) : ?>
                            <div class="uk-text-right">
                                <div style="zoom: 1" class="">
                                    <?php echo $this->renderPosition('rating', array('style' => 'block')); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="uk-margin-remove-bottom uk-grid-small uk-grid-margin-small" uk-grid>
                    <div class="uk-width-2-3 uk-first-column">
                        <div class="cart-button">
                     
                            <?php if ($this->checkPosition('buttonbuy')) : ?>
                                <div class="cart-button">
                                    <?php echo $this->renderPosition('buttonbuy', array('style' => 'block')); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="uk-width-expand">

                        <?php if ($this->checkPosition('favourite')) : ?>
                            <div class="favorite-button uk-text-right">
                                <?php echo $this->renderPosition('favourite'); ?>
                            </div>
                        <?php endif; ?>


                        <?php if ($this->checkPosition('quick-view')) : ?>
                            <div class="item-quick-view uk-divider">
                                <?php echo $this->renderPosition('quick-view', array('style' => 'block')); ?>
                            </div>
                        <?php endif; ?>                        

                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>
</div>