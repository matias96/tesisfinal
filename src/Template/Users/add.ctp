<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vinos'), ['controller' => 'Vinos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vino'), ['controller' => 'Vinos', 'action' => 'add']) ?></li>
        <?php if(empty($current_user)): ?>
        <li><?= $this->Html->link(__('Iniciar sesión'), ["controller"=>"users","action"=> "logout"]) ?></li>
        <?php endif; ?>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Agrgar Usuario') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('nombre');
            echo $this->Form->control('telefono');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Crear')) ?>
    <?= $this->Form->end() ?>
</div>
