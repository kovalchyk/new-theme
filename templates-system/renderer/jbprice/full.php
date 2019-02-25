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
    <div class="uk-placeholder">
        <div class="uk-h4"><?php echo $this->renderPosition('price'); ?></div>
    </div>

    <div class="uk-margin">
        <?php echo $this->renderPosition('quantity'); ?>
    </div>
    <div class="uk-margin">
        <?php echo $this->renderPosition('buttons'); ?>
    </div>
<?php }