<?php
namespace App\Model\Table;

use App\Model\Entity\Game;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Games Model
 *
 */
class GamesTable extends Table
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

        $this->table('games');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('owner')
            ->requirePresence('owner', 'create')
            ->notEmpty('owner');

        $validator
            ->integer('turn')
            ->requirePresence('turn', 'create')
            ->notEmpty('turn');

        $validator
            ->requirePresence('tag', 'create')
            ->notEmpty('tag');

        $validator
            ->integer('throw')
            ->requirePresence('throw', 'create')
            ->notEmpty('throw');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
