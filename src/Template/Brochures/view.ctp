<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Brochure $brochure
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Brochure'), ['action' => 'edit', $brochure->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Brochure'), ['action' => 'delete', $brochure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brochure->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Brochures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Brochure'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="brochures view large-9 medium-8 columns content">
    <h3><?= h($brochure->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $brochure->has('course') ? $this->Html->link($brochure->course->title, ['controller' => 'Courses', 'action' => 'view', $brochure->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($brochure->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pdffile') ?></th>
            <td><?= h($brochure->pdffile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($brochure->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($brochure->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $brochure->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
