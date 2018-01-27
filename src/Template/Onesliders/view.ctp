<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Oneslider $oneslider
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Oneslider'), ['action' => 'edit', $oneslider->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Oneslider'), ['action' => 'delete', $oneslider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oneslider->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Onesliders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Oneslider'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="onesliders view large-9 medium-8 columns content">
    <h3><?= h($oneslider->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($oneslider->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($oneslider->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($oneslider->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $oneslider->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
