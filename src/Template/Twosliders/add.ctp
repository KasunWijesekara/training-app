<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Twoslider $twoslider
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Twosliders'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="twosliders form large-9 medium-8 columns content">
    <?= $this->Form->create($twoslider, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add Twoslider') ?></legend>
        <?php
            echo $this->Form->input('image', ['type' => 'file', 'accept'=> '.png, .jpg, .jpeg']);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
