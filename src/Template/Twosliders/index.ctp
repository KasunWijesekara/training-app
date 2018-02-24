<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Twoslider[]|\Cake\Collection\CollectionInterface $twosliders
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Twoslider'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="twosliders index large-9 medium-8 columns content">
    <h3><?= __('Twosliders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($twosliders as $twoslider): ?>
            <tr>
                <td><?= $this->Number->format($twoslider->id) ?></td>
                <td><?php echo $this->Html->image(trim($twoslider->image),array('align'=>'absbottom','style'=>'max-height:100px')) ?>
                <td><?= h($twoslider->status) ?></td>
                <td><?= h($twoslider->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $twoslider->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $twoslider->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $twoslider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $twoslider->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
