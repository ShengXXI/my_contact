<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Group Contacts'), ['controller' => 'GroupContacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group Contact'), ['controller' => 'GroupContacts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groups view large-9 medium-8 columns content">
    <h3><?= h($group->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($group->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($group->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($group->updated) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Group Contacts') ?></h4>
        <?php if (!empty($group->group_contacts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Contact Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($group->group_contacts as $groupContacts): ?>
            <tr>
                <td><?= h($groupContacts->id) ?></td>
                <td><?= h($groupContacts->group_id) ?></td>
                <td><?= h($groupContacts->contact_id) ?></td>
                <td><?= h($groupContacts->created) ?></td>
                <td><?= h($groupContacts->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'GroupContacts', 'action' => 'view', $groupContacts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'GroupContacts', 'action' => 'edit', $groupContacts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'GroupContacts', 'action' => 'delete', $groupContacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupContacts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
