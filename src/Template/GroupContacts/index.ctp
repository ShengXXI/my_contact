<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GroupContact[]|\Cake\Collection\CollectionInterface $groupContacts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Group Contact'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="groupContacts index large-9 medium-8 columns content">
    <h3><?= __('Group Contacts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($groupContacts as $groupContact): ?>
            <tr>
                <td><?= $this->Number->format($groupContact->id) ?></td>
                <td><?= $groupContact->has('group') ? $this->Html->link($groupContact->group->name, ['controller' => 'Groups', 'action' => 'view', $groupContact->group->id]) : '' ?></td>
                <td><?= $groupContact->has('contact') ? $this->Html->link($groupContact->contact->id, ['controller' => 'Contacts', 'action' => 'view', $groupContact->contact->id]) : '' ?></td>
                <td><?= h($groupContact->created) ?></td>
                <td><?= h($groupContact->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $groupContact->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $groupContact->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $groupContact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupContact->id)]) ?>
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
