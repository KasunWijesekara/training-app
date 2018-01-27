<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Oneslider $oneslider
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Onesliders'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="onesliders form large-9 medium-8 columns content">
    <?= $this->Form->create($oneslider, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add Oneslider') ?></legend>
        <?php
            echo $this->Form->input('image', ['type' => 'file', 'accept'=> '.png, .jpg, .jpeg']);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
