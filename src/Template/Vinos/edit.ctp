<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vino $vino
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $vino->id_vino],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vino->id_vino)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de Vinos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vinos form large-9 medium-8 columns content">
    <?= $this->Form->create($vino) ?>
    <fieldset>
        <legend><?= __('Editar Vino') ?></legend>
        <?php
            echo $this->Form->control('tipo_producto');
            echo $this->Form->control('variedad');
            echo $this->Form->control('procedencia');
            echo $this->Form->control('volumen');
            echo $this->Form->control('grado_alcoholico');
            echo $this->Form->control('acidez_volatil');
            echo $this->Form->control('acidez_total');
            echo $this->Form->control('azucar');
            echo $this->Form->control('extracto_seco');
            echo $this->Form->control('grado_brix');
            echo $this->Form->control('año_elavoracion');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
