<?php
/**
 * JBZoo App is universal Joomla CCK, application for YooTheme Zoo component
 * @package     jbzoo
 * @version     2.x Pro
 * @author      JBZoo App http://jbzoo.com 
 * @copyright   Copyright (C) JBZoo.com,  All rights reserved.
 * @license     http://jbzoo.com/license-pro.php JBZoo Licence
 * @coder       Alexander Oganov <t_tapak@yahoo.com>;
 */

// no direct access
defined('_JEXEC') or die('Restricted access');


if ($this->checkPosition('attributes')) {
    echo '<div class="uk-margin">';
    echo $this->renderPosition('attributes');
    echo '</div>';
}

if ($this->checkPosition('price') || $this->checkPosition('buttons')) { ?>
    <div class="uk-margin uk-card uk-card-default">
        <div class="uk-child-width-1-2 uk-grid-small" uk-grid>
            <div class="uk-h3 uk-text-right uk-first-column"><?php echo $this->renderPosition('price'); ?></div>
            <!-- <div class="uk-h5 uk-text-danger"><del>12 000 <span class="">₽</span></del></div> -->
        </div>
    </div>

    <div class="uk-margin">
        <?php echo $this->renderPosition('quantity'); ?>
    </div>
    <div class="uk-margin">
        <?php echo $this->renderPosition('buttons'); ?>
    </div>
<?php }