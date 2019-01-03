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

$this->app->jbdebug->mark('layout::subcategory_columns::start');

if ($vars['count']) {
    $i     = 0;
    $count = $vars['count'];
    $rowSubcategories = array_chunk($vars['objects'], $vars['cols_num']);

    echo '<!-- file: sub_columns_uikit.php -->';
    echo '<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>';
        echo '<div class="uk-width-1-1@m fuk-first-column columator-' . $vars['cols_num'] . '">';
            echo '<div class="uk-child-width-1-1 uk-child-width-1-2@m uk-grid-small uk-grid-divider uk-grid-match" uk-grid>';

                foreach($vars['objects'] as $v){
                echo '<div class="kuk-first-column some_class">';
                    //echo '<div class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body">';
                    print_r($v);
                    //echo '</div>';
                echo '</div>';
                }
        echo '</div>';

        // foreach ($rowSubcategories as $row) {
        //     echo '<!-- first foreach -->';

        //     echo '<div class="jsHeightFixRow subcategory-row-' . $i . '">';

        //     $j = 0;
        //     $i++;

        //     foreach ($row as $subcategory) {
        //         echo '<!-- second foreach -->';

        //         $classes = array(
        //             'uk-card uk-card-default uk-card-body',
        //             'variant-' . $vars['cols_num']
        //         );

        //         $first = ($j == 0) ? $classes[] = 'uk-first-column' : '';
        //         $last  = ($j == $count - 1) ? $classes[] = 'uk-last-column' : '';
        //         $j++;

        //         $isLast = $j % $vars['cols_num'] == 0 && $vars['cols_order'] == 0;

        //         if ($isLast) {
        //             $classes[] = 'uk-last-column';
        //         }

        //         echo '<div class="' . implode(' ', $classes) . '">' .
        //             '<div class="myclass">' . $subcategory . '</div>' .
        //             '</div>';
        //     }

        //     echo '</div>';
        // }

        echo '<hr class="hzzzz" />';
        echo '</div>';
    echo '</div>';



    echo '<!-- end of file: sub_columns_uikit.php -->';

}

$this->app->jbdebug->mark('layout::subcategory_columns::finish');