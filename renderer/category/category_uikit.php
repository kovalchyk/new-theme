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

$this->app->jbdebug->mark('layout::category::start');

// set vars
$category = $vars['object'];
$title    = $this->app->string->trim($vars['params']->get('content.category_title', ''));
$subTitle = $this->app->string->trim($vars['params']->get('content.category_subtitle', ''));
$image    = $this->app->jbimage->get('category_image', $vars['params']);
$title    = $title ? $title : $category->name;

if ((int)$vars['params']->get('template.category_show', 1)) : ?>
    <!-- file: category_uikit.php -->

    <!-- 
    <div class="uk-section-muted uk-section">
    <div class="uk-container">
     -->
    <div class="uk-grid-margin uk-grid-stack category-<?php echo $category->alias; ?>" uk-grid> <!-- Надо ли здесь сетка? -->

        <div class="uk-width-1-1@m uk-first-column">
            <!-- start category description -->
            <div class="category-description">
                <!-- Заголовок -->
                <?php if ((int)$vars['params']->get('template.category_title_show', 1)) : ?>
                    <h1 class="uk-heading-primary uk-heading-line">
                        <span><?php echo $title; ?></span>
                    </h1>
                <?php endif; ?>  

                <!-- Подзаголовок -->
                <?php if ((int)$vars['params']->get('template.category_subtitle', 1) && !empty($subTitle)) : ?>
                    <h2 class="uk-h2"><?php echo $subTitle; ?></h2>
                <?php endif; ?>

                <!-- Картинка категории -->
                <?php if ((int)$vars['params']->get('template.category_image', 1) && $image['src']) : ?>
                    <div class="image-full uk-align-<?php echo $vars['params']->get('template.category_image_align', 'left'); ?>">
                        <img src="<?php echo $image['src']; ?>" <?php echo $image['width_height']; ?>
                             title="<?php echo $category->name; ?>" alt="<?php echo $category->name; ?>" class="uk-thumbnail"/>
                    </div>
                <?php endif; ?>

                <!-- Текст тизера -->
                <?php if ((int)$vars['params']->get('template.category_teaser_text', 1) && $vars['params']->get('content.category_teaser_text', '')) : ?>
                    <div class="uk-text-lead">
                        <?php echo $vars['params']->get('content.category_teaser_text', ''); ?>
                    </div>
                <?php endif; ?>

                <!-- <div class="uk-divider-icon"></div> -->
                <!-- Текст описание категории -->
                <?php if ((int)$vars['params']->get('template.category_text', 1) && $category->description) : ?>
                    <div class="description-full">
                        <?php echo $category->getText($category->description); ?>
                    </div>
                <?php endif; ?>

                <?php echo JBZOO_CLR; ?>
            <!-- stop category description -->
            </div>
        </div>
    <!-- End of grid -->
    </div>
    <!-- end of file: category_uikit.php -->

<?php else: ?>
    <!-- What is this? -->
    <div class="category alias-<?php echo $category->alias; ?> uk-article-divider uk-grid">
        <?php if ((int)$vars['params']->get('template.category_title_show', 1)) : ?>
            <div class="uk-width-medium-1-1">
                <div class="uk-panel uk-panel-box">
                    <h1 class="title"><?php echo $title; ?></h1>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <!-- end of file: category_uikit.php unrecognised part -->


<?php endif; ?>

<?php
$this->app->jbdebug->mark('layout::category::finish');
