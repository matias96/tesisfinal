<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vino $vino
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        
        <?php if (isset($current_user["role"]) and $current_user["role"] === "admin"):?>

        <li><?= $this->Html->link(__('Lista de Vinos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?></li>
<?php endif;?>
        
     <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $vino->id_vino],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vino->id_vino)]
            )
        ?></li>
    </ul>
</nav>
<div class="vinos form large-9 medium-8 columns content">
    <?= $this->Form->create($vino) ?>
    <fieldset>
        <legend><?= __('Reservar Vino') ?></legend>
        <?php
            echo $this->Form->control('nombre_reserva');
            echo $this->Form->control('telefono');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Reservar')) ?>
    <?= $this->Form->end() ?>
</div>
