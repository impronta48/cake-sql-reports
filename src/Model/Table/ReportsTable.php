<?php

declare(strict_types=1);

namespace Report\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reports Model
 *
 * @method \Report\Model\Entity\Report newEmptyEntity()
 * @method \Report\Model\Entity\Report newEntity(array $data, array $options = [])
 * @method \Report\Model\Entity\Report[] newEntities(array $data, array $options = [])
 * @method \Report\Model\Entity\Report get($primaryKey, $options = [])
 * @method \Report\Model\Entity\Report findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \Report\Model\Entity\Report patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Report\Model\Entity\Report[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \Report\Model\Entity\Report|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Report\Model\Entity\Report saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Report\Model\Entity\Report[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \Report\Model\Entity\Report[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \Report\Model\Entity\Report[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \Report\Model\Entity\Report[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ReportsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('reports');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
      ->integer('id')
      ->allowEmptyString('id', null, 'create');

        $validator
      ->scalar('name')
      ->maxLength('name', 255)
      ->requirePresence('name', 'create')
      ->notEmptyString('name');

        $validator
      ->scalar('q')
      ->requirePresence('q', 'create')
      ->notEmptyString('q');

        return $validator;
    }
}
