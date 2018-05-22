<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vino $vino
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php if (isset($current_user["role"]) and $current_user["role"] === "admin"):?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Lista de Vinos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <?php endif;?>
        <?php if (isset($current_user["role"]) and $current_user["role"] === "usuario"):?>
        <?= $this -> Html -> css("transferswines")?>
 <li>
      <div class="circle">
        <div class="front front-popular">
          <div class="title color-1-font glyphicon glyphicon-star"></div>
          <div class="price color-1-font"><span class="total">Nuevo Vino</span></div>
          <div class="description"></div>
        </div><!-- end div .front -->
        <div class="popular color-1-font glyphicon glyphicon-star"></div>
        <div class="back color-1-bg info">
          <div class="title">Ayuda</div>
          <div class="description">
            <p>Para ofrecer a nuestros usuarios un nuevo vino, ningun campo debe estar en blanco</p>
     
          </div><!-- end div .description -->
        </div><!-- end div .back color-1-bg info -->
      </div><!-- end div .circle -->
    </li>
    </ul>
     <?php endif;?>
</nav>
<div class="vinos form large-9 medium-8 columns content">
    <?= $this->Form->create($vino) ?>
    <fieldset>
        <legend><?= __('Agregar Vino') ?></legend>
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
    <?= $this->Form->button(__('Crear')) ?>
    <?= $this->Form->end() ?>
</div>
