<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coaches Model
 *
 * @property &\Cake\ORM\Association\HasMany $Clubs
 * @property \App\Model\Table\TeamsTable&\Cake\ORM\Association\BelongsToMany $Teams
 *
 * @method \App\Model\Entity\Coach get($primaryKey, $options = [])
 * @method \App\Model\Entity\Coach newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Coach[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Coach|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coach saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coach patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Coach[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Coach findOrCreate($search, callable $callback = null, $options = [])
 */
class CoachesTable extends Table
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

		$this->setTable('coaches');
		$this->setDisplayField('name');
		$this->setPrimaryKey('id');

		$this->hasMany('Clubs', [
			'foreignKey' => 'coach_id',
		]);
		$this->belongsToMany('Teams', [
			'foreignKey' => 'coach_id',
			'targetForeignKey' => 'team_id',
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
			->scalar('name')
			->maxLength('name', 255)
			->allowEmptyString('name');

		$validator
			->date('entered')
			->allowEmptyDate('entered');

		return $validator;
	}
}
