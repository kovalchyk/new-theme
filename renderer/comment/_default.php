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

// profiler
$this->app->jbdebug->mark('layout::comment(' . $vars['comment']->id . ')::start');

// set vars
$comment       =& $vars['comment'];
$author        =& $vars['author'];
$params        =& $vars['params'];
$level         =& $level['params'];
$childComments = $comment->getChildren();

// set author name
$vars['author']->name = $vars['author']->name ? $vars['author']->name : JText::_('Anonymous');

?>
    <li>
        <article id="comment-<?php echo $comment->id; ?>" class="uk-comment uk-comment-primary comment <?php if ($author->isJoomlaAdmin()) { echo 'uk-comment-primary'; } ?> uk-visible-toggle" tabindex="-1">
            <header class="uk-comment-header uk-position-relative">
                <div class="uk-grid-medium uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <?php if ($params->get('avatar', 0)) : ?>
                            <?php echo $author->getAvatar(50); ?>
                        <?php endif; ?>                   
                    </div>
                    <div class="uk-width-expand">
                        <?php if ($author->url) : ?>
                            <h4 class="uk-comment-title uk-margin-remove">
                                <a href="<?php echo JRoute::_($author->url); ?>" class="uk-link-reset" title="<?php echo $author->url; ?>" rel="nofollow"><?php echo $author->name; ?></a>
                            </h4>
                        <?php else: ?>
                            <h4 class="uk-comment-title uk-margin-remove"><?php echo $author->name; ?></h4>
                        <?php endif; ?>
                        <p class="uk-comment-meta uk-margin-remove-top">
                            <?php echo $this->app->html->_('date', $comment->created, $this->app->date->format(JText::_('DATE_FORMAT_COMMENTS')), $this->app->date->getOffset()); ?>
                            | <a class="uk-link-reset" href="#comment-<?php echo $comment->id; ?>" rel="nofollow">#</a>                            
                        </p>
                    </div>
                </div>

                <div class="uk-position-top-right uk-position-small uk-hidden-hover">
                    <?php if ($comment->getItem()->isCommentsEnabled()) : ?>
                    <a class="reply uk-button uk-button-primary uk-button-small" href="#" rel="nofollow">
                        <?php echo JText::_('Reply'); ?>
                    </a>

                        <?php if ($comment->canManageComments()) : ?>

                            <?php echo ' | '; ?>
                                <a class="edit" href="#" rel="nofollow"><?php echo JText::_('Edit'); ?></a>
                            <?php echo ' | '; ?>

                            <?php if ($comment->state != Comment::STATE_APPROVED) : ?>
                                <a href="<?php echo 'index.php?option=com_zoo&controller=comment&task=approve&comment_id=' . $comment->id; ?>"
                                    rel="nofollow"><?php echo JText::_('Approve'); ?></a>
                            <?php else: ?>
                                <a href="<?php echo 'index.php?option=com_zoo&controller=comment&task=unapprove&comment_id=' . $comment->id; ?>"
                                    rel="nofollow"><?php echo JText::_('Unapprove'); ?></a>
                            <?php endif; ?>

                            <?php echo ' | '; ?>
                                <a href="<?php echo 'index.php?option=com_zoo&controller=comment&task=spam&comment_id=' . $comment->id; ?>"
                                rel="nofollow"><?php echo JText::_('Spam'); ?></a>

                            <?php echo ' | '; ?>
                                <a href="<?php echo 'index.php?option=com_zoo&controller=comment&task=delete&comment_id=' . $comment->id; ?>"
                                rel="nofollow"><?php echo JText::_('Delete'); ?></a>
                            <?php endif; ?>

                        <?php endif; ?>

                        <?php if ($comment->state != Comment::STATE_APPROVED) : ?>
                            <div class="uk-alert">
                                <i class="uk-icon-refresh uk-icon-spin"></i>
                                <?php echo JText::_('COMMENT_AWAITING_MODERATION'); ?>
                            </div>
                        <?php endif; ?>
                </div>

            </header>
            <div class="uk-comment-body content"><?php echo $this->app->comment->filterContentOutput($comment->content); ?></div>
        </article>



        <?php if (count($childComments)) : ?>
            <ul class="level<?php echo ++$level; ?>">
                <?php
                foreach ($childComments as $comment) {
                    echo $this->app->jblayout->render('comment', $vars['comment'], array(
                        'author'  => $comment->getAuthor(),
                        'comment' => $comment,
                        'params'  => $params,
                        'level'   => $level,
                    ));
                }
                ?>
            </ul>
        <?php endif; ?>

    </li>

<?php
$this->app->jbdebug->mark('layout::comment(' . $vars['comment']->id . ')::finish');
