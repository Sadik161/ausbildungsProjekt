<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TeamsCoaches Model
 *
 * @property \App\Model\Table\CoachesTable&\Cake\ORM\Association\BelongsTo $Coaches
 * @property \App\Model\Table\TeamsTable&\Cake\ORM\Association\BelongsTo $Teams
 *
 * @method \App\Model\Entity\TeamsCoach get($primaryKey, $options = [])
 * @method \App\Model\Entity\TeamsCoach newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TeamsCoach[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TeamsCoach|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TeamsCoach saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TeamsCoach patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TeamsCoach[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TeamsCoach findOrCreate($search, callable $callback = null, $options = [])
 */
class TeamsCoachesTable extends Table
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

        $this->setTable('teams_coaches');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Coaches', [
            'foreignKey' => 'coach_id',
        ]);
        $this->belongsTo('Teams', [
            'foreignKey' => 'team_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

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
        $rules->add($rules->existsIn(['coach_id'], 'Coaches'));
        $rules->add($rules->existsIn(['team_id'], 'Teams'));

        return $rules;
    }
}
