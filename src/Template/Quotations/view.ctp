<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quotation $quotation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quotation'), ['action' => 'edit', $quotation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quotation'), ['action' => 'delete', $quotation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quotations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quotation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quotations view large-9 medium-8 columns content">
    <h3><?= h($quotation->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($quotation->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($quotation->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('People') ?></th>
            <td><?= h($quotation->people) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($quotation->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($quotation->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $quotation->has('course') ? $this->Html->link($quotation->course->title, ['controller' => 'Courses', 'action' => 'view', $quotation->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($quotation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($quotation->created) ?></td>
        </tr>
    </table>
</div>
