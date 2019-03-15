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

?>

<?php if ($discount->isEmpty()) : ?>

    <div class="jbprice-value-row">
        <span class="jbprice-value-total">
            <?php echo $total->html($currency); ?>
        </span>
    </div>

<?php else: ?>

    <div class="uk-grid-small" uk-grid>
            <div class="uk-width-auto">
                <span class="jbprice-value-total">
                    <?php echo $total->html($currency); ?>
                </span>
            </div>
            <div class="uk-width-auto">
                <span class="jbprice-value-price uk-text-danger uk-text-meta">
                    <?php echo $price->html($currency); ?>
                </span>
            </div>
    </div>

<?php endif; ?>
