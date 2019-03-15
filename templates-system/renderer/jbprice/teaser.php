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

if ($this->checkPosition('price') || $this->checkPosition('button')) { ?>

    <div class="uk-flex-middle uk-child-width-1-2 uk-grid-collapse" uk-grid>
        <div class="price">
            <div class="uk-h4"><?php echo $this->renderPosition('price'); ?></div>
        </div>

        <div class="uk-text-right">
            <?php echo $this->renderPosition('balance'); ?>
        </div>
    </div>

    <div class="uk-flex-middle uk-child-width-auto uk-margin-small" uk-grid>
        <div class="uk-width-expand">
            <?php echo $this->renderPosition('button'); ?>
        </div>
        <div class="uk-text-right uk-text-small">
            <?php echo $this->renderPosition('sku'); ?>
        </div>
    </div>
<?php }