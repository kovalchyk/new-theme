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
    
    $this->app->jbdebug->mark('layout::respond::start');
    
    $active_author = & $vars['active_author'];
    $params = & $vars['params'];
    $item = & $vars['item'];
    $captcha = & $vars['captcha'];
    
    // only registered users can comment
    $registered = $params->get('registered_users_only');
    
    $this->app->document->addScript('assets:js/placeholder.js');
    
    ?>
<hr class="uk-divider-icon" />
<div id="respond" class5="uk-panel uk-panel-box uk-article-divider">
    <form class="uk-grid-small" method="post" 
        action="<?php echo $this->app->link(array('controller' => 'comment', 'task' => 'save')); ?>" uk-grid>
        <fieldset class="uk-fieldset">
        <legend class="uk-legend"><?php echo JText::_('Leave a comment'); ?></legend>
        <h3><?php echo JText::_('Leave a comment'); ?></h3>
        <?php if ($active_author instanceof CommentAuthorJoomla) : ?>
        <p class="user">
            <?php echo JText::_('Logged in as') . ' ' . $active_author->name . ' (' . JText::_('Joomla') . ')'; ?>
        </p>
        <?php elseif ($active_author instanceof CommentAuthorFacebook) : ?>
        <p class="user">
            <?php echo JText::_('Logged in as') . ' ' . $active_author->name . ' (' . JText::_('Facebook') . ')'; ?>
            -
            <a class="facebook-logout"
                href="<?php echo $this->app->link(array('controller' => 'comment', 'task' => 'facebooklogout', 'item_id' => $item->id)); ?>"><?php echo JText::_('Logout'); ?></a>
        </p>
        <?php elseif ($active_author instanceof CommentAuthorTwitter) : ?>
        <p class="user">
            <?php echo JText::_('Logged in as') . ' ' . $active_author->name . ' (' . JText::_('Twitter') . ')'; ?>
            -
            <a class="twitter-logout"
                href="<?php echo $this->app->link(array('controller' => 'comment', 'task' => 'twitterlogout', 'item_id' => $item->id)); ?>"><?php echo JText::_('Logout'); ?></a>
        </p>
        <?php elseif ($active_author->isGuest()) : ?>
        <?php
            $message = $registered ? JText::_('LOGIN_TO_LEAVE_COMMENT') : JText::_('You are commenting as guest.');
            ?>
        <p class="user"><?php echo $message; ?> <?php if ($params->get('facebook_enable') || $params->get('twitter_enable'))
            echo JText::_('Optional login below.'); ?></p>
        <?php if ($params->get('facebook_enable') || $params->get('twitter_enable')) : ?>
        <p class="connects">
            <?php if ($params->get('facebook_enable')) : ?>
            <a class="facebook-connect"
                href="<?php echo $this->app->link(array('controller' => 'comment', 'item_id' => $item->id, 'task' => 'facebookconnect')); ?>">
            <img alt="<?php echo JText::_('Facebook'); ?>"
                src="<?php echo JURI::root() . 'media/zoo/assets/images/connect_facebook.png'; ?>"/></a>
            <?php endif; ?>
            <?php if ($params->get('twitter_enable')) : ?>
            <a class="twitter-connect"
                href="<?php echo $this->app->link(array('controller' => 'comment', 'item_id' => $item->id, 'task' => 'twitterconnect')); ?>">
            <img alt="<?php echo JText::_('Twitter'); ?>"
                src="<?php echo JURI::root() . 'media/zoo/assets/images/connect_twitter.png'; ?>"/></a>
            <?php endif; ?>
        </p>
        <?php endif; ?>
        <?php if (!$registered) : ?>
        <?php $req = $params->get('require_name_and_mail'); ?>
        <div class="uk-margin-small uk-width-1-3@s">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input uk-form-width-large"
                    id="comments-author"
                    type="text"
                    name="author"
                    placeholder="<?php echo JText::_('Name'); ?> <?php if ($req) echo '*'; ?>"
                    value="<?php echo $active_author->name; ?>"
                    <?php if ($req) echo 'required';?>>
            </div>
        </div>
        <div class="uk-margin-small uk-width-1-3@s">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                <input class="uk-input uk-form-width-large"
                    id="comments-email" 
                    type="text" 
                    name="email" 
                    placeholder="<?php echo JText::_('E-mail'); ?> <?php if ($req) echo '*'; ?>" 
                    value="<?php echo $active_author->email; ?>"
                    <?php if ($req) echo 'required';?>>
            </div>
        </div>
        <div class="uk-margin-small uk-width-1-3@s">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: link"></span>
                <input class="uk-input uk-form-width-large"
                    id="comments-url"
                    type="text"
                    name="url"
                    placeholder="<?php echo JText::_('Website'); ?>"
                    value="<?php echo $active_author->url; ?>">
            </div>
        </div>
        <?php endif; ?>
        <?php endif; ?>
        <?php if (!$registered || ($registered && !$active_author->isGuest())) : ?>
        <div class="uk-margin-small uk-width-expand">
            <textarea name="content" class="uk-textarea" rows="5" placeholder="Напишите ваш комментарий"><?php echo $params->get('content'); ?></textarea>
        </div>
        <?php if ($captcha): ?>
        <?php
            if ($this->app->jbversion->joomla('3')) {
                $this->app->html->_('behavior.framework');
            } else {
                $this->app->html->_('behavior.mootools');
            }
            ?>
        <div class="captcha uk-form-row">
            <?php echo $captcha->display('captcha', 'captcha', 'captcha'); ?>
        </div>
        <?php endif; ?>
        <div class="actions uk-form-row uk-margin-small">
            <input name="submit" class="uk-button uk-button-danger" type="submit"
                value="<?php echo JText::_('Submit comment'); ?>" accesskey="s"/>
        </div>
        <input type="hidden" name="item_id" value="<?php echo $item->id; ?>"/>
        <input type="hidden" name="parent_id" value="0"/>
        <input type="hidden" name="redirect"
            value="<?php echo str_replace('&', '&amp;', $this->app->request->getString('REQUEST_URI', '', 'server')); ?>"/>
        <?php echo $this->app->html->_('form.token'); ?>
        <?php endif; ?>
        </fieldset>
    </form>
</div>