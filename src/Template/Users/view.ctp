<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar Usuario'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Usuario'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista de Vinos'), ['controller' => 'Vinos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Vino'), ['controller' => 'Vinos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($user->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= $this->Number->format($user->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activo') ?></th>
            <td><?= $user->activo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Vinos') ?></h4>
        <?php if (!empty($user->vinos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id Vino') ?></th>
                <th scope="col"><?= __('Tipo Producto') ?></th>
                <th scope="col"><?= __('Variedad') ?></th>
                <th scope="col"><?= __('Procedencia') ?></th>
                <th scope="col"><?= __('Volumen') ?></th>
                <th scope="col"><?= __('Grado Alcoholico') ?></th>
                <th scope="col"><?= __('Acidez Volatil') ?></th>
                <th scope="col"><?= __('Acidez Total') ?></th>
                <th scope="col"><?= __('Azucar') ?></th>
                <th scope="col"><?= __('Extracto Seco') ?></th>
                <th scope="col"><?= __('Grado Brix') ?></th>
                <th scope="col"><?= __('Año Elavoracion') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->vinos as $vinos): ?>
            <tr>
                <td><?= h($vinos->id_vino) ?></td>
                <td><?= h($vinos->tipo_producto) ?></td>
                <td><?= h($vinos->variedad) ?></td>
                <td><?= h($vinos->procedencia) ?></td>
                <td><?= h($vinos->volumen) ?></td>
                <td><?= h($vinos->grado_alcoholico) ?></td>
                <td><?= h($vinos->acidez_volatil) ?></td>
                <td><?= h($vinos->acidez_total) ?></td>
                <td><?= h($vinos->azucar) ?></td>
                <td><?= h($vinos->extracto_seco) ?></td>
                <td><?= h($vinos->grado_brix) ?></td>
                <td><?= h($vinos->año_elavoracion) ?></td>
                <td><?= h($vinos->user_id) ?></td>
                <td><?= h($vinos->created) ?></td>
                <td><?= h($vinos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vinos', 'action' => 'view', $vinos->id_vino]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vinos', 'action' => 'edit', $vinos->id_vino]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vinos', 'action' => 'delete', $vinos->id_vino], ['confirm' => __('Are you sure you want to delete # {0}?', $vinos->id_vino)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
