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

$this->app->jbdebug->mark('layout::item_columns::start');

if ($vars['count']) {

    $i        = 0;
    $count    = $vars['count'];
    $rowItems = array_chunk($vars['objects'], $vars['cols_num']);

    echo '<!-- file: items_columns_uikit.php -->';
    // echo '<div class="items items-col-' . $vars['cols_num'] . ' uk-article-divider">'; // Здесь будет настройка колонок

    echo '<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>';
        echo '<div class="uk-width-1-1@m huk-first-column num-' . $vars['cols_num'] . '">';
            echo '<div class="uk-margin" uk-filter=".js-filter">';
                echo '<div class="js-filter uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-medium uk-grid-match" uk-grid>';
                    foreach($vars['objects'] as $v){
                            //echo '<div class="el-item uk-card uk-card-primary uk-card-small">';
                            echo $v;
                            //echo '</div>';
                    }

                echo '</div>';

                // foreach ($rowItems as $row) {
                //     echo '<div class="jsHeightFixRow uk-grid item-row-' . $i . '" data-uk-grid-margin>';

                //     $j = 0;
                //     $i++;

                //     foreach ($row as $item) {

                //         $classes = array(
                //             'item-column',
                //             'uk-width-medium-1-' . $vars['cols_num']
                //         );

                //         $first = ($j == 0) ? $classes[] = 'first' : '';
                //         $last  = ($j == $count - 1) ? $classes[] = 'last' : '';
                //         $j++;

                //         $isLast = $j % $vars['cols_num'] == 0 && $vars['cols_order'] == 0;

                //         if ($isLast) {
                //             $classes[] = 'last';
                //         }

                //         echo '<div class="' . implode(' ', $classes) . '">'
                //             . '<div class="uk-panel uk-panel-box">' . $item . '</div>'
                //             . '</div>';
                //     }

                //     echo '</div>';
                // }

            echo '</div>';
        echo '</div>';
    echo '</div>';
    
    echo '<!-- end of file: items_columns_uikit.php -->';

}

$this->app->jbdebug->mark('layout::item_columns::finish');