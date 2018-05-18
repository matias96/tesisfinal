<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vino $vino
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar Vino'), ['action' => 'edit', $vino->id_vino]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Vino'), ['action' => 'delete', $vino->id_vino], ['confirm' => __('Are you sure you want to delete # {0}?', $vino->id_vino)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de Vinos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Vino'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista de Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vinos view large-9 medium-8 columns content">
    <h3>Detalles del vino:<h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo Producto') ?></th>
            <td><?= h($vino->tipo_producto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Variedad') ?></th>
            <td><?= h($vino->variedad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Procedencia') ?></th>
            <td><?= h($vino->procedencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $vino->has('user') ? $this->Html->link($vino->user->username, ['controller' => 'Users', 'action' => 'view', $vino->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Volumen') ?></th>
            <td><?= $this->Number->format($vino->volumen) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grado Alcoholico') ?></th>
            <td><?= $this->Number->format($vino->grado_alcoholico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acidez Volatil') ?></th>
            <td><?= $this->Number->format($vino->acidez_volatil) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acidez Total') ?></th>
            <td><?= $this->Number->format($vino->acidez_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Azucar') ?></th>
            <td><?= $this->Number->format($vino->azucar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extracto Seco') ?></th>
            <td><?= $this->Number->format($vino->extracto_seco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grado Brix') ?></th>
            <td><?= $this->Number->format($vino->grado_brix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Año Elavoracion') ?></th>
            <td><?= $this->Number->format($vino->año_elavoracion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Createdo') ?></th>
            <td><?= h($vino->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($vino->modified) ?></td>
        </tr>
    </table>
</div>
