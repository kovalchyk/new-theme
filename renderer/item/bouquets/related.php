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

<?php if ($this->checkPosition('title')) : ?>
    <h5 class="uk-h4"><?php echo $this->renderPosition('title'); ?></h5>
<?php endif; ?>


<?php if ($this->checkPosition('price')) : ?>
    <div class="item-price">
        <?php echo $this->renderPosition('price'); ?>
</div>
<?php endif; ?>


<?php if ($this->checkPosition('image')) : ?>
    <div class="item-image uk-align-<?php echo $align; ?>">
        <?php echo $this->renderPosition('image'); ?>
    </div>
<?php endif; ?>


<?php if ($this->checkPosition('rating')) : ?>
    <?php echo $this->renderPosition('rating', array('style' => 'block')); ?>
<?php endif; ?>


<?php if ($this->checkPosition('buttonbuy')) : ?>
    <div class="item-buttonbuy">
        <?php echo $this->renderPosition('buttonbuy', array('style' => 'block')); ?>
</div>
<?php endif; ?>

<div class="uk-clearfix"></div>
