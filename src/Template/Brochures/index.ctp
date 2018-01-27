<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Brochure[]|\Cake\Collection\CollectionInterface $brochures
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Brochure'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="brochures index large-9 medium-8 columns content">
    <h3><?= __('Brochures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('course_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pdffile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($brochures as $brochure): ?>
            <tr>
                <td><?= $this->Number->format($brochure->id) ?></td>
                <td><?= $brochure->has('course') ? $this->Html->link($brochure->course->title, ['controller' => 'Courses', 'action' => 'view', $brochure->course->id]) : '' ?></td>
                <td><?= h($brochure->title) ?></td>
                <td><?= h($brochure->pdffile) ?></td>
                <td><?= h($brochure->created) ?></td>
                <td><?= h($brochure->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $brochure->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $brochure->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $brochure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brochure->id)]) ?>
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
