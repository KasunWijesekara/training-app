<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Sample Site
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="">Sample Site</a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                    <li><a  href="/">Visit Main Page</a></li>
                    <li><a  href="/logout">Logout</a></li>
                </ul>
            <ul class="left">
                    <li><a  href="/courses">Courses</a></li>
                    <li><a  href="/onesliders">Main Slider</a></li>
                    <li><a  href="/twosliders">Slider Secondary</a></li>
                    <li><a  href="/contacts">Contact us</a></li>
                    <li><a  href="/quotations">Quotations</a></li>
                    <li><a  href="/registrations">Registrations</a></li>
                    <li><a  href="/brochures">Brochures</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
