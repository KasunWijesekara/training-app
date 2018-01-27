<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quotation $quotation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $quotation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $quotation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Quotations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quotations form large-9 medium-8 columns content">
    <?= $this->Form->create($quotation) ?>
    <fieldset>
        <legend><?= __('Edit Quotation') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('people');
            echo $this->Form->control('phone');
            echo $this->Form->control('address');
            echo $this->Form->control('course_id', ['options' => $courses, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
