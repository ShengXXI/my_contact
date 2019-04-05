<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GroupContact $groupContact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Group Contact'), ['action' => 'edit', $groupContact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group Contact'), ['action' => 'delete', $groupContact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupContact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Group Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group Contact'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groupContacts view large-9 medium-8 columns content">
    <h3><?= h($groupContact->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $groupContact->has('group') ? $this->Html->link($groupContact->group->name, ['controller' => 'Groups', 'action' => 'view', $groupContact->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact') ?></th>
            <td><?= $groupContact->has('contact') ? $this->Html->link($groupContact->contact->id, ['controller' => 'Contacts', 'action' => 'view', $groupContact->contact->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($groupContact->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($groupContact->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($groupContact->updated) ?></td>
        </tr>
    </table>
</div>
