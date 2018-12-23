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

$this->app->jbdebug->mark('layout::subcategory(' . $vars['object']->id . ')::start');

// set vars
$subcategory = $vars['object'];
$params = $subcategory->getParams('site');
$link = $this->app->route->category($subcategory);
$task = $this->app->jbrequest->get('task', 'category');

// teaser content
$text = $params->get('content.category_teaser_text', '');
$imageAlign = $params->get('template.subcategory_teaser_image_align', 'left');

// items
$itemsOrder = $vars['params']->get('config.item_order', 'none');
$maxItems = $vars['params']->get('template.subcategory_items_count', 5);
$showCount = $vars['params']->get('template.subcategory_items_count_show', 1);

$items = array();
$countItems = 0;
if ($showCount || $maxItems != "0" || $maxItems == "-1") {
    $items      = JBModelCategory::model()->getItemsByCategory($subcategory->application_id, $subcategory->id, $itemsOrder, $maxItems);
    $countItems = $subcategory->itemCount();
}

$image = $this->app->jbimage->get('category_teaser_image', $params);

?>
    <!-- Category teaser -->
    <!-- file: subcategory_uikit.php -->
    <div class="el-item uk-card uk-card-default uk-card-small uk-card-hover uk-card-body subcategory-<?php //echo $subcategory->alias; ?>">
        
        <a class="el-link uk-position-cover uk-position-z-index uk-margin-remove-adjacent" href="<?php echo $link; ?>"></a>

        <?php if ($vars['params']->get('template.subcategory_teaser_image', 1) && $image['src']) : ?>
            <div class="uk-width-auto@m uk-align-<?php echo $imageAlign; // ВООБЩЕ ЭТО НАДО? ?>">
                <img
                    src="<?php echo $image['src']; ?>" <?php echo $image['width_height']; ?>
                    alt="<?php echo $subcategory->name; ?>"
                    title="<?php echo $subcategory->name; ?>"
                    class="el-image"
                />
            </div>
        <?php endif; ?>

        <div class="some_class">

            <h4 class="el-title uk-margin uk-h3">
                <a href="<?php echo $link; ?>"
                title="<?php echo $subcategory->name; ?>"><?php echo $subcategory->name; ?></a>
                <?php if ($showCount && $countItems != 0) : ?><span>(<?php echo $countItems; ?>)</span><?php endif; ?>
            </h4>

            <div class="el-content uk-margin">
                <p class="subcategory-description uk-article-meta"><?php echo $text; ?></p>
            </div>

        </div>        

        <?php if (in_array($task, array('category', 'frontpage'))) : ?>
            <!-- Здесь разметка вроде Фронпейдж -->
            <?php if ($maxItems != 0 && count($items) > 0) : ?>
                <div class="subcategory-items clearfix">
                    <?php
                    foreach ($items as $item) {
                        echo $this->app->jblayout->renderItem($item, 'subcategory_item');
                    }
                    ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <!-- end of file: subcategory_uikit.php -->


<?php
$this->app->jbdebug->mark('layout::subcategory(' . $vars['object']->id . ')::finish');
