<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Twoslider $twoslider
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Twoslider'), ['action' => 'edit', $twoslider->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Twoslider'), ['action' => 'delete', $twoslider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $twoslider->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Twosliders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Twoslider'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="twosliders view large-9 medium-8 columns content">
    <h3><?= h($twoslider->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($twoslider->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($twoslider->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($twoslider->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $twoslider->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
