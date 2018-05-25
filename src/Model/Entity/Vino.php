<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vino Entity
 *
 * @property string $id_vino
 * @property string $tipo_producto
 * @property string $variedad
 * @property string $procedencia
 * @property float $volumen
 * @property float $grado_alcoholico
 * @property float $acidez_volatil
 * @property float $acidez_total
 * @property float $azucar
 * @property float $extracto_seco
 * @property float $grado_brix
 * @property int $año_elavoracion
 * @property string $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Vino extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'tipo_producto' => true,
        'variedad' => true,
        'procedencia' => true,
        'volumen' => true,
        'grado_alcoholico' => true,
        'acidez_volatil' => true,
        'acidez_total' => true,
        'azucar' => true,
        'extracto_seco' => true,
        'grado_brix' => true,
        'año_elavoracion' => true,
        'user_id' => true,
        'reservado' => true,
        'nombre_reserva' => true,
        'telefono' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
