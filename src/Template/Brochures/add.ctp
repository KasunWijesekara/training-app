<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Brochure $brochure
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Brochures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="brochures form large-9 medium-8 columns content">
    <?= $this->Form->create($brochure, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add Brochure') ?></legend>
        <?php
            echo $this->Form->control('course_id', ['options' => $courses]);
            echo $this->Form->control('title');
            echo $this->Form->input('pdffile', ['type' => 'file', 'accept'=> '.pdf']);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
