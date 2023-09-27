<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Teams Model
 *
 * @property \App\Model\Table\ClubsTable&\Cake\ORM\Association\BelongsTo $Clubs
 * @property \App\Model\Table\PlayersTable&\Cake\ORM\Association\HasMany $Players
 * @property \App\Model\Table\CoachesTable&\Cake\ORM\Association\BelongsToMany $Coaches
 *
 * @method \App\Model\Entity\Team get($primaryKey, $options = [])
 * @method \App\Model\Entity\Team newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Team[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Team|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Team saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Team patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Team[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Team findOrCreate($search, callable $callback = null, $options = [])
 */
class TeamsTable extends Table
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

		$this->setTable('teams');
		$this->setDisplayField('youth');
		$this->setPrimaryKey('id');

		$this->belongsTo('Clubs', [
			'foreignKey' => 'club_id',
		]);
		$this->hasMany('Players', [
			'foreignKey' => 'team_id',
		]);
		$this->belongsToMany('Coaches', [
			'foreignKey' => 'team_id',
			'targetForeignKey' => 'coach_id',
			'joinTable' => 'teams_coaches',
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

		$validator
			->scalar('youth')
			->maxLength('youth', 255)
			->allowEmptyString('youth');

		$validator
			->integer('total_players')
			->allowEmptyString('total_players');

		$validator
			->scalar('time')
			->maxLength('time', 255)
			->allowEmptyString('time');

		$validator
			->integer('field')
			->allowEmptyString('field');

		$validator
			->scalar('team_link')
			->maxLength('team_link', 255)
			->allowEmptyString('team_link');

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
		$rules->add($rules->existsIn(['club_id'], 'Clubs'));

		return $rules;
	}
}
