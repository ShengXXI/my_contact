<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <div class="panel">
        <h2 class="text-center">Register</h2>
        <?= $this->Form->create($account); ?>
            <?= $this->Form->control('username'); ?>
            <?= $this->Form->control('password', array('type' => 'password')); ?>
            <?= $this->Form->control('password_confirm', array('type' => 'password')); ?>
            <?= $this->Form->submit('Register', array('class' => 'button')); ?>
        <?= $this->Form->end(); ?>
    </div>
</div>