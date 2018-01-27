<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registration $registration
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $registration->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $registration->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Registrations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="registrations form large-9 medium-8 columns content">
    <?= $this->Form->create($registration) ?>
    <fieldset>
        <legend><?= __('Edit Registration') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('dob');
            echo $this->Form->control('phone');
            echo $this->Form->control('address');
            echo $this->Form->control('course_id', ['options' => $courses, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
