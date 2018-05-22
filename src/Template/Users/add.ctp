<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
                <?php if (isset($current_user["role"]) and $current_user["role"] === "admin"):?>
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista de Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Vinos'), ['controller' => 'Vinos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Vino'), ['controller' => 'Vinos', 'action' => 'add']) ?></li>
<?php endif;?>
        <?php if (isset($current_user["role"]) and $current_user["role"] === "usuario"):?>
        <?= $this -> Html -> css("transferswines")?>
 <li>
      <div class="circle">
        <div class="front front-popular">
          <div class="title color-1-font glyphicon glyphicon-star"></div>
          <div class="price color-1-font"><span class="total">Nuevo Usuario</span></div>
          <div class="description"></div>
        </div><!-- end div .front -->
        <div class="popular color-1-font glyphicon glyphicon-star"></div>
        <div class="back color-1-bg info">
          <div class="title">Ayuda</div>
          <div class="description">
            <p>Para crear un nuevo usuario, ningun campo estar en blanco. Su rool es usuario por defecto y se encuentra desactivado temporalmente, hasta que lo active un administrador</p>
     
          </div><!-- end div .description -->
        </div><!-- end div .back color-1-bg info -->
      </div><!-- end div .circle -->
    </li>
    
        
    </ul>
    <?php endif;?>
    <?php if(empty($current_user)): ?>
    <?= $this -> Html -> css("transferswines")?>
    <li>
      <div class="circle">
        <div class="front front-popular">
          <div class="title color-1-font glyphicon glyphicon-star"></div>
          <div class="price color-1-font"><span class="total">Nuevo Usuario</span></div>
          <div class="description"></div>
        </div><!-- end div .front -->
        <div class="popular color-1-font glyphicon glyphicon-star"></div>
        <div class="back color-1-bg info">
          <div class="title">Ayuda</div>
          <div class="description">
            <p>Para crear un nuevo usuario, ningun campo estar en blanco. Su rool es usuario por defecto y se encuentra desactivado temporalmente, hasta que lo active un administrador</p>
     
          </div><!-- end div .description -->
        </div><!-- end div .back color-1-bg info -->
      </div><!-- end div .circle -->
    </li>
    
        
    </ul>
    <?php endif;?>
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
    <?php if(empty($current_user)): ?>
        <li><?= $this->Html->link(__('Iniciar sesión'), ["controller"=>"users","action"=> "logout"]) ?></li>
        <?php endif; ?>
    <?= $this->Form->end() ?>
</div>
