<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Group Contacts'), ['controller' => 'GroupContacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group Contact'), ['controller' => 'GroupContacts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contacts view large-9 medium-8 columns content">
    <h3><?= h($contact->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($contact->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($contact->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bank Account Id') ?></th>
            <td><?= h($contact->bank_account_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bank Branch Id') ?></th>
            <td><?= h($contact->bank_branch_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avatar') ?></th>
            <td><?= h($contact->avatar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contact->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= $this->Number->format($contact->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($contact->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contact->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($contact->updated) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->address)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Group Contacts') ?></h4>
        <?php if (!empty($contact->group_contacts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Contact Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contact->group_contacts as $groupContacts): ?>
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
