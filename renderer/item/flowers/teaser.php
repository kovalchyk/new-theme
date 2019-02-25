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

<div <?php if ($this->checkPosition('tags')) : ?> data-tag="<?php echo $this->renderPosition('tags'); ?>"<?php endif; ?> class="some-class">
    <div class="el-item uk-card uk-card-default uk-card-small uk-card-hover">
        
        <div class="uk-card-media-top uk-inline-clip uk-transition-toggle" tabindex="0"><!-- Здесь ошибка. Вынести в отдельный блок -->

            <!-- <div class="uk-position-center uk-light">
                <span class="uk-transition-fade" uk-icon="icon: more; ratio: 2"></span>
            </div> -->

            <?php if ($this->checkPosition('image')) : ?>
                <div class="uk-transition-scale-up uk-transition-opaque kuku-align-<?php echo $align; ?>">
                    <?php echo $this->renderPosition('image'); ?>
                </div>
            <?php endif; ?>

            <?php if ($this->checkPosition('left')) : ?>
                <div class="uk-position-left uk-overlay">
                    <?php echo $this->renderPosition('left', array('style' => 'block')); ?>
                </div>
            <?php endif; ?>

            <?php if ($this->checkPosition('top_right')) : ?>
                <div class="uk-position-top-right uk-overlay uk-overlay-default uk-padding-small uk-text-small">
                    <div class="uk-text-muted">
                        <div uk-icon="icon: arrow-left"></div><?php echo $this->renderPosition('top_right'); ?><div uk-icon="icon: arrow-right"></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($this->checkPosition('top_left')) : ?>
                <div class="uk-position-top-left uk-overlay uk-overlay-default uk-padding-small">
                    <div class="uk-flex uk-flex-column uk-text-muted uk-text-center uk-text-small">
                        <div uk-icon="icon: arrow-up"></div><?php echo $this->renderPosition('top_left'); ?><div uk-icon="icon: arrow-down"></div>
                    </div>
                </div>
            <?php endif; ?>            

            <?php if ($this->checkPosition('bottom_left')) : ?>
                <div class="uk-position-bottom-left uk-overlay">
                    <?php echo $this->renderPosition('bottom_left', array('style' => 'block')); ?>
                </div>
            <?php endif; ?>

            <?php if ($this->checkPosition('bottom_right')) : ?>
                <div class="uk-position-bottom-right uk-overlay uk-overlay-default uk-padding-small">
                    <?php echo $this->renderPosition('bottom_right'); ?>
                </div>
            <?php endif; ?>

            <?php if ($this->checkPosition('bottom_overlay')) : ?>
                <div class="uk-transition-slide-bottom uk-position-large uk-position-bottom uk-overlay uk-overlay-default">
                    <ul class="uk-list uk-text-small">
                        <?php echo $this->renderPosition('bottom_overlay', array('style' => 'list')); ?>
                    </ul>
                </div>
            <?php endif; ?>
            
        </div>

        <div class="uk-card-body">

            <?php if ($this->checkPosition('title')) : ?>
                <h4 class="uk-h5 uk-margin-small uk-text-truncate"><?php echo $this->renderPosition('title'); ?></h4>
            <?php endif; ?>

            <?php if ($this->checkPosition('price')) : ?>
                <?php echo $this->renderPosition('price'); ?>
            <?php endif; ?>

        </div>
    </div>
</div>