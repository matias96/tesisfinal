<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vino[]|\Cake\Collection\CollectionInterface $vinos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Vino'), ['controller' => 'Vinos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Mis Vinos'), ['controller' => 'Vinos', 'action' => 'misvinos']) ?></li>
    </ul>
</nav>
<div class="vinos index large-9 medium-8 columns content">
    <h3><?= __('Vinos Reservados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('tipo_producto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('variedad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('procedencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('volumen') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Reservado por:') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vinos as $vino): ?>
            <tr>
                <?php if (isset($vino["reservado"]) and $vino["reservado"] === 1):?>

<li>
          <td><?= h($vino->tipo_producto) ?></td>
                <td><?= h($vino->variedad) ?></td>
                <td><?= h($vino->procedencia) ?></td>
                <td><?= $this->Number->format($vino->volumen) ?></td>
                <td><?= h($vino->nombre_reserva) ?></td>
                <td><?= $this->Number->format($vino->telefono) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver Detalles.....'), ['action' => 'viewuser', $vino->id_vino]) ?>
                    <?= $this->Form->postLink(__('Eliminar Vino'), ['action' => 'delete', $vino->id_vino], ['confirm' => __('Are you sure you want to delete # {0}?', $vino->id_vino)]) ?>
                </td>
         
 </li>
<?php endif;?>
                
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

