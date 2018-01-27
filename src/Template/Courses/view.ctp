<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Brochures'), ['controller' => 'Brochures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Brochure'), ['controller' => 'Brochures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quotations'), ['controller' => 'Quotations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quotation'), ['controller' => 'Quotations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Registrations'), ['controller' => 'Registrations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Registration'), ['controller' => 'Registrations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="courses view large-9 medium-8 columns content">
    <h3><?= h($course->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($course->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($course->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mainimage') ?></th>
            <td><?= h($course->mainimage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($course->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($course->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $course->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Brochures') ?></h4>
        <?php if (!empty($course->brochures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Pdffile') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($course->brochures as $brochures): ?>
            <tr>
                <td><?= h($brochures->id) ?></td>
                <td><?= h($brochures->course_id) ?></td>
                <td><?= h($brochures->title) ?></td>
                <td><?= h($brochures->pdffile) ?></td>
                <td><?= h($brochures->created) ?></td>
                <td><?= h($brochures->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Brochures', 'action' => 'view', $brochures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Brochures', 'action' => 'edit', $brochures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Brochures', 'action' => 'delete', $brochures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brochures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Quotations') ?></h4>
        <?php if (!empty($course->quotations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('People') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($course->quotations as $quotations): ?>
            <tr>
                <td><?= h($quotations->id) ?></td>
                <td><?= h($quotations->name) ?></td>
                <td><?= h($quotations->email) ?></td>
                <td><?= h($quotations->people) ?></td>
                <td><?= h($quotations->phone) ?></td>
                <td><?= h($quotations->address) ?></td>
                <td><?= h($quotations->course_id) ?></td>
                <td><?= h($quotations->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Quotations', 'action' => 'view', $quotations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Quotations', 'action' => 'edit', $quotations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quotations', 'action' => 'delete', $quotations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Registrations') ?></h4>
        <?php if (!empty($course->registrations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Dob') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($course->registrations as $registrations): ?>
            <tr>
                <td><?= h($registrations->id) ?></td>
                <td><?= h($registrations->name) ?></td>
                <td><?= h($registrations->email) ?></td>
                <td><?= h($registrations->dob) ?></td>
                <td><?= h($registrations->phone) ?></td>
                <td><?= h($registrations->address) ?></td>
                <td><?= h($registrations->course_id) ?></td>
                <td><?= h($registrations->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Registrations', 'action' => 'view', $registrations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Registrations', 'action' => 'edit', $registrations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Registrations', 'action' => 'delete', $registrations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
