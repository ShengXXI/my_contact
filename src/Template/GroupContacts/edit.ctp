<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GroupContact $groupContact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $groupContact->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $groupContact->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Group Contacts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="groupContacts form large-9 medium-8 columns content">
    <?= $this->Form->create($groupContact) ?>
    <fieldset>
        <legend><?= __('Edit Group Contact') ?></legend>
        <?php
            echo $this->Form->control('group_id', ['options' => $groups]);
            echo $this->Form->control('contact_id', ['options' => $contacts]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
