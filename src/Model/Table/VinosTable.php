<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vinos Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Vino get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vino newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vino[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vino|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vino patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vino[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vino findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VinosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('vinos');
        $this->setDisplayField('id_vino');
        $this->setPrimaryKey('id_vino');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->uuid('id_vino')
            ->allowEmpty('id_vino', 'create');

        $validator
            ->scalar('tipo_producto')
            ->maxLength('tipo_producto', 255)
            ->requirePresence('tipo_producto', 'create')
            ->notEmpty('tipo_producto');

        $validator
            ->scalar('variedad')
            ->maxLength('variedad', 255)
            ->requirePresence('variedad', 'create')
            ->notEmpty('variedad');

        $validator
            ->scalar('procedencia')
            ->maxLength('procedencia', 255)
            ->requirePresence('procedencia', 'create')
            ->notEmpty('procedencia');

        $validator
            ->decimal('volumen')
            ->requirePresence('volumen', 'create')
            ->notEmpty('volumen');

        $validator
            ->decimal('grado_alcoholico')
            ->requirePresence('grado_alcoholico', 'create')
            ->notEmpty('grado_alcoholico');

        $validator
            ->decimal('acidez_volatil')
            ->requirePresence('acidez_volatil', 'create')
            ->notEmpty('acidez_volatil');

        $validator
            ->decimal('acidez_total')
            ->requirePresence('acidez_total', 'create')
            ->notEmpty('acidez_total');

        $validator
            ->decimal('azucar')
            ->requirePresence('azucar', 'create')
            ->notEmpty('azucar');

        $validator
            ->decimal('extracto_seco')
            ->requirePresence('extracto_seco', 'create')
            ->notEmpty('extracto_seco');

        $validator
            ->decimal('grado_brix')
            ->requirePresence('grado_brix', 'create')
            ->notEmpty('grado_brix');

        $validator
            ->integer('año_elavoracion')
            ->requirePresence('año_elavoracion', 'create')
            ->notEmpty('año_elavoracion');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
